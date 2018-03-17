<?php $value = session('userdata');
$data = json_decode($value);
$userid = $data->userid;
//print_r($data);die;
?>
<script type="text/javascript">
    var url = '<?php echo config('constant.ENV_URL')?>';
    var image_url = '<?php echo config('constant.IMAGE_URL')?>';
    var sess_userid = '<?php echo $userid; ?>';
   // var route_url = '<?php //echo url('/'); ?>';
 </script>
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