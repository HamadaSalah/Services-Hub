<?php

use App\Http\Controllers\API\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Registration for
Route::post('/auth/register', [AuthController::class, 'userRegister']);
Route::post('employee/auth/register', [AuthController::class, 'employeeRegister']);

Route::group(['middleware' => ['auth:users']], function() {

    Route::get('/cars', [APIController::class, 'getCars']);
    Route::post('/rent', [APIController::class, 'rent']);
    Route::get('/current-rent', [APIController::class, 'currentRent']);
    Route::get('/last-rent', [APIController::class, 'lastRent']);

    Route::get('intro', [APIController::class, 'intro']);
    Route::get('employees', [APIController::class, 'listEmployees']);
    Route::get('categories', [APIController::class, 'listCategories']);
    Route::get('slider', [APIController::class, 'listSliders']);
    Route::get('employees/{employee}', [APIController::class, 'employee']);
    Route::get('add-rate/{employee}', [APIController::class, 'addRate']);
    Route::post('add-appointment/{employee}', [APIController::class, 'AddAppointment']);
});

Route::group(['middleware' => ['auth:employees'], 'prefix' => 'employee' ], function() {
    Route::post('update-profile', [APIController::class, 'updateProfile']);
    Route::post('add-portfolio', [APIController::class, 'addPortfolio']);
    Route::get('calenders', [APIController::class, 'calenders']);
    Route::get('calenders/{calender}', [APIController::class, 'getCalenders']);
});

