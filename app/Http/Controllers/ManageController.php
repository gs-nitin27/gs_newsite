<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\Manage_Model;
use App\WebModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

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

public function method(Request $request)
{ 
 $data = Input::all();
 //$data = $this->array_except($data, ['_token']);
 return redirect()->away('https://test.payu.in/_payment')->withInputs($data);
}
  

  public function array_except($array, $keys)
  {
    return array_diff_key($array, array_flip((array) $keys));   
  } 

public function create_hash()
{ 
  $data = json_decode(file_get_contents('php://input'));
//print_r($data);die;
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
  $data->txnid = $txnid;
  unset($data->hash);
  $SALT = 'AwGMsoxe';//'e5iIg1jwi8';
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

public function transaction_success()
{

$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="e5iIg1jwi8";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
  else {    

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
     $hash = hash("sha512", $retHashSeq);
     
       if ($hash != $posted_hash) {
         echo "Invalid Transaction. Please try again";
       }
     else {
               
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
           
       }         
   }

public function transaction_failure()
{

$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="e5iIg1jwi8";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
  else {    

         $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
     $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
         echo "Invalid Transaction. Please try again";
       }
     else {

         echo "<h3>Your order status is ". $status .".</h3>";
         echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
          
     }



  
}

}
