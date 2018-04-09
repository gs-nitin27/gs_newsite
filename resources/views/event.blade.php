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
                  <br><br><h1>Event</h1>
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
                    <h3>Sports events in India</h3>
                   </div>
        	 	       <div class="about-content">
            	     <p>India is scrutinize as a country of teeming popular sports events and their universality is also measured by the regional prominence. While cricket is among one of the most popular sports events in India, the other prominent sports events in India include Football, Hockey, Wrestling, Badminton, Tennis, Chess, Kabaddi, Snooker and boxing.
Aloof from national level sports events, India has also hosted several International sports events such as Asian Games during the year 1951 and 1982, 2010 Hockey World Cup and 2010 Commonwealth Games. However, the year 2017 has brought India to the eminence as they hosted FIFA U-17 World Cup and set high standards of the endowment.</p><div class="margin15 clearfix"></div><p>
Overall, sports events in India are always amusing to unite with. Every year we all anxiously wait to receive the sports events calendar so we can block our agenda and plan our schedule, travel in advance. Consequently, for the sports events calendar, you don’t have to rush anywhere we will bear you to the latest updates on all the big sports events in India. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone through our website hassle-free.
Some of the most acclaimed sports events in India are mentioned below:
Cricket world cups in India
Hockey world cups in India
Commonwealth games 2010 in India
Asian Games in India
South Asian Games in India
Paramountly, for sports freaks we are soon going to organize sports events in India in which any sports person can take part and take one step ahead of their dreams to become a marvellous sportsperson and represent their country on both national and international level. Shortly, we will update you all about our sports events. So, get ready for the venture!

</p>
                  </div>      


 <div  id="event_listing"> 


 </div> 
                            
         </div>       					 
  	       

    	      <!--  <div class="text-center">
    	       	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
  <span class="sr-only">Loading...</span>
    	       </div> -->
          <!--    <div class="text-center">         
                      <ul class="pagingSec">
                          <li><a href="#">Next</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#" class="active">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">...</a></li>
                          <li><a href="#">10</a></li>
                          <li><a href="#">11</a></li>
                          <li><a href="#">12</a></li>
                          <li><a href="#">Prev</a></li>
                      </ul>
                 </div>
     -->
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