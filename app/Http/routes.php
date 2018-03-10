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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','WebController@index');

Route::get('aboutus','WebController@getaboutus');


Route::get('event','WebController@getevent');

Route::get('job','WebController@getjob');
Route::get('tournament','WebController@gettournament');
Route::get('article','WebController@article');
Route::get('landing-job','WebController@getlandingjob');
Route::get('landing-event','WebController@getlandingevent');

Route::get('get_job','WebController@get_Job');
Route::get('get_Article','WebController@get_Article');
Route::get('get_Event','WebController@get_Event');
Route::get('get_Tounament','WebController@get_Tounament');





