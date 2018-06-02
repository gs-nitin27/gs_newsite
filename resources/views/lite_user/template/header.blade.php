<?php 

$value = session('lite_user_data');
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

<script type="text/javascript">
    var url = '<?php echo config('constant.ENV_URL')?>';
    var image_url = '<?php echo config('constant.IMAGE_URL')?>';
    var sess_userid = '<?php echo $userid; ?>';
    var sess_name = '<?php echo $sess_name; ?>';
    var sess_email = '<?php echo $sess_email; ?>';
    var route_url = '<?php echo url('/'); ?>';

</script>
<header class="headerSec">
<div class="loading" style="display: none" id="loading">Loading&#8230;</div>
        <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topNav">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 </button>
                 <div class="logoSec"><a href="{{url('/')}}"><img class="img-responsive" src="{{asset('public/manage_assets/img/logo.png')}}"></a></div>
           <!-- <a class="pull-right toggleBtn" href="#"> <i class="fa fa-bars openSideNav"></i></a> -->
            <center><div class="text-center"><span class="head_title"><i></i></span></div></center>
           <!-- <ul style="float: right;"><li><a href="{{url('/user/logout')}}" onclick="window.localStorage.clear();"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul> -->
           <!-- <div id="mySidenav" class="sideNav">
                

           </div> -->
        </div>
    </header>