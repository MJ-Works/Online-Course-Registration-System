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
Route::post('/postFaculty', 'CommonController@postFaculty')->name('PostFaculty');

Route::group(['middleware' => ['auth']], function(){
});

Route::group(['middleware' => ['auth', 'admin']], function(){
});