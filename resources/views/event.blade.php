@extends('layouts.master')
@section('pageTitle','Home')
@section('content')



         <div class="joblist-bg eventBg bannerBgSec">
           <div class="container">
       	     <div class="row">
       	       <div class="col-md-12">
         		     <div class="ban-pera">
             			  <h1>Sports events in India</h1>
             			  <h3>Never miss out on Sports Trials or coaching camps. Get first hand information on your GetSporty App.</h3>         			
           	     </div>
                </div>
            </div>
          </div>
        </div>
        <div class="relative">
              <div class="blue-bg"></div>
              <div class="play-icon" data-toggle="modal" data-target="#myModal">
        	       <img src="{{asset('img/play-icon.svg')}} ">
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
        	 	      <div class="heading-center  m0 pad15">
            	       <h3>Event</h3>
               	   <p>India is scrutinize as a country of teeming popular sports events and their universality is also measured by the regional prominence. While cricket is among one of the most popular sports events in India, the other prominent sports events in India include Football, Hockey, Wrestling, Badminton, Tennis, Chess, Kabaddi, Snooker and boxing.
Aloof from national level sports events, India has also hosted several International sports events such as Asian Games during the year 1951 and 1982, 2010 Hockey World Cup and 2010 Commonwealth Games. However, the year 2017 has brought India to the eminence as they hosted FIFA U-17 World Cup and set high standards of the endowment.
Overall, sports events in India are always amusing to unite with. Every year we all anxiously wait to receive the sports events calendar so we can block our agenda and plan our schedule, travel in advance. Consequently, for the sports events calendar, you don’t have to rush anywhere we will bear you to the latest updates on all the big sports events in India. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone through our website hassle-free.
</p>
                  </div>      
                  <div id="event_listing"> </div>
                            
                					 
  	       <div class="clearfix margin20"></div>

    	      <!--  <div class="text-center">
    	       	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
  <span class="sr-only">Loading...</span>
    	       </div> -->
             <div class="text-center">         
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
getEventListing();

});// End of Doucument Ready
</script>



@stop   