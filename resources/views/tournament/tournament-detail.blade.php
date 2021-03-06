@extends('layouts.master')
@section('pageTitle','Home')
@section('content')

     <div class="joblist-bg tournamentBg bannerBgSec">
     
          <div class="container">
       	    <div class="row">
       	      <div class="col-md-12">
       		    <div class="ban-pera">
       			  <h1>Lorem ispum is dummy </h1>
       			  <h3>Lorem ispum is dummy text.</h3>
       			
         	    </div>
               </div>
              </div>
             </div>
             
           
            </div>
        <div class="relative">
            <div class="blue-bg"></div>
             <div class="play-icon" data-toggle="modal" data-target="#myModal">
        	  <img src="{{asset('img/play-icon.svg')}}">
              </div>
            </div>      
         <!-- Modal pop -->
          <div id="getApp" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-body">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <section class="getAppBox text-center">
                              <h3>Get app</h3>
                              <p>Choose your native platform and get started!</p>
                              <img src="{{asset('img/play-btn.png')}}">
                              <img class="img-responsive" src="{{asset('img/app.png')}}">
                          </section>
                       </div>
                  </div>
              </div>
            </div>
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
            			 <div class="left-img-job"> <img src="https://getsporty.in/portal/uploads/tournament/{{$name[0]->image}}"> </div>		
        		    </div>
        		    <div class="col-lg-5 col-md-5">
        			       <div class="right-list-job" style="padding: 50px 0 0 0;">
        				          <h4>{{$name[0]->name}}</h4>
                          <p> Location : <span> {{$name[0]->address_1}}</span></p>
                          <p> Start : <span> {{$name[0]->start_date}}</span></p>
                          <p> Entry : <span> {{$name[0]->event_entry_date}} </span></p>
                          <p> Sport : <span>{{$name[0]->sport}} </span></p>
        			       </div>
        		    </div>
        		    <div class=" clearfix margin15"></div>
        			  <div class="right-list-job pad15">
          			    <p>Tournament  Description : 
                        <span> {{$name[0]->description}}.
            			      </span>        			       
                    </p>        			   
              			<p> Tournamnet Rules : <span>Recognised degree from a reputed university. Adequate experience in the related field preferably in CBSE / International School. Specialization in the subject for which a candidate is applying for the job. </span></p>
              			   
              			<p>Key Requirement :  <span>Fluency in English is a must.</span></p>        			    
              			<p>Sponsore Name : <span> {{$name[0]->organiser_name}}.</span></p>        			     
              			<p>About Organiser : 
                        <span> {{$name[0]->name}}.</span>
                    </p>        			
              			<p>Organazition Address : <span>{{$name[0]->address_1}}</span></p>        			
              			<p>Organazition City : <span>{{$name[0]->org_city}}</span></p>        			 
            			  <p>Organazition Pin : <span>{{$name[0]->org_pin}}</span></p>      			  
            			  <p>For more info : <span class="read-c"><a href="{{$name[0]->tournaments_link}}"> Click here</a> </span></p>
        			 </div>
        		</div>
        </div>
  	 <div class="clearfix margin20"></div>
      <section class="testimonials">
	        <div class="container">
              <div class="row pad15">
                  <div class="heading-center">
            	       <h3>Related Tournamnet</h3>
               	      <p>Learn more about this feature packed App</p>
                  </div>
                  <div id="customers-testimonials2" class="owl-carousel">
                  @for($i=0;$i<count($name1);$i++)

                      <div class="item">
                          <div class="img-box">
                              <img src="https://getsporty.in/portal/uploads/tournament/{{$name1[0]->image}}">
                          </div>
                          <div class="slide-job-list">
                              <h4>{{$name1[$i]->name}}</h4>
          				            <p> Location : <span> {{$name1[$i]->name}}</span></p>
          				            <p> Posted : <span> 2 days ago </span></p>
          				            <p> Organisation Name : <span> {{$name1[$i]->name}} </span></p>
          				            <p class="read-c"> Read More </p>                                  
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
    </section>   


     <div class="sidebarMide">
     <div class="fb-share-button" data-href="http://localhost/get/gs_newsite/tournament-detail/{$name[0]->id}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
     <i class="fa fa-facebook"></i></a></div>

     <a href="https://twitter.com/share" class="twitter-share-button fa fa-twitter" data-size="large" data-text="{{$name[0]->name}}" data-url="http://localhost/get/gs_newsite/tournament-detail/{{$name[0]->id}}" data-show-count="false" >
    </a> 

    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>> 

     <a href=" https://www.linkedin.com/shareArticle?mini=true&url=http://localhost/get/gs_newsite/event-detail/{{$name[0]->id}}&title={{$name[0]->name}}
    &summary={{$name[0]->name}}&source=LinkedIn" class="cleateJob" style="background-color: #1686b0;"><i class="fa fa-linkedin"></i></a>

  <div class="pin">
  <a style="background-color: #FA0001" data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url=http://localhost/get/gs_newsite/event-detail/{$name[0]->id}}&media=https://getsporty.in/portal/uploads/tournament/$name[0]->image}}&summary={{$name[0]->name}}" data-pin-config="beside"><i class="fa fa-pinterest-p"></i>  </a>
  
  </div>
  

   <div class="g-plusflat">
   <script src="https://apis.google.com/js/platform.js" async defer></script>
     <!-- Place this tag where you want the share button to render. -->
     <div class="g-plus" data-action="share" data-height="24"></div> 
  </div>
        
</div>





    <!--  <div class="sidebarMide">
        <a href="#" class="cleateJob"><i class="fa fa-facebook"></i></a>
        <a href="#" class="cleateJob"><i class="fa fa-twitter"></i></a>        
        <a href="#" class="cleateJob" style="background-color: #db2814;"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="cleateJob" style="background-color: #1686b0;"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="cleateJob" style="background-color: #FA0001"><i class="fa fa-pinterest-p"></i></a>
     </div>
 -->

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