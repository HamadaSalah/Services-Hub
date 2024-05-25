<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function userRegister(Request $request)
    {
        return $this->Regsiter($request, User::class);

    }

    /**
     * @param Request $request
     * @return JsonResponse
     *
     */
    public function employeeRegister(Request $request)
    {
        return $this->Regsiter($request, Employee::class);

    }

    /**
     * @param Request $request
     * @param $model
     * @return JsonResponse
     */
    public function Regsiter(Request $request,  $model): JsonResponse
    {
        try {
            $validateUser = Validator::make($request->all(),
                [
                    'phone' => 'required',
                ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = $model::firstOrCreate([
                'phone' => $request->phone],[
                'firebase_token' => $request->firebase_token ?? ''
            ]);
            $abilities = $model === 'App\Models\User' ? ['guard:users'] : ['guard:employees'];

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN", $abilities)->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
