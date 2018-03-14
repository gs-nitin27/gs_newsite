@extends('layouts.master')
@section('pageTitle','Home')
@section('content')


      <div class="article-bg bannerBgSec">
       
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
        <!-- Mpdal Popup -->

            <div class="clearfix margin20"></div>
             <div class="container">
        	   <div class="row">
        	     <div class="article-detail">
        	      <img class="img-responsive" src="https://getsporty.in/portal/uploads/resources/{{$name[0]->image}}">
        	       </div> 
        	       <div class="margin15"></div>
        	       <div class="content">
        	       	<p>{{$name[0]->topic_of_artical}} / {{$name[0]->location}} / {{$name[0]->date_created}}</p>
        	         <h4>{{$name[0]->title}}</h4>
        	         <p>{{$name[0]->summary}}
        	         <div class="margin15"></div>
        	         <hr>
        	         <h4>Here are some features of our App:</h4>
        	         <p>{{$name[0]->description}}</p>
        	        </div>       	     
             	  </div>
                </div> 

  		<div class="clearfix margin20"></div>
          <section class="testimonials">
	        <div class="container">
              <div class="row">
                <div class="heading-center">
          	     <h3>Related article</h3>
             	  <p>Learn more about this feature packed App</p>
                  </div>
                  <div id="customers-testimonials2" class="owl-carousel">
                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				          <p class="read-c"> Read More </p>
                          </div>
                         </div>

                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img2.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				          <p class="read-c"> Read More </p>
                           </div>
                          </div>
                         
                  <div class="item">
                   <div class="img-box">
                    <img src="img/box-img3.jpg">
                     </div>
                      <div class="white-b">
                       <h4>Aanchal Thakur wins India's first skiing medal</h4>
				        <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				         <p class="read-c"> Read More </p>
                          </div>
                         </div>

                   <div class="item">
                    <div class="img-box">
                     <img src="img/box-img.jpg">
                      </div>
                       <div class="white-b">
                        <h4>Aanchal Thakur wins India's first skiing medal</h4>
				         <p>Aanchal Thakur entered into the history books after she clinched a Bronze medal in the coveted Alpine Ejder 3200 Cup organized by the Federation Internationale de Ski. Aanchal, who hails from a small...</p>
				           <p class="read-c"> Read More </p>
                            </div>
                            </div>
                    
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