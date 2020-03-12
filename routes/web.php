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
Route::get('/admin', 'AdminController@index');
Route::get('/set_question', 'QuestionController@set_question');
Route::get('/set_quiz', 'QuestionController@set_quiz');
Route::get('/all_question', 'QuestionController@all_question');
Route::get('/total_participents', 'QuestionController@total_participents');
Route::get('/winners', 'QuestionController@winners');


// store routes
Route::post('/store_quiz','QuestionController@store_quiz');
Route::post('/store_question','QuestionController@store_question');


Route::resource('admin/quizes','QuizController');