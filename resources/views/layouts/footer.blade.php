<div id="alert" class="modal fade">
  <div class="modal-dialog" >
    <div class="modal-content" style="background: #fff">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" style="color:#000" data-dismiss="modal">&times;</button>
        
      </div>
      <!-- dialog buttons -->
      <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
    </div>
  </div>
</div>
<script type="text/javascript">
  //   $(document).ready(function(){
  // $('#module').on('change',function(){
    
  //   if($('#module').val()=='1')
  //   {
  //    $('#subs_form').prepend('<input type="text" name="designation" id="designation" placeholder="Designation" Required />'); 
  //   }else
  //   {
  //     $('#designation').remove();
  //   }

  // });

  // });
</script>
     <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1206587362783220&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
if (env('APP_ENV') === 'production') {
?>
  
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ab1e9f2d7591465c708c175/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-102513647-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-102513647-1');
</script>
<?php }?>
<div class="clearfix"></div>
<div class="relative">
  <div class="foot-top"></div>
     </div>
<div class="foot-bg">
   <div class="container">
	 <div class="row">
	  <div class="logo-bottom">
	    <img src="{{asset('public/img/logo2.png')}}">
	     </div>
	     <div class="m5"></div>
			<span>© 2017 getsporty. All rights reserved</span>
         </div>
      </div>
   </div>
@yield('disclaimer')