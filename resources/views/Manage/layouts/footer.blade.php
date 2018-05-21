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