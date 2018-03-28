<?php
use Illuminate\Http\Request;

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






Route::post('/contact',  'WebEmail@send_mail'); 



Route::get('/','WebController@index');


Route::get('/#st','WebController@index');



Route::get('support','WebController@getsupport');

Route::get('aboutus','WebController@getaboutus');
Route::get('event','WebController@getevent');
Route::get('job','WebController@getjob');
Route::get('tournament','WebController@gettournament');
Route::get('article','WebController@article');
Route::get('landing-job','WebController@getlandingjob');
Route::get('landing-event','WebController@getlandingevent');

Route::get('get_job','WebController@get_Job');
Route::get('get_Article','WebController@get_Article');
Route::get('get_Event/{page}','WebController@get_Event');
Route::get('get_Tounament','WebController@get_Tounament');


Route::get('event-detail/{id}','WebController@event_detail');
Route::get('job-detail/{id}','WebController@job_detail');

Route::get('tournament-detail/{id}','WebController@tournament_detail');

Route::get('article-detail/{id}','WebController@article_detail');





 Route::group(array('prefix' => 'manage'), function()
    {
        // main page for the admin section (app/views/admin/dashboard.blade.php)
        Route::post('create_hash','ManageController@create_hash');
        Route::get('/dashbo', function()
        {
            return View::make('Manage.job.dashboard');
           //Route::get('get_Tounament','ManageController@get_Tounament');
        });
         Route::get('/publish/checkout/{data}','ManageController@get_job_pricing');
       
         Route::get('/login/{id}', function()
        {
            return View::make('Manage.login');
           //Route::get('get_Tounament','ManageController@get_Tounament');
        });

        Route::get('/register', function()
        {
            return View::make('Manage.signup');
           //Route::get('get_Tounament','ManageController@get_Tounament');
        });
        Route::get('/create', function()
        {
            return View::make('Manage.job.create-job');
        });
        // Route::get('/edit', function()
        // {
        //     return View::make('Manage.job.edit-job');
        // });
        Route::get('/edit/{id}','ManageController@getjobDataforupdate');
        Route::get('/view/{id}','ManageController@get_job_detail');

        Route::get('setdata','ManageController@set_user_data');
        Route::get('/job/transaction_list', function()
         {
             return View::make('Manage.job.view-transaction');
         });
        
       // Route::get('/create_update/{id}','ManageController@get_tournament');
       Route::get('/job/candidate_profile/{id}','ManageController@get_candidate_info');
       Route::get('/logout', function(Request $request) {
        //Uncomment to see the logs record
        //\Log::info("Session before: ".print_r($request->session()->all(), true));
        if ($request->session()->has('userdata')) {
           $request->session()->forget('userdata');
        }
        //Uncomment to see the logs record
        //\Log::info("Session after: ".print_r($request->session()->all(), true));
        return redirect('manage/login/1');
    });
    
    });


