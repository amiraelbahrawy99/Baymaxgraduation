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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//list All Medicines
Route::get('medicines','MedicineController@index');
//list single Medicine
Route::get('medicine/{id}','MedicineController@show');
//create Medicine
Route::post('medicine','MedicineController@store');
//update Medicine
Route::post('medicine/{user_id}/{medicineName}/change','MedicineController@update');
//delete Medicine
Route::delete('medicine/{id}','MedicineController@destroy');



/*Route::get('medicine','MedicineController@index');
Route::get('medicine/{id}','MedicineController@show');
Route::post('medicine','MedicineController@store');
Route::put('medicine','MedicineController@store');
Route::delete('medicine','MedicineController@destroy');
*/