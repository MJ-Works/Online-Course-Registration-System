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

Route::get('/course','AddController@showAddCourse')->name('course');
Route::post('/course','AddController@AddCourse')->name('course.submit');
Route::get('/department','AddController@showAddDepartment')->name('department');
Route::post('/department','AddController@AddDepartment')->name('department.submit');
Route::get('/faculty','AddController@showAddFaculty')->name('faculty');
Route::post('/faculty','AddController@AddFaculty')->name('faculty.submit');