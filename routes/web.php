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
// Route to show home page--start of app
Route::get('/', 'PageController@home');
// Route for user athuthenication
Auth::routes();
// Route to go show booking page--pick the barber
Route::get('/book','PageController@index');
// ========Routes that call upon each barber's controller========
Route::get('/book/oliver','JobsController@show_avail');

Route::get('/barber','BookController@index');


Route::get('/home', 'HomeController@index')->name('home');
 