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
                  <li ><a href="aboutus.php">About us</a></li>
                  <!-- <li><a href="#getApp" data-toggle="modal">Get app  </a></li> -->
                  <li><a href="event.php" >Event </a></li>
                  <li ><a href="job-listing.php">Job</a></li>
                  <li><a href="tournament.php">Tournaments</a></li>
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
                  <li class="active"><a href="support.php">Contact Us</a></li>
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
        <!-- Modal Popup -->



              <div class="clearfix"></div>               
   <div class="clearfix"></div>
     <div class="container" id="support">
       <div class="row">
          <div class="heading-center">
            <h3>Support</h3>
              <p>For more info and support, contact us!</p>
                </div>
                  
         <div class="col-lg-6 col-md-6">
    <form>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control01" id="" aria-describedby="emailHelp" placeholder="">
  </div>
    <div class="form-group">
    <label for="email">Subject</label>
    <input type="text" class="form-control01" id="" aria-describedby="emailHelp" placeholder="">
  </div>
   <div class="form-group">
  <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control01" id="exampleFormControlTextarea1" rows="5"></textarea> 
    </div>
    <div class="margin15 clearfix"></div>
     <button type="button" class="btn btn-send">Send</button>
        </form> 
       </div>
           <div class="col-lg-1 col-md-1"></div>
              <div class="col-lg-5 col-md-5">
          <div class="right-cont">
       	   <h3>Contact:</h3>
       	    <p><img src="img/latitude.svg"> Ram A 20, Sector 350000, Noida, India ,201301</p>
       	     <p><img src="img/contact.svg"> +91 120 4511807</p>
       	   	   <p><img src="img/mail.svg"> info@darkhorsesports.in</p>
              </div>
               </div>
                 </div>
             </div>
             <div class="clearfix margin20"></div>
             <div class="relative">
             <div class="map">
             <iframe class="w100" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58883.73429876116!2d75.82270614616367!3d22.71956488732932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C+Madhya+Pradesh!3m2!1d22.7195687!2d75.8577258!4m0!5e0!3m2!1sen!2sin!4v1503394956409" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
             </div>
 			 </div> 
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagetitle = "Support";
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
