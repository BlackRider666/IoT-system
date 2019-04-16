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
Route::middleware('auth:api')->post('/device/store','DeviceController@store');
Route::middleware('auth:api')->post('/device/update/{id}','DeviceController@update');
Route::middleware('auth:api')->get('/device/','DeviceController@index');
