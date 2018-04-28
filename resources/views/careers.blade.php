@extends('layouts.master')
@section('pageTitle','Careers')
@section('content')
 <div class="joblist-bg about_new_banner bannerBgSec">

          <div class="container">
       	    <div class="row">
       	      <div class="col-md-12">
       		    <div class="ban-pera">
       			  <h1>Careers</h1>
       			  <h3></h3>	
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
                              <!-- <h3>Get app</h3>
                              <p>Choose your native platform and get started!</p> -->
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
             <div class="clearfix"></div>
             <div class="container">
            <div class="row">
             <div class="heading-center m0 pad15">
                  <h3>We are not here to play sports</h3>
                    </div>
                    <div class="about-content">
                     <h4></h4>
                                            <div class="margin15 clearfix"></div>
                       <p style="text-align: center;">We are here to help other people play their sport. We are the backend of sports in India. If you want to make India a force to reckon with in the field of Sport? So, Come and join us for your dream job in Sports in India and let us together make India a sports superpower.</p> 
                   
                      <div class="margin15 clearfix"></div>
                        <div class="margin20 clearfix"></div>
                      </div>
                      </div>
           </div>
                 

            <div class="clearfix"></div>
             <div class="container">
            <div class="row">
             <div class="heading-center m0 pad15">
                  <h3>Current Vacancies</h3>
                    </div>
                    <div class="about-content">
                     <h4></h4>
                     <ol>
                       <li><a href="{{url('/public/docs/JOB_001.pdf')}}" target="_blank">UI/UX Designer</a><br>Noida, Uttar Pradesh</li>
                     </ol>
                                            <!-- <div class="margin15 clearfix"></div>
                       <p style="text-align: center;">We are here to help other people play their sport. We are the backend of sports in India. If you want to make India a force to reckon with in the field of Sport? So, Come and join us for your dream job in Sports in India and let us together make India a sports superpower.</p> 
                   
                      <div class="margin15 clearfix"></div>
                        <div class="margin20 clearfix"></div> -->
                      </div>
                      </div>
           </div>

           <section class="clearfix contSec">
              <div class="container" id="support">
              <div class="row">
                  <div class="heading-center" id="st"><h3>Contact Us</h3><p>Just Drop your Resume here</p></div>
                  <div class="col-lg-6 col-md-6">
                  <form id="contact_body" method="post" action="https://getsporty.in/liveapp/getSportyLite/contact_us.php?act=career&token_id=dhs2016" enctype='multipart/form-data'>
                      {{ csrf_field() }} 
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control01" id="name" aria-describedby="emailHelp" placeholder="" name="name" required="name">
                            
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control01" id="email" aria-describedby="emailHelp" placeholder="" name="email" required="email id">
                            
                        </div>
                        <div class="form-group">
                            <label for="email">Contact No.</label>
                            <input type="number" class="form-control01" id="contact" aria-describedby="emailHelp" placeholder="" name="contact" required="contact">
                        </div>
                        <div class="form-group">
                            <label for="about">About yourself.</label>
                            <textarea class="form-control" rows="5" id="about" name="about"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Upload your resume</label>
                            <input type="file" class="form-control01" id="doc" aria-describedby="emailHelp" placeholder="" name="doc" required="doc"> 
                        </div>
                        <div class="margin15 clearfix"></div>
                        <input type="submit" class="btn btn-send"></input>
                    </form> 
                  </div>
                  <div class="col-lg-1 col-md-1"></div>
                  <div class="col-lg-5 col-md-5">
                      <div class="right-cont">
                          <h3>Contact:</h3>
                          <p><img src="public/img/latitude.svg"> A 20, Sector 35, Noida, India ,201301</p>
                          <p><img src="public/img/contact.svg"> +91 120 4511807</p>
                          <p><img src="public/img/mail.svg"> info@darkhorsesports.in</p>
                          </div>
                  </div>

                  <div class="clearfix margin20"></div> 
              </div>
              </div>
          </section> 
          <script type="text/javascript">
            
var allowed_file_size   = "1048576"; //1 MB allowed file size
var allowed_file_types  = ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg', 'application/x-zip-compressed', 'application/pdf']; //Allowed file types
var border_color        = "#C2C2C2"; //initial input border color
var maximum_files       = 2; //Maximum number of files allowed

$("#contact_body").submit(function(e){
   $('.loading').show();
    e.preventDefault(); //prevent default action 
    proceed = true;
        var post_url = $(this).attr("action"); //get form action url
        var request_method = $(this).attr("method"); //get form GET/POST method
        var form_data = new FormData(this); //Creates new FormData object
        $.ajax({ //ajax form submit
            url : post_url,
            type: request_method,
            data : form_data,
            dataType : "json",
            contentType: false,
            cache: false,
            processData:false
        }).done(function(res){
           //fetch server "json" messages when done
            if(res.status == 1){
               
                alert_msg('Thanks for applying');
            }
            else{
                alert_msg('Something went wrong');
            }
             $('.loading').hide();
        });
  });
          </script>
        
@stop