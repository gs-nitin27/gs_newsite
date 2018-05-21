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
    $(document).ready(function() {
       

      /* $(".uploadFileBtn").click(function() {
          $('#uploadFile').trigger('click');
         
      });*/


      $(".toggleBtn").click(function() {
          $('#mySidenav').css('right', '0px');
         
      });

      $(".close_mySidenav").click(function() {
          $('#mySidenav').css('right', '-250px');
      });
});
    
function getApp()
{



}



  </script>
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

<?php }?>