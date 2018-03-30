@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
<!-- {{print_r($data)}} -->
<?php //die; ?>
<?php $basic  = $data['basic'][0]; ?>
<?php if(!empty($data['detail']))
  {
   $detail = $data['detail'][0];
  }
else
  {
   $detail = '';
  }
  if($basic->user_image== '')
  { if($basic->gender == 'FeMale' || $basic->gender == 'F')
    {
      $image = config('constant.RMT_URL').'/female.jpg';
    }
    else
    {
      $image = config('constant.RMT_URL').'/user.jpg';
    }
  }
  else
  {
    $image = $basic->user_image;
  }
?>
<link rel="stylesheet" href="https://getsporty.in/portal/assets/css/profile.css">
<script type="text/javascript">
   window.sportsticket = 0;
   window.formalticket = 0; 
   window.ohterticket = 0; 
   window.workexpticket =0;
   window.asplayerticket = 0; 
 </script>
<style type="text/css">

  .jconfirm-box jconfirm-hilight-shake jconfirm-type-green jconfirm-type-animated{
    margin-top : 150px; 
  }
 .card {
    /*margin-top: 20px; */
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
       background-color: #efefef;
}
.card.hovercard .card-background {
    height: 130px;

}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;

}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-name {
    position: absolute;
    bottom: 0px;
    left: 0;
    right: 0;
    top :140px;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}
.input {
  position: relative;
  z-index: 1;
  display: inline-block;
  margin: 5px;
  width: calc(100% - 2em);
  vertical-align: top;
}

.input__field {
  position: relative;
  display: block;
  float: right;
  padding: 0.8em;
  width: 60%;
  border: none;
  border-radius: 0;
  background: #f0f0f0;
  color: #aaa;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  -webkit-appearance: none; /* for box shadows to show on iOS */
}

.input__field:focus {
  outline: none;
}

.input__label {
  display: inline-block;
  float: right;
  padding: 0 1em;
  width: 40%;
  color: #717070;
  font-weight: 100;
  font-size: 70.25%;
  -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-size: 14px;
}

.input__label-content {
  position: relative;
  display: block;
  padding: 1.6em 0;
  width: 100%;
}

.graphic {
  position: absolute;
  top: 0;
  left: 0;
  fill: none;
}

.icon {
  color: #ddd;
  font-size: 150%;
}
/* Hoshi */
.input--hoshi {
  overflow: hidden;
 
}

.input__field--hoshi {
  margin-top: 1em;
  padding: 0.85em 0.15em;
  width: 100%;   
  background: transparent;
  color: #312a2a;
   font-size: 19.5px;
}

.input__label--hoshi {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 0 0.25em;
  width: 100%;
  height: calc(100% - 1em);
  text-align: left;
  pointer-events: none;
  font-size: 14px;
}

.input__label-content--hoshi {
  position: absolute;
}

.input__label--hoshi::before,
.input__label--hoshi::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: calc(100% - 10px);
  border-bottom: 1px solid #B9C1CA;
}

.input__label--hoshi::after {
  
  border-bottom: 1px solid red;
  -webkit-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
  -webkit-transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
}

.input__label--hoshi-color-1::after {
  border-color: #5f5d5d;
}


.input__field--hoshi:focus + .input__label--hoshi::after,
.input--filled .input__label--hoshi::after {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);

}

.input__field--hoshi:focus + .input__label--hoshi .input__label-content--hoshi,
.input--filled .input__label-content--hoshi {
  -webkit-animation: anim-1 0.3s forwards;
  animation: anim-1 0.3s forwards;
}

