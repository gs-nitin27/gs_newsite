@extends('lite_user.template.master')
@section('pageTitle','Event booking checkout')
@section('content')
<?php
$userdata = json_decode($data['user_data']);
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
      @if($data['item_data'][0]->fee == '0' )
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
      <form>
         <div class="row">
          <div class="col-50">
            <h3>Basic Details</h3>
            <span id="rfname" class="invalid"><p></p></span>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" value="{{$userdata->name}}">
            <span id="remail" class="invalid"><p></p></span>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" value="{{$userdata->email}}">
            <span id="radr" class="invalid"><p></p></span>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="{{trim($userdata->address1)}}">
            <span id="rcity" class="invalid"><p></p></span>
            <label for="city"><i class="fa fa-map-marker"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" value="{{$userdata->location}}">
            <span id="rfincome" class="invalid"><p></p></span>
            <label for="fincome" style="display: none"><i class="fa fa-money"></i> Family income(per annum)</label>
            <input type="hidden" id="fincome" name="fincome" placeholder="Ex:1000000" value="">
              <div class="row">
              <div class="col-50">
                <span id="rstate" class="invalid"><p></p></span>
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <span id="rzip" class="invalid"><p></p></span>
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>
         </div>
        <!-- <a href="javascript:void(0)" onclick="event_apply()"><button class="btn btn-success btn-lg">Confirm Booking</button></a> -->
        <input id="booking" value="Confirm booking" class="btn" onclick="event_apply()">
      </form>
    </div>
  </div>

  
</div>
<script type="text/javascript">
function user_details_validate()
{
  var i = 0;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if($('#fname').val() == '')
  {
    $('#rfname').text('*Please enter the you name');
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
     var ApplyEvent = [{"applicant_id":"{{$userdata->userid}}","event_id":"{{$data['item_data'][0]->id}}","fee_amount":"{{$data['item_data'][0]->fee + ($data['item_data'][0]->fee * 0.18)}}","organiser_id":"{{$data['item_data'][0]->userid}}"}];
     var userdata = {"email":$('#email').val(),"name":$('#fname').val(),"address":$('#adr').val(),"city":$('#city').val(),"fincome":$('#fincome').val(),"dob":"{{$userdata->dob}}","gender":"{{$userdata->gender}}","event_title":"{{$data['item_data'][0]->name}}"};
     var response_data = '';
     if({{$data['item_data'][0]->fee}} == 0)
     {
      response_data = {"amount":"0"}
     }else
     {
      response_data = {"amount":"{{$data['item_data'][0]->fee + ($data['item_data'][0]->fee * 0.18)}}"}
     }
     var apply_data =JSON.stringify({"ApplyEvent":ApplyEvent,"userdata":userdata,"response_data":JSON.stringify(response_data)}); 
     $.ajax({
      url:url+'/eventcontroller.php?act=quick_event_apply',
      method:'POST',
      crossDomain: true,
      data:apply_data,
      dataType:'text',
      beforeSend: function () { loading.style.display = "block"; },
      success:function(result)
      {loading.style.display = "none";
      
        //var data = JSON.parse(result);
        if(result == 1)
        {  $('#booking').text('Booking Confirmed');
          // alert_msg("Event sucessfully booked"+'<br>'+'a confirmation mail has been sent to your registered email id '+' {{$userdata->email}}');
          $.confirm({
    title: 'Successfully applied',
    content: 'a confirmation mail has been sent to your registered email id '+' {{$userdata->email}}',
    buttons: {
        Ok: function () {
            window.location.href = "<?php echo url('/user/logout'); ?>";
         },
               }
          });
        }
        else
        { 
          $('#booking').attr('disabled',false);
          alert_msg("Something went wrong! Please try after sometime");
        }
      }

     });
   }
 else
   {
    alert_msg("Please fill up all details");
   }
}

</script>


@stop
