<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;

    class WebEmail extends Controller
    {
    
    public function send_mail(Request $request)
    { 
       
       $data = array(
      'email' => $request->email,
      'subject' => "dsdaadadad",//$request->subject,
      'mailbody' => "asdadadadadadadadadadadaadasdadadadaas"
    );
//print_r($data);die;
    Mail::send('event', $data, function($message) use ($data) {
      $message->from(env('MAIL_USERNAME'));
      $message->to('nitin@darkhorsesports.in');
      $message->subject($data['subject']);
    });


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
