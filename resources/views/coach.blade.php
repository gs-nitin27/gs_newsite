@extends('layouts.master')
@section('pageTitle','Latest Sports News India & Resources - Getsporty')
@section('meta')
<link href="{{asset('public/css/b_style.css')}}" rel="stylesheet">
@endsection
@section('content')

  
       <div class="Business_professional bannerBgSec">
          <div class="container">
       	    <div class="row">
       	      <div class="col-md-12">
       		    <div class="ban-pera business_head">
       			  <h1>Getsporty is looking for <br> young & Dynamic Coaches </h1>
       			 <!--  <h3>Lorem ispum is dummy text.</h3>	 -->
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
             <div class="clearfix"></div>
      	     <div class="container">
        	 	     <div class="row">
                 <!-- <div class="heading-center m0 pad15">
          	      <h3>About Us</h3>
             	   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt.</p>
                    </div>
                     -->
                    <div class="about-content">
                      <div class="margin15 clearfix"></div>
                        <div class="margin20 clearfix"></div>
                       <div class="row">
                     	<div class="col-lg-6">
                        <h3 class="text-uppercase">How will getsporty help you?</h3>

                          <ul class="business_list">
                            <li>Get Your own acadmy to run.</li>
                            <li>No Hassle of management & Expenses on equipment or infrastructure.</li>
                            <li>Student management & assessment using cuting edge technology.</li>
                            <li>Getsporty sponsorship for further certification. </li>
                           </ul>                           

                       </div>

                       <div class="col-lg-6 text-center">
                          <img src="public/img/coach.png" class="img-fluid">
                         </div> 
                         </div>
        	            </div>
                    </div>
					        </div>
 				


                   <div class="clearfix"></div>
           <div class="partner_bg">
               <div class="container">
                 <div class="row">
                <div class="heading-center m0 pad15">
                  <h3>How do i become partner coach?</h3>
                
                    </div>
                    
                    <div class="about-content">
                      <div class="margin15 clearfix"></div>
                        <div class="margin20 clearfix"></div>
                       <div class="row">
                      <div class="col-lg-6 text-center">
                        <img src="public/img/heand_shak.png" class="img-fluid">
                       </div>

                       <div class="col-lg-6">
                          <ul class="business_list">
                            <li>Send your resume at info@darkhorsesports.in.</li>
                            <li>We will have one to one interaction with you and small assessment test.</li>
                            <li>Background check as you will be interacting with kids we have to be sure.</li>
                            <li>Then you are good to go. </li>
                           </ul>  
                         </div> 
                         </div>
                      </div>
                    </div>
                  </div>

           </div>





     <div class="clearfix"></div>
               <!-- <div class="container" id="feature">
                <div class="row pad15">
                 <div class="heading-center">
                  <h3>Testimonial</h3>
             
                    </div>  
                    <div class="owl-carousel owl-theme">
                 <div class="item">
                  <div class="box-app box-app_text slid_box_height">
                    <div class="business_slid">
                      <img src="img/slider-img1.png" class="img-responsive">
                      </div>
                     <h4>Sonia</h4>
                   <p>Hired #stockblockframes  as wedding photographer… Great resource through #UrbanClap</p>
                   </div>
                    </div>
                        <div class="item">
                 <div class="box-app box-app_text slid_box_height">
                   <div class="business_slid">
                    <img src="img/slider-img2.png" class="img-responsive">
                     </div>
                    <h4>Deeksha</h4>
                   <p>Such hygienic services  by UrbanClap. Super impressed! :clap:</p>
                  </div>
                 </div>
           <div class="item">
                <div class="box-app box-app_text slid_box_height">
                 <div class="business_slid ">
               <img src="img/slider-img3.png" class="img-responsive">
                    </div>
                    <h4>Smriti Advani</h4>
                   <p>Being a new mom is super time consuming and you guys came to my rescue with your awesome home 
                      salon services! Thanks!</p>
                   </div>
                 </div> -->
           <!--  <div class="item">
                <div class="box-app">
                  <div class="circle-box">
                    <img src="img/feature-img4.svg">
                     </div>
                     <h4>Connect</h4>
                    <p>We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone</p>
                    </div>
                  </div> -->
        <!--           
             <div class="item">
                  <div class="box-app">
                   <div class="circle-box">
                    <img src="img/feature-img.svg">
                     </div>
                     <h4>Events</h4>
                     <p>We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone</p>
                     </div>
                    </div> -->
                  <!-- </div>
                    </div>
                </div>              
 -->

 
 <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
               loop: true,
                margin: 20,
                responsiveClass: true,
                 autoplay: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                
                  }
                }
              })
            })
 </script> 
 @stop 
