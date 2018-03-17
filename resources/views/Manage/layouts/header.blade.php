<script type="text/javascript">
    var url = '<?php echo config('constant.ENV_URL')?>';
    var userdata = JSON.parse(localStorage.getItem('userdata'));
</script>
<header class="headerSec">
        <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topNav">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 </button>
                 <div class="logoSec"><a href="{{url('/manage/dashbo')}}"><img class="img-responsive" src="{{asset('manage_assets/img/logo.png')}}"></a></div>
           <a class="pull-right toggleBtn" href="#"> <i class="fa fa-bars openSideNav"></i></a>
            <div class="text-center deshName"><span class="">Job</span></div>
           <div id="mySidenav" class="sideNav">
                <ul>
                    <li><a href="#"><i class="fa fa-times pull-right close_mySidenav"></i></a></li>
                    <li><a href="#"><i class="fa fa-inr"></i>Transaction</a></li>
                    <li><a href="#"><i class="fa fa-briefcase"></i>JOb</a></li>
                    <li><a href="#"><i class="fa fa-bell"></i>Notification</a></li>
                    <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul>
           </div>
        </div>
    </header>