@-webkit-keyframes anim-1 {
  50% {
    opacity: 0;
    -webkit-transform: translate3d(1em, 0, 0);
    transform: translate3d(1em, 0, 0);
  }
  51% {
    opacity: 0;
    -webkit-transform: translate3d(-1em, -40%, 0);
    transform: translate3d(-1em, -40%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: translate3d(0, -40%, 0);
    transform: translate3d(0, -40%, 0);
  }
}

@keyframes anim-1 {
  50% {
    opacity: 0;
    -webkit-transform: translate3d(1em, 0, 0);
    transform: translate3d(1em, 0, 0);
  }
  51% {
    opacity: 0;
    -webkit-transform: translate3d(-1em, -40%, 0);
    transform: translate3d(-1em, -40%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: translate3d(0, -40%, 0);
    transform: translate3d(0, -40%, 0);
  }
}
.btn-default {
    color: white;
    background-color: #2bb1ee;
    border-color: #efefef;
}
.btn-default:hover{
  color: white;
    background-color: #2bb1ee;
    border-color: #efefef;
}



.btn-primary {
    color: white;
    background-color: #ffc107;
    border-color: #ffc107;
    outline-color: transparent;
}
.btn-primary:hover {
    color: #2bb1ee;
    background-color: #ffc107;
    border-color: #ffc107;
    outline-color: transparent;
}
.btn-primary.active, .btn-primary:active, .open>.dropdown-toggle.btn-primary {
    color: white;
    background-color: #ffc107;
    border-color: #ffc107;
    outline-color: transparent;
}
.btn-primary.focus,.btn-default:focus, .btn-primary:focus {
    color: white;
    background-color: #ffc107;
    border-color: #ffc107;
    outline-color: transparent;
}
.btn-default.focus, .btn-default:focus {
    color: white;
    background-color: #ffc107;
    border-color: #ffc107;
    outline-color: transparent;
}
.btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover,.btn-default:active:hover .open>.dropdown-toggle.btn-primary.focus, .open>.dropdown-toggle.btn-primary:focus, .open>.dropdown-toggle.btn-primary:hover {
    color: white;
    background-color: #ffc107;
    border-color: #ffc107;
    outline-color: transparent;
}
  .btn-primary:active:focus {
    color: white;
    background-color: #ffc107;
    border-color: #ffc107;
    outline-color: transparent;
}
.btn-default:active:hover{
    color: #2bb1ee;
    background-color: #ffc107;
    border-color: #ffc107;
    outline-color: transparent;
}


.navv{
  max-height: 70px;
    background-color: #03a9f4;
    padding-bottom: 18px;
    border-radius: 0px;
    webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    color: #fff;
  
    margin-bottom: 0px;
}
.navbar-nav{
  list-style: none;
}
.ulclass{
      float: right;
    list-style: none;
    padding-top: 10px;
    padding-right: 25px;
}
.liclass{
  font-size: 18px;
    color: #fff;
    -webkit-transition: .35s;
    transition: .35s;
    padding-right: 20px;
    position: relative;
    cursor: pointer;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
   
    background: transparent !important ;
}
.liclass:hover, .liclass:focus{
  color:#333;
}
.liclass:active,.licalss:visited{
  color:white;
}

@media (max-width: 768px){
.navbar-nav>li>a {
    padding-top: 0px;
    
}
}
.box-footer{
  margin-bottom: 30px;
}
.panel{
  border-radius: 2px;
}
.btn1,.btn1:active,.btn1:focus,.btn1:focus:active{
      background-color: #f1bc1d;;
    border-radius: 2px;
    border-color: #f1bc1d;;
}
.btn1:hover{
      background-color: #ffc107;
    border-radius: 2px;
    border-color: #ffc107;
}
.panel-primary {
    border-color: #03a9f4;
}
.panel-primary>.panel-heading {
    color: #fff;
    background-color: #03a9f4;
    border-color: #03a9f4;
}
.subbtn{
      background-color: #03a9f4;
    color: white;
    padding: 7px 16px;
    border-radius: 5px;
}
.subbtn,.subbtn:active,.subbtn:focus,.subbtn:focus:active{
      background-color: #14b0f7;
}

@font-face { font-family: GillSans; src: url('../../../font/GillSans.ttf'); } 
body{
  font-family: 'Gillsans',sans-serif;
}
</style>
<div class="w3-light-grey">
<div class="w3-content w3-margin-top" style="max-width:1400px;">
<div class="w3-row-padding">
      <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4" id="fixme">
      <div class="w3-display-container">
      <img src="{{$image}}" style="width:100%" alt="Avatar">
      <div class="w3-display-bottomleft w3-container w3-text-black">
      <h2>{{$basic->name}}</h2>
      </div>
      </div>
      <div class="w3-container">
        <br>
              <strong><i class="fa fa-venus-double margin-r-5"></i>Gender</strong>
              <p class="text-muted">
               {{$basic->gender}}
              </p>
              <hr>
              <strong>
              <i class="fa fa-map-marker margin-r-5"></i>Location</strong>
              <p class="text-muted">{{$basic->location}}</p>
              <hr>
            <strong><i class="fa fa-mobile margin-r-5"></i>Contact No</strong>
            <p>{{$basic->contact_no}}</p>
            <hr>
          <strong><i class="fa fa-futbol-o margin-r-5"></i>Sport</strong>
          <p class="text-muted">{{$basic->sport}}</p>
            <hr>
            <strong><i class="fa fa-calendar-check-o margin-r-5"></i>DOB</strong>
            <p class="text-muted">{{$basic->dob}}</p>
            <strong><i class="fa fa-envelope margin-r-5"></i>Email</strong>
            <p>{{$basic->email}}</p>
            <hr>

@if($basic->prof_id != '' && $detail != '')
            @php 
            $user_detail = json_decode($detail->user_detail);
            @endphp
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Header Details</h2>
            <div class="w3-container">
            @if($basic->prof_id == 1)
            <h5 class="w3-opacity"><b>Rank: </b></h5><p id="academy">{{$user_detail->Header->rank}}</p>
             <hr>
             <h5 class="w3-opacity"><b>Description : </b></h5><p id="description">{{$user_detail->Header->description}}</p>
             <hr>
             <h5 class="w3-opacity"><b>Level : </b></h5><p id="designation">{{$user_detail->Header->level}}</p>
             <hr>
             <h5 class="w3-opacity"><b>Location : </b></h5><p id="location">{{$user_detail->Header->location}}</p>
             <hr>
            @endif
            @if($basic->prof_id != 1)
            <h5 class="w3-opacity"><b>Academy: </b></h5><p id="academy">{{$user_detail->HeaderDetails->acamedy}}</p>
             <hr>
             <h5 class="w3-opacity"><b>Description : </b></h5><p id="description">{{$user_detail->HeaderDetails->description}}</p>
             <hr>
             <h5 class="w3-opacity"><b>Designation : </b></h5><p id="designation">{{$user_detail->HeaderDetails->designation}}</p>
             <hr>
             <h5 class="w3-opacity"><b>Location : </b></h5><p id="location">{{$user_detail->HeaderDetails->location}}</p>
             <hr>
            @endif
            </div>
            

            </div>
            </div>
    <br>
    <!-- End Left Column -->
    </div>
    <!-- Right Column -->
       <div class="w3-twothird">
       <input type="hidden"  id="acamedy1" value=" ">
       <input type="hidden"  id="description1" value=" ">
       <input type="hidden"  id="designation1" value="Coach">
       <input type="hidden"  id="location1" value="">
    <!-- </div> -->

@if($basic->prof_id != 1)
                            <!-- NON ATHLETE PROFILE -->
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\ DIV FOR EDUCATION /////////////////////-->  
 
<!-- DIV FOR FORMAL EDUCATION -->
  <div class="w3-container w3-card w3-white">
  <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Formal Education</h2>
   @if(!empty($user_detail->Education->formalEducation))
   @foreach($user_detail->Education->formalEducation as $formal_edu)
      <div class="w3-container">
      <h5 class="w3-opacity"><b>College/Institue : </b></h5><p>{{$formal_edu->organisation}}</p>
      <h5 class="w3-opacity"><b>Degree : </b></h5><p>{{$formal_edu->degree}}</p>
      <h5 class="w3-opacity"><b>Stream : </b></h5><p>{{$formal_edu->stream}}</p>   
      <h6 class="w3-text-teal">From<i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$formal_edu->dateFrom}}</h6>
      @if($formal_edu->tillDate != 0)
      <h6 class="w3-text-teal">To<i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$formal_edu->dateTo}}</h6>
      @else
      <h6 class="w3-text-teal">To<i class="fa fa-calendar fa-fw w3-margin-right"></i>Till Date</h6>
      @endif
      <hr>
      </div>
      @endforeach
      @endif
     </div>
