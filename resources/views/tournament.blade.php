@extends('layouts.master')
@section('pageTitle','Sports Tournaments In My City | Sports Tournaments In India')
@section('meta')
<meta name="description" content="Get all the latest updates on the upcoming Sports Tournaments In My City & Sports Tournaments in India.">
<meta name="keywords" content="sports tournaments in my city, sports tournaments in india, sports tournaments">
<meta property="og:image" content="https://getsporty.in/23376596_1450074778394787_4309845126431335508_n (1).png">
<link href="{{asset('public/css/subscribe.css')}}" rel="stylesheet">
@endsection
@section('content')
<!-- @include('layouts.head') -->
<style type="text/css">
   p{font-size: 10px;}
 </style>
         <div class="joblist-bg tournamentBg bannerBgSec">
           <div class="container">
       	     <div class="row">
       	       <div class="col-md-12">
         		     <div class="ban-pera">
             			  <h1>Tournament</h1>
             			  <h3>Get regular updates about the upcoming Sports Tournaments and apply right away from the App.</h3>         			
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
     <div class="sub_label">Tournaments</div>
    <input type="text" name="name" id="name" placeholder="Full Name" Required/>
    <input type="text" name="email" id="email" placeholder="Email" Required/>
    <input type="Number" name="phone" id="phone" placeholder="Contact No." Required/>
    <input type="number" name="age" id="age" placeholder="Your Age" Required />
    <input type="text" name="sport" id="sport" placeholder="Sport" Required />
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
            <div class="clearfix margin20"></div>
        	  <div class="container">
        	     <div class="row">
        	 	      <div class="heading-center  m0 pad15">
            	       <h3>Sports tournaments in India</h3>
                   </div>
                   <div class="about-content">
               	   <p>Tournaments are basically a competition involving a relatively large number of competitors, all participating in a sport or game. In brief, tournaments is a competition involving a number of matches, each involving a subset of the competitors and the winner is determined based on the combined results of these individual matches.
India is a country which hosts a large number of sports tournaments every year and with a large number of sports tournaments in India including 2018 will be yet another year to look forward to. So people who are going to be a part of any sports tournaments in India should never miss an opportunity to impress and be never short on practice. 
Nevertheless, for all the updates and information about the upcoming sports tournaments in the area near you, you don’t have to surge anywhere just visit out the website and get all the enlightenment at one place.
Although cricket will have its share of the notoriety, other sports will also have their time to shine. So, take a look at the cramped list of sports tournaments in India to be held in 2018. Trust us, there’s a lot to look forward to:
U-14 Football Tournament
Meister Cup
7 heaven Football Tournament
7 heaven VolleyBall Tournament
Jaipur Cricket 
All India League


Consequently. India may not be the sports capital but it might have a large number of sports tournaments for the sports freaks to showcase their talent. The potential of sports to inspire people is not a new concept. Sports tournaments in India are used as highly effective vehicles to inspire and inveigle people.
</p>
                  </div>   

                  <div id="tour_listing"></div>  
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
  var module  = "tournament";
var id = "#tour_listing";
getListing(module,id);

});// End of Doucument Ready
</script>

@stop   