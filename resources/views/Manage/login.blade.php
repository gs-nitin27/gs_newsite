<?php 
$url = $_SERVER['REQUEST_URI'];//die;
$param = explode('/', $url);
if($param['4'] == '1')
{
$string = '1';  
}
else
{
$string = base64_decode($param['4']);
}
if(Session::has('userdata'))
   {  $value = session('userdata');
      Redirect::to('manage/dashbo')->send();
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/fav.png">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login</title>
  
  <!-- Bootstrap -->
  <link href="{{asset('manage_assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('manage_assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('manage_assets/css/font-awesome.min.css')}}" rel="stylesheet">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
  <script src="{{asset('manage_assets/js/bootstrap.min.js')}}"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  
<meta name="google-signin-client_id" content="<?php echo config('constant.GOOGLE_ID');?>">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{asset('manage_assets/css/style2.css')}}" rel="stylesheet">
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
 </style>   
<div id="fb-root"></div>
<script>


  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=<?php echo config('constant.FACEBOOK_ID'); ?>';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  </head>
<body style="background-image:url({{asset('manage_assets/img/login-bg.jpg')}});height: 100vh;background-repeat: no-repeat; background-size: cover;">



  <div class="container">
    <div class="col-sm-12">      
      <div class="row rowtop">

        <div class="col-sm-6 pad28">
          <h1>Lorem Ipsum has been industry's standard dummy text since the 1500s</h1>
          <p >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p> 
        </div>

        

        <div class="col-sm-6 text-center">
           <div class="login logInDiv">
               <div class="">
                      <p class="login_heading">GETSPORTY</p>
                      <div class="form-group form_1">
                       
                          <button type="button" class="btn btn-danger ">
                          <span  class="g-signin2 loginBtn loginBtn--google" data-onsuccess="onSignIn" style="width:254px;"></span> 
                        </button>
                      
                      </div>

                        <p style="color: black">OR</p>

                      <div class="form-group form_2">
                           <div class="fb-login-button" data-width="104" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" onlogin="checkLoginState()" style="display: block" hidden></div>
                        </button>
                      
                      </div>

                       <p style="color: black">Lorem Ipsum has been the industry's standard dummy text ever.</p> 
               </div>
            </div>
        </div> 
      </div>
    </div>
  </div>
</body>
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
 var url_param = '';
 $(document).ready(function(){
   var app_id = '<?php echo config('constant.FACEBOOK_ID'); ?>';
   var app_version = '<?php echo config('constant.FACEBOOK_VERSION'); ?>';
   window.fbAsyncInit = function() {
    FB.init({
      appId            : app_id,
      autoLogAppEvents : true,
      xfbml            : true,
      version          : app_version
    });
  };
 if(url_param != '1')
  {
   url_param = '<?php echo $string; ?>';
   url_param = url_param.split('|');
  }
 
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
{  $('.loading').show();
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
    // headers: {
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    // },
    url:  url+'/user_access_controller.php?act=gs_login',
    data: data,
    dataType: "text",
    success: function(result) {
      $('.loading').hide();
      var result  = JSON.parse(result);
      if(result.status==4){// for Successfull login of athlete and parent
       alert(result.status + JSON.stringify(result));return;
       windlow.location.href("{{url('/')}}");
    }
    if(result.status==1)
    {      // for Successfull login
      if(result.data.prof_id == '5')  // 5 for job creator
      {
      localStorage.setItem('userdata',JSON.stringify(result.data));
      set_data();
      }else
      {
        alert("Invalid user");
      }

  }
    else if(result.status==2) // for updating email and other info
    { 
      result.status = result.status;
      localStorage.setItem('userdata',result.data);
      window.location.href = "<?php echo url('/'); ?>"+"/manage/register";
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
      var _token = $('input[name="_token"]').val();
      $.ajax({
      async:false,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{url('/manage/setdata')}}",
      method:"GET",
      dataType:"text",
      data:'data='+localStorage.getItem('userdata'),
      success:function(result)
      {
          if(result != 0)
        {
          if(url_param == '1')
          {
           window.location.href = "<?php echo url('/'); ?>"+"/manage/dashbo";
          }
          else
          { 
           var id = "<?php echo base64_encode($string); ?>";
           window.location.href = "<?php echo url('/'); ?>"+"/manage/create_update/"+id;
          }
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