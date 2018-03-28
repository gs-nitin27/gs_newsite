<?php 
if(!Session::has('userdata'))
   {  $value = session('userdata');
Redirect::to('manage/login/1')->send();
  }else
   {
?>
<!DOCTYPE html>
     <html>
     <head>
        {{ csrf_field() }}
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


<?php } ?>

    