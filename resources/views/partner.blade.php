@extends('layouts.master')
@section('pageTitle','Latest Sports News India & Resources - Getsporty')
@section('meta')
<meta name="description" content="We bring you the latest updates on all the big sports Resources to your GetSporty App. Get all the information on your phone">
<meta name="keywords" content="latest sorts news india,sports news,sports resources">
<meta property="og:image" content="https://getsporty.in/23376596_1450074778394787_4309845126431335508_n (1).png">
<link href="{{asset('public/css/b_style.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="about-bg partner-bg bannerBgSec">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
              <div class="ban-pera">
              <h1>Getsporty for partners</h1>
              <h3></h3> 
              </div>
               </div>
              </div>
             </div>        
            </div>
        <div class="relative">
            <div class="blue-bg"></div>
             <div class="play-icon" data-toggle="modal" data-target="#myModal">
            <img src="public/img/play-icon.svg">
              </div>
            </div>      
          <!-- Modal pop -->
            <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
       <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/YeYXeoYXZwY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
       </div>
      </div>
    </div>
  </div>
            


  <div class="clearfix margin20"></div> 
   <div class="clearfix margin20"></div> 
  <div class="clearfix"></div>
    <div class="container" id="support">
      <div class="row">

<!--       <div class="registration vertical-text">
        <a href="#" class=""><i class="fa fa-address-card "></i> Registration</a>
      </div> -->
      
      	<div class="col-lg-6 col-md-6 ">
          <div class="right-cont cont_box">
               <h3>For Sports Recruiters</h3>
               <p>Get Sports specific candidates</p>
               <ul class="cont_box_li">
                 <li>Able to post job on GetSporty job section</li>
                 <li>Use our app for easy recruitment process</li>
               </ul>
            </div>
         </div>
       <!--   <div class="heading-center">
           <h3>Support</h3>
             <p>For more info and support, contact us!</p>
         </div> -->
         <div class="col-lg-6 col-md-6 text-center rec">
          <img src="public/img/recruiter.png" height="250" width="260" style="margin-left: -50%;">
         </div>
         <div class="clearfix margin20"></div> 
       </div>
       <a href="{{url('landing-job/')}}"><button class="btn btn-success">Post a job</button></a>
   </div>



<div class="bg_color">
<div class="clearfix margin20"></div>
     <div class="clearfix"></div>
    <div class="container" id="support" >
      <div class="row">

       <!--   <div class="heading-center">
           <h3>Support</h3>
             <p>For more info and support, contact us!</p>
         </div> -->
          <div class="col-lg-6 col-md-6 text-center">
          <img src="public/img/img_icon.png">
         </div>

         <div class="col-lg-1 col-md-1"></div>
           <div class="col-lg-5 col-md-5">
              <div class="right-cont">
               <h3>For Clubs</h3>
               <p>Conduct multi location trials</p>
               <ul  class="cont_box_li">
                <li>Promotion & Campaigning (online/offline) of events/tournaments for entire calendar/season</li>
                <li>Increasing online visibility</li>
               </ul>
            </div>
        </div>
         <div class="clearfix margin20"></div> 
       </div>
       <br><br><br><br><br><br>
       <div class="row">

       <!--   <div class="heading-center">
           <h3>Support</h3>
             <p>For more info and support, contact us!</p>
         </div> -->
         
         <div class="col-lg-1 col-md-1"></div>
           <div class="col-lg-5 col-md-5">
              <div class="right-cont">
               <h3>For Academies</h3>
               <p>Help in creating good online presence</p>
               <ul  class="cont_box_li">
                <li>Excellent Social Media Promotion</li>
                <li>Assistance in setting up round the year calendar or events</li>
                <li>Help in organising events on the ground</li>
                <li>Increase in enrollments and revenue</li>
               </ul>
            </div>
        </div>

         <div class="col-lg-6 col-md-6 text-center">
          <img src="public/img/img_icon2.png">
         </div>
         <a href="{{url('manage/login/')}}<?php echo '/'.base64_encode(5);?>"><button class="btn btn-success">Register Your academy</button></a>
         <div class="clearfix margin20"></div> 
  
       </div>
  
   </div>
   
</div>

 <div class="clearfix margin20"></div> 
 <div class="clearfix margin20"></div> 
 <div class="clearfix"></div>
    <div class="container" id="support">
      <div class="row">
       <!--   <div class="heading-center">
           <h3>Support</h3>
             <p>For more info and support, contact us!</p>
         </div> -->
         <!-- <div class="col-lg-1 col-md-1"></div> -->
           

           <!-- COMMENTED THE SPORTS FACILITY OWNERS SECTION -->

           <!-- <div class="col-lg-6 col-md-5">
              <div class="right-cont cont_box">
               <h3>For Sports Facility Owners</h3>
               <p>Help to get more revenue out of the facility</p>
               <ul  class="cont_box_li">
                 <li>To maintain the facility better</li>
                 <li>Best and dedicated coaches</li>
               </ul>
            </div>
        </div> -->
   
           <div class="col-lg-1 col-md-1"></div>
           <div class="col-lg-5 col-md-5">
              <div class="right-cont">
               <h3>For Coaches & professionals</h3>
               <ul  class="cont_box_li">
                 <li>Information about sports jobs & sports quota jobs</li>
                  <li>Assistance for academy and coaching</li>
                  <li>Help in creating Online presence</li>
                  <li>Excellent Social Media Promotion</li>
                  <li>Increase in revenue</li>
               </ul>
            </div>
        </div>

         <div class="col-lg-6 col-md-6 text-center">
          <img src="public/img/img.png">
         </div>
         
         <div class="clearfix margin20"></div> 
       </div>
       <a href="{{url('coach')}}"><button class="btn btn-success">Join us</button></a>
   </div>
@stop