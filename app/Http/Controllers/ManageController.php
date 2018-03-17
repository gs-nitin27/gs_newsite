<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ManageController extends Controller
{

 public function set_user_data()
   {
     
    $data  = file_get_contents("php://input");
    
    $userdata = session(['userdata' => $data]);
    $value    = session('userdata');
    return $value;

   }

   public function get_Dashboard()
   {
    return view('Manage.dashboard');
   }
   


   
}
