<!DOCTYPE html>
     <html>
     <head>
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




    