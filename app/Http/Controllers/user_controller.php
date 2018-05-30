<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\WebModel;

class user_controller extends Controller
{
    public function set_user_data(Request $request)
    {
		$value    = $request->data;
	    Session::put('lite_user_data', $request->data);
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
          $apply_data = array('user_data' =>$value ,'item_data'=>$item_var); 
    	  return View::make('lite_user.'.$view)->with('data',$apply_data);
    } 
}
