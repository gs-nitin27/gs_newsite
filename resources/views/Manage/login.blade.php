<!DOCTYPE html>
<html>
<head>
<title>Getsporty::Manage</title>
<link href="{{asset('manage_assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('manage_assets/css/style.css')}}" rel="stylesheet">
<meta name="google-signin-client_id" content="<?php echo config('constant.GOOGLE_ID');?>">
<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
   .btn-google {
    background-color: #dd4b39;
    background-image: url(http://vagnersantana.com/social-signin-btns/img/google.svg);
}.btn-si {
    background-position: 1em;
    background-repeat: no-repeat;
    background-size: 2em;
    border-radius: 0.5em;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 1em;
    height: 4em;
    line-height: 1em;
    padding: 0 2em 0 4em;
    text-decoration: none;
    transition: all 0.5s;
}
.social_login{
border: 0.5px solid #ccc;
    padding: 28px 27px 21px 37px;
    /* align-items: center; */
    /* float: inherit; */
    /* vertical-align: middle; */
    /* margin-left: 0%; */
    position: relative;
    left: 130%;


} </style>   
</head>
<script type="text/javascript" src="{{asset('manage_assets/js/set_user_data.js')}}"></script>
<body>
<div class="background">
<div class="loading" id="imagelodar">Loading&#8230;
<div class="loader">
<div class="inner one"></div>
<div class="inner two"></div>
<div class="inner three"></div>
</div>
</div>
<div class="section"></div>
<div style="text-align:center; ">
<main>
<div class="section"></div>
<div class="section"></div>
<div class="container-fluid" style="margin-top: 6%">
<div class="row-fluid" >
<div class="col-md-offset-4 col-md-4" id="box" style="background-color:#2698ed; ">
<img class="responsive-img" style="width:50%; margin-top: 10%" />              
<hr>  
<div class="form-group" >
<div class="col-md-12">
<div class="input-group" style="margin-left: 21%;">
<button class="loginBtn loginBtn--google">
<span  class="g-signin2" data-onsuccess="onSignIn" style="width:254px;"></span> Sign in with Google
</button>
</div>
</div>
</div>
<div class="form-group" style="margin-top: 15%;margin-bottom:40%;margin-left: 18%;">
<div class="col-md-12">
<div class="input-group">
<button class="loginBtn loginBtn--facebook">
<span class="fa fa-facebook"></span> Sign in with Facebook
</button>
</div>
</div>
</div>
<hr></body>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
<script src="{{asset('manage_assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('manage_assets/js/Managelogin.js')}}"></script>
<script type="text/javascript">
var app_id = '<?php echo config('constant.FACEBOOK_ID'); ?>';
var app_version = '<?php echo config('constant.FACEBOOK_VERSION'); ?>';

function checkLoginState(){
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });}
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    if (response.status === 'connected') {
      testAPI();
    } else {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }
function testAPI() {
  console.log('Welcome!  Fetching your information.... ');
  FB.api('/me?fields=id,email,first_name,last_name',function(response) {
        console.log(response);
        var email = response.email;
        login(email,response,1)
        console.log('Successful login for: ' + response.name);
     //   document.getElementById('status').innerHTML = "<img src='"+response.picture.data.url+"'>";
      }, {scope:'email'});
  }

 $(document).ready(function(){

/*  gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });*/
        localStorage.clear();
       // console.log(email+nitin);
       $('.g-signin2').click(function(){

        localStorage.setItem("count", 2);
       });
      });
// var data = '{"app":"L","data":{"email":"ntnagarwal27@gmail.com","image":"https://lh3.googleusercontent.com/-6rt_LbRDUJc/AAAAAAAAAAI/AAAAAAAADpU/4GXTlz_Rzbo/photo.jpg","name":"nitin agarwal"},"device_id":"dB0qMexOQec:APA91bH4S4kVMNSpKgtt7ZPu0Mxbf8RC-9GSvC9_8C3dNdTbO_QT0IagAY8VLkoB_g_EdwQnohfxSU4J7UzCS6Ywaa9QGIIjff-EQB20pBSR_njUfzuvrvruFsHfFSCQwzyvvsccsVGr","email":"ntnagarwal27@gmail.com","loginType":"2","password":"","userType":"104"}';

   
function login(emailid,user_data,type)
{  
   var data1 = {
     "email"    : emailid,
     "password" : emailid,
     "data"     : user_data,
     "app"      : 'M',
     "loginType": type,
     "userType" : '103',
     "device_id": ''
     };
     

var url = '<?php echo config('constant.ENV_URL')?>';
var data = JSON.stringify(data1);
console.log(data);
  $.ajax({
    type: "POST",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url:  url+'/user_access_controller.php?act=gs_login',
    data: data,
    dataType: "text",
    success: function(result) {
      var result  = JSON.parse(result);
      if(result.status==4){// for Successfull login of athlete and parent
       alert(result.status + JSON.stringify(result));return;
       //window.location.href = 'https://play.google.com/store/apps/details?id=getsportylite.darkhoprsesport.com.getsportylite&hl=en';//url+"/forms/home";
    }
    if(result.status==1){      // for Successfull login
      localStorage.setItem('userdata',JSON.stringify(result.data));
      set_data();
      
    }
    else if(result.status==2) // for updating email and other info
    { 
      result.status = result.status;
      localStorage.setItem('userdata',result.data);
      window.location.href = url+"/forms/new_registration";
      alert(result.status + JSON.stringify(result.data));//return;
    }
    else if(result.status==3) // for creating new record
    { 
      localStorage.setItem('userid',result.data.userid);
      localStorage.setItem('userdata',data);
      console.log(JSON.stringify(data));
      alert(result.status + JSON.stringify(data));//return;
      window.location.href = "<?php echo url('/'); ?>"+"/manage/register";
    }
   }
  });
 }


 function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        
        if( localStorage.getItem("count") == 2)
        {
         var email = profile.getEmail();
         var user_data = {"name":profile.getName(),"image":profile.getImageUrl(),"email":profile.getEmail(),"id":profile.getId()};
           localStorage.setItem('data2',user_data);
           login(email,user_data,2);
        }
         else
        {
          return false;
        }
      }
    function set_data(){
      $.ajax({
      async:false,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{url('/manage/setdata')}}",
      method:"POST",
      dataType:"text",
      data:localStorage.getItem('userdata'),
      success:function(result)
      {
        if(result != 0)
        {
          window.location.href = "<?php echo url('/'); ?>"+"/manage/dashbo";
        }
        else
        {
          alert('server Error');
        }
        //alert(JSON.stringify(result));
      } 

    });
  }
</script>
</html>
