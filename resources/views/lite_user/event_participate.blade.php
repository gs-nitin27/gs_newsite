@extends('lite_user.template.master')
@section('pageTitle','Book event')
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
    min-height: 350px;
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
<div class="clearfix"></div>
<div class="clearfix margin20"></div>
             <div class="container">
             <div class="row">
               <div class="about-content">
                      <div class="margin15 clearfix"></div>
                        <div class="margin20 clearfix"></div>
                       <div class="row">
                         <div class="col-lg-6 text-center" style="margin-top:2%">
                           
                         </div> 

                            <div class="col-lg-6">
                              <h3 class="">{{$data['item_data'][0]->name}}</h3>

                                <ul class="business_list">
                                  <li><i class="fa fa-map-marker"></i>{{$data['item_data'][0]->address_1}}</li>
                                  <li><i class="fa fa-calendar"></i> <span class="pll_color">From :-</span> <?php echo date('d F',strtotime($data['item_data'][0]->start_date)); ?> <span class="pll_color"> To :-</span>  <?php echo date('d F',strtotime($data['item_data'][0]->end_date)); ?></li>
                                  <li><i class="fa fa-users"></i> <span class="pll_color">320</span> people viewed this event.</li>
                                  <li><i class="fa fa-rupee"></i> <span class="pll_color">{{$data['item_data'][0]->fee}}</span> </li>
                                 </ul>                           
                                  @if($data['apply_status'] == '0')
                                  @if($data['item_data'][0]->fee != '0')
                                 <div class="pll_btn">
                                     <a  href="{{url('/')}}/user/checkout/<?php echo base64_encode($data['item_data'][0]->id.'|'.$userdata->userid.'|'.'1')?>">Book Now</a>
                                 </div>
                                 @else
                                 <div class="pll_btn">
                                     <a  href="{{url('/')}}/user/checkout/<?php echo base64_encode($data['item_data'][0]->id.'|'.$userdata->userid.'|'.'0')?>">Book Now</a>
                                 </div>
                                 @endif
                                 @else
                                 <ul class="business_list">
                                 <li><i class="fa fa-envelope"></i><span class="pll_color">View Invoice</span></li>
                                 </ul>
                                 @endif
                             </div>
                         </div>
                      </div>

                  </div>
                </div>

                  <div class="clearfix"></div>
  <div class="partner_bg">
    <div class="container">
      <div class="row">
       <h3 class="text-uppercase" style="padding-left: 20px">About events</h3>
        <div class="col-lg-8">
            <div class="about_dis">
                <h4>Event Description : </h4>
                {!!$data['item_data'][0]->description!!}
                <p>Venue - {{$data['item_data'][0]->address_1}} , Dates - <?php echo date('d F',strtotime($data['item_data'][0]->start_date)); ?> to <?php echo date('d F',strtotime($data['item_data'][0]->end_date)); ?></p>
                <p>For more info call us at +91 72177 46550</p>
                <p>Event Name : {{$data['item_data'][0]->name}}<br>
                Event Organiser : {{$data['item_data'][0]->organizer_name}}
                Address : {{$data['item_data'][0]->address_1}}<br>
                City : {{$data['item_data'][0]->organizer_city}}<br>
                Pin : {{$data['item_data'][0]->pin}}</p>
             @if($data['apply_status'] == '0')
             @if($data['item_data'][0]->fee != '0')
              <div class="pll_btn">
                                     <a  href="{{url('/')}}/user/checkout/<?php echo base64_encode($data['item_data'][0]->id.'|'.$userdata->userid.'|'.'1')?>">Book Now</a>
                                 </div>
                                 @else
                                 <div class="pll_btn">
                                     <a  href="{{url('/')}}/user/checkout/<?php echo base64_encode($data['item_data'][0]->id.'|'.$userdata->userid.'|'.'1')?>">Book Now</a>
                                 </div>
                                 @endif
                                 @else
                                 <!-- <div class="pll_btn">
                                     <a  href="javascript:void(0)">Already Applied</a>
                                 </div><br> -->
                                 @endif
            </div>
        </div>
        <div class="col-lg-4" >
          <div class="s_img_icon" style="background-color: #ffffff;padding:10px 25px;">
            <ul>
              <li><a href="#"><img src="{{asset('public/img/f_icon.png')}}" width="40"></a></li>
              <li><a href="#"><img src="{{asset('public/img/in_icon.png')}}" width="40"></a></li>
              <li><a href="#"><img src="{{asset('public/img/t_icon.png')}}" width="40"></a></li>
              <li><a href="#"><img src="{{asset('public/img/g_icon.png')}}" width="40"></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 ">
            <div style="background-color: #ffffff;padding:10px 25px;margin: 20px 0">
              <h3>Subscribe to :-</h3><hr>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's</p>
              <form class="form_input">
                <div class="form-group">
                <i class="fa fa-envelope"></i><input type="email" class="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
              </form>
              <div class="pll_sb_btn">
              <a  href="#">Submit</a>
              </div>
              </div>
        </div>

        <div class="col-lg-4 ">
          <div class="" >
            <div class="" style="background-color: #ffffff;padding:10px 25px;margin: 20px 0">
            <h3>Map & Directions :-</h3><hr>
                <div class="text-center pll_font">
                <i class="fa fa-map-marker text-center"></i>
                <p>{{$data['item_data'][0]->address_1}}<br>
                New Delhi<br>
                <?php echo date('d F',strtotime($data['item_data'][0]->start_date)); ?> to <?php echo date('d F',strtotime($data['item_data'][0]->end_date)); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


     <div class="clearfix margin20"></div>
      <section class="testimonials">
          <div class="container">
              <div class="row pad15">
                <div class="heading-center">
                 <h3>upcoming events</h3>
                <p>See what’s included in the App</p>
                  </div>
                  <div id="customers-testimonials2" class="owl-carousel">
                    <div class="item">
                      <div class="img-box">
                        <img src="{{asset('public/img/slid_img3.png')}}">
                      </div>
                      <div class="slide-job-list">
                        <h4>Lorem Ipsum is simply dummy text of the printing andtypesetting industry.</h4>
                        <p> Location : <span> Lorem Ipsum</span></p>
                        <p> Start: <span> Jun 1, 2018 - Jun 27, 2018 </span></p>
                        <p> Entry: <span> Jun 1, 2018 - Jun 27, 2018 </span></p>
                        <p> Sport:<span> Lawn Tennis </span></p>
                        <p class="read-c"> Read More </p>
                      </div>
                    </div>
                     <div class="item">
                      <div class="img-box">
                        <img src="{{asset('public/img/slid_img1.png')}}">
                      </div>
                      <div class="slide-job-list">
                       <h4>Lorem Ipsum is simply dummy text of the printing andtypesetting industry.</h4>
                        <p> Location : <span> Lorem Ipsum</span></p>
                        <p> Start: <span> Jun 1, 2018 - Jun 27, 2018 </span></p>
                        <p> Entry: <span> Jun 1, 2018 - Jun 27, 2018 </span></p>
                        <p> Sport:<span> Lawn Tennis </span></p>
                        <p class="read-c"> Read More </p>
                      </div>
                    </div>
                       <div class="item">
                      <div class="img-box">
                        <img src="{{asset('public/img/slid_img.png')}}">
                      </div>
                      <div class="slide-job-list">
                       <h4>Lorem Ipsum is simply dummy text of the printing andtypesetting industry.</h4>
                        <p> Location : <span> Lorem Ipsum</span></p>
                        <p> Start: <span> Jun 1, 2018 - Jun 27, 2018 </span></p>
                        <p> Entry: <span> Jun 1, 2018 - Jun 27, 2018 </span></p>
                        <p> Sport:<span> Lawn Tennis </span></p>
                        <p class="read-c"> Read More </p>
                      </div>
                    </div>  
                  </div>

                        </div>
                      </div>
                 </section>    
 <script>
    jQuery(document).ready(function($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials2').owlCarousel({
                loop: true,
                center: true,
                items: 4,
                margin: 0,
                autoplay: true,
                dots:false,
                autoplayTimeout: 2000,
                smartSpeed: 450,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 3
                  },
                  1170: {
                    items: 4
                  }
                }
            });
        });

    </script>
@stop
