@extends('layouts.master')
@section('pageTitle','Home')
@section('content')



     <div class="joblist-bg eventBg bannerBgSec">
     
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
        	  <img src="img/play-icon.svg">
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
        	<div class="container">
        	 	 <div class="row">
        		   <div class="col-lg-7 col-md-7">
            			 <div class="left-img-job"> <img src="https://getsporty.in/portal/uploads/event/{{$name[0]->image}}"> </div>		
        		    </div>
        		    <div class="col-lg-5 col-md-5">
        			       <div class="right-list-job" style="padding: 50px 0 0 0;">
                     <h4>  </h4>
      				            <h4>
                          {{$name1[0]->name}}
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
                        <span> {{$name[0]->description}}
                        </span>        			       
                    </p>        			   
              			<p> Tournamnet Rules : <span>Recognised degree from a reputed university. Adequate experience in the related field preferably in CBSE / International School. Specialization in the subject for which a candidate is applying for the job. </span></p>
              			   
              			<p>Key Requirement :  <span>Fluency in English is a must.</span></p>        			    
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
      <section class="testimonials">
	        <div class="container">
              <div class="row pad15">
                  <div class="heading-center">
            	       <h3>Related Event</h3>
               	      <p>Learn more about this feature packed App</p>
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
          				            <p> Organizer Name : <span> {{$name1[$i]->organizer_name}} </span></p>
          				            <p> Location  : <span> {{$name1[$i]->organizer_city}} </span></p>
                              <p> Email  : <span> {{$name1[$i]->email_app_collection}} </span></p>
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
          <a href="#" class="cleateJob"><i class="fa fa-facebook"></i></a>
          <a href="#" class="cleateJob"><i class="fa fa-twitter"></i></a>        
          <a href="#" class="cleateJob" style="background-color: #db2814;"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="cleateJob" style="background-color: #1686b0;"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="cleateJob" style="background-color: #FA0001"><i class="fa fa-pinterest-p"></i></a>
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