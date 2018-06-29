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
Route::get('/testView', 'CommonController@commmon')->name('Common');

Route::get('/allcourses','CommonController@courses')->name('allcourses');
Route::post('/getdept','CommonController@getDepts')->name('getdept');
Route::post('/getcourse','CommonController@getCourses')->name('getcourse');


Route::group(['middleware' => ['auth']], function(){
    Route::post('/enroll','CommonController@enroll')->name('Enroll');
    Route::post('/deleteStudentCourse','CommonController@deleteStudentCourse')->name('DeleteStudentCourse');
    Route::get('/registeredCourses','CommonController@registeredCourse')->name('RegisteredCourses');
});

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/course','AddController@showAddCourse')->name('course');
Route::post('/course','CommonController@postCourse')->name('course.submit');
Route::post('/deleteCourse','CommonController@deleteCourse')->name('DeleteCourse');
Route::get('/department','AddController@showAddDepartment')->name('department');
Route::post('/department','CommonController@postDepartment')->name('department.submit');
Route::post('/deleteDepartment','CommonController@deleteDepartment')->name('DeleteDepartment');
Route::get('/faculty','AddController@showAddFaculty')->name('faculty');
Route::post('/faculty','CommonController@postFaculty')->name('faculty.submit');
Route::post('/deletefaculty','CommonController@deleteFaculty')->name('DeleteFaculty');
});