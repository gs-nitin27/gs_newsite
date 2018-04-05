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
          $data = json_decode(file_get_contents('php://input'));
         // 
         $data = array('email'=>$data->email,'msg'=>$data->msg,'user_message'=>$data->subject);
         //print_r($data);die;
       Mail::send('support',$data,function($message) use ($data){
        $message->from($data['email']);
        $message->to('devendrakumarpandey@gmail.com');
        $message->subject($data['user_message']);

      });
       Session::flash('success','Your Email was sent!');
       return redirect('/#st');

    }


}
