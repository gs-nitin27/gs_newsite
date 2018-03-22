@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
<?php $value = session('userdata');
$sess_data = json_decode($value);
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
                                        <form method="post" name="payuForm" action="https://test.payu.in/_payment">
       <input type="hidden" name="key" id="key" value="rjQUPktU" />
       <input type="hidden" name="hash_string" id="hash_string" value="" />
       <input type="hidden" name="hash"  id="hash" value=""/>
       <input type="hidden" name="txnid" id="txnid" value="" />
<tr>
<td>Amount: </td>
<td><input type="hidden" name="amount" value="{{$checkout['plan'][0]->amount + $value}}" id="amount"/></td>
</tr>
<tr>
<td>First Name: </td>
<td><input  name="firstname" id="firstname" value="{{$sess_data->name}}" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input  name="email" id="email" value="{{$sess_data->email}}"  /></td>
</tr>
<tr>
<td>Phone: </td>
<td><input  name="phone" id="phone" value="{{$sess_data->contact_no}}" /></td>
</tr>
<tr>

<td colspan="3" style="display: none"><textarea type="hidden" name="productinfo" type="hidden" value="Book1" id="productinfo">{{$checkout['job'][0]->id}}</textarea></td>
</tr>
<tr>
<td colspan="3" style="display: none" ><input type="hidden" name="surl"  size="64" id="surl" value="{{ config('constant.ENV_URL')}}/paymentapi/transactionSuccess.php" /></td>
</tr>
<tr>
<td colspan="3" style="display: none"><input type="hidden" name="furl"  size="64" id="furl" value="{{ config('constant.ENV_URL')}}/paymentapi/transactionFail.php"/></td>
</tr>
<tr>
<td colspan="3" style="display: none"><input type="hidden" name="service_provider" value="payu_paisa" id="service_provider"/></td>
</tr>


   <!--  <input type="hidden" name="OpenPayu-Signature" value="sender=4950450;algorithm=SHA-256;signature=bc94a8026d6032b5e216be112a5fb7544e66e23e68d44b4283ff495bdb3983a8"> -->
  <!--   <input type="submit" value="Submit" formtarget="_blank" >
</form > -->

                                          
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
                    "amount": $('#amount').val(),
                    "firstname":$('#firstname').val(),
                    "email":$('#email').val(),
                    "phone":$('#phone').val(),
                    "productinfo":$('#productinfo').val() ,
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

