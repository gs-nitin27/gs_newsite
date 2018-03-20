@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
<?php $value = session('userdata');
$sess_data = json_decode($value);
//print_r($sess_data);die;
$surl = url('/job/transaction/success');
$furl = url('/job/transaction/failure');
?><div class='container'>
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
                                        <form action="https://secure.payu.in/_payment" method="post" name="payuForm">
                                           <input type="hidden" name="key" id="key" value="2g3RdB" />
                                           <input type="hidden" name="hash_string" id="hash_string" value="" />
                                           <input type="hidden" name="hash"  id="hash" value=""/>
                                           <input type="hidden" name="txnid" id="txnid" value="" />
                                                                                       
                                            
                                                <td>
                                                    <input class="form-control" type="hidden" name="amount" value="<?php echo (empty($checkout['plan'][0]->amount)) ? '' : $checkout['plan'][0]->amount + $value ?>"
                                                           required="required" type="text"/>
                                                </td>
                                            
                                            
                                             <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_first_name">Name:</label></td>
                                                <td>
                                                    <input class="form-control" name="firstname" id="firstname" value="<?php echo (empty($sess_data->name)) ? '' : $sess_data->name; ?>" required="required"  type="text"/>
                                                </td>
                                            </tr>
                                            <tr>                                             <td style="width: 175px;">
                                                    <label for="id_email">Best Email:</label></td>
                                                <td>
                                                    <input class="form-control" name="email" id="email" value="<?php echo (empty($sess_data->email)) ? '' : $sess_data->email; ?>" required="required" type="text"/>
                                                </td>
                                            </tr>
                                            
                                            <!-- <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_last_name">Last name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_last_name" name="last_name"
                                                           required="required" type="text"/>
                                                       </td></tr> -->
                                                <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_phone">Phone:</label></td>
                                                <td>
                                                    <input class="form-control" id="phone" name="phone" value="<?php echo (empty($sess_data->contact_no)) ? '' : $sess_data->contact_no; ?>"    type="text"/>
                                                </td>
                                            </tr>
                                             <input type="hidden" name="productinfo" value="<?php echo (empty($checkout['job'][0]->id)) ? '' : $checkout['job'][0]->id ?>" />
                                            <input type="hidden" name="surl" id="surl" value="<?php echo ('/url/job/transaction/success'); ?>"/>
                                             <input type="hidden" name="furl" id="furl" value="<?php echo ('/url//job/transaction/failure'); ?>"/>
                                             
                                             <input type="hidden" id="service_provider" name="service_provider" value="payu_paisa" size="64"/>
                                        </td></tr>
                                        <input type="hidden" name="lastname" id="lastname" value="" />
                                          <input type="hidden" name="address1" value="" />
                                          <input type="hidden" name="address2" value="" />
                                          <input type="hidden" name="city" value="" />
                                          <input type="hidden" name="state" value="" />
                                          <input type="hidden" name="country" value="" />
                                          <input type="hidden" name="zipcode" value="" />
                                          <input type="hidden" name="udf1" value="" />
                                          <input type="hidden" name="udf2" value="" />
                                          <input type="hidden" name="udf3" value="" />
                                          <input type="hidden" name="udf4" value="" />
                                          <input type="hidden" name="udf5" value="" />
                                          <input type="hidden" name="pg" value="" />
                                        <tr>
                                          
                                            <td colspan="4"><button onclick="submitPayuForm()" value="Submit" >Submit</button></td>
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
       var route_url = '<?php echo url('/'); ?>';
    
       var key = $('#key').val();
       var data = {
                    "key": $('#key').val(),
                    "amount": '<?php echo $checkout['job'][0]->id; ?>',
                    "firstname":$('#firstname').val(),
                    "email":$('#email').val(),
                    "phone":$('#phone').val(),
                    "productinfo": '<?php echo $checkout['plan'][0]->amount + $value; ?>',
                    "surl":$('#surl').val(),
                    "furl":$('#furl').val(),
                    "service_provider":$('#service_provider').val()
                 };


create_hash();
function submitPayuForm()
{
//alert("dsdsssd");return;
var payuForm = document.forms.payuForm;
payuForm.submit();
}
    </script>
@stop

