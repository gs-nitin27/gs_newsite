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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
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
{   loading.style.display = "block";
    if(loading.style.display == "block")
    {
       $.ajax({
    url:'<?php echo url('/manage/get_app'); ?>',
    async:false,
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
    method:"POST",
    dataType:"text",
    data:localStorage.getItem('userdata'),
    success:function(result)
    { // return;
      if (result == '1')
      {
         alert_msg('The app download link has been sent to your registered emailid '+sess_email+' with the login credentials');
      }else
      {
        alert_msg('Something went wrong');
      }
    loading.style.display = "none";
    }

    });
    }
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