     <html>
     <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
     	   <title>Getsporty- @yield('pageTitle')</title> 
     	   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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