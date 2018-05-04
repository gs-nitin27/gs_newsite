<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;

    class WebEmail extends Controller
    {
    
    public function send_mail(Request $request)
    { 
          $data = array(
      'email' => 'ntnagarwal27@gmail.com',
      'subject' => "hjhjgjghj",//$request->subject,
      'mailbody' => "ghjgjggh",
      'name'=>'chutiya'
    );
          //$data = json_encode($data);
      Mail::send('emails.contact-message', ['user' => $data], function ($m) use ($data) {
            $m->from('nitin@darkhorsesports.in', 'Your Application');

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
