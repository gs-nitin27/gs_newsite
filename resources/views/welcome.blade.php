@extends('layouts.master')
@section('pageTitle','Sports Events & Tournaments | Sports Quota Jobs In India
')
@section('meta')
<meta name="description" content="We bring you the latest updates on all the big sports Events & Tournaments to your GetSporty App. Also, Find your dream sports Quota jobs In India.">
<meta name="keywords" content="Sports Jobs,Sports Jobs in India,Sports Quota Jobs,Sports Quota Jobs in India,Sports Trials,Sports Events in my city,Sports tournaments in my city">
<meta property="og:image" content="https://getsporty.in/23376596_1450074778394787_4309845126431335508_n (1).png">
@endsection
@section('content')
<?php $value = Cookie::get('visit_event'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    var visit_event = '<?php echo $value; ?>';
    
    if(visit_event != '1')
    {
      $("#popup").hide().fadeIn(1000);
    }
    
    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup").fadeOut(1000);
    });
    <?php
if (env('APP_ENV') === 'production') {
?>  
// if(sec == 'http')
//         {
//           window.location.href = 'https://getsporty.in';
//         }

<?php }?>
});
</script>
<!-- <style type="text/css">
  div.main-text {overflow-x: hidden;width: 800px;} 
</style> -->
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
              <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
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
                <!-- <section class="item">
                    <img src="public/img/gs.png" alt="Chania">                
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="ban-pera">
                                <h1>Lorem ispum is dummy </h1>
                                <h3>Lorem ispum is dummy text.</h3>
                                <button type="button" class="btn btn-read">Read More</button>
                            </div>
                        </div>
                    </div>
                </section> -->
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


                          <iframe width="100%" height="315" src="https://www.youtube.com/embed/bVcfL6KtFfs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


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
                  <h3>Services</h3>
<!--                    <p>Learn more about this feature packed App</p>
 -->                    </div>
                    <div class="owl-carousel owl-theme">
                     <div class="item">
                      <div class="box-app">
                        <div class="circle-box">
                          <img src="public/img/feature-img.svg">
                          </div>
                         <h4>Events</h4>
                       <p> Never miss out on Sports Trials or coaching camps. Get first-hand information on your GetSporty App.</p>
                       </div>
                        </div>
                        <div class="item">
                     <div class="box-app">
                       <div class="circle-box">
                        <img src="public/img/feature-img2.svg">
                         </div>
                        <h4>Tournaments</h4>
                       <p>Get regular updates about the upcoming Sports Tournaments in your city.</p>
                      </div>
                     </div>
                   <!-- <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                      <img src="public/img/feature-img3.svg">
                        </div>
                        <h4>Coach</h4>
                       <p>Want to become a professional player? For the best result, contact the best coach and train harder and smarter</p>
                       </div>
                     </div> -->
                  <!-- <div class="item">
                    <div class="box-app">
                      <div class="circle-box">
                        <img src="public/img/feature-img4.svg">
                         </div>
                         <h4>Connect</h4>
                        <p>Contact the best professionals, trainers or the coaches to help you refine your skills and be the player that you have always dreamt about</p>
                        </div>
                      </div> -->
                      
                      <div class="item">
                      <div class="box-app">
                       <div class="circle-box">
                             <img src="public/img/Job_Listing.png">
                          </div>
                             <h4>Job Listing</h4>
                             <p>A unique platform dedicated only to Sports-based Jobs. Browse and apply to thousands of Sports Jobs.</p>
                             <!-- <p>Find your dream sports job. Browse through all the latest sports jobs in the Goverment or private sector through our specially devoted "Sports Job Portal"</p> -->
                      </div>
                  </div>
                <!-- <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/assessment.png">
                      </div>
                         <h4>Assessment</h4>
                         <p>Get your daily performance assessed by professionals or be the master of your own training sessions</p>
                    </div>
                </div> -->
                <!-- <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/resources.png">
                      </div>
                         <h4>Resources</h4>
                         <p>Not an everyday content but a fearsome approach to take on the state of Indian sports and a complete guide to reveal the path for sports enthusiasts to reach the pinnacle of their sport</p>
                    </div>
                </div> -->
                <!-- <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/training_Log.png">
                      </div>
                         <h4>Training Log</h4>
                         <p>Track your workouts, save your history and manage your performance with this dedicated training log</p>
                    </div>
                </div> -->
                <!-- <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/post_Results.png">
                      </div>
                         <h4>Post Results</h4>
                         <p>Give yourself remarks and compare your last day's performance with your recent results</p>
                    </div>
                </div> -->
                <!-- <div class="item">
                    <div class="box-app">
                     <div class="circle-box">
                         <img src="public/img/parent.png">
                      </div>
                         <h4>Parent</h4>
                         <p>Book an upcoming event or tournament or just hire a personal trainer or coach for your child. Keep a tab on your ward's performance through this unique feature</p>
                    </div>
                </div> -->
              </div>
        </div>
                </div>
         <div class="clearfix margin15"></div>
         <!-- HIDE THE ARTICLE SECTION AS PER REQUIREMENT ON 12/11/2018 -->
        
        <!-- <section class="testimonials resourceSec" id="slider-bg">
               <div class="container relative" id="latest">
                  <div class="row pad15">
                      <div class="white-heading">
                          <h3>Latest resources</h3>
                           <p>See what’s included in the App</p>
                           <div class="subTitle" style="color: #b3b3b3;">Sports sector is one of the fastest growing industries not only in India but across the world. The sports sector is worth around 750 Billion dollars and in India alone, this industry is expected to great.<a href="latest-sports-news-resources.html">Read more....</a></div>
                      </div>
                      <div id="customers-testimonials" class="owl-carousel">
                 

                            @foreach($name['resources'] as $value)
                            <section class="item">
                              <div class="img-box"><img src="{{config('constant.IMAGE_URL')}}/resources/{{ $value->image }}"></div>
                              <div class="white-b">
                                  <h4>{{$value->title}}</h4>
                                  <p>{{$value->summary}}</p>
                                  <div class="readMoreBtn"><a href="article-detail/{{$value->id}}">Read More</a> </div>
                              </div>
                          </section>
                            @endforeach                                                                
                      </div>
                      
                       <a href="latest-sports-news-resources.html" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
                                     
                  </div>
            </div>
        </section> -->
         <!-- HIDE THE ARTICLE SECTION AS PER REQUIREMENT ON 12/11/2018 -->
              <!--   <div class="relative">
                  <div class="blue-bg"></div>
                    </div> -->
        <div class="clearfix"></div>
        <section class="testimonials" style="background-color:#eee; ">
              <div class="container jobSecHome commnStyle" id="job">
              <div class="row pad15">
                <div class="heading-center"> <h3>Sports Jobs in India</h3>  
                  <p>Learn more about this feature packed App</p> 
                  <div class="subTitle">We are always gratified to live in a country like India, where sports has an approach to connect people through the availability of sports jobs in India. Cricket is considered as a religion, football is a way of life and hockey highlights secularism.<a href="/sports-jobs-in-india.html">Read More...</a>
