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

Route::post('createTask','TaskController@createTask')->name('createTask');
Route::get('widget/task/getTask','TaskController@widgetGetTask')->name('getTask');

Route::get('/home', 'HomeController@index')->name('home');
