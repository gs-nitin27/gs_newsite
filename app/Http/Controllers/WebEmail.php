<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Session;

    class WebEmail extends Controller
    {
    
    public function send_mail(Request $request)
    { 

          $user_data = $request->all();    
         
          $data = array(

      'email' =>$user_data['email'],
      'subject' => "Welcome to getsporty manage",//$request->subject,
      'mailbody' => "Thanks for registering withus",
      'name'=>$user_data['name']
    );
      Mail::send('emails.contact-message', ['user' => $data], function ($m) use ($data) {
            $m->from('info@darkhorsesports.in', 'Welcome to getsporty manage');

            $m->to($data['email'], $data['name'])->subject('Your Reminder!');
        });
       
       
// //print_r($data);die;
//     Mail::send('event', $data, function($message) use ($data) {
//       $message->from(env('MAIL_USERNAME'));
//       $message->to('nitin@darkhorsesports.in');
//       $message->subject($data['subject']);
//     });


      //    $data = $_REQUEST;
      //    Mail::send('support',$data,function($message) use ($data){
      //    $message->from(env('MAIL_USERNAME'));
      //    $message->to('ntnagarwal27@gmail.com');
      //    $message->subject('dsdsdsdsd');

      // });
      //  Session::flash('success','Your Email was sent!');
      //  return redirect('/#st');
     }

    }
