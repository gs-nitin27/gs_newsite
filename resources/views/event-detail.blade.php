@extends('layouts.master')
@section('pageTitle','Event')
@section('meta')
<meta name="description" content="">
<meta name="keywords" content="@yield('keywords')">
<meta name="twitter:dnt" content="on">
<meta property="og:title" content="{{$name[0]->name}}" /> 
<meta property="og:description" content="" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:image" content="<?php echo config('constant.IMAGE_URL').'/event/'.$name[0]->image; ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@getsporty" />
<meta name="twitter:title" content="{{$name[0]->name}}" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="<?php echo config('constant.IMAGE_URL').'/event/'.$name[0]->image; ?>"
 />
@endsection
@section('content')



     <div class="joblist-bg eventBg bannerBgSec">
            <div class="container">
       	    <div class="row">
       	      <div class="col-md-12">
       		    <div class="ban-pera">
       			  <h1></h1>
       			  <h3>{{$name1[0]->type}}</h3>
       			
         	    </div>
               </div>
              </div>
             </div>
             
           
            </div>
        <div class="relative">
            <div class="blue-bg"></div>
             <div class="play-icon" data-toggle="modal" data-target="#myModal">
        	  <img src="{{asset('public/img/play-icon.svg')}}">
              </div>
            </div>      
         <!-- Modal pop -->
          <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                  <div class="modal-content">
                       <div class="modal-body">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <iframe width="100%" height="315" src="https://www.youtube.com/embed/bVcfL6KtFfs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                       </div>
                  </div>
              </div>
          </div>
          <div class="clearfix margin20"></div>
        	<div class="container">
        	 	 <div class="row">
        		   <div class="col-lg-7 col-md-7">
            			 <div class="left-img-job"> <img src="https://getsporty.in/portal/uploads/event/{{$name[0]->image}}"> </div>		
        		    </div>
        		    <div class="col-lg-5 col-md-5">
        			       <div class="right-list-job" style="padding: 50px 0 0 0;">
                     <h4>  </h4>
      				            <h4>
                          
                          {{$name[0]->name}}
                          </h4>
                          <p> Type : <span> {{$name[0]->type}}</span></p>
                          <p> Organizer Name : <span> {{$name[0]->organizer_name}}</span></p>
                          <p> Location : <span> {{$name[0]->organizer_city}}. </span></p>
                          <p> Email : <span>{{$name[0]->email_app_collection}}</span></p>
        			       </div>
        		    </div>
        		    <div class=" clearfix margin15"></div>
        			  <div class="right-list-job pad15">
          			    <p>Event  Description : 
                        <span> {!!$name[0]->description!!}
                        </span>        			       
                    </p>        			   
              			<p>Event Name : <span> {{$name[0]->name}}.</span></p>        			     
              			<p>Event Organiser : 
                        <span> {{$name[0]->organizer_name}}.</span>
                    </p>        			
              			<p>Event Address : <span>{{$name[0]->address_1}}</span></p>        			
              			<p>Event City : <span>{{$name[0]->organizer_city}}</span></p>        			 
            			  <p>Event Pin : <span>{{$name[0]->pin}} </span></p>      			  
            			  <p>For more info : <span class="read-c"><a href="{{$name[0]->event_links}}"> Click here</a> </span></p>
        			 </div>
        		</div>
        </div>

  	 <div class="clearfix margin20"></div>
      <?php if(!empty($name1)){ ?>
      <section class="testimonials">
	        <div class="container">
              <div class="row pad15">
                  <div class="heading-center">
            	       <h3>Related Event</h3>
               	     
                  </div>
                  <div id="customers-testimonials2" class="owl-carousel">
                 @for($i=0;$i<count($name1);$i++)
                      <div class="item">
                          <div class="img-box">
                              <img src="https://getsporty.in/portal/uploads/event/{{$name1[$i]->image}}">
                          </div>
                          <div class="slide-job-list">
                              <h4>{{$name1[$i]->name}}</h4>
          				            <p> Type :   <span> {{$name1[$i]->type}} </span></p>
          				            <p> Start : <span>  <?php echo date('d F',strtotime($name1[$i]->start_date)) ?> - <?php echo date('d F, Y',strtotime($name1[$i]->end_date)) ?></span></p>
                              <p> Entry : <span><?php echo date('d F',strtotime($name1[$i]->entry_start_date)) ?> - <?php echo date('d F, Y',strtotime($name1[$i]->entry_end_date)) ?></span></p>
          				            <p> Location  : <span> {{$name1[$i]->organizer_city}} </span></p>
                              <p class="read-c"><a href="{{$name1[$i]->id}}" target="_blank">Read More</a> </p>                                  
                          </div>
                      </div>
                      @endfor
                  </div>
                  

                        <!--<div class="customNavigation">
							<div class="l-arrow cursor">
							  <i class="fa fa-arrow-left" aria-hidden="true"></i>
							   </div>
								<div class="r-arrow cursor">
								<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</div>
						   </div>-->

              </div>
          </div>
    </section> <?php } ?> 


  
    <div class="sidebarMide">
     <div class="fb-share-button" data-href="{{Request::url()}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
     <i class="fa fa-facebook"></i></a></div>

     <div><a href="https://twitter.com/share" class="twitter-share-button fa fa-twitter" data-size="large" data-text="{{$name[0]->name}}" data-url="{{Request::url()}}" data-show-count="false" >
    </a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>

     <a href=" https://www.linkedin.com/shareArticle?mini=true&url={{Request::url()}}&title={{$name[0]->name}}
    &summary={!!$name[0]->name!!}&source=LinkedIn" class="cleateJob" style="background-color: #1686b0;"><i class="fa fa-linkedin"></i></a>

  <div class="pin">
  <a style="background-color: #FA0001" data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url={{Request::url()}}&media=https://getsporty.in/portal/uploads/event/$name[0]->image}}&summary={{$name[0]->name}}" data-pin-config="beside"><i class="fa fa-pinterest-p"></i>  </a>
  
  </div>
  

   <div class="g-plusflat">
   <script src="https://apis.google.com/js/platform.js" async defer></script>
     <!-- Place this tag where you want the share button to render. -->
     <div class="g-plus" data-action="share" data-height="24"></div> 
  </div>
        

<!-- 
          <a href="#" class="cleateJob"><i class="fa fa-twitter"></i></a> 

          <a href="#" class="cleateJob" style="background-color: #db2814;"><i class="fa fa-google-plus"></i></a>
     -->
    </div>


 
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