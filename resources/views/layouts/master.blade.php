     <html>
     <head>
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




    