<!-- DIV FOR FORMAL EDUCATION ENDS HERE-->

     <br>
<!-- DIV FOR OTHER CERTIFICATION -->
        <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Other Certification</h2>
        @if(!empty($user_detail->Education->otherCertification))
        @foreach($user_detail->Education->otherCertification as $certification)
        <div class="w3-container">
        <h5 class="w3-opacity"><b>Organisation : </b></h5><p>{{$certification->organisation}}</p>
        <h5 class="w3-opacity"><b>Degree : </b></h5><p>{{$certification->degree}}</p>
        <h5 class="w3-opacity"><b>Stream : </b></h5><p>{{$certification->stream}}</p>   
        <h6 class="w3-text-teal">From<i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$certification->dateFrom}}</h6>
      @if($certification->tillDate != 0)
      <h6 class="w3-text-teal">To<i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$certification->dateTo}}</h6>
      @else
      <h6 class="w3-text-teal">To<i class="fa fa-calendar fa-fw w3-margin-right"></i>Till Date</h6>
      @endif
        <hr>
        </div>
        @endforeach
        @endif
        </div>
  <!-- DIV FOR OTHER CERTIFICATION ENDS-->
       <br>
       
<!-- DIV FOR SPORTS EDUCATION-->       
  <div class="w3-container w3-card w3-white">
  <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Sports Education</h2>
  @if(!empty($user_detail->Education->sportEducation))
  @foreach($user_detail->Education->sportEducation as $sprt_edu)
      <div class="w3-container">
        <h5 class="w3-opacity"><b>Organisation : </b></h5><p>{{$sprt_edu->organisation}}</p>
        <h5 class="w3-opacity"><b>Degree : </b></h5><p>{{$sprt_edu->degree}}</p>
        <h5 class="w3-opacity"><b>Stream : </b></h5><p>{{$sprt_edu->stream}}</p>   
        <h6 class="w3-text-teal">From<i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$sprt_edu->dateFrom}}</h6>
      @if($sprt_edu->tillDate != 0)
      <h6 class="w3-text-teal">To<i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$sprt_edu->dateTo}}</h6>
      @else
      <h6 class="w3-text-teal">To<i class="fa fa-calendar fa-fw w3-margin-right"></i>Till Date</h6>
      @endif
        <hr>
      </div>
      @endforeach
      @endif
      </div>
