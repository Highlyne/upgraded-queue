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
    $jobs = App\Jobs::all();
    return view('welcome',compact('jobs'));
    // return $jobs;
});
Route::get('/user','UsersController@index');
Route::get('/book','BookController@index');