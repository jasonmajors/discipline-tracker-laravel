<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
// Employee Routes
Route::get('/employees', 'EmployeeController@index');
Route::get('/employee', 'EmployeeController@add');
Route::post('/employee', 'EmployeeController@store');
Route::delete('/employee/{employee}', 'EmployeeController@destroy');
// Discipline Routes
Route::get('/disciplines/{employee}', 'DisciplineController@view');
Route::get('/disciplines/{discipline}/edit', 'DisciplineController@edit');
Route::put('/disciplines/{discipline}', 'DisciplineController@update');
Route::post('/disciplines/{employee}', 'DisciplineController@store');
Route::delete('/disciplines/{discipline}', 'DisciplineController@destroy');

