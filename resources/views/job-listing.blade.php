@extends('layouts.master')
@section('pageTitle','Jobs')
@section('description','Find your dream sports job. Browse through all the latest sports jobs in the Goverment or private sector through our specially devoted Sports Job Portal')
@section('keywords','Latest Jobs')
@section('content')
<!-- @include('layouts.head') -->
<style type="text/css">
   p{font-size: 10px;}
 </style>
         <div class="joblist-bg bannerBgSec">
           <div class="container">
       	     <div class="row">
       	       <div class="col-md-12">
       		     <div class="ban-pera">
       			  <h1>Job</h1>
       			  <h3>A unique platform dedicated only to Sports Jobs. Browse and apply to thousands of Sports Jobs.</h3>
       			
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

            <div id="getApp" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-body">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <section class="getAppBox text-center">
                              <h3>Get app</h3>
                              <p>Choose your native platform and get started!</p>
                              <img src="public/img/play-btn.png">
                              <img class="img-responsive" src="public/img/app.png">
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
            <!-- Modal pop -->

             <div class="clearfix margin20"></div>
        	    <div class="container">
        	     <div class="row">
        	 	  <div class="heading-center m0 pad15">
                  <h3>Sports jobs in India</h3>
             </div>
                   
              <div class="about-content">
                      
          	       
             	   <p>We are always gratified to live in a country like India, where sports has an approach to connect people through the availability of sports jobs in India. Cricket is considered as a religion, football is a way of life and hockey highlights secularism.
Sports jobs in India are also making an identity at various levels, most importantly in cricket, tennis, hockey, athletics and chess. There is a wide range of sports job in India in which an ample number of opportunities are available to give a boost to your career.</p>
<div class="margin15 clearfix"></div>
<p>Vaguely, you can treasure your dream job through our website and can conveniently browse through all the latest sports jobs in the government or private sector.Indeed, India as a nation is a breeding ground for sports jobs. Though by having a sports jobs in India you can be the part of taking India to both national and international levels.
So, if you are passionate about sports and want to handle the business side of the game then there are exciting career options for you of having sports in India available on our website and can take the first step towards your fantasy world.
Let us assist you to uncover the path of different types of sports job in India and make it easier for you to choose your kind of sports job. So here is a small list of types of sports jobs in India available on our website:
Sports Agent:
Sports agents look after the athlete’s professional career and act as a bridge between the player and the outside world.
Sports Information Directors:
Sports Informational Directors work closely with a sports team and various media outlets to bolster public relations through positive media coverage.
Sports Marketing Manager:
Marketing is an important part of any business and equally so for the world of sports, as it helps in promoting and sponsoring sports events.
Lecturer:
With a degree in Sports Management, you can become a lecturer too, and teach at colleges and universities.
Sports Event Manager:
A degree in Sports Management also allows you to be a part of the event planning team.
</p>
                    </div>
                                  <div id="job_listing"> </div>
            </div>
  	       <div class="clearfix margin20"></div>
  	       <script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>


<script type="text/javascript" src="assets/js/data.js"></script>
                
<script type="text/javascript" >
jQuery(document).ready(function()
{ 
var module  = "job";
var id = "#job_listing";
getListing(module,id)
});// End of Doucument Ready
</script>
@stop   