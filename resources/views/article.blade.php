@extends('layouts.master')
@section('pageTitle','Latest Sports News India & Resources - Getsporty')
@section('meta')
<meta name="description" content="We bring you the latest updates on all the big sports Resources to your GetSporty App. Get all the information on your phone">
<meta name="keywords" content="latest sorts news india,sports news,sports resources">
<meta property="og:image" content="https://getsporty.in/23376596_1450074778394787_4309845126431335508_n (1).png">
<link href="{{asset('public/css/subscribe.css')}}" rel="stylesheet">
@endsection
@section('content')
<!-- @include('layouts.head') -->
<style type="text/css">
   p{font-size: 10px;}
 </style>
         <div class="joblist-bg tournamentBg bannerBgSec">
           <div class="container">
             <div class="row">
               <div class="col-md-12">
                 <div class="ban-pera">
                    <h1>Article</h1>
                    <h3>Perfectly curated articles, inspirational stories & training manuals, GetSporty has everything for aspiring athletes.</h3>               
                 </div>
                </div>
            </div>
          </div>
        </div>
        <div id="contactform">
  <div id="contact-button">   
    <div class="rotated-text">Subscribe</div>
  </div>
  <form id="subs_form" action="{{url('/user_susbcription')}}" method="POST"  enctype='multipart/form-data'>
    {{ csrf_field() }} 
    <div class="sub_label">Articles</div>
    <input type="text" name="name" id="name" placeholder="Full Name" Required/>
    <input type="text" name="email" id="email" placeholder="Email" Required/>
    <input type="Number" name="phone" id="phone" placeholder="Contact No." Required/>
     <select id="module" name="module">
    <option value="">--Select--</option>
    <option value="2">Trails</option>
    <option value="3">Tournaments</option>
    <option value="2">Camp</option>
    <option value="6">Article</option>
    </select>
    <input type="number" name="age" id="age" placeholder="Your Age" Required />
    <input type="text" name="sport" id="sport" placeholder="Sport" Required />
    <input type="hidden" name="ipaddress" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <button type="submit" name="submit">Subscribe</button>
  </form> 
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
                              <h3>Get app</h3>
                              <p>Choose your native platform and get started!</p>
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
            <div class="clearfix margin20"></div>
            <div class="container">
               <div class="row">
                  <div class="heading-center  m0 pad15">
                     <h3>Sports Articles</h3>
                   <p>Not an everyday content but a fearsome approach to take on the state of Indian sports and a complete guide to reveal the path for sports enthusiasts to reach the pinnacle of their sport</p>
                  </div>     
                  <div id="article_listing"></div>    
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
  var module  = "article";
  var id      = "#article_listing";
  getListing(module,id);

});// End of Doucument Ready
</script>



@stop   