<!-- Sports jobs in India are also making an identity at various levels, most importantly in cricket, tennis, hockey, athletics and chess. There is a wide range of sports job in India in which an ample number of opportunities are available to give a boost to your career.
Vaguely, you can treasure your dream job through our website and can conveniently browse through all the latest sports jobs in the government or private sector.Indeed, India as a nation is a breeding ground for sports jobs. Though by having a sports jobs in India you can be the part of taking India to both national and international levels.
So, if you are passionate about sports and want to handle the business side of the game then there are exciting career options for you of having sports in India available on our website and can take the first step towards your fantasy world.
 --></div>
                </div>
                  <div id="customers-testimonials2" class="owl-carousel">
                  @foreach($name['job'] as $value)
                     <section class="item">
                        <div class="img-box"><img src="{{config('constant.IMAGE_URL')}}job/{{ $value->image }}"></div>
                        <div class="white-b">
                           <h4>{{$value->title}}</h4>


<?php
$datetime1 = new DateTime();
$datetime2 = new DateTime($value->date_updated);
$interval = $datetime1->diff($datetime2);
$day = $interval->format(' %a Days ago ');
if($day == ' 0 Days ago ')
{
  $day = 'Today';
}
?>

                           <p> Posted  : <span> {{ $day }} </span></p>
                           <p> Place  : <span> {{$value->org_city}} </span></p>   
                           <p> Organisation Name  : <span> {{$value->organisation_name}} </span></p>
                            <?php $job_url_title = explode(' ',$value->title);$job_url_title = stripslashes(str_replace('/', '',  implode('-',$job_url_title))); ?>
                           <div class="readMoreBtn"><a href="job-detail/{{$value->id}}/{{$job_url_title}}">Read More</a> </div>                         
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
                 <a href="/sports-jobs-in-india.html" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
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
   
      <div class="clearfix sportTournamentSec">

          <section class="testimonials" id="slider-bg" style="height: 768px !important">
              <div class="container" id="event">
                  <div class="row pad15">
                      <div class="w-h" style="margin: 0;"><h3>Sports event in India</h3><p>sports events and Trials listing</p>
                          <div class="subTitle main-text" style="color: #b3b3b3;">India is scrutinize as a country of teeming popular sports events and their universality is also measured by the regional prominence. While cricket is among one of the most popular sports events in India, the other prominent sports events in India include Football, Hockey, Wrestling, Badminton, Tennis, Chess, Kabaddi, Snooker and boxing.<a href="{{ url('/sports-events-in-india.html') }}">Read More...</a>
