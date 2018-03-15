@extends('layouts.master')
@section('pageTitle','Home')
@section('content')



     <div class="joblist-bg bannerBgSec">
     
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
            <div id="getApp" class="modal fade" role="dialog">
              <div class="modal-dialog">                 
                  <div class="modal-content">
                     <div class="modal-body">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <section class="getAppBox text-center">
                              <h3>Get app</h3>
                              <p>Choose your native platform and get started!</p>
                              <img src="img/play-btn.png">
                              <img class="img-responsive" src="img/app.png">
                          </section>
                       </div>
                  </div>
              </div>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">   
                  <div class="modal-content">
                       <div class="modal-body">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <iframe width="100%" height="315" src="https://www.youtube.com/embed/YeYXeoYXZwY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                       </div>
                    </div>
                </div>
            </div>
          <!-- Modal Popup -->

             <div class="clearfix margin20"></div>
        	   <div class="container">
        	 	 <div class="row">
        		   <div class="col-lg-7 col-md-7">
        			 <div class="left-img-job">
        				<img src="https://getsporty.in/portal/uploads/job/{{$name[0]->image}}">
        			  </div>		
        		    </div>
        		    <div class="col-lg-5 col-md-5">
        			  <div class="right-list-job">
        				<h4>{{$name[0]->title}}</h4>
        				<p>	Sports :<span>{{$name[0]->title}}</span></p>
        				<p>	Gender :<span>  {{$name[0]->gender}}</span></p>
        				<p>	Job Type :<span> {{$name[0]->type}}</span></p>
        				<p>	Email : <span>{{$name[0]->type}}</span></p>		
        				<p>	Job Work Experience : <span>	{{$name[0]->work_experience}} </span></p>
        			   </div>
        		      </div>
        		     <div class=" clearfix margin15"></div>
        			   <div class="right-list-job pad15">
        			    <p>Job Description : <span> {{$name[0]->description}}.
        			      </span>
        			       </p>
        			 
        			 <p> Qualification : <span>{{$name[0]->description}}. </span></p>
        			  
        			<p>Key Requirement :  <span>Fluency in English is a must.</span></p>
        			    
        			<p>Organiser Name : <span> {{$name[0]->organisation_name}}.</span></p>
        			     
        			<p>About Organiser : <span> {{$name[0]->about}}.</span></p>
        			
        			<p>Organazition Address : <span>{{$name[0]->address1}}</span></p>
        			
        			 <p>Organazition City : <span>{{$name[0]->org_city}}</span></p>
        			 
        			  <p>Organazition Pin : <span>{{$name[0]->pin}}</span></p>
        			  
        			   <p>For more info : <span class="read-c"><a href="{{$name[0]->job_link}}"> Click here</a> </span></p>
        			    </div>
        		      </div>
        		    </div>
  	 <div class="clearfix margin20"></div>
      <section class="testimonials">
	        <div class="container">
              <div class="row pad15">
                <div class="heading-center">
          	     <h3>Related Job</h3>
             	  <p>Learn more about this feature packed App</p>
                  </div>
                  <div id="customers-testimonials2" class="owl-carousel">

                  @for($i=0;$i<count($name1);$i++)
                   <div class="item">
                    <div class="img-box">
                     <img src="https://getsporty.in/portal/uploads/job/{{$name1[$i]->image}}">
                      </div>
                       <div class="slide-job-list">
                         <h4>{{$name1[$i]->title}}</h4>
				          <p> Location : <span> {{$name1[$i]->org_city}} </span></p>
				           <p> Posted : <span> 2 days ago </span></p>
				             <p> Organisation Name : <span> {{$name1[$i]->organisation_name}} </span></p>
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