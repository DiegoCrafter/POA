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

/** Admin */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'EjeController@index')->name('ejes');
Route::get('schedule', 'ScheduleController@index')->name('schedule');
Route::get('reports', 'DetailActionController@index')->name('reports');
Route::POST('/eje', 'EjeController@store')->name('ej_save');
Route::POST('indicator', 'IndicatorController@store')->name('ind_save');
Route::POST('documents', 'DocumentController@store')->name('doc_save');
Route::POST('action', 'ActionController@store')->name('action_save');
Route::get('indicator/{id}', 'IndicatorController@index')->name('indicator');
Route::get('action', 'ActionController@index')->name('action');
Route::get('user', 'UserController@index')->name('user');