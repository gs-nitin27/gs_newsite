<div class="loading" hidden>Loading&#8230;</div>
<nav class="navbar navbar-default bg0 affix menuSec" data-spy="affix" data-offset-top="10">
          <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" aria-controls="navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
            <a class="navbar-brand logo" href="{{url('/')}}"><img class="img-responsive" src="{{asset('public/img/logo.png')}}"></a>
           </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="navbar-collapse collapse" id="navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right text-uppercase">
              <li><a href="{{url('/latest-sports-news-resources.html')}}">Article</a></li>
              <li><a href="{{url('/sports-jobs-in-india.html')}}">Job</a></li>
              <li><a href="{{url('/sports-events-in-india.html')}}" >Event </a></li>
              <li><a href="{{url('/sports-tournaments-in-india.html')}}">Tournament</a></li>
              <li><a href="{{url('/sports-trials-in-india.html')}}">Trial</a></li>
              <li ><a href="{{url('/')}}/user/login/{{base64_encode('2/198')}}" style="border: 5px solid #fff;border-radius: 12px;padding: 22px 8px 15px 8px;">GS FOOTBALL CAMP</a></li>
              <li ><a href="{{url('/aboutus')}}">About us</a></li>
              <li ><a href="{{url('/career')}}">Careers</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   Partners <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="" href="{{url('/partner.html')}}">Partner With us</a></li>
                    <li><a class="" href="{{url('manage/login/')}}<?php echo '/'.base64_encode(1); ?>">Partner Login</a></li>
                </ul>
              </li>
            </ul>
           </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
         </nav><!-- /.navbar -->
           <!-- let's call the following div as the POPUP FRAME -->
<style type="text/css">
   #popup {
   display: none;
    position: absolute;
    top:0;
    left: 0;
    right: 0;
    margin: 0 auto;
    z-index: 9999;
    width: 40%;
    padding: 10px;
    background: #ccc;
    background-color: #002f5d78;
    border: none
}  .panel-footer {
    text-align: right;
  }
</style>
<?php $value = Cookie::get('visit_event'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    var visit_event = '<?php echo $value; ?>';
    
    if(visit_event != '1')
    {
      $("#popup").hide().fadeIn(1000);
    }
    
    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup").fadeOut(1000);
    });
$('.panel-footer button').on('click',function(){
        var button_id = $(this).attr('id');
        $.ajax({
         url:"{{url('/set_event_cookie')}}",
         method:"GET",
         async:false,
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success:function(result)
          {
            if(result == 1){
            if(button_id == 'apply'){
            window.location.href = "{{url('/')}}/user/login/{{base64_encode('2/198')}}";
            }
          }

           
          }

        });
      
        
      });
  })
   </script>
   <div class="popup-wrap">
 <div id="popup" class="popup panel panel-primary">
        
        <!-- and here comes the image -->
        <img class="img-responsive" src="{{url('public/img/Football-Phamplet.jpg')}}" alt="popup">
            
        <div class="panel-footer">
            <button id="apply" class="btn btn-lg btn-success">Apply Now</button>
            <button id="close"  class="btn btn-lg btn-danger">Close</button>
        </div>
            
            <!-- and finally we close the POPUP FRAME-->
            <!-- everything on it will show up within the popup so you can add more things not just an image -->
    </div></div>