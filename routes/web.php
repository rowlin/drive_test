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
Route::get('answer' , 'AnswerController@index')->name('answer');
Route::get('questions','QuestionController@all' )->name('question');
Route::post('form', 'QuestionController@test')->name('form');


Route::get('discipline', 'AinetController@index')->name('discipline');
Route::get('new_disc', 'AinetController@new_disc');
Route::post('create_disc', 'AinetController@create');
Route::get('edit_disc/{id}', 'AinetController@edit');
Route::post('update_disc', 'AinetController@update');
Route::post('delete_disc', 'AinetController@delete');
Route::post('expulsion', 'AinetController@expulsion');


Route::get('users','UserController@index')->name('users');
Route::get('new_student', 'UserController@new_user');
Route::post('create_user', 'UserController@create');
Route::get('edit_user/{id}', 'UserController@edit');
Route::post('update_user', 'UserController@update');
Route::post('delete_user', 'UserController@delete');





Route::get('/', function () {
    return view('start');
});
