
@extends('layouts.master')
@section('pageTitle','Home')
@section('content')

         <div class="joblist-bg landgJobBg bannerBgSec">
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
        <!-- Modal pop -->
            <section class="clearfix createJobBox ">
                <div class="container">
                    <div class="">
                        <div class="pull-left col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <h2> Now You can Create jOb </h2>
                            <h3>Get started with a professinals consultation</h3>
                        </div>
                        <div class="pull-left col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <a href="manage/login/1" class="pull-right">Create job</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                 <div class="">
                    <section class="showCaseBox">                      
                      <aside class="showCaseText">
                        <div class="clearfix">
                            <h3>Create & Manage jobs</h3>
                            <p>Post Sports jobs & Manage jobs with our job reator features</p>
                            
                        </div>
                      </aside>
                      <aside class="showCaseImg img-responsive"><img src="public/img/job-mob.jpg" alt=""/></aside>
                  </section>                        
                  </div>
                  
            </div>
            <div class="clearfix margin20"></div>
        	  <div class="container">
        	       <div class="row">
          	 	      <div class="heading-center  m0 pad15">
              	       <h3>how it works</h3>
                 	      <p style="font-size: 20px;">Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>                          
                  </div>
                  <section class="showCaseBox">
                      <aside class="showCaseImg"><img src="public/img/job-mob.jpg" alt=""/></aside>
                      <aside class="showCaseText">
                        <div class="clearfix">
                            <h3>register</h3>
                            <p>Register as an Event Manager & provide organisation 
details & other info.</p>
                        </div>
                      </aside>
                  </section>
                  <section class="showCaseBox odd">
                      <aside class="showCaseImg"><img src="public/img/job-mob.jpg" alt=""/></aside>
                      <aside class="showCaseText">
                        <div class="clearfix">
                            <h3>enter details & submit</h3>
                            <p>Getsporty sports event manager is sport specific.
So, you input specific details about particular sports.</p>
                        </div>
                      </aside>
                  </section>  
                  <section class="showCaseBox">
                      <aside class="showCaseImg"><img src="public/img/job-mob.jpg" alt=""/></aside>
                      <aside class="showCaseText">
                        <div class="clearfix">
                            <h3>Listing</h3>
                            <p>After your event is approved  by us then it start 
showing in our listing. This comes on our site 
as well. </p>
                        </div>
                      </aside>
                  </section>
                  <section class="showCaseBox odd">
                      <aside class="showCaseImg"><img src="public/img/job-mob.jpg" alt=""/></aside>
                      <aside class="showCaseText">
                        <div class="clearfix">
                            <h3>Manage</h3>
                            <p>Manage participants, take attendance through
the App. </p>
                        </div>
                      </aside>
                  </section>
                  
        	 	</div>        		 
  	       <div class="clearfix margin20"></div>
           <div class="clearfix landingAdv">
            <figure><img class="img-responsive" src="public/img/adv_job.jpg" alt=""/></figure>
          </div>
          <section>
            <div class="container">
                  <div class="heading-center  m0 pad15">
                       <h3>want to know in detail</h3>
                        <p style="font-size: 20px;">Provide details we will contact you in short while.</p>
                    </div>  
                  <div class="trialForm">                      
                      <form class="">
                          <aside class="clearfix">
                              <div class="form-group user col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <input class="form-control" placeholder=" Name" type="text">
                              </div>
                              <div class="form-group mail col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <input class="form-control" placeholder="Email" type="text">
                              </div>
                          </aside>
                          <aside class="clearfix">
                            <div class="form-group phone col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <input class="form-control" placeholder="Phone" type="text">
                            </div>
                            <div class="form-group org col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <input class="form-control" placeholder="Organisation" type="text">
                            </div>
                            <div class="form-group city col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <input class="form-control" placeholder="city" type="text">
                            </div>
                          </aside>
                          <div class="form-group clearfix">
                             <button class="btn btn-n" type="button">Submit</button>
                            
                          </div>
                      </form>                    
                  </div>

            </div>
          </section>
  	   


    
    
<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>

@stop   