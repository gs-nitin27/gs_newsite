<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;;
use App\Http\Requests;
use App\WebModel;
use Mail;

use Session;

    class WebEmail extends Controller
    {

    public function send_mail(Request $request)
    {

          $data =  array(
           'email' => $request->get('email'),
           'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
          );

       Mail::send('support',$data,function($message) use ($data){
        $message->from($data['email']);
        $message->to('devendrakumarpandey@gmail.com');
        $message->subject($data['user_message']);

      });
       Session::flash('success','Your Email was sent!');
       return redirect('/#st');

    }


}
