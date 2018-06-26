<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserModel extends Model
{
    public function get_event_application($id,$indicator)
    {
      $user = DB::table('gs_event_application')->where('id', $id)->first();
      if($user == '')
      {
        return 0;	
      }else
      {
        if($indicator == 1)
        {
         return 1;
        }else
        {
          return $user;
        }
      }

    }

    public function get_event_transaction($tr_data)
    {
      $userid = $tr_data[1];
      $item_id =$tr_data[0];
      $user = DB::table('gs_participant_billing')->where('userid', $userid)->where('user_item', $item_id)->first();
      if($user == '')
      {
      return 0; 
      }
      else
      {
      return $user;
      }
    }

    public function gs_user_info($booking_id_var)
    {
      $user = DB::table('user')->where('userid', $booking_id_var)->first();
       if($user == '')
      {
      return 0; 
      }
      else
      {
      return $user;
      }
   }
}
