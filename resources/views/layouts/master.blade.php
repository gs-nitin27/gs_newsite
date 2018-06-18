<?php
//die($_SERVER['REMOTE_ADDR'].env('APP_ENV'));die;
if (env('APP_ENV') === 'testing') {
if($_SERVER['REMOTE_ADDR'] == '122.177.142.158' || $_SERVER['REMOTE_ADDR'] == '::1'|| $_SERVER['REMOTE_ADDR'] == '116.75.228.87' || $_SERVER['REMOTE_ADDR'] == '47.30.5.67')  // Check fr testing environment
{

?> 
<?php  
}else
{
 Redirect::to('https://getsporty.in')->send();
}
}  

if(Request::url() == 'http://getsporty.in')
   {  $value = session('userdata');
      Redirect::to('https://getsporty.in')->send();
   }
?>
<html>
     <head>
         <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+'GTM-N3SWFF5';
})(window,document,'script','dataLayer','GTM-N3SWFF5');
</script>
<meta charset="utf-8">
<meta name="google-site-verification" content="1Lz4Ejk_OiCgTSYN7eBGPARofMMt7GyKbJ55yAKzzNs" />
<meta name="google-site-verification" content="RjBA1hezj08g12vWgRFMJjRoPJTTSZ86ubx2Qvo5nig" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

         <meta name="csrf-token" content="{{ csrf_token() }}" />
     	   <title>Getsporty- @yield('pageTitle')</title> 
     	   @include('layouts.head')
         <?php
if (env('APP_ENV') === 'production') {
?>
<script type="text/javascript">
           // $(document).ready(function(){
           //   $('#contactform').hide();
           // });
</script><?php } ?>
     </head>
      <body data-spy="scroll" data-target=".navbar" data-offset="180">
        <header>
           @include('layouts.header')
        </header>
	          
           @yield('content')
      <footer>
           @include('layouts.footer')
        </footer>
         </body>
         <script type="text/javascript">
           var image_url = '<?php echo config('constant.IMAGE_URL');?>';
           var service_url = '<?php echo url('/');?>';
           var easeOutBounce = function (x, t, b, c, d) {
 if ((t/=d) < (1/2.75)) {
      return c*(7.5625*t*t) + b;
    } else if (t < (2/2.75)) {
      return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
    } else if (t < (2.5/2.75)) {
      return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
    } else {
      return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
    }
}

function Animate(elem, propName, duration, start, end)  {
    var start_time = new Date().getTime();
    var interval = setInterval(function() {
      var current_time = new Date().getTime(),
        remaining = Math.max(0, start_time + duration - current_time),
        temp = remaining / duration || 0,
        percent = 1 - temp;

      if (start_time + duration < current_time) clearInterval(interval);

      var pos = easeOutBounce(null, duration * percent, 0, 1, duration),
        current = (end - start) * pos + start;

      elem.style[propName] = current + 'px';
    }, 1);
  }

var elem = document.getElementById('contactform');
var opened = false; 

document.getElementById('contact-button').onclick = function() {
  if (opened) {
    Animate(elem, 'left', 800, 0, -405);    
    opened = false;
  } else {
    Animate(elem, 'left', 800, -405, 0);
    opened = true;  
  }  
}
$('#subs_form').submit(function(e){
    e.preventDefault(); //prevent default action 
    proceed = true;
 $('.loading').show();
var post_url = $(this).attr('action');
var request_method = $(this).attr('method');
var form_data = new FormData(this);
$.ajax({
url:post_url,
headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
type:request_method,
data:form_data,
dataType:"json",
contentType:false,
cache: false,
processData:false
}).done(function(res){
   alert_msg(res.msg);
   Animate(elem, 'left', 800, 0, -405);    
    opened = false;
 });
 $('.loading').hide();
});
         </script>
   </html>



    