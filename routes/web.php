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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('email', 'QueueController@sendEmail');

Route::get('/admin','AdminController@admin');

Route::get('/admin/register','AdminController@adminregister')->name('adminregister');
Route::post('/admin/store','AdminController@adminstore')->name('adminstore');

Route::resource('majors','MajorController');
Route::resource('subjects','SubjectController');
Route::resource('periods','PeriodController');
Route::resource('students','StudentController');
Route::resource('unis','UniController');
Route::resource('years','YearController');





