@extends('layouts.master')
@section('pageTitle','Sports Tournaments In My City | Sports Tournaments In India')
@section('meta')
<meta name="description" content="Get all the latest updates on the upcoming Sports Tournaments In My City & Sports Tournaments in India.">
<meta name="keywords" content="sports tournaments in my city, sports tournaments in india, sports tournaments">
<meta property="og:image" content="https://getsporty.in/23376596_1450074778394787_4309845126431335508_n (1).png">
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
               	   <p>Never miss an opportunity to impress and be never short on practice. Get all the updates on the latest and the upcoming sports tournaments in the area near you.</p>
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