@extends('layouts.master')
@section('pageTitle','Home')
@section('content')
<!-- <style type="text/css">
  div.main-text {overflow-x: hidden;width: 800px;} 
</style> -->
@section('meta')
<meta property="og:image" content="https://getsporty.in/23376596_1450074778394787_4309845126431335508_n (1).png">
@endsection
<style type="text/css">
  .loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}
</style>
<div class="loading" hidden>Loading&#8230;</div>
 <div id="myCarousel" class="carousel slide slideBox" data-ride="carousel" data-interval="2500">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <!-- <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li> -->
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <section class="item active">
                    <img src="public/img/sports-trials.png" alt="Chania">                
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="ban-pera">
                                <!-- <h1>Lorem ispum is dummy </h1>
                                <h3>Lorem ispum is dummy text.</h3>
                                <button type="button" class="btn btn-read">Read More</button> -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="item">
                    <img src="public/img/sports-trials1.png" alt="Chania">                
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="ban-pera">
                                <!-- <h1>Lorem ispum is dummy </h1>
                                <h3>Lorem ispum is dummy text.</h3>
                                <button type="button" class="btn btn-read">Read More</button> -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="item">
                    <img src="public/img/sports-trials2.png" alt="Chania">                
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="ban-pera">
                               <!--  <h1>Lorem ispum is dummy </h1>
                                <h3>Lorem ispum is dummy text.</h3>
                                <button type="button" class="btn btn-read">Read More</button> -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="item">
                    <img src="public/img/gs.png" alt="Chania">                
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="ban-pera">
                               <!--  <h1>Lorem ispum is dummy </h1>
                                <h3>Lorem ispum is dummy text.</h3>
                                <button type="button" class="btn btn-read">Read More</button> -->
                            </div>
                        </div>
                    </div>
                </section>
                <div class="blue-bg blue-Home"> </div>
            </div>
        </div>





         <div class="relative playHome">
           <!--  <div class="blue-bg blue-Home"></div> -->
             <div class="play-icon" data-toggle="modal" data-target="#myModal">
                   <img src="public/img/play-icon.svg">
              </div>
            </div> 
         <!-- Modal -->

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


                          <iframe width="100%" height="315" src="https://www.youtube.com/embed/6QsIvzS4_ws" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


                          <!-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/njooQXjHmb0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
 -->

                         </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
             <div class="clearfix"></div>
               <div class="container" id="feature">
                <div class="row pad15">
                 <div class="heading-center">
                  <h3>App Features</h3>
                   <p>Learn more about this feature packed App</p>
                    </div>
                    <div class="owl-carousel owl-theme">
                     <div class="item">
                      <div class="box-app">
                        <div class="circle-box">
                          <img src="public/img/feature-img.svg">
                          </div>
                         <h4>Events</h4>
                       <p>We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone</p>
                       </div>
                        </div>
                        <div class="item">
                     <div class="box-app">
                       <div class="circle-box">
                        <img src="public/img/feature-img2.svg">
                         </div>
                        <h4>Tournaments</h4>
                       <p>Never miss an opportunity to impress and be never short on practice. Get all the updates on the latest and the upcoming sports tournaments in the area near you.</p>
                      </div>
                     </div>
                   <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                      <img src="public/img/feature-img3.svg">
                        </div>
                        <h4>Coach</h4>
                       <p>Want to become a professional player? For the best result, contact the best coach and train harder and smarter</p>
                       </div>
                     </div>
                  <div class="item">
                    <div class="box-app">
                      <div class="circle-box">
                        <img src="public/img/feature-img4.svg">
                         </div>
                         <h4>Connect</h4>
                        <p>Contact the best professionals, trainers or the coaches to help you refine your skills and be the player that you have always dreamt about</p>
                        </div>
                      </div>
                      
                      <div class="item">
                      <div class="box-app">
                       <div class="circle-box">
                             <img src="public/img/Job_Listing.png">
                          </div>
                             <h4>Job Listing</h4>
                             <p>Find your dream sports job. Browse through all the latest sports jobs in the Goverment or private sector through our specially devoted "Sports Job Portal"</p>
                      </div>
                  </div>
                <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/assessment.png">
                      </div>
                         <h4>Assessment</h4>
                         <p>Get your daily performance assessed by professionals or be the master of your own training sessions</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/resources.png">
                      </div>
                         <h4>Resources</h4>
                         <p>Not an everyday content but a fearsome approach to take on the state of Indian sports and a complete guide to reveal the path for sports enthusiasts to reach the pinnacle of their sport</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/training_Log.png">
                      </div>
                         <h4>Training Log</h4>
                         <p>Track your workouts, save your history and manage your performance with this dedicated training log</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/post_Results.png">
                      </div>
                         <h4>Post Results</h4>
                         <p>Give yourself remarks and compare your last day's performance with your recent results</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/parent.png">
                      </div>
                         <h4>Parent</h4>
                         <p>Book an upcoming event or tournament or just hire a personal trainer or coach for your child. Keep a tab on your ward's performance through this unique feature</p>
                    </div>
                </div>
              </div>
        </div>
                </div>
         <div class="clearfix margin15"></div>
        <section class="testimonials resourceSec" id="slider-bg">
               <div class="container relative" id="latest">
                  <div class="row pad15">
                      <div class="white-heading">
                          <h3>Latest resources</h3>
                           <p>See what’s included in the App</p>
                           <div class="subTitle" style="color: #b3b3b3;">Sports sector is one of the fastest growing industries not only in India but across the world. The sports sector is worth around 750 Billion dollars and in India alone, this industry is expected to great.<a href="latest-sports-news-resources">Read more....</a></div>
                      </div>
                      <div id="customers-testimonials" class="owl-carousel">
                 

                            @foreach($name['resources'] as $value)
                            <section class="item">
                              <div class="img-box"><img src="https://getsporty.in/portal/uploads/resources/{{ $value->image }}"></div>
                              <div class="white-b">
                                  <h4>{{$value->title}}</h4>
                                  <p>{{$value->summary}}</p>
                                  <div class="readMoreBtn"><a href="article-detail/{{$value->id}}">Read More</a> </div>
                              </div>
                          </section>
                            @endforeach                                                                
                      </div>
                      
                       <a href="latest-sports-news-resources" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
                                     
                  </div>
            </div>
        </section>
              <!--   <div class="relative">
                  <div class="blue-bg"></div>
                    </div> -->
        <div class="clearfix"></div>
        <section class="testimonials" style="background-color:#eee; ">
              <div class="container jobSecHome commnStyle" id="job">
              <div class="row pad15">
                <div class="heading-center"> <h3>Sports Jobs in India</h3>  
                  <p>Learn more about this feature packed App</p> 
                  <div class="subTitle">We are always gratified to live in a country like India, where sports has an approach to connect people through the availability of sports jobs in India. Cricket is considered as a religion, football is a way of life and hockey highlights secularism.<a href="job">Read More...</a>
