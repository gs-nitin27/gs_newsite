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


if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
   
}



Route::post('/contact',  'WebEmail@send_mail'); 



Route::get('/','WebController@index');
Route::get('/index.html','WebController@index');

Route::get('/#st','WebController@index');
Route::get('getSportsList/{id}','WebController@getSportsList');


Route::get('support','WebController@getsupport');

Route::get('aboutus','WebController@getaboutus');
Route::get('sports-events-in-india.html','WebController@getevent');
Route::get('sports-jobs-in-india.html','WebController@getjob');
Route::get('sports-tournaments-in-india.html','WebController@gettournament');
Route::get('latest-sports-news-resources.html','WebController@article');
Route::get('landing-job','WebController@getlandingjob');
Route::get('landing-event','WebController@getlandingevent');

Route::get('get_job','WebController@get_Job');
Route::get('get_Article','WebController@get_Article');
Route::get('get_Event/{page}','WebController@get_Event');
Route::get('get_Tounament','WebController@get_Tounament');
Route::get('set_event_cookie',function(){
    Cookie::queue('visit_event', '1', 45000);
    //$value = Cookie::get('visit_event');
    if(Cookie::get('visit_event') !== false)
        return 1;
});
//Route::get('sports-trials-in-india.html','WebController@get_trial');
Route::get('sports-trials-in-india.html',function(){
           return View::make('trials');
});
Route::get('athletes.html',function(){
           return View::make('athlete_landing');
});
Route::get('partner.html',function(){
           return View::make('partner');
});
Route::get('event-detail/{id}/{name}','WebController@event_detail');
Route::get('job-detail/{id}/{name}','WebController@job_detail');

Route::get('tournament-detail/{id}/{name}','WebController@tournament_detail');

Route::get('article-detail/{id}','WebController@article_detail');
Route::get('/career', function()
        {
            return View::make('careers');
        });
Route::get('/gs-vacancies', function()
        {
            return View::make('vacancy_view');
        });
Route::post('user_susbcription','WebController@user_subscription');
// Route::post('getsports_list','WebController@user_subscription');
Route::get('/coach', function()
         {
             return View::make('coach');
         });

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

        Route::get('/register/{id}', function()
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
        
       Route::get('/job/candidate_profile/{id}','ManageController@get_candidate_info');
       Route::get('/logout', function(Request $request) {
       if ($request->session()->has('userdata')) {
           $request->session()->forget('userdata');
        }
        $login_url = 'manage/login/'.base64_encode(1);
        return redirect($login_url);
    });
    Route::get('my_profile/{id}','ManageController@getAdminuserData');
    Route::get('/professional', function()
         {
             return View::make('Manage.proffesional');
         });
    Route::post('welcome_mail','WebEmail@send_mail');
    Route::get('activateyouraccount/{id}','ManageController@user_email_validate');
    Route::post('/get_app','WebEmail@send_app_inmail');
    });
    
    Route::group(array('prefix' => 'user'), function()
    {


      Route::get('/login/{id}',function(){
       
            return View::make('user_login');
     });
     Route::get('/signup/{id}',function(){
       
            return View::make('user_signup');
     });
     Route::post('set_user_data','user_controller@set_user_data');
     Route::get('user_apply/{id}','user_controller@get_apply_view');
     Route::get('checkout/{id}', 'user_controller@get_checkout_data');
     Route::get('/logout', function(Request $request) {
       if ($request->session()->has('lite_user_data')) {
           $request->session()->forget('lite_user_data');
           Redirect::to('/')->send();
        }
    });
    Route::post('booking_confirm/{id}','user_controller@transaction_success');
    Route::get('htmltopdfview/{id}',array('as'=>'htmltopdfview','uses'=>'user_controller@htmltopdfview'));
    });
