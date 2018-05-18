<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Manage_Model extends Model
{
    public function get_checkout_info($id)
    {

     $pricing_plan  = DB::table('gs_pricing_plan')->select('amount','duration')->where('module', '1')->get();
     $job 	= DB::table('gs_jobInfo')->select('id','title','org_city','contact','userid')->where('id', $id)->limit(8)->get();
     $data =  array('plan' =>$pricing_plan ,'job'=>$job );
     return $data;
    }
    
  public function create_hash($data)
   {   
	$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	$data->txnid = $txnid;
	unset($data->hash);
	$SALT = config('constant.SALT');
    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

	
     $hashVarsSeq = explode('|', $hashSequence);
     $hash_string = '';	
  foreach($hashVarsSeq as $hash_var) {
      
      $hash_string .= isset($data->$hash_var) ? $data->$hash_var : '';
      $hash_string .= '|';
      }
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
	$resp = array('hash' => $hash,'txnid'=>$txnid,'hash_string'=>$hash_string);
	return $resp;
   }

 public function getJobById($id)
  {

   $job = DB::table('gs_jobInfo')->select('*')->where('id', $id)->get();
   return $job;
  }
public function getUserData($id)
 {
   $basic  = DB::table('user')->select('*')->where('userid', $id)->get();
    $detail   = DB::table('gs_userdata')->select('*')->where('userid',$id)->get();
    
    $resp = array('basic' =>$basic ,'detail'=>$detail );
    return $resp;
 }

public function getAdminData($userid)
{
  $basic  = DB::table('user')->select('*')->where('userid', $userid)->get();
  $org    = DB::table('gs_org')->select('*')->where('userid', $userid)->get();
  $resp   = array('basic' =>$basic,'org'=>$org);
  return $resp;
}

public function useractivate($id)
{
$data = DB::table('users')
        ->where('userid', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('status' => '1'));  // update the record in the DB.
return $data;
}

public function get_code($user_data)
{
$code  = DB::table('user')->select('password')->where('userid', $user_data)->get();
if($code)
{
  return $code
}


}

}