<!-- Sports jobs in India are also making an identity at various levels, most importantly in cricket, tennis, hockey, athletics and chess. There is a wide range of sports job in India in which an ample number of opportunities are available to give a boost to your career.
Vaguely, you can treasure your dream job through our website and can conveniently browse through all the latest sports jobs in the government or private sector.Indeed, India as a nation is a breeding ground for sports jobs. Though by having a sports jobs in India you can be the part of taking India to both national and international levels.
So, if you are passionate about sports and want to handle the business side of the game then there are exciting career options for you of having sports in India available on our website and can take the first step towards your fantasy world.
 --></div>
                </div>
                  <div id="customers-testimonials2" class="owl-carousel">
                  @foreach($name['job'] as $value)
                     <section class="item">
                        <div class="img-box"><img src="https://getsporty.in/portal/uploads/job/{{ $value->image }}"></div>
                        <div class="white-b">
                           <h4>{{$value->title}}</h4>


<?php
$datetime1 = new DateTime();
$datetime2 = new DateTime($value->date_updated);
$interval = $datetime1->diff($datetime2);
$day = $interval->format(' %a Days ago ');
?>

                           <p> Posted  : <span> {{ $day }} </span></p>
                           <p> Place  : <span> {{$value->org_city}} </span></p>   
                           <p> Organisation Name  : <span> {{$value->organisation_name}} </span></p>
                           <div class="readMoreBtn"><a href="job-detail/{{$value->id}}">Read More</a> </div>                         
                        </div>
                    </section>
                            @endforeach   


                    <!-- <section class="item">
                        <div class="img-box"><img src="img/job02.jpg"></div>
                        <div class="white-b">
                           <h4>Jobs in Sports Authority of Jharkhand</h4>
                           <p> Posted  : <span>  3 days ago </span></p>
                           <p> Jharkhand  : <span> Ranchi </span></p>   
                           <p> Organisation Name  : <span> Sports Authority of Jharkhand </span></p>
                           <div class="readMoreBtn"><a href="job-listing-detail.php">Read More</a> </div>                         
                        </div>
                    </section>
                    <section class="item">
                        <div class="img-box"><img src="img/job03.jpg"></div>
                        <div class="white-b">
                           <h4>Jobs in Sports Authority of Jharkhand</h4>
                           <p> Posted  : <span>  3 days ago </span></p>
                           <p> Jharkhand  : <span> Ranchi </span></p>   
                           <p> Organisation Name  : <span> Sports Authority of Jharkhand </span></p>
                           <div class="readMoreBtn"><a href="job-listing-detail.php">Read More</a> </div>                         
                        </div>
                    </section>
                    <section class="item">
                        <div class="img-box"><img src="img/job04.jpg"></div>
                        <div class="white-b">
                           <h4>Jobs in Sports Authority of Jharkhand</h4>
                           <p> Posted  : <span>  3 days ago </span></p>
                           <p> Madhya Pradesh  : <span> Bina </span></p>   
                           <p> Organisation Name  : <span> Kendriya Vidyalaya, Bina </span></p>
                           <div class="readMoreBtn"><a href="job-listing-detail.php">Read More</a> </div>                         
                        </div>
                    </section>
                    <section class="item">
                        <div class="img-box"><img src="img/job05.jpg"></div>
                        <div class="white-b">
                           <h4>Jobs in Sports Authority of Jharkhand</h4>
                           <p> Posted  : <span>  3 days ago </span></p>
                           <p>  Thiruvananthapuram  <span>  </span></p>   
                           <p> Organisation Name  : <span> SAI Trivandrum Golf Club & Academy </span></p>
                           <div class="readMoreBtn"><a href="job-listing-detail.php">Read More</a> </div>                         
                        </div>
                    </section>    
                    <section class="item">
                        <div class="img-box"><img src="img/job01.jpg"></div>
                        <div class="white-b">
                           <h4>Jobs in Sports Authority of Jharkhand</h4>
                           <p> Posted  : <span>  6 days ago </span></p>
                           <p>Bengaluru<span>  </span></p>   
                           <p> Organisation Name  : <span> Sports Authority of India </span></p>
                           <div class="readMoreBtn"><a href="job-listing-detail.php">Read More</a> </div>                         
                        </div>
                    </section> 
                    <section class="item">
                        <div class="img-box"><img src="img/job07.jpg"></div>
                        <div class="white-b">
                           <h4>Sports Coach / Yoga Teachers- Kendriya Vidyalaya, NAL Campus, Bengaluru</h4>
                           <p> Posted  : <span>  6 days ago </span></p>
                           <p>Bengaluru<span>  </span></p>   
                           <p> Organisation Name  : <span> Kendriya Vidyalaya, NAL Campus, Bengaluru </span></p>
                           <div class="readMoreBtn"><a href="job-listing-detail.php">Read More</a> </div>                         
                        </div>
                    </section> 
                    <section class="item">
                        <div class="img-box"><img src="img/job08.jpg"></div>
                        <div class="white-b">
                           <h4>Sports Coach- Kendriya Vidyalaya, DVC, Bokaro Thermal</h4>
                           <p> Posted  : <span>  6 days ago </span></p>
                           <p>Bokaro<span>  </span></p>   
                           <p> Organisation Name  : <span> Kendriya Vidyalaya, DVC, Bokaro Thermal </span></p>
                           <div class="readMoreBtn"><a href="job-listing-detail.php">Read More</a> </div>                         
                        </div>
                    </section> -->                                                                                  
                  </div>
                 <a href="job" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
              </div>
                               <!-- <div class="text-center">
                           <a href="job-listing.php">
                            <button type="button" class="btn btn-more">Read More</button>
                            </a>
                           </div> -->
            </div>
        </section>  


         <div class="clearfix"></div>
           <!-- <div class="relative">
             <div class="blue-bg-left"></div>
               </div> -->
   
      <div class="bg-event" style="margin: 0">

          <section class="testimonials commnStyle">
              <div class="container" id="event">
                  <div class="row pad15">
                      <div class="w-h" style="margin: 0;"><h3>Sports event in India</h3><p>See what’s included in the App</p>
                          <div class="subTitle main-text" style="color: #b3b3b3;">India is scrutinize as a country of teeming popular sports events and their universality is also measured by the regional prominence. While cricket is among one of the most popular sports events in India, the other prominent sports events in India include Football, Hockey, Wrestling, Badminton, Tennis, Chess, Kabaddi, Snooker and boxing.<a href="{{ url('/event') }}">Read More...</a>
