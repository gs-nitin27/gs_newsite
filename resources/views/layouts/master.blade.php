<?php 
if(Request::url() == 'https://getsporty.in/index.html' || Request::url() == 'https://getsporty.in/.env')
   {  $value = session('userdata');
      Redirect::to('/')->send();
  }
?>
<html>
     <head>
         <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+'GTM-N3SWFF5';
})(window,document,'script','dataLayer','GTM-N3SWFF5');</script>
<meta charset="utf-8">
<meta name="description" content="
We bring you the latest updates on all the big sports Events & Tournaments to your GetSporty App. Also, Helps you to Find your dream sports quota jobs in India.">
<meta name="google-site-verification" content="1Lz4Ejk_OiCgTSYN7eBGPARofMMt7GyKbJ55yAKzzNs" />
<meta name="google-site-verification" content="RjBA1hezj08g12vWgRFMJjRoPJTTSZ86ubx2Qvo5nig" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Tournaments, Events, Jobs, Coaches ">
         <meta name="csrf-token" content="{{ csrf_token() }}" />
     	   <title>Getsporty- @yield('pageTitle')</title> 
     	   @include('layouts.head')
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
         </script>
   </html>




    