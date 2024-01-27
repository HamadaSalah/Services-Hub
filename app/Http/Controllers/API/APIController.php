<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPortfolioEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Calender;
use App\Models\Employee;
use App\Models\Job;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
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
    public function listEmployees(){

        $employees = Employee::with('job')->select(['id', 'job_id','name', 'photo', 'description'])->latest()->take(6)->get();

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

        $employee->load(['job']);

        return response()->json([
            'data' => $employee
        ]);
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

        $calnder = Calender::where('employee_id', $employee->id)->latest()->paginate(10);

        return response()->json([
            'data' => $calnder
        ]);

    }
    public function getCalenders()
    {
        $employee = auth()->user();

        $calnder = Calender::where('employee_id', $employee->id)->latest()->paginate(10);

        return response()->json([
            'data' => $calnder
        ]);

    }

}
