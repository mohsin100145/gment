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

Route::get('/home', 'HomeController@index');

Route::get('/employee', 'EmployeeController@index');
Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee', 'EmployeeController@store');
Route::get('/employee/{id}', 'EmployeeController@show');
Route::get('/employee/{id}/edit', 'EmployeeController@edit');
Route::put('/employee/{id}', 'EmployeeController@update');
Route::delete('/employee/{id}', 'EmployeeController@destroy');

Route::get('/salary/employee-info-show', 'SalaryController@employeeInfoShow');
Route::get('/salary', 'SalaryController@index');
Route::get('/salary/create', 'SalaryController@create');
Route::post('/salary', 'SalaryController@store');
Route::get('/salary/{id}', 'SalaryController@show');
Route::get('/salary/{id}/edit', 'SalaryController@edit');
Route::put('/salary/{id}', 'SalaryController@update');
Route::delete('/salary/{id}', 'SalaryController@destroy');



Route::group(['middleware' => 'can:super_admin_access'], function () {

//    Route::get('/employee', 'EmployeeController@index');
//    Route::get('/employee/create', 'EmployeeController@create');
//    Route::post('/employee', 'EmployeeController@store');
//    Route::get('/employee/{id}', 'EmployeeController@show');
//    Route::get('/employee/{id}/edit', 'EmployeeController@edit');
//    Route::put('/employee/{id}', 'EmployeeController@update');
//    Route::delete('/employee/{id}', 'EmployeeController@destroy');

});

Route::group(['middleware' => 'can:admin_access'], function () {

//    Route::get('/employee', 'EmployeeController@index');
//    Route::get('/employee/create', 'EmployeeController@create');
//    Route::post('/employee', 'EmployeeController@store');
//    Route::get('/employee/{id}', 'EmployeeController@show');
//    Route::get('/employee/{id}/edit', 'EmployeeController@edit');
//    Route::put('/employee/{id}', 'EmployeeController@update');
//    Route::delete('/employee/{id}', 'EmployeeController@destroy');

});