<!-- DIV FOR SPORTS EDUCATION ENDS-->
<!--\\\\\\\\\\\\\\\\\\\\\\\\\\ DIV FOR EDUCATION /////////////////////-->
       <br>

<br>

      <!-- DIV FOR Work Experience-->
      <div class="w3-container w3-card w3-white w3-margin-bottom" id="exphide">
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
       @if(!empty($user_detail->Experience->workExperience))
       @foreach($user_detail->Experience->workExperience as $exp)
      <div class="w3-container">
      <h5 class="w3-opacity"><b>Organisation Name : </b></h5><p>{{$exp->organisationName}}</p> 
      <h5 class="w3-opacity"><b>Designation : </b></h5><p>{{$exp->designation}}</p> 
      <h5 class="w3-opacity"><b>Description : </b></h5><p>{{$exp->description}}</p> 
      <h6 class="w3-text-teal">From<i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$exp->dateFrom}}</h6>
      @if($exp->tillDate != 0)
      <h6 class="w3-text-teal">To<i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$exp->dateTo}}</h6>
      @else
      <h6 class="w3-text-teal">To<i class="fa fa-calendar fa-fw w3-margin-right"></i>Till Date</h6>
      @endif
      <hr>
      </div>
      @endforeach
      @endif
      </div>
      @endif
      <!-- DIV FOR Work Experience Ends-->
      
      <!--//////////////////// DIV FOR EXPERIENCE ENDS////////////////////////////-->
       @if($basic->prof_id == 1)                       
       <!--///////////////////////////// DIV FOR ATHLETE///////////////////////////////////////////-->
       
       <!--//////////////////// DIV FOR Achievements////////////////////////////-->     
      <div class="w3-container w3-card w3-white w3-margin-bottom" id="exphide"> 
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Achievements</h2>
       @php 
       $val = 0; 
      @endphp
      @if(!empty($user_detail->Achivement->awards))
      <h3>Awards</h3>
       @foreach ($user_detail->Achivement->awards as $award)
      <div class="w3-container">
      <h4>{{$award->nameOfAward}}</h4>
      <h5 class="w3-opacity"><b>Date : </b></h5><p>{{$award->date}}</p> 
      <h5 class="w3-opacity"><b>Description : </b></h5><p>{{$award->description}}</p> 
      <hr>
      </div>
      @endforeach
      @endif
      @if(!empty($user_detail->Achivement->bestResult))
      <h3>Best Results</h3>
      @foreach ($user_detail->Achivement->bestResult as $result)
      <div class="w3-container">
      <h4>{{$result->nameComptation}}</h4>
      <h5 class="w3-opacity"><b>Date of competetion : </b></h5><p>{{$result->date}}</p> 
      <h5 class="w3-opacity"><b>No. of rounds  : </b></h5><p>{{$result->rounds}}</p> 
      <h5 class="w3-opacity"><b>Result : </b></h5><p>{{$result->result}}</p> 
      <hr>
      </div>
      @endforeach
      @endif
      </div>
      <!--//////////////////// DIV FOR Achievements Ends ////////////////////////////-->

      
       <!--//////////////////// DIV FOR Latest Results////////////////////////////-->     
      <div class="w3-container w3-card w3-white w3-margin-bottom" id="exphide"> 
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Latest Result</h2>
       @if(!empty($user_detail->LatestResults))
       @foreach ($user_detail->LatestResults as $latest_result)
      <div class="w3-container">
      <h3>{{$latest_result->nameOfCompetation}}</h3>
      <h5 class="w3-opacity"><b>Date of competetion : </b></h5><p>{{$latest_result->dateOfCompetation}}</p> 
      <h5 class="w3-opacity"><b>Opponent : </b></h5><p>{{$latest_result->opponent}}</p>
      <h5 class="w3-opacity"><b>Result : </b></h5><p>{{$latest_result->result}}</p>
      <h5 class="w3-opacity"><b>Round : </b></h5><p>{{$latest_result->round}}</p> 
      <hr>
      </div>
      @endforeach
      @endif
      </div>
      @endif
      <!--//////////////////// DIV FOR Latest Result Ends ////////////////////////////-->

      @endif
@stop