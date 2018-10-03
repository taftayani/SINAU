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
    return view('layouts.home');
});


Auth::routes();
Route::resource('survey','SurveyController');
Route::post('/survey', 'SurveyController@survey')->name('survey');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('user','UserController@edit')->name('user');
Route::put('edit/{user}','UserController@update')->name('edit');
Route::get('profile','UserController@profile')->name('layouts.profile');
Route::get('beranda','UserController@dashboard')->name('beranda');
Route::get('sinau.offline','Pruduct@index')->name('sinau_offline');

//guru
Route::get('teacher.daftar','TeachController@index')->name('guru');