<!-- Aloof from national level sports events, India has also hosted several International sports events such as Asian Games during the year 1951 and 1982, 2010 Hockey World Cup and 2010 Commonwealth Games. However, the year 2017 has brought India to the eminence as they hosted FIFA U-17 World Cup and set high standards of the endowment.
Overall, sports events in India are always amusing to unite with. Every year we all anxiously wait to receive the sports events calendar so we can block our agenda and plan our schedule, travel in advance. Consequently, for the sports events calendar, you don’t have to rush anywhere we will bear you to the latest updates on all the big sports events in India. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone through our website hassle-free.
. --></div>
                      </div>
                      <div class="clearfix margin20"></div>
                      <div id="customers-testimonials3" class="owl-carousel">

                      @foreach($name['event'] as $value)

                        <section class="item">
                          <div class="img-box"><img src="https://getsporty.in/portal/uploads/event/{{ $value->image }}"></div>
                          <div class="white-b">
                              <h4>{{$value->name}}</h4>
                              <section class="clearfix">
                                  <aside class="pull-left"><p> Start From  : <span> <?php echo date('d F',strtotime($value->start_date)) ?></span></p></aside>
                                  <aside class="pull-right"><p> To  : <span><?php echo date('d F, Y',strtotime($value->end_date)) ?></span></p></aside>
                              </section>
                              <section class="clearfix">
                                  <aside class="pull-left"><p> Entry : <span> <?php echo date('d F',strtotime($value->entry_start_date)) ?> </span></p></aside>
                                  <aside class="pull-right"><p> To  : <span><?php echo date('d F, Y',strtotime($value->entry_end_date)) ?></span></p></aside>
                              </section>
                              <section class="clearfix">
                                  <aside class="pull-left"><p>  <span> {{$value->organizer_city}} </span></p></aside>
                                  <aside class="pull-right"><p>    <span>{{$value->sport_name}}  </span></p></aside>
                              </section>
                              <div class="readMoreBtn"><a href="event-detail/{{$value->id}}">Read More</a> </div> 
                          </div>
                        </section>
                    @endforeach   

                   
                 
                      </div>



                      <a href="{{ url('/event') }}" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
                  </div>
              </div>
          </section>  
      </div>


      <div class="clearfix sportTournamentSec">
          <section class="testimonials commnStyle">
              <div class="container" id="event">
                  <div class="row pad15">
                      <div class="w-h" style="margin: 0;"><h3>Sports Tournaments in India</h3><p>See what’s included in the App</p>
                          <div class="subTitle" style="color: #fff;">Sports sector is one of the fastest growing industries not only in India but across the world. The sports sector is worth around 750 Billion dollars and in India alone, this industry is expected to great.<a href="{{ url('/tournament') }}">Read More...</a></div>
                      </div>
                      <div class="clearfix margin20"></div>
                      <div id="sportTournament" class="owl-carousel">
                        
                        @foreach($name['tournament'] as $value)

                        <section class="item">
                          <div class="img-box"><img src="https://getsporty.in/portal/uploads/tournament/{{ $value->image }}"></div>
                          <div class="white-b">
                              <h4>{{$value->name}}</h4>
                              <section class="clearfix">
                                  <aside class="pull-left"><p> Start From  : <span><?php echo date('d F',strtotime($value->start_date)) ?></span></p></aside>
                                  <aside class="pull-right"><p> To  : <span><?php echo date('d F, Y',strtotime($value->end_date)) ?></span></p></aside>
                              </section>
                              <section class="clearfix">
                                  <aside class="pull-left"><p> Entry : <span><?php echo date('d F',strtotime($value->event_entry_date)) ?></span></p></aside>
                                  <aside class="pull-right"><p> To  : <span><?php echo date('d F, Y',strtotime($value->event_end_date)) ?></span></p></aside>
                              </section>
                              <section class="clearfix">
                                  <aside class="pull-left"><p>  <span> {{$value->org_city}} </span></p></aside>
                                  <aside class="pull-right"><p>    <span>{{$value->sport}} </span></p></aside>
                              </section>
                              <div class="readMoreBtn"><a href="tournament-detail/{{$value->id}}">Read More</a> </div> 
                          </div>
                        </section>
                       @endforeach    
                      </div>
                      <a href="tournament" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
                  </div>
              </div>
          </section> 
      </div>

    
          <section class="mediaSecHome">
              <div class="container" id="app">
                  <div class="row">
                      <div class="heading-center"> <h3>Our Media</h3> <p>For more info and support, contact us!</p></div>           
                      <div class="owl-carousel owl-theme">
                          <div class="item"><div class="border-client"><img src="public/img/logo-client.png"></div></div>
                          <div class="item"><div class="border-client"><img src="public/img/logo-client2.png"></div></div>
                          <div class="item"><div class="border-client"><img src="public/img/logo-client3.png"></div></div>
                          <div class="item"><div class="border-client"><img src="public/img/logo-client4.png"></div></div>
                          <div class="item"><div class="border-client"><img src="public/img/logo-client6.png"></div></div>
                          <div class="item"><div class="border-client"><img src="public/img/logo-client6.png"></div></div>
                      </div>
                  </div>
              </div>
          </section>
       <!--  <div class="relative">
          <div class="phone-img">
            <img class="img-responsive" src="img/iphone-img.jpg">
             </div> 
              </div> -->
         <div class="margin15 clearfix"></div>
           <div class="team-bg" style="display: none;">
             <div class="margin15 clearfix"></div>
               <div class="container">
                <div class="row">
                  <div class="white-heading">
                  <h3>Our Team</h3>
                  <p>See what’s included in the App</p>
                 </div>
                 <div class="owl-carousel owl-theme">
                
                    <div class="item">
                     <a href="team-detail.php">
                   <img src="public/img/dp.png">
                   <h4>Anirudh Singh</h4>
                   <span>Founder & Product Architect</span>
                    <div class="socails">
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
                       </a>
                     </div>
                     

                     <div class="item">
                       <a href="team-detail.php">
                   <img src="public/img/dp2.png">
                   <h4>NITIN AGARWAL</h4>
                   <span>Head, Web Development</span>
                    <div class="socails">
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
                       </a>
                     </div>
 
                     <div class="item">
                       <a href="team-detail.php">
                   <img src="public/img/dp3.png">
                   <h4>Sandeep Kumar Singh</h4>
                   <span>Head, Android Development</span>
                    <div class="socails">
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
                       </a>
                     </div>

                      <div class="item">
                        <a href="team-detail.php">
                   <img src="public/img/dp4.png">
                   <h4>Kumar Gaurav</h4>
                   <span>Android Development</span>
                    <div class="socails">
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
                       </a>
                     </div>
                     
                 <div class="item">
                   <a href="team-detail.php">
                   <img src="public/img/dp.png">
                   <h4>Anirudh Singh</h4>
                   <span>Founder & Product Architect</span>
                    <div class="socails">
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
                       </a>
                     </div>

                     <div class="item">
                       <a href="team-detail.php">
                   <img src="public/img/dp2.png">
                   <h4>NITIN AGARWAL</h4>
                   <span>Head, Web Development</span>
                    <div class="socails">
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
                       </a>
                     </div>

                 

                  </div>
                </div>
              </div> 
            </div> 
           <div class="relative">
            <div class="blue-bg" style="display: none;"></div>
         </div>
               
          <div class="clearfix"></div>
          <section class="clearfix contSec">
              <div class="container" id="support">
              <div class="row">
                  <div class="heading-center" id="st"><h3>Support</h3><p>For more info and support, contact us!</p></div>
                  <div class="col-lg-6 col-md-6">
                  <div>@if(Session::has('success'))
                  <div class="alert alert-success">
                  {{ Session::get('success') }}
                  </div>
                  @endif
                  </div>
                    <form method="POST" action="javascript:void(0)" onsubmit="return validateForm()" name="email_form">
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
                            <label for="email">Subject</label>
                            <input type="text" class="form-control01" id="sub" aria-describedby="emailHelp" placeholder="" name="subject" required="subject">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control01" id="exampleFormControlTextarea1" rows="5" name="message" required="Text"></textarea> 
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
          <script src="{{asset('js/jquery.event.move.js')}}"></script>
 <script>
    jQuery(document).ready(function($) {
            
            "use strict";
                //  TESTIMONIALS CAROUSEL HOOK
                $('#customers-testimonials').owlCarousel({
                    loop: true,
                    center: true,
                    items: 8,
                    margin: 0,
                    autoplay: true,
                    dots:false,
                    autoplayTimeout: 2000,
                    smartSpeed: 450,
                    responsive: {
                      0: {
                        items: 1
                      },
                      768: {
                        items: 3
                      },
                      1170: {
                        items: 3
                      }
                    }
                });     

//getResources();


            });
            // Custom Navigation Events
      // $(".r-arrow").click(function () {
      //      owl.trigger('next.owl.carousel');
      //  });
      //  $(".l-arrow").click(function () {
      //      owl.trigger('prev.owl.carousel');
      //   });
    </script>
 <script>
    jQuery(document).ready(function($) {
                "use strict";
                //  TESTIMONIALS CAROUSEL HOOK
                $('#customers-testimonials2').owlCarousel({
                    loop:true,
                    center: true,
                    items: 3,
                    margin: 0,
                    autoplay: true,
                    dots:false,
                    autoplayTimeout: 2000,
                    smartSpeed: 450,
                    responsive: {
                      0: {
                        items: 1
                      },
                      768: {
                        items: 3
                      },
                      1170: {
                        items: 3
                      }
                    }
                });
            });
                        // Custom Navigation Events
      //  $(".r-arrow").click(function () {
         //   owl.trigger('next.owl.carousel');
      //  });
      //  $(".l-arrow").click(function () {
         //   owl.trigger('prev.owl.carousel');
       // });
       
  
    </script>
 <script>
    jQuery(document).ready(function($) {
                "use strict";
                //  TESTIMONIALS CAROUSEL HOOK
                $('#customers-testimonials3').owlCarousel({
                    loop: true,
                    center: true,
                    items: 4,
                    margin: 0,
                    autoplay:true,
                    dots:false,
                    autoplayTimeout: 2000,
                    smartSpeed: 450,
                    responsive: {
                      0: {
                        items: 1
                      },
                      768: {
                        items: 3
                      },
                      1170: {
                        items: 4
                      }
                    }
                });
            });
                        // Custom Navigation Events
      //  $(".r-arrow").click(function () {
         //   owl.trigger('next.owl.carousel');
      //  });
      //  $(".l-arrow").click(function () {
         //   owl.trigger('prev.owl.carousel');
       // });
       
  
    </script>

