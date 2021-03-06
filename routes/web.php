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
// Route to go Contact page 
Route::get('/contact','PageController@contact');
// ========Routes that call upon each barber's controller========
Route::get('/book/Oliver','OliverController@index')->middleware('auth');
Route::get('/book/Theresa','ThresaController@index')->middleware('auth');
Route::get('/book/Greg','GregController@index')->middleware('auth');
// =================================================================

Route::get('/home', 'HomeController@index')->name('home');

//======= Post route to add new appointments to the DB==========

Route::post('/book/Oliver/new_appt','OliverController@create')->middleware('auth');
Route::post('/book/Theresa/new_appt','ThresaController@create')->middleware('auth');
Route::post('/book/Greg/new_appt','GregController@create')->middleware('auth');

// =========== Administrator routes ============================
Route::get('/admin', 'AdminController@index')->middleware('administrator');
Route::post('admin/show/admin/edit/{id}', 'AdminController@edit')->middleware('administrator');
Route::get('admin/show/{id}', 'AdminController@show')->middleware('administrator');
Route::post('admin/confirm/{id}', 'AdminController@update')->middleware('administrator');
// Route::get('/admin/edit/{{ $job->id }}', 'PageController@home');