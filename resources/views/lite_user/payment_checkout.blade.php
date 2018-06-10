@extends('lite_user.template.master')
@section('pageTitle','Event booking checkout')
@section('content')
<?php
$userdata = json_decode($data['user_data']);
$productinfo  = array('id' =>$data['item_data'][0]->id,'name'=>$data['item_data'][0]->name);
$productinfo = json_encode($productinfo);
$apply_id =  base64_encode($data['item_data'][0]->id.'|'.$userdata->userid);
 ?>
<style type="text/css">
  
  .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

/*.container {
  
  
}*/
form span{
  color: #ff0000;
  float: right;
}
.section{
  margin-top: 1%;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  background: #fff
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

</style>
    <div class="row">
    <div class="col-25">
    <div class="container section">
      <!-- <h4>Cart 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i> 
          <b>4</b>
        </span>
      </h4> -->
      <p style="font-size:xx-large;"><a href="#"><b>{{$data['item_data'][0]->name}}</b></a> <span class="price"></span></p>
      <p><a href="#"><b>{{$data['item_data'][0]->organizer_city}}</b></a> <span class="price"></span></p>
      <p><span class="fa fa-calendar"><b>From:</b> <?php echo date('d F',strtotime($data['item_data'][0]->start_date)); ?> <b>To:</b> <?php echo date('d F',strtotime($data['item_data'][0]->end_date)); ?> </span></p>
      @if($data['item_data'][0]->fee == '0')
     <!--  <p><a href="#">Entry</a> <span class="price">Free</span></p> -->
      @else
      <p><a href="#"><b>Fee</b></a> <span class="price">{{$data['item_data'][0]->fee}}</span></p>
      <p><a href="#"><b>GST(9% SGST + 9% CGST)</b></a> <span class="price">{{$value = $data['item_data'][0]->fee * 0.18 }}</span></p>
      <p style="font-size:xx-large;">Total <span class="price" style="color:black"><b><i class="fas fa-rupee-sign"></i>{{$value+$data['item_data'][0]->fee}}</b></span></p>
      @endif
      <hr>
      
    </div>
  </div>
  <div class="col-75">
    <div class="container section">
      <form method="post" name="payuForm" action="{{ config('constant.FORM_PAYU_URL')}}">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>  
         <div class="row">
          <div class="col-50">
            <h3>Basic Details</h3>
            <input type="hidden" name="key" id="key" value="{{ config('constant.KEY')}}" />
            <input type="hidden" name="hash_string" id="hash_string" value="" />
            <input type="hidden" name="hash"  id="hash" value=""/>
            <input type="hidden" name="txnid" id="txnid" value="" />
            <tr hidden>
<input type="hidden" id="amount" name="amount" value="{{$data['item_data'][0]->fee + $data['item_data'][0]->fee * 0.18 }}">
<span id="rfname" class="invalid"><p></p></span>
<label for="fname"><i class="fa fa-user"></i> Full Name</label>
<input type="text" id="firstname" name="firstname" placeholder="John M. Doe" value="{{$userdata->name}}">
<span id="remail" class="invalid"><p></p></span>
<label for="email"><i class="fa fa-envelope"></i> Email</label>
<input type="text" id="email" name="email" placeholder="john@example.com" value="{{$userdata->email}}">
<span id="rphone" class="invalid"><p></p></span>
<label for="phone"><i class="fa fa-envelope"></i> Phone</label>
<input type="text" id="phone" name="phone" placeholder="+91 1001200154" value="{{$userdata->contact_no}}">
<span id="radr" class="invalid"><p></p></span>
<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
<input type="text" id="adr" name="udf2" placeholder="542 W. 15th Street" value="{{trim($userdata->address1)}}">
<span id="rcity" class="invalid"><p></p></span>
<label for="city"><i class="fa fa-address-card-o"></i> City</label>
<input type="text" id="city" name="udf3" placeholder="542 W. 15th Street" value="{{$userdata->location}}">
<span id="rfincome" class="invalid"><p></p></span>
<label for="fincome"><i class="fa fa-money"></i> Family income(per annum)</label>
<input type="text" id="fincome" name="udf1" placeholder="Ex:1000000" value="">
<span id="rzip" class="invalid"><p></p></span>
<label for="zip">Zip</label>
<input type="text" id="zip" name="udf4" placeholder="10001">
<input type="hidden" id="eventdata" name="udf5" placeholder="" value="">
<input type="hidden" id="userdata" name="udf6"  placeholder="" value="">
<input  name="productinfo" id="productinfo" type="hidden" placeholder="10001" value="{{$productinfo}}">
<input  name="surl" id="surl" type="hidden" value="{{url('/user/booking_confirm/')}}/<?php echo $apply_id; ?>">
<input  name="furl" id="furl" type="hidden" value="{{url('/user/booking_confirm/')}}/<?php echo $apply_id; ?>">
<input  name="service_provider" id="service_provider" type="hidden" value="payu_paisa">
</div>

<input id="booking" value="Confirm booking" class="btn" onclick="event_apply()">
</form>
<!-- <button onclick="void(0)">Pay Now</button> -->
</div>
</div>
</div>
<script type="text/javascript" src="{{asset('public/user_assets/event_attend.js')}}"></script>
<script type="text/javascript">
function user_details_validate()
{
  var i = 0;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if($('#firstname').val() == '')
  {
    $('#rfname').text('*Please enter your name');
    i++;
  }
  else
  {
    $('#rfname').text('');
  }
  if($('#email').val().match(mailformat))
  {
    $('#remail').text('');
  }
  else
  {
    $('#remail').text('*Please enter a valid email');
    i++;  
  }
  if($('#email').val() == '')
  {
    $('#remail').text('*Please enter your email address');
    i++; 
  }
  else
  {
    $('#remail').text('');
     
  }
  if($('#adr').val() == '')
  {
    $('#radr').text('*Please enter the you residential address');
    i++;
  }
  else
  {
    $('#radr').text('');
  }
   if($('#city').val() == '')
  {
    $('#rcity').text('*Please enter the your city');
    i++;
  }
  else
  {
    $('#rcity').text('');
  }
  if($('#zip').val() == '')
  {
    $('#rzip').text('*Please enter the pincode');
    i++;
  }
  else
  {
    $('#rzip').text('');
  }
  if($('#phone').val() == '')
  {
    $('#rphone').text('*Please enter the phone number');
    i++;
  }
  else
  {
    $('#rphone').text('');
  }
  if($('#fincome').val() == '')
  {
    $('#rfincome').text('*Please specify the family income');
    i++;
  }
  else
  {
    $('#rfincome').text('');
  }
  if(i == 0)
  {
    return true;
  }else
  {
    return false;
  }
}

function event_apply()  
{
  if(user_details_validate() == true)
     {
     
      loading.style.display = "block";
     var ApplyEvent = JSON.stringify([{"applicant_id":"{{$userdata->userid}}","event_id":"{{$data['item_data'][0]->id}}","fee_amount":"{{$data['item_data'][0]->fee + ($data['item_data'][0]->fee * 0.18)}}","organiser_id":"{{$data['item_data'][0]->userid}}"}]);
     var userdata = {"email":$('#email').val(),"name":$('#fname').val(),"address":$('#adr').val(),"city":$('#city').val(),"fincome":$('#fincome').val(),"dob":"{{$userdata->dob}}","gender":"{{$userdata->gender}}","event_title":"{{$data['item_data'][0]->name}}"};
      
        var apply_data = JSON.stringify({"apply_event":ApplyEvent,"userdata":userdata});
        localStorage.setItem('apply_data',apply_data);
        var route_url = '<?php echo url('/'); ?>';
        var key = $('#key').val();
        data = {
        "key": $('#key').val(),
        "amount": $('#amount').val(),
        "firstname":$('#firstname').val(),
        "email":$('#email').val(),
        "phone":$('#phone').val(),
        "productinfo":$('#productinfo').val() ,
        "surl":$('#surl').val(),
        "furl":$('#furl').val(),
        "service_provider":$('#service_provider').val(),
        "udf1":$('#fincome').val(),
        "udf2":$('#adr').val(),
        "udf3":$('#city').val(),
        "udf4":$('#zip').val(),
        "udf5":$('#eventdata').val(),
        "udf6":$('#userdata').val()
        };
        
        console.log(data);
        create_hash();
    }
else
    {  
        alert_msg("please fill all details");
        return;
    }
   }
</script>
@stop
