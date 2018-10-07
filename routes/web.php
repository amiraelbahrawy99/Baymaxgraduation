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
   // $amira = \App\User::first();
    // dd($amira->fullName);
    return view('index');
});

Route::post('user/insert','UserController@insert');

Route::get('user/getall','UserController@getAll');
Route::get('user/getsome','UserController@getsome');
Route::get('user/getbyid/{id}','UserController@getById');

//Route::get('user/add','UserController@add');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Website Design
Route::get('/login', 'DesignController@loginFun');


