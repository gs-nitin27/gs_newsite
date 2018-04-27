@extends('layouts.master')
@section('pageTitle','Sports Events In My City | Sports Events In India')
@section('meta')
<meta name="description" content="Get all the latest updates on the upcoming Sports Events In My City & Sports Events in India.">
<meta name="keywords" content="sports events in india, sports events in my city">
@endsection
@section('content')
 <!--   @include('layouts.head')
 -->
 <style type="text/css">
   p{font-size: 10px;}
 </style>
 <div class="joblist-bg tournamentBg bannerBgSec">
           <div class="container">
             <div class="row">
               <div class="col-md-12">
                 <div class="ban-pera">
                  <br><br><h1>Trials</h1>
                    <h3>Never miss out on Sports Trials or coaching camps. Get first hand information on your GetSporty App.</h3>               
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
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/bVcfL6KtFfs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                    </div>
                </div>
            </div>
            <div class="clearfix margin20"></div>
            <div class="container">
               <div class="row">
                   <div class="heading-center m0 pad15">
                    <h3>Sports Trials In India</h3>
                   </div>
                   <div class="about-content">
                   <p>India is basically descrize as a country of sports. We have a huge history of sports events, tournaments but now colleges and universities are organizing sports trials so that people from sports quota can get a chance to play for India through different sports trials such as cricket trials and football trials.
                   While cricket is seen as one of the prominent sports trials in India, whereas Football and hockey also take a dig into the sports trials. Sports Trials in India are basically a series of tests that are taken into account to choose the valuable players for the upcoming sports events or tournaments. The selected players get a chance to play for India in various tournaments and also reserve their seats in various sports events going to take place in India.</p><div class="margin15 clearfix"></div><p>
                   Indeed, people who are eagerly waiting to take part in sports trials in India should never be short of practice because we at getsporty will update you about every sports trial going to held on different schools, colleges or universities in the areas near you. Nevertheless, our website www.getsorty.in is always available to help you because you will get all the enlightenment at one place without the need to surge anywhere on the internet.
                   All the sports will have their notoriety to shine through sports in India. So, just for you, we have cramped a list of sports trials in India to be held in 2018. Believe us, there’s a lot more to go:</p></div>      
               <div  id="event_listing"> 
               </div> 
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript" src="assets/js/data.js"></script>
                
<script type="text/javascript" >
jQuery(document).ready(function()
{ 
var module  = "event";
var id = "#event_listing";
getListing(module,id);

});// End of Doucument Ready
</script>

</body>
         <script type="text/javascript">
           var image_url = '<?php echo config('constant.IMAGE_URL');?>';
           var service_url = '<?php echo url('/');?>';
         </script>
   </html>  
   @stop