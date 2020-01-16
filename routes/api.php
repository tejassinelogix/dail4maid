<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
	
Route::post('login', 'API\UserController@login');
Route::post('signup', 'API\UserController@signup');
Route::post('appointment', 'API\UserController@saveAppointment');
Route::post('services', 'API\UserController@services');
Route::post('userAppointments', 'API\UserController@userAppointments');
Route::post('userDetails', 'API\UserController@userDetails');
Route::post('Appointment', 'API\UserController@Appointment');
Route::post('update_appointment', 'API\UserController@updateAppointment');
Route::post('update_account', 'API\UserController@updateAccount');

Route::post('register', 'API\UserController@register');

//});	

