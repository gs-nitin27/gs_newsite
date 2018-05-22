<?php 

// if($_SERVER['REMOTE_ADDR'] == '171.61.135.200' || $_SERVER['REMOTE_ADDR'] == '::1')
// {
if(!Session::has('userdata'))
   {  $value = session('userdata');
      $login_url = 'manage/login/'.base64_encode(1);
      Redirect::to($login_url)->send();
  }else
   {
    $value = session('userdata');
?>
<!DOCTYPE html>
     <html>
     <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
     	   <title>Getsporty- @yield('pageTitle')</title> 
     	   @include('Manage.layouts.head')
     </head>
      <body data-spy="scroll" data-target=".navbar" data-offset="180">
        <header>
           @include('Manage.layouts.header')
        </header>
	  
           @yield('content')
		 
        <footer>
           @include('Manage.layouts.footer')
        <div class="loading" style="display: none">Loading&#8230;</div>
        </footer>
         </body>
   </html>


<?php } //}else{ Redirect::to('/')->send();}
?>

    