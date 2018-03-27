
@extends('layouts.master')
@section('pageTitle','Home')
@section('content')

         <div class="joblist-bg bannerBgSec">
           <div class="container">
       	     <div class="row">
       	       <div class="col-md-12">
       		     <div class="ban-pera">
       			  <h1>Sports jobs in India</h1>
       			  <h3>A unique platform dedicated only to Sports Jobs. Browse and apply to thousands of Sports Jobs.</h3>
       			
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
                <!-- Modal content-->
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
                <!-- Modal content-->
                <div class="modal-content">
                   <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/YeYXeoYXZwY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   </div>
                  </div>
                </div>
            </div>
            <!-- Modal pop -->

             <div class="clearfix margin20"></div>
        	    <div class="container">
        	     <div class="row">
        	 	  <div class="heading-center  m0 pad15">
          	       <h3>Sports jobs in India</h3>
             	   <p>A unique platform dedicated only to Sports Jobs. Browse and apply to thousands of Sports Jobs.</p>
                    </div>

                                  <div id="job_listing"> </div>
   
      

               
</div>
                  
                
  
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
getJobListing();

});// End of Doucument Ready
</script>




@stop   