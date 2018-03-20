@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
<?php $value = session('userdata');
$sess_data = json_decode($value);
//print_r($sess_data);die;
$surl = url('/job/transaction/success');
$furl = url('/job/transaction/failure');
$MERCHANT_KEY = "rjQUPktU";

// Merchant Salt as provided by Payu
$SALT = "e5iIg1jwi8";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://test.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
    
  }
}
//print_r($posted);die;
$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
          || empty($posted['service_provider'])
  ) {
    $formError = 1;
    }
    else
    {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
      $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
      //echo $hash_string;die;
    $hash_string .= $SALT;
    //print_r($posted);
    //echo $hash_string;die;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script><div class='container'>
    <div class='row' style='padding-top:25px; padding-bottom:25px;'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="text-align: center;">
                        Review Your Order & Complete Checkout
                    </h2>
                    <hr/>
                    <!-- <a href="#" class="btn btn-info" style="width: 100%;">Add More Products & Services</a> -->
                    <hr/>
                    <div class="shopping_cart">
                        <form class="form-horizontal" role="form" action="" method="post" id="payment-form">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review
                                                Your Order</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                        <!-- <tr>
                                                            <td colspan="2">
                                                                <a class="btn btn-warning btn-sm pull-right"
                                                                   href="http://www.startajobboard.com/"
                                                                   title="Remove Item">X</a>
                                                                <b>
                                                                    Premium Posting</b></td>
                                                        </tr> -->
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li>One Job Posting Credit</li>
                                                                    <li>+ 18% GST</li>
                                                                    <li>Job Title</li>
                                                                    <li>Duration</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li><b>{{$checkout['plan'][0]->amount}}</b></li>
                                                                    <li><b>{{$value = $checkout['plan'][0]->amount * 0.18 }}</b></li>
                                                                    <li><b>{{$checkout['job'][0]->title}}<b></li>
                                                                    <li>{{$checkout['plan'][0]->duration}} days</li>
                                                                </ul>
                                                            </td>

                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:green;">Rs. {{$checkout['plan'][0]->amount + $value}}</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center; width:100%;"><a style="width:100%;"                                            to Billing Information»</a></div>
                                    </h4>
                                </div>
                            </div> -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Contact
                                            and Billing Information</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <b>Help us keep your account safe and secure, please verify your billing
                                            information.</b>
                                        <br/><br/>

                                        <table class="table table-striped" style="font-weight: bold;">
                                           <form method="post" name="payuForm" action="<?php echo $action; ?>">
                                           <input type="hidden" name="key" id="key" value="rjQUPktU" />
                                           <input type="hidden" name="hash_string" id="hash_string" value="" />
                                           <input type="hidden" name="hash"  id="hash" value=""/>
                                           <input type="hidden" name="txnid" id="txnid" value="" />
                                                                                       
                                            
                                                <td>
                                                    <input class="form-control" type="hidden" name="amount" value="<?php echo (empty($checkout['plan'][0]->amount)) ? '' : $checkout['plan'][0]->amount + $value ?>"
                                                           required="required" type="text"/>
                                                </td>
                                            
                                            <tr>                                             <td style="width: 175px;">
                                                    <label for="id_email">Best Email:</label></td>
                                                <td>
                                                    <input class="form-control" name="email" id="email" value="<?php echo (empty($sess_data->email)) ? '' : $sess_data->email; ?>" required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_first_name">First name:</label></td>
                                                <td>
                                                    <input class="form-control" name="firstname" id="firstname" value="<?php echo (empty($sess_data->name)) ? '' : $sess_data->name; ?>" required="required"  type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_last_name">Last name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_last_name" name="last_name"
                                                           required="required" type="text"/>
                                                <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_phone">Phone:</label></td>
                                                <td>
                                                    <input class="form-control" id="phone" name="phone" value="<?php echo (empty($sess_data->contact_no)) ? '' : $sess_data->contact_no; ?>"    type="text"/>
                                                </td>
                                            </tr>
                                             <input type="hidden" name="furl" value="<?php echo (empty($furl)) ? '' : $furl ?>"/>
                                             <input type="hidden" name="surl" value="<?php echo (empty($surl)) ? '' : $surl ?>"/>
                                             <input type="hidden" name="productinfo" value="<?php echo (empty($checkout['job'][0]->id)) ? '' : $checkout['job'][0]->id ?>" />
                                             <input type="hidden" name="service_provider" value="payu_paisa" size="64"/>
                                        </td></tr>
                                        <tr>
                                          <?php if(!$hash) { ?>
                                            <td colspan="4"><input type="submit" value="Submit" /></td>
                                          <?php } ?>
                                        </tr>
                                        </form>
                                    </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                         <tr>
       
                                        <!-- <button type="submit" class="btn btn-success btn-lg" style="width:100%;">Pay
                                            Now
                                        </button> -->
                                        <br/>
                                        <div style="text-align: left;"><br/>
                                            By submiting this order you are agreeing to our <a href="/legal/billing/">universal
                                                billing agreement</a>, and <a href="/legal/terms/">terms of service</a>.
                                            If you have any questions about our products or services please contact us
                                            before placing this order.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('/manage_assets/js/transaction.js')}}"></script>
    <script type="text/javascript">
        //var amount = @php echo $checkout['plan'][0]->amount + $value; @endphp
        //var pi =     @php echo $checkout['job'][0]->id; @endphp
    </script>
@stop

