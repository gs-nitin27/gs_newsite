     <html>
     <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
     	   <title>Getsporty- @yield('pageTitle')</title> 
     	   @include('lite_user.template.head')
     </head>
      <body data-spy="scroll" data-target=".navbar" data-offset="180">
        <header>
           @include('lite_user.template.header')
        </header>
	  
           @yield('content')
		 
        <footer>
           @include('lite_user.template.footer')
        <div class="loading" style="display: none">Loading&#8230;</div>
        </footer>
         </body>
   </html>