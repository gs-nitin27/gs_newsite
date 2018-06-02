<div class="loading" hidden>Loading&#8230;</div>
<nav class="navbar navbar-default bg0 affix menuSec" data-spy="affix" data-offset-top="10">
          <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" aria-controls="navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
            <a class="navbar-brand logo" href="{{url('/')}}"><img class="img-responsive" src="{{asset('public/img/logo.png')}}"></a>
           </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="navbar-collapse collapse" id="navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right text-uppercase">
              <li><a href="{{url('/latest-sports-news-resources.html')}}">Article</a></li>
              <li><a href="{{url('/sports-jobs-in-india.html')}}">Job</a></li>
              <li><a href="{{url('/sports-events-in-india.html')}}" >Event </a></li>
              <li><a href="{{url('/sports-tournaments-in-india.html')}}">Tournament</a></li>
              <li><a href="{{url('/sports-trials-in-india.html')}}">Trial</a></li>
              <li ><a href="{{url('/aboutus')}}">About us</a></li>
              <li ><a href="{{url('/career')}}">Careers</a></li>
              <li ><a href="{{url('/')}}/user/login/{{base64_encode('2/198')}}" style="border: 5px solid #fff;border-radius: 12px;padding: 16px 8px 15px 8px;">SUMMER CAMP</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Partners <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="" href="{{url('/partner.html')}}">Partner With us</a></li>
                    <li><a class="" href="{{url('manage/login/')}}<?php echo '/'.base64_encode(1); ?>">Partner Login</a></li>
                </ul>
              </li>
            </ul>
           </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
         </nav><!-- /.navbar -->
