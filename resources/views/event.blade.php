@extends('layouts.master')
@section('pageTitle','Sports Events In My City | Sports Events In India')
@section('meta')
<meta name="description" content="Get all the latest updates on the upcoming Sports Events In My City & Sports Events in India.">
<meta name="keywords" content="sports events in india, sports events in my city">
<script src="{{asset('public/js/notification_box.js')}}"></script>
<script src="{{asset('public/css/notification_box.css')}}"></script>
@endsection
@section('content')
 <!--   @include('layouts.head')
 -->
 <style type="text/css">
   p{font-size: 10px;}
   form {
  width: 100%;
  padding: 20px;
}

form input {
  display: block;
  border: none;
  width: 300px;
  height: 35px; 
  margin: 15px 30px;  
}

form textarea {
  width: 300px;
  margin: 40px 30px;
  height: 170px;
}

form textarea, form input { 
  border: 3px solid #666666;
  border-radius: 5px;
  background: #f2f2f2;  
}
 #contactform {  
  width: 400px;
  left: -405px;
  height: auto;
  margin: 25px 0;
  position: fixed;
  box-shadow: 0 0 12px 0 #333;  
  z-index: 1;
  top: 30%;
}

#contact-button { 
  width: 10%;  
  padding: 7% 3%;  
  cursor: pointer;
  margin-left: 400px;
  margin-top: 40px;
  font-size: 23px; 
  color: white;  
  position: absolute;
}

#contactform, #contact-button {
  background-color: #03a9f4;
  border-radius: 0 15px 15px 0; 
  border: 5px solid #fff; 
  border-left: none;
}
.rotated-text {
    display: inline-block;
    white-space: nowrap;
    /* this is for shity "non IE" browsers
       that dosn't support writing-mode */
    -webkit-transform: translate(1.1em,0) rotate(90deg);
       -moz-transform: translate(1.1em,0) rotate(90deg);
         -o-transform: translate(1.1em,0) rotate(90deg);
            transform: translate(1.1em,0) rotate(90deg);
    -webkit-transform-origin: 0 0;
       -moz-transform-origin: 0 0;
         -o-transform-origin: 0 0;
            transform-origin: 0 0;*/
   /* IE9+ */
   -ms-transform: none;
   -ms-transform-origin: none;
   /* IE8+ */
   -ms-writing-mode: tb-rl;
   /* IE7 and below */
   *writing-mode: tb-rl;
}

.rotated-text:before {
    content: "";
    float: left;
    margin-top: 100%;
}
form #module{
  width: 305px;
    border: 3px solid #666;
    height: 37px;
    border-radius: 5px;
    align-items: center;
    margin-left: 28px;
}
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

<div id="contactform">
  <div id="contact-button">   
    <div class="rotated-text">Subscribe</div>
  </div>
  <form>
    <input type="text" name="name" id="name" placeholder="Full Name" Required/>
    <input type="text" name="email" id="email" placeholder="Email" Required/>
    <input type="Number" name="phone" id="phone" placeholder="Contact No." Required/>
    <input type="text" name="sport" id="sport" placeholder="Sport" Required />
    <select id="module">
    <option value="2">Trails</option>
    <option value="3">Tournaments</option>
    <option value="2">Camp</option>
    <option value="6">Article</option>
    </select>
  </form> 
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
           var data = ''
          $('#sport').on('keyup',function(){
             $.ajax({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:service_url+'/getSportsList/'+$('#sport').val(),
           method:"GET",
           dataType:'JSON',
           success:function(result){

           data = result.data;

           }   

           });

          });
           
         </script>
   </html>  
   @stop