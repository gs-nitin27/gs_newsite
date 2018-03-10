<?php
//include 'session.php';
ob_start();
?>

       <nav class="navbar navbar-default bg0 affix" data-spy="affix" data-offset-top="10">
           <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
           <a class="navbar-brand logo" href="index.php"><img class="img-responsive" src="img/logo.png"></a>
         </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right text-uppercase">
              <!-- <li><a href="index.php">Home</a></li> -->
              <li><a href="aboutus.php">About us</a></li>
              <li><a href="#getApp" data-toggle="modal">Get app </a></li>
              <li><a href="job-listing.php">Job</a></li>
              <li class="active"><a href="team-detail.php">Team</a></li>
              <li><a href="article.php">Article</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Bussiness <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="" href="landing-job.php">  Job Landing </a></li>
                    <li><a class="" href="landing-event.php">  Event Landing  </a></li>
                    <li><a class="" href="tournament.php"> Tournament </a></li>
                </ul>
              </li>
              <li><a href="support.php">support</a></li>
            </ul>
           </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
         </nav><!-- /.navbar -->
       <div class="about-bg bannerBgSec">
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
			<!-- Modal Popup -->


              <div class="clearfix"></div>
        	   <div class="container">
        	 	<div class="row">
        	 	 <div class="heading-center m0 pad15">
          	      <h3>Our Team</h3>
             	   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt.</p>
                    </div>
                    
                   <div class="col-lg-4 col-md-4 text-center">
		           <img src="img/dp2.png">
		           <h4>NITIN AGARWAL</h4>
		           <span>Head, Web Development</span>
		           <div class="margin15"></div>
		           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
		            <div class="socails-team">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		             
                    </div>

    			     <div class="col-lg-4 col-md-4 text-center">
		           <img src="img/dp.png">
		           <h4>Anirudh Singh</h4>
		           <span>Founder & Product Architect</span>
		           <div class="margin15"></div>
		           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
		            <div class="socails-team">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		             
                    </div>

 			           <div class="col-lg-4 col-md-4 text-center">
		           <img src="img/dp3.png">
		           <h4>Sandeep Kumar Singh</h4>
		           <span>Head, Android Development</span>
		           <div class="margin15"></div>
		           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
		            <div class="socails-team">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		             
                    </div>
                         <div class="clearfix"></div>

                          <div class="col-lg-4 col-md-4 text-center">
		           <img src="img/dp2.png">
		           <h4>NITIN AGARWAL</h4>
		           <span>Head, Web Development</span>
		           <div class="margin15"></div>
		           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
		            <div class="socails-team">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		             
                    </div>

 				         <div class="col-lg-4 col-md-4 text-center">
		           <img src="img/dp.png">
		           <h4>Anirudh Singh</h4>
		           <span>Founder & Product Architect</span>
		           <div class="margin15"></div>
		           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
		            <div class="socails-team">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		             
                    </div>


   <div class="col-lg-4 col-md-4 text-center">
		           <img src="img/dp3.png">
		           <h4>Sandeep Kumar Singh</h4>
		           <span>Head, Android Development</span>
		           <div class="margin15"></div>
		           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
		            <div class="socails-team">
		               <ul>
		           		<li><a href="#">
		           		 <span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		           		   </a>
		           		    </li>
		           		<li>
		           		<a href="#"><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
		           		<li><a href="#">
		           		<span class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>
		           		  </span></a></li>
		             	 </ul>
		               </div>
		             
                    </div>
                    

                      </div>
 					 </div>

 					 
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Team Detail";
$contentheader = "";
//Apply the template
include("template.php");
?> 
 
 <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
               loop: true,
                margin: 20,
                responsiveClass: true,
                 autoplay: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                
                  }
                }
              })
            })
 </script> 
