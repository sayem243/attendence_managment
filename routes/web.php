<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/new/student', 'StudentsController@create')->name('student_create');
Route::post('student/store','StudentsController@store')->name('student_save');

Route::get('/student/attendence', 'AttendenceController@create')->name('attendence_create');
Route::post('student/attendence/store','AttendenceController@store')->name('attendence_save');
