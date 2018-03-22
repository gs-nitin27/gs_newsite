
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
            <a class="navbar-brand logo" href="{{url('/')}}"><img class="img-responsive" src="{{asset('img/logo.png')}}"></a>
           </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="navbar-collapse collapse" id="navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right text-uppercase">
              <!-- <li class="active"><a href="index.php">Home</a></li> -->
              
              <!-- <li><a href="#getApp" data-toggle="modal">Get app  </a></li> -->
              <li><a href="{{url('/event')}}" >Event </a></li>
              <li><a href="{{url('/job')}}">Job</a></li>
              <li><a href="{{url('/tournament')}}">Tournaments</a></li>
              <li><a href="{{url('/article')}}">Article</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Bussiness <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="" href="{{url('/landing-job')}}">  Job Landing </a></li>
                    <li><a class="" href="{{url('/landing-event')}}">  Event Landing  </a></li>
                    <li><a class="" href="{{url('/tournament')}}"> Tournament </a></li>
                </ul>
              </li>

              <li ><a href="{{url('/aboutus')}}">About us</a></li>

              

            <!--     <li><a href="{{url('/support')}}">Contact Us</a></li> -->

          </ul>
           </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
         </nav><!-- /.navbar -->
       <!-- <div class="full-banner bannerBgSec" id="top">
          <div class="container">
       	    <div class="row">
       	      <div class="col-md-12">
       		    <div class="ban-pera">
       			  <h1>Lorem ispum is dummy </h1>
       			  <h3>Lorem ispum is dummy text.</h3>
       			  <button type="button" class="btn btn-read">Read More</button>
         	     </div>
                </div>
               </div>
              </div>
             </div> -->
