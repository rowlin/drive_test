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



Route::get('test', 'TestController@index')->name('test');
Route::get('start/{id}', 'QuestionController@index')->name('start');
Route::get('questions','QuestionController@all' )->name('question');
Route::post('form', 'QuestionController@test')->name('form');


Route::get('/', function () {
    return view('start');
});
