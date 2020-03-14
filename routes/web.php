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

Route::get('/', 'HomeController@index');
Route::post('/store_answer','HomeController@store');


// Admin routes
Route::get('admin', 'AdminController@index');
Route::resource('admin/quizes','QuizController');
Route::resource('admin/questions','QuestionController');

// Route::resource('user','UserController');



