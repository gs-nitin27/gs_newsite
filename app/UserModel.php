<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserModel extends Model
{
    public function get_event_application($id)
    {
      $user = DB::table('gs_event_application')->where('id', $id)->first();
      if($user == '')
      {
        return 0;	
      }else
      {
      	return 1;
      }

    }
}
