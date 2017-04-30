<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { return view('welcome');});
Route::get('/skills', 'SkillController@index');
Route::get('/resume', function () { return view('resume');});
Route::get('/work', 'WorkSampleController@index');
Route::get('/awards', function () { return view('awards');});
Route::get('/questions', function () { return view('questions');});
