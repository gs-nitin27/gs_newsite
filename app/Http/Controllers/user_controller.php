<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\WebModel;
use App\UserModel;
use Illuminate\Support\Facades\Redirect;

class user_controller extends Controller
{
    public function set_user_data(Request $request)
    { $data = file_get_contents("php://input");
		  Session::put('lite_user_data', $data);
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

    public function get_apply_view(Request $request)
    {  
      if(Session::has('lite_user_data'))
			{   
			    $value = session('lite_user_data');
          $userdata = json_decode($value);
          //print_r($value);echo "nitin";
          //print_r($userdata);
          $userid = $userdata->userid; 
			} 
		  $id =  explode('/', base64_decode($request->id));
          $module = $id[0];
          $item   = $id[1];
          $view   = '';
          $item_obj = new WebModel();
          switch ($module) {
          	case '1':
          $item_var = $item_obj->getJobDetail($item);
          		break;
          	case '2':
          $item_var = $item_obj->getEventDetail($item);
          $view = 'event_participate';
          $application_id = $item.$userid;
          $userObj = new UserModel();
          $apply_status = $userObj->get_event_application($application_id);
          		break;
          	case '3':
          $item_var = $item_obj->getTournamentDetail($item);
          		break;
          	case '4':
          $item_var = $item_obj->getEventDetail($item);

          		break;
          	
          	default:
          		# code...
          		break;
          }
          $apply_data = array('user_data' =>$value ,'item_data'=>$item_var,'apply_status'=>$apply_status); 
    	    return View::make('lite_user.'.$view)->with('data',$apply_data);
    } 

    public function get_checkout_data(Request $request)
      {   $data = explode('|', base64_decode($request->id));
          if(Session::has('lite_user_data'))
            {
                $value = session('lite_user_data');
                $userdata = json_decode($value);
                $userid = $userdata->userid; 
                $item_obj = new WebModel();
                $item_var = $item_obj->getEventDetail($data[0]);
                $apply_data = array('user_data' =>$value ,'item_data'=>$item_var); 
                if($data[2] == '0')
                {
                return View::make('lite_user.checkout')->with('data',$apply_data);
                }
                else
                {
                  return View::make('lite_user.payment_checkout')->with('data',$apply_data); 
                }
                
            }else
            {
              $id = base64_encode('2/'.$data[0]);
              Redirect::to('/user/login/'.$id)->send();
            } 
          
      }
      public function transaction_success(Request $request)
      { 
           $data = explode('|', base64_decode($request->id));
          if(Session::has('lite_user_data'))
            {
           $value = session('lite_user_data');
                $userdata = json_decode($value);
                $userid = $userdata->userid; 
                $item_obj = new WebModel();
                $item_var = $item_obj->getEventDetail($data[0]);
                $apply_data = array('user_data' =>$value ,'item_data'=>$item_var,'resp_data'=>$request->all()); 
          return View::make('lite_user.transaction_success')->with('userdata',$value)->with('item_data',$item_var)->with('resp_data',json_encode($request->all()));
      }else
      { //$data[0] = '2';
        $data = array_push($data, '2');
        $data_id = implode('|', $data);
        Redirect::to('/user/login/'.$data)->send();
      }
    }
}
