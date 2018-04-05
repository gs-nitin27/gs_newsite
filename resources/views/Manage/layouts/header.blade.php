<?php 
$value = session('userdata');
$sess_data = json_decode($value);//print_r($sess_data);die;
$userid = $sess_data->userid;
$sess_name = $sess_data->name;
$sess_email = $sess_data->email;
$sess_image = $sess_data->user_image;
$crt_user_id  = base64_encode($userid);
if(!empty($sess_data->org_data))
{
$org_name = $sess_data->org_data->org_name;
$org_id = $sess_data->org_data->org_id;
}else
{
$org_name = '';
$org_id = '';    
}
//print_r($sess_data);//die;
?>
<style type="text/css">
    span.head_title{
    float: left;
    color: white;
    font-size: 33px;
    font-family: unset;
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
<div class="loading" hidden>Loading&#8230;</div>
<header class="headerSec">
        <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topNav">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 </button>
                 <div class="logoSec"><a href="{{url('/manage/dashbo')}}"><img class="img-responsive" src="{{asset('public/manage_assets/img/logo.png')}}"></a></div>
           <a class="pull-right toggleBtn" href="#"> <i class="fa fa-bars openSideNav"></i></a>
            <center><div class="text-center"><span class="head_title"><i>Jobs</i></span></div></center>
           <div id="mySidenav" class="sideNav">
                <ul><img src="{{$sess_image}}" height="50" width="50" pull-right>   
                    <li><a href="{{url('manage/my_profile/')}}<?php echo '/'.$crt_user_id; ?>"><i class="glyphicons glyphicons-user pull-right close_mySidenav"></i>{{$sess_name}}</a></li>
                    <li><a href="#"><i class="fa fa-times pull-right close_mySidenav"></i></a></li>
                    <li><a href="{{url('/manage/job/transaction_list')}}"><i class="fa fa-inr"></i>My transaction</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-mobile"></i>Get App</a></li>
                    <!-- <li><a href="#"><i class="fa fa-briefcase"></i>Job</a></li>
                    <li><a href="#"><i class="fa fa-bell"></i>Notification</a></li> -->
                    <li><a href="{{url('/manage/logout')}}" onclick="window.localStorage.clear();"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul>
           </div>
        </div>
    </header>
   