<!-- Aloof from national level sports events, India has also hosted several International sports events such as Asian Games during the year 1951 and 1982, 2010 Hockey World Cup and 2010 Commonwealth Games. However, the year 2017 has brought India to the eminence as they hosted FIFA U-17 World Cup and set high standards of the endowment.
Overall, sports events in India are always amusing to unite with. Every year we all anxiously wait to receive the sports events calendar so we can block our agenda and plan our schedule, travel in advance. Consequently, for the sports events calendar, you don’t have to rush anywhere we will bear you to the latest updates on all the big sports events in India. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone through our website hassle-free.
. --></div>
                      </div>
                      <div class="clearfix margin20"></div>
                      <div id="customers-testimonials3" class="owl-carousel">

                      @foreach($name['event'] as $value)

                        <section class="item">
                          <div class="img-box"><img src="{{config('constant.IMAGE_URL')}}event/{{ $value->image }}"></div>
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
                               <?php $event_url_title = explode(' ',$value->name);$event_url_title = stripslashes(str_replace('/', '',  implode('-',$event_url_title))); ?>
                              <div class="readMoreBtn"><a href="event-detail/{{$value->id}}/{{$event_url_title}}">Read More</a> </div> 
                          </div>
                        </section>
                    @endforeach   

                   
                 
                      </div>



                      <a href="{{ url('/sports-events-in-india.html') }}" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
                  </div>
              </div>
          </section>  
      </div>


      <div class="clearfix sportTournamentSec">
          <section class="testimonials commnStyle">
              <div class="container" id="event">
                  <div class="row pad15">
                      <div class="w-h" style="margin: 0;"><h3>Sports Tournaments in India</h3><p>See what’s included in the App</p>
                          <div class="subTitle" style="color: #fff;">Tournaments are basically a competition involving a relatively large number of competitors, all participating in a sport or game. In brief, tournaments is a competition involving a number of matches, each involving a subset of the competitors and the winner is determined based on the combined results of these individual matches <a href="{{ url('/sports-tournaments-in-india.html') }}">Read More...</a></div>
                      </div>
                      <div class="clearfix margin20"></div>
                      <div id="sportTournament" class="owl-carousel">
                        
                        @foreach($name['tournament'] as $value)

                        <section class="item">
                          <div class="img-box"><img src="{{config('constant.IMAGE_URL')}}/tournament/{{ $value->image }}"></div>
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
                              <?php $tournament_url_title = explode(' ',$value->name);$tournament_url_title = stripslashes(str_replace('/', '',  implode('-',$tournament_url_title))); ?>
                              <div class="readMoreBtn"><a href="tournament-detail/{{$value->id}}/{{$tournament_url_title}}">Read More</a> </div> 
                          </div>
                        </section>
                       @endforeach    
                      </div>
                      <a href="sports-tournaments-in-india.html" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
                  </div>
              </div>
          </section> 
      </div>
    

    <div class="clearfix sportTournamentSec">
    <section class="testimonials" id="slider-bg" style="height: 768px !important">
               <div class="container relative" id="latest">
                  <div class="row pad15">
                      <div class="white-heading">
                          <h3>Sports Trials In India</h3>
                           <p>See what’s included in the App</p>India is basically descrize as a country of sports. We have a huge history of sports events, tournaments but now colleges and universities are organizing sports trials so that people from sports quota can get a chance to play for India through different sports trials such as cricket trials and football trials <a href="sports-trials-in-india.html">  Read more.... </a></div>
                      </div>
                      <div id="customers-testimonials" class="owl-carousel">
                 

                            @foreach($name['trial'] as $value)
                            <section class="item">
                              <div class="img-box"><img src="{{config('constant.IMAGE_URL')}}event/{{ $value->image }}"></div>
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
                              <?php $trial_url_title = explode(' ',$value->name);$trial_url_title = stripslashes(str_replace('/', '',  implode('-',$trial_url_title))); ?>
                              <div class="readMoreBtn"><a href="event-detail/{{$value->id}}/{{$trial_url_title}}">Read More</a> </div> 
                          </div>
                          </section>
                            @endforeach                                                                
                      </div>
                      
                       <a href="sports-trials-in-india.html" class="text-center" style="display: inherit;"><button type="button" class="btn btn-more">View All</button></a>
                                     
                  </div>
             </section></div>

       <div class="clearfix sportTournamentSec">
       <section class="testimonials" id="partner-bg">
               <div class="container relative" id="latest">
                  <div class="row pad15">
                      <div class="white-heading">
                          <h3>OUR PARTNERS</h3>
                          </div>
                      </div>
                      <div id="customers-testimonials" class="owl-carousel">
                  <div class="item">
                       <a href="javascript:void(0)">
                   <img src="public/img/partners/MPFC.jpg">
                  <span><b><h5>Minerva Punjab, Football club<h5></b></span>
                   </a>
                  </div>
                  <div class="item">
                       <a href="javascript:void(0)">
                   <img src="public/img/partners/MSC.png">
                   <span><b><h5>Madhya Bharat, Sports Club<h5></b></span>
                   </a>
                  </div><div class="item">
                       <a href="javascript:void(0)">
                   <img src="public/img/partners/SFCBU.jpg">
                   <span><b><h5>Shirsh Bihar United, Football Club<h5></b></span>
                   </a>
                  </div>
                  <div class="item">
                       <a href="javascript:void(0)">
                   <img src="public/img/partners/SHFC.jpg">
                   <span><b><h5>Shivanand Haryana Football Club<h5></b></span>
                   </a>
                  </div>
                  <div class="item">
                       <a href="javascript:void(0)">
                   <img src="public/img/partners/SJFC.jpg">
                   <span><b><h5>Shivansh Jhaarkhand Football Club<h5></b></span>
                   </a>
                  </div>                                                                    
                      </div>
                      
                                     
                  </div>
             </section></div>
          <!-- <section class="mediaSecHome">
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
          </section> -->
       <!--  <div class="relative">
          <div class="phone-img">
            <img class="img-responsive" src="img/iphone-img.jpg">
             </div> 
              </div> -->
         
           <div class="testimonial-bg">
             
               <div class="container">
                <div class="row">
                  <div class="heading-center h3">
                  <h3>Testimonials</h3>
                 </div>
                 <div class="owl-carousel owl-theme">
                 

                 <div class="item">
                       <a href="javascript:void(0)">
                   <img src="public/img/tmnl1.png">
                   <i><h4>"I have got selected in Punjab United FC Trials. Behind my success, GetSporty has played an important role. Thankyou for your Support!"</h4></i>
                   <span><b><h5>Ishwar Anjana, Football Player from Indore<h5></b></span>
                    </a>
                     </div>
 
                      <div class="item">
                       <a href="javascript:void(0)">
                   <img src="public/img/tmnl3.jpeg">
                   <i><h4>"I really liked this website.  Thanks for your kind support throughout the trials"</h4></i>
                   <span><b><h5>Roshan C. Paslein, A football Player from Assam<h5></b></span>
                    </a>
                     </div>
                     


                     <div class="item">
                       <a href="javascript:void(0)">
                   <img src="public/img/tmnl2.jpeg">
                   <i><h4>"I think Getsporty is the best experience because they provide a personal guidance to a Player and guide them regarding what is right and what is wrong.
                    They provide all the information about trials in various locations in India. Getsporty having a team which constantly motivates to do better. 
                    Thank you"</h4></i>
                   <span><b><h5>Neeraj Kashyap, Football Player from Hardoi<h5></b></span>
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
                          <p><img src="public/img/mail.svg"> info@getsporty.in</p>
                          </div>
                  </div>

                  <div class="clearfix margin20"></div> 
              </div>
              </div>
          </section> 
          <script src="{{asset('public/js/jquery.event.move.js')}}"></script>
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
                    autoplayHoverPause: true,
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
                    autoplayHoverPause: true,
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
                    items: 3,
                    margin: 0,
                    autoplay:true,
                    dots:false,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
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
                autoplayHoverPause: true,
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
                autoplayHoverPause: true,
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
                    items: 3,
                    nav: true,
                   
                
                  }
                }
              })
            })
          </script> 



  <script>

      $(document).ready(function() {
      
         
         // $('#apply').on('click',function(){
             
         //     
    

         // });
       
      
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
            url     : sec+"://getsporty.in/liveapp/getSportyLite/contact_us.php?act=contact_us&token_id=dhs2016",//"{{url('/contact')}}",
            type    : $(this).attr('method'),
            dataType: 'json',
            data    : JSON.stringify(data),
            success : function( data ) {
                         alert_msg('Thanks for writing us');
            },
            error   : function( xhr, err ) {
                         alert_msg('Something went wrong!!');     
            }
        });    
        $('.loading').hide();
        return false;
        
  }

    </script> 

          

@section('disclaimer')
<div style="font-size: 8px"><p>Disclaimer:  The information contained in this website is for general information purposes only. The information is provided by GetSporty and while we endeavour to keep the information up to date and correct. Through this website you are able to link to other websites which are not under the control of GetSporty. We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.We make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information contained on the website for any purpose.</p></div>
@endsection
@stop          