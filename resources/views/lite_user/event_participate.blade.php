@extends('lite_user.template.master')

@section('content')
<?php
$userdata = json_decode($data['user_data']);
 ?>
<style type="text/css">
.left-img-job img{
	max-width: 70%;max-height: 70%;
	margin-top: 1%;
}
.confirm{
        background: #fff;
    border: solid #000 1px;
    border-radius: 5px;
    margin-top: 1%;
    height: 51%;
    padding: 0px 8px 3px 29px;
    min-height: 50%;
    width: 100%;
    max-width: 100%;
    min-width: 100%;

}
 .confirm p span{
 	font-size: 30px;
 }
.right-list-job button{
	float: right;
}
</style>
<div class="container">
        	 	 <div class="row">
        		   
        		    <div class="col-lg-5 col-md-5 confirm">
        			      <div class="col-lg-7 col-md-7">
            			 <div class="left-img-job"> <img src="https://getsporty.in/portal/uploads/event/{{$data['item_data'][0]->image}}"> </div>		
        		    </div>
        			      <div class="right-list-job" style="padding: 50px 0 0 0;">
                          <h2><b>{{$data['item_data'][0]->name}}</b></h2>
                          <br><br>
                          <p><span class="fa fa-location-arrow">{{$data['item_data'][0]->organizer_city}}</span></p>
                          <p><span class="fa fa-calendar"><b>From:</b> <?php echo date('d F',strtotime($data['item_data'][0]->start_date)); ?> <b>To:</b> <?php echo date('d F',strtotime($data['item_data'][0]->end_date)); ?> </span></p>
                          <p><span class="fas fa-rupee-sign">{{$data['item_data'][0]->fee}}</span></p>	
                          @if($data['apply_status'] == '0')
                          <p><a href="{{url('/')}}/user/checkout/<?php echo base64_encode($data['item_data'][0]->id.'|'.$userdata->userid)?>"><button class="btn btn-warning btn-lg">Book Now</button></a></p>
                          @else
                          <p><a href="javascript:void(0)"><button class="btn btn-danger btn-lg">Already Applied</button></a></p>
                           @endif

                          </div>
        		    </div>
        		    <div class=" clearfix margin15"></div>
        			  <div class="right-list-job pad15">
          			    <h3>About</h3>
                        <span> {!!$data['item_data'][0]->description!!}
                        </span>        			       
                    </p>        			   
              			<p>Event Name : <span> {{$data['item_data'][0]->name}}.</span></p>        			     
              			<p>Event Organiser : 
                        <span>{{$data['item_data'][0]->organizer_name}}</span>
                    </p>        			
              			<p>Event Address : <span>{{$data['item_data'][0]->address_1}}</span></p>        			
              			<p>Event City : <span>{{$data['item_data'][0]->organizer_city}}</span></p>        			 
            			<p>Event Pin : <span>{{$data['item_data'][0]->pin}} </span></p>      			  
            	</div>
<div>
  <h4>Note:</h4><p>GetSporty is not an organizer for this event / tournament and has no control over any changes in the above given information. For any info. Please connect to the above given contact details.</p>
</div>
        		</div>
        </div>
@stop
