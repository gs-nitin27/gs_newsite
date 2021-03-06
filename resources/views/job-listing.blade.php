@extends('layouts.master')
@section('pageTitle','Govt. & Private Sector Sports Jobs in India - Getsporty')
@section('meta')
<meta name="description" content="Find your dream sports job. Browse through all the latest Govt. & Private Sector Sports Jobs in India through our specially devoted Sports Job Portal Getsporty.">
<meta name="keywords" content="sports job in india, sports job portal,private sector sports jobs in india,govt sports job in india">
<meta property="og:image" content="https://getsporty.in/23376596_1450074778394787_4309845126431335508_n (1).png">
<link href="{{asset('public/css/subscribe.css')}}" rel="stylesheet">
@endsection
@section('content')
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
               <div id="contactform">
  <div id="contact-button">   
    <div class="rotated-text">Subscribe</div>
  </div>
  <form id="subs_form" action="{{url('/user_susbcription')}}" method="POST"  enctype='multipart/form-data'>
    {{ csrf_field() }} 
    <div class="sub_label">Jobs</div>
    <input type="text" name="name" id="name" placeholder="Full Name" Required/>
    <input type="text" name="email" id="email" placeholder="Email" Required/>
    <input type="Number" name="phone" id="phone" placeholder="Contact No." Required/>
    <input type="text" name="type" id="type" placeholder="Designation" Required />
    <input type="text" name="sport" id="sport" placeholder="Sport" Required />
    <input type="hidden" name="where" id="where" value="title" Required />
    <input type="hidden" name="module" id="module" value="1" Required />
    <input type="hidden" name="mod_name" id="mod_name" value="job" Required />
    <input type="hidden" name="ipaddress" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <button type="submit" name="submit">Subscribe</button>
  </form> 
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