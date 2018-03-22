<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;;
use App\Http\Requests;
use App\WebModel;
use Mail;

    class WebEmail extends Controller
    {

    public function send_mail(Request $request)
    {

$name = $request->get('email');
        // only for testing purpose use support view

      Mail::send('support1',
       array(
           'email' => $request->get('email'),
           'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
       ), function($message)
        {
            
       $message->from('devendrakumarpandey@gmail.com');
       $message->to('devendrakumarpandey@gmail.com')->subject('Hi how are you');
         });
       
   //      return redirect()->back()->with('flash_message','The Success');
        

    }


}
