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
Route::post('login', 'ApiAuthController@login');
Route::post('signup', 'ApiAuthController@signup');

Route::group([
	'middleware' => 'auth:api'
], function() {
	Route::get('subjects', 'ApiController@getSubjects');
	Route::get('majors', 'ApiController@getMajors');
	Route::get('periods','ApiController@showperiods');
	Route::post('attendances','ApiController@updateRollCall');
	Route::get('user', 'ApiController@user');
});

Route::get('universities','ApiController@getUniversities');
Route::get('majors','ApiController@getMajors');
