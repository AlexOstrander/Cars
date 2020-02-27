<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('vehicles', 'VehicleController@index');

Route::get('addvehicle', 'VehicleController@create');
Route::post('addvehicles', 'VehicleController@store');

Route::get('vehicle/{id}', function ($id) {
      return $id;
});

//Route::get('vehicle/{id}', 'VehicleController@show');