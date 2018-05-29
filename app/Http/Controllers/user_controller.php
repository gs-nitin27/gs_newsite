<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class user_controller extends Controller
{
    public function set_user_data()
    {
	    $value    = $request->data;
	    Session::set('lite_user_data', $request->data);
	    session()->push('key', $value);
	    $value = Session::get('lite_user_data');
	    if($value != '')
	    {
	    return $value;  
	    }
	    else
	    {
	    return 0;
	    } 
    }

    public function get_apply_view($id)
    {

    	 return view('lite_user.event_participate');
     //     $value = Session::get('lite_user_data');
     //     $value = session('lite_user_data');
     //     if($value != '')
	    // {
	    //  print($value);
     //     echo $id;die;  
	    // }
	    // else
	    // {
	    // echo 0;die;  
	    // } 
        
    } 
}
