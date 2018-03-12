@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')

    <section class="bodySec deshboard2">
        <div class="container">
            <section class="tabSec">
                <ul id = "myTab" class = "nav-tabs clearfix">
                     <li class = "active">
                        <a class="tab04" href = "#tab01" data-toggle = "tab">
                            <!-- <img class="img-responsive" src="img/tab01.png"> -->
                            Active Jobs
                        </a>
                     </li>                 
                     <li>
                        <a class="tab05" href = "#tab02" data-toggle = "tab">
                           <!--  <img class="img-responsive" src="img/tab02.png"> -->
                            Close Jobs
                        </a>
                   </li>
                   <li>
                        <a class="tab06" href = "#tab03" data-toggle = "tab">
                            <!-- <img class="img-responsive" src="img/tab03.png"> -->
                            Save Jobs
                        </a>
                   </li>
                </ul>
                <div id = "myTabContent" class = "tab-content tabContentBox clearfix">
                    <div class = "tab-pane fade in active jobActiveSec" id = "tab01">
                        <section class="clearfix colSec">                        	
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/demo.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a>                        	
                        </section>
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t1.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a>                         
                        </section>
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t2.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a>                         
                        </section>
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t3.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a>                         
                        </section>
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t4.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a>                         
                        </section>
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t5.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a>                         
                        </section>                                            
                     </div>
                     
                     <div class = "tab-pane fade" id = "tab02">
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/demo.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a> 
                                               
                        </section> 
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t2.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a> 
                            <div class="overLap"></div>                        
                        </section> 
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t5.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a> 
                                                   
                        </section> 
                       <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t3.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a> 
                            <div class="overLap"></div>                        
                        </section>  
                     </div>
                     <div class = "tab-pane fade jobsaveTab" id = "tab03">


                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t1.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a> 
                                               
                        </section> 
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t2.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a> 
                            <div class="overLap"></div>                        
                        </section> 
                        <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t5.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a> 
                                                   
                        </section> 
                       <section class="clearfix colSec">                         
                            <div class="colBox">
                                <figure><img class="img-responsive" src="img/t1.jpg"></figure>
                                <p class="">Assistant Trainer</p>
                            </div>
                            <p class="cricket"><i class="fa fa-map-marker"></i>Ghaizabad Sports - Cricket</p>
                            <a href="#" class="publishCard">Publish</a> 
                            <div class="overLap"></div>                        
                        </section>

                     	  <h1>Cricket Foundation Heading</h1>
                        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        	<div class="clearfix jobSave">
                            	<p><span>Job Title:</span>  Assistant Trainer </p>
                                <p><span>Job Location:</span> Mumbai </p>
                                <p><span>Job Type:</span> Full Time</p>
                                <p><span>Sport:</span>  Cricket </p>
                            </div>
                        </section>
                        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        	<div class="clearfix jobSave">
                            	<p><span>Email:</span>  abc.224@gmail.com </p>
                                <p><span>WorkExperience:</span> 4 Year </p>
                               
                            </div>
                        </section>
                        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        	<div class="viewImg ">
                                <figure><img class="img-responsive" src="img/demo.jpg"></figure>                                
                            </div>
                        </section>
                        <div class="clearfix">
                        	<button class="btn btn-n viewBtn"><i class="fa fa-eye"></i> View More</button>
                        </div>
                        
                     </div>
                </div>
            </section>
        </div>
         <a href="#" class="cleateJob"><i class="glyphicon glyphicon-plus"></i><span>Create Job</span></a>
    </section>
  <script type="text/javascript">
    $(document).ready(function() {
       

      /* $(".uploadFileBtn").click(function() {
          $('#uploadFile').trigger('click');
         
      });*/


      $(".toggleBtn").click(function() {
          $('#mySidenav').css('right', '0px');
         
      });

      $(".close_mySidenav").click(function() {
          $('#mySidenav').css('right', '-250px');
      });
});
    

  </script>
  </body>
</html>
    