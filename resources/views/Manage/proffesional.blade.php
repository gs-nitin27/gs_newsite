<?php 

if($_SERVER['REMOTE_ADDR'] == '182.69.203.174' || $_SERVER['REMOTE_ADDR'] == '::1')
{

if(Session::has('userdata'))
   { 
      $value = session('userdata');
      Redirect::to('manage/dashbo')->send();
   }
?>

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/fav.png"> -->
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login</title>
  
  <!-- Bootstrap -->
  <link href="{{asset('public/manage_assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/manage_assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('public/manage_assets/css/font-awesome.min.css')}}" rel="stylesheet">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
  <script src="{{asset('public/manage_assets/js/bootstrap.min.js')}}"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <script src="{{asset('public/manage_assets/js/common.js')}}"></script>
  
<meta name="google-signin-client_id" content="<?php echo config('constant.GOOGLE_ID');?>">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{asset('public/manage_assets/css/style2.css')}}" rel="stylesheet">
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
  <a class="navbar-brand logo" href="{{url('/')}}"><img class="img-responsive" src="{{asset('public/img/logo.png')}}"></a>  
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
<body style="background-image:url({{asset('public/manage_assets/img/login-bg.jpg')}});height: 100vh;background-repeat: no-repeat; background-size: cover;">



  <div class="container">
    <div class="col-sm-12">      
      <div class="row rowtop">

        <!-- <div class="col-sm-6 pad28">
          <h1>Login into the World of Getsporty.</h1>
          <p >Together, let us take sports in India to the next level.</p> 
        </div> -->

        

        <div class="col-sm-6 text-center">
           <div class="login logInDiv">
               <div class="">
                      <p class="login_heading">GETSPORTY</p>
                      <div class="form-group form_1">
                       
<!--                           <button type="button" class="btn btn-danger ">
                          <span  class="g-signin2 loginBtn loginBtn--google" data-onsuccess="onSignIn" style="width:254px;"></span> 
                        </button>
 -->                      
                      </div>

                        <p style="color: black">OR</p>

                      <div class="form-group form_2">
                         <!--   <div class="fb-login-button" data-width="104" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" onlogin="checkLoginState()" style="display: block" hidden></div>
                        </button> -->
                      
                      </div>

                      <!--  <p style="color: black">Lorem Ipsum has been the industry's standard dummy text ever.</p> --> 
               </div>
            </div>
        </div> 
      </div>
    </div>
  </div>
</body>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
<script src="{{asset('public/manage_assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/manage_assets/js/Managelogin.js')}}"></script>
<script type="text/javascript">
    setTimeout(function() {
              window.location = '<?php echo env('SESSION_DOMAIN'); ?>';
        }, 3000);   
</script>
</html><?php }
else
{
   Redirect::to('/')->send();
}
?>