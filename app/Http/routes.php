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


Route::get('event-detail/{id}','WebController@event_detail');
Route::get('job-detail/{id}','WebController@job_detail');

Route::get('tournament-detail/{id}','WebController@tournament_detail');

Route::get('article-detail/{id}','WebController@article_detail');





 Route::group(array('prefix' => 'manage'), function()
    {
        // main page for the admin section (app/views/admin/dashboard.blade.php)
        Route::get('/dashbo', function()
        {
            return View::make('Manage.job.dashboard');
           //Route::get('get_Tounament','ManageController@get_Tounament');
        });
        Route::get('/login', function()
        {
            return View::make('Manage.login');
           //Route::get('get_Tounament','ManageController@get_Tounament');
        });
        Route::get('/register', function()
        {
            return View::make('Manage.signup');
           //Route::get('get_Tounament','ManageController@get_Tounament');
        });
        Route::get('create', function()
        {
            return View::make('Manage.job.create-job');
        });

        // subpage to create a post found at /admin/posts/create (app/views/admin/posts-create.blade.php)
        Route::get('posts/create', function()
        {
            return View::make('admin.posts-create');
        });
    });


