<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPortfolioEmployeeRequest;
use App\Http\Requests\AppointmentRequest;
use App\Http\Requests\RateRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Calender;
use App\Models\Car;
use App\Models\Employee;
use App\Models\Job;
use App\Models\Notification;
use App\Models\Rate;
use App\Models\Rent;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Number;

class APIController extends Controller
{

    public function intro(){

        $intro = Setting::select('intro_img')->first();

        return response()->json([
            'data' => $intro
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function listEmployees(Request $request){

        $employees = Employee::with(['job', 'prevWorks'])->select(['id', 'job_id','name', 'photo', 'description'])->latest();

        if($request->name) {
            $employees = $employees->where('name', 'LIKE', '%'. $request->name . '%');
        }
        if($request->job_id) {
            $employees = $employees->where('job_id', 'LIKE', '%'. $request->job_id . '%');
        }
        
        $employees = $employees->paginate(10);

        return response()->json([
            'data' => $employees
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function listCategories(){

        $categories = Job::latest()->take(6)->get();

        return response()->json([
            'data' => $categories
        ]);

    }

    /**
     * @return JsonResponse
     */
    public function listSliders(){

        $sliders = Slider::latest()->take(3)->get();

        return response()->json([
            'data' => $sliders
        ]);

    }

    /**
     * @param Employee $employee
     * @return JsonResponse
     */
    public function employee(Employee $employee)
    {

        $employee->load(['job', 'portfolio', 'prevWorks.rates']); 

        return response()->json([
            'data' => $employee
        ]);
    }

    public function addRate(RateRequest $request) {

       Rate::create([
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
            'stars' => $request->stars,
            'calender_id' => $request->calender_id
        ]);

        return response()->json(['message' => 'Rate Added Succesfully']);

    }

    /**
     * @param AppointmentRequest $request
     * @param Employee $employee
     * @return JsonResponse
     */
    public function AddAppointment(AppointmentRequest $request, Employee $employee) {

        $requestData = $request->validated();

        $requestData['user_id'] = auth()->user()->id;

        $data = $employee->orders()->create($requestData);

        Notification::create([
            'employee_id' => $employee->id,
            'calender_id' => $data->id,
            'text' => 'تم طلبك من'  . auth()->user()->name .  ' علي موعد بتاريخ ' . $request->date . ' الساعة ' . $request->time
        ]);
        return response()->json(['message' => 'appointment created successfully', 'data' => $data ]);

    }

    public function updateProfile(UpdateEmployeeRequest $request)
    {
        $employee = auth()->user();
        $employee->update($request->validated());
        $employee->refresh();

        return response()->json([
            'message' => 'Profile Updated Successfully',
            'data' => $employee
        ]);

    }
    public function addPortfolio(AddPortfolioEmployeeRequest $request)
    {

        $employee = auth()->user();

        $portfolio = $employee->portfolio()->create($request->validated());

        return response()->json([
            'message' => 'Portfolio Addedd Successfully',
            'data' => $portfolio
        ]);

    }
    public function calenders()
    {
        $employee = auth()->user();

        $calnder = Calender::with(['rates', 'user'])->where('employee_id', $employee->id)->latest()->paginate(10);

        return response()->json([
            'data' => $calnder
        ]);

    }


    public function getCalenders()
    {
        $employee = auth()->user();

        $calender = Calender::where('employee_id', $employee->id)->latest()->paginate(10);

        return response()->json([
            'data' => $calender
        ]);

    }

    
    public function getCars(Request $request) {
        $cars = Car::with(['company', 'files:id,path,fileable_id'])->latest();
        if($request->driver) {
            $cars->where('with_driver', $request->driver);
        }
        return response()->json($cars->get(), 200);
    }

    public function rent(Request $request) {

        $validatedData = $request->validate([
            'date_from' => 'required',
            'date_to' => 'required',
            'time' => 'required',
            'location' => 'required',
            'car_id' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        $rent = Rent::create($validatedData);

        return response()->json(['message' => 'Rent addedd succesfully', 'data' => $rent], 200);


    }

    public function currentRent() {

        $rents = Rent::where('user_id', auth()->user()->id)->whereMonth('created_at', Carbon::now()->month)->get();

        return response()->json($rents, 200);
    }
    

    public function PrevWorks() {

        $user = auth()->user();

        $calnder = Calender::with(['rates', 'user'])->where('user_id', $user->id)->latest()->paginate(10);

        return response()->json([
            'data' => $calnder
        ]);
    }


    public function lastRent() {

        $firstDayOfCurrentMonth = Carbon::now()->startOfMonth();

        $rents = Rent::where('user_id', auth()->user()->id)->where('created_at', '<', $firstDayOfCurrentMonth)->get();

        return response()->json($rents, 200);

    }

    public function acceptAppointment($id) {

        $calender = Calender::findOrFail($id);

        $calender->update([
            'status' => 2
        ]);

        Notification::create([
            'user_id' => $calender->user_id,
            'calender_id' => $calender->id,
            'text' => ' تم القبول علي موعد بتاريخ' . $calender->date . ' الساعة ' . $calender->time
        ]);

        return response()->json(['message' => 'Accepted Successfully'], 200);
    }
    public function refuseAppointment($id) {

        $calender = Calender::findOrFail($id);

        $calender->update([
            'status' => 3
        ]);

        return response()->json(['message' => 'Refused Successfully'], 200);

    }

    public function notificationEmployee() {

        $noty = Notification::where('employee_id', auth()->user()->id)->paginate(10);

        return response()->json(['data' => $noty], 200);
    }
    public function notificationUser() {

        $noty = Notification::where('user_id', auth()->user()->id)->paginate(10);

        return response()->json(['data' => $noty], 200);
    }
}