<script>
    jQuery(document).ready(function($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#sportTournament').owlCarousel({
                loop: true,
                center: true,
                items: 4,
                margin: 0,
                autoplay:true,
                dots:false,
                autoplayTimeout: 2000,
                smartSpeed: 450,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 3
                  },
                  1170: {
                    items: 4
                  }
                }
            });
        });
                   
       
  
    </script>


 <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
               loop: true,
                margin: 25,
                  dots:true,
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



  <script>
      $(document).ready(function() {
        $('#Mycarousel').owlCarousel({
        
        });
      })
    function validateForm(){  
        
       $('.loading').show();
        var email = $('#email').val();
        var name = $('#name').val();
        var subject = $('#sub').val();
        var msg = $('#exampleFormControlTextarea1').val();
        var data = {"name":name,"email":email,"subject":subject,"message":msg,"medium":"W"};

        $.ajax({
            method  : "POST",
            // "_token": "{{ csrf_token() }}",
            //headers : {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url     : "https://getsporty.in/liveapp/getSportyLite/contact_us.php?act=contact_us&token_id=dhs2016",//"{{url('/contact')}}",
            type    : $(this).attr('method'),
            dataType: 'json',
            data    : JSON.stringify(data),
            success : function( data ) {
                         alert('Thanks for writing us');
            },
            error   : function( xhr, err ) {
                         alert('Error');     
            }
        });    
        $('.loading').hide();
        return false;
        
  }

    </script> 

          


@stop          