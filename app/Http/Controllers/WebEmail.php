<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Manage_Model;
use Illuminate\Support\Facades\Input;
use Session;

    class WebEmail extends Controller
    {
    
    public function send_mail(Request $request)
    { 

          $user_data = $request->all();    
          $obj  = new Manage_Model();
          $data = array(
      'email' =>$user_data['email'],
      'subject' => "Welcome to getsporty manage",//$request->subject,
      'mailbody' => "Thanks for registering with us",
      'name'=>$user_data['name']
      );

      Mail::send('emails.contact-message', ['user' => $data , 'name'=>$user_data['name'] , 'id'=>base64_encode($user_data['userid'])], function ($m) use ($data) {
            $m->from('info@darkhorsesports.in', 'Getsporty Manage');

            $m->to($data['email'], $data['name'])->subject('Welcome to getsporty manage');
        });

     }

      public function send_app_inmail(Request $request)
    { 

          $user_data = $request->all();    
          $obj  = new Manage_Model();
          $pathToFile = env('APP_URL').'/public/build/manage.apk';
          $data = array(
      'email' =>$user_data['email'],
      'subject' => "Getsporty manage app",//$request->subject,
      'mailbody' => "Thanks for registering with us",
      'name'=>$user_data['name']
      );

       $send  =    Mail::send('emails.contact-message', ['user' => $data , 'name'=>$user_data['name'] , 'id'=>base64_encode($user_data['userid'])], function ($m) use ($data) {
            $m->from('info@darkhorsesports.in', 'Getsporty Manage');
            $m->attach($pathToFile);
            $m->to($data['email'], $data['name'])->subject('Getsporty manage app');
        });

     if($send)
     {
      echo '1'
     }else
     {
      echo '0';
     }
     }
    // public function activate_account($user_data)
    // {
    
    //  $user_data = $request->all();    
    //       $obj  = new Manage_Model();
    //       $data = array(
    //   'email' =>$user_data['email'],
    //   'subject' => "Welcome to getsporty manage",//$request->subject,
    //   'mailbody' => "Thanks for registering with us",
    //   'name'=>$user_data['name']
    //   );
    //  $code = $obj->get_code($user_data);    
    //   if($code)
    //   {
    //     $code = base64_decode($code[0]->password);
    //   }
    
    //   Mail::send('emails.contact-message', ['user' => $data , 'name'=>$user_data['name'] , 'code'=>$code], function ($m) use ($data) {
    //         $m->from('info@darkhorsesports.in', 'Getsporty Manage');

    //         $m->to($data['email'], $data['name'])->subject('Welcome to getsporty manage');
    //     });

    // }


    }
