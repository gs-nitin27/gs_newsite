<?php 

if($_SERVER['REMOTE_ADDR'] == '182.69.203.174' || $_SERVER['REMOTE_ADDR'] == '::1')
{
if(!Session::has('userdata'))
   {  $value = session('userdata');
      Redirect::to('manage/login/1')->send();
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
        </footer>
         </body>
   </html>


<?php } }else{ Redirect::to('/')->send();}?>

    