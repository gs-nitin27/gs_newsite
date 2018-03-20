<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\Manage_Model;
use App\WebModel;

class ManageController extends Controller
{

   public function set_user_data()
   {
     
    $data  = file_get_contents("php://input");
    $userdata = session(['userdata' => $data]);
    $value    = session('userdata');
    if($value != '')
    {
    return $value;  
    }
    else
    {
      return 0;
    } 
   }

   public function get_Dashboard()
     {
      return view('Manage.dashboard');
     }
   
   public function get_job_detail($id)
     { 
        $obj  = new WebModel();
        $resp = $obj->getJobDetail($id);
        
        return View::make("Manage.job.view-job")->with('detail',$resp); 
      
     }
public function get_job_pricing($id)
{
$obj  = new Manage_Model();
$resp = $obj->get_checkout_info($id);
return View::make("Manage.job.checkout")->with('checkout',$resp);
}

}
