<?php 
$value = session('userdata');
$sess_data = json_decode($value);//print_r($sess_data);die;
$userid = $sess_data->userid;
$sess_name = $sess_data->name;
$sess_email = $sess_data->email;
$org_name = $sess_data->org_data->org_name;
$org_id = $sess_data->org_data->org_id;
//print_r($sess_data);//die;
?>
<style type="text/css">
    span.head_title{
    font-size: 46px;
    font-style: italic;
    float: left;
    font-family: unset;
    margin-top: 1%;
    margin-left: 1%;
    font-weight: 200;
    }
    </style>
<script type="text/javascript">
    var url = '<?php echo config('constant.ENV_URL')?>';
    var image_url = '<?php echo config('constant.IMAGE_URL')?>';
    var sess_userid = '<?php echo $userid; ?>';
    var sess_name = '<?php echo $sess_name; ?>';
    var sess_email = '<?php echo $sess_email; ?>';
    var route_url = '<?php echo url('/'); ?>';
    
   // var org_name ='<?php //echo $org_name;?>';
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
            <center><div class="text-center deshName"><span class="head_title"><i>Job</i></span></div></center>
           <div id="mySidenav" class="sideNav">
                <ul>
                    <li><a href="#"><i class="fa fa-times pull-right close_mySidenav"></i></a></li>
                    <li><a href="{{url('/manage/job/transaction_list')}}"><i class="fa fa-inr"></i>Transaction</a></li>
                    <li><a href="#"><i class="fa fa-briefcase"></i>Job</a></li>
                    <li><a href="#"><i class="fa fa-bell"></i>Notification</a></li>
                    <li><a href="{{url('/manage/login/1')}}" onclick="window.localStorage.clear();"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul>
           </div>
        </div>
    </header>
   