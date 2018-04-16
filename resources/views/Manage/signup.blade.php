<!DOCTYPE html>
<html>
<head>
  <title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="{{asset('public/manage_assets/js/common.js')}}"></script>
  <style type="text/css">
  .invalid{
    color: #de1124;
  }
  .loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
</head>
<body>
 <!-- form user info -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0"><center>Basic Information</center></h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="loginForm">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                    <div class="col-lg-9">
                                        <span id="rname" class="invalid"><p></p></span>
                                        <input class="form-control" type="text" Placeholder="John Doe" id="name">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="Bishop">
                                    </div>
                                </div> -->
                                <div class="form-group row" id="email_div">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                      <span id="remail" class="invalid"><p></p></span>
                                        <input class="form-control" type="email" Placeholder="email@gmail.com" id="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Mobile</label>
                                    <div class="col-lg-9">
                                        <span id="rmobile" class="invalid"><p></p></span>
                                        <input class="form-control" type="number" Placeholder="1002002325" id="mobile">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Location</label>
                                    <div class="col-lg-9">
                                      <span id="rlocation" class="invalid"><p></p></span>
                                        <input class="form-control" type="text" Placeholder="Location" id="location">
                                    </div>
                                </div>
                                <div class="form-group row" data-provide="datepicker">
                                    <label class="col-lg-3 col-form-label form-control-label">DOB</label>
                                    <div class="col-lg-9">
                                        <span id="rdob" class="invalid"><p></p></span>
                                        <input class="form-control" type="text" value="" id="datepicker">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" id="Male" value="Male"> Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" id="Female" value="Female"> Female
                                    </label>
                                </div>
                                </div>
                                <div class="form-group row" hidden>
                                    <label class="col-lg-3 col-form-label form-control-label">Proffession</label>
                                    <div class="col-lg-9">
                                       <span id="rproffession" class="invalid"><p></p></span>
                                        <select class="form-control" size="0" id="proffession">
                                          <option value="5">job-creator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-header">
                            <h3 class="mb-0"><center>Add Company Info</center></h3>
                                </div>
                <input type="hidden" class="form-control" id="org_id" />
                <form class="form-horizontal" role="form">
                   <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Organisation Name</label>
                        <div class="col-lg-9">
                            <span id="jorg_name" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="org_name" placeholder="Organisation Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">About</label>
                        <div class="col-lg-9">
                            <span id="jabout" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="about" placeholder="About">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                        <div class="col-lg-9">
                            <span id="jaddress1" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="address1" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Landmark</label>
                        <div class="col-lg-9">
                            <span id="jaddress2" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="address2" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">City</label>
                        <div class="col-lg-9">
                            <span id="jcity" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="city" placeholder="city">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">State</label>
                        <div class="col-lg-9">
                            <span id="jstate" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="state" placeholder="state">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Pin</label>
                        <div class="col-lg-9">
                            <span id="jpin" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="pin" placeholder="201301">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Mobile No.</label>
                        <div class="col-lg-9">
                            <span id="jmobile" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="mobile" placeholder="1001254124">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <span id="jemail" class="invalid"><p></p></span>
                            <input class="form-control" type="text" id="co_email" placeholder="example@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">GSTIN</label>
                        <div class="col-lg-9">
                            <!-- <span id="jemail" class="invalid"><p></p></span> -->
                            <input class="form-control" type="text" id="gstin" placeholder="GSTIN">
                        </div>
                    </div>
                </form>
            
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <!-- <input type="reset" class="btn btn-secondary" value="Cancel"> -->
                                        <input type="button" class="btn btn-primary" value="Submit" id="btnLogin">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
</body>
<script type="text/javascript">
  window.register_validation = function register_validation(){};
  var url = '<?php echo config('constant.ENV_URL')?>';
  $(".form_datetime").datepicker({format: 'yyyy-mm-dd'});
  $(document).ready(function(){
     var radioValue = $("input[name='gender']:checked").val();
            if(radioValue){
                alert_msg("Your are a - " + radioValue);
            }
 
     if(window.localStorage)
     {var userid = localStorage.getItem('userid');
      var data = localStorage.getItem('userdata');
      data = JSON.parse(data);
      if(data.email != '')
      {
        $('#email_div').hide();
        $('#email').val(data.email);
         $('#co_email').val(data.email);
        $('#name').val(data.data.name);
      }
     }
     // validation example for Login form
$("#btnLogin").click(function(event) {
    
    var form = $("#loginForm");
    if (register_validation() == false) {
      console.log(1);
      return;

    }
    else
    {$('.loading').show();
      var user_info_data = {
        'userid':userid,
        'loginType':data.loginType,
        'email':$('#email').val(),
        'phone_no':$('#mobile').val(),
        'location':$('#location').val(),
        'dob':$('#datepicker').val(),
        'gender':$("input[name='gender']:checked").val(),//radioValue,//$('#gender').val(),
        'prof_name':$('#proffession').text().trim(),
        'data':data.data,
        'userType':'103',
        'prof_id':$('#proffession').val(),
        'app':data.app,
        'device_id':'',
        'sport':'',
        'app':data.app

        }
   user_info_data  = JSON.stringify(user_info_data);
   form.addClass('was-validated');
   $.ajax({
      url:url+'/user_access_controller.php?act=gs_signup',
      method:'POST',
      data:user_info_data,
      dataType:'text',
      success:function(result)
      { 
        var response  = JSON.parse(result);
        if(response.status==1)
        { 
          if(add_organisation(response.data.userid) != 0)
          {
          window.location.href = "<?php echo url('/'); ?>"+"/manage/dashbo";
          }
          else
          {
            alert_msg("Something Went wrong, Please try after some time");
          }
        }
        $('.loading').hide();
      }

   });
}
});
function register_validation()
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

var i = 0;
if($('#name').val()== '')
{
  $('#rname').text('*Please enter the you name');
  i++;
}
else
{
  $('#rname').text('');
}
if($('#email').val().match(mailformat))
{
  $('#remail').text('');
}
else
{
  $('#remail').text('*Please enter a valid email');
  i++;  
}
if($('#mobile').val()== '')
{
  $('#rmobile').text('*Please enter the valid number');
  i++;
}
else
{
  $('#rmobile').text('');
}
if($('#location').val() == '')
{
   $('#rlocation').text('*Please enter the location');
   i++;
}else
{
   $('#rlocation').text('');
}
if($('#datepicker').val() == '')
{
   $('#rdob').text('*Please enter the dob');
   i++;
}else
{
   $('#rdob').text('');
}
if($('#proffession').val() == '')
{
   $('#rproffession').text('*Please enter the proffession');
   $i++;
}else
{  
   $('#rproffession').text('');
}

if($('#org_name').val()=='')
  {
     $('#jorg_name').html('<p>*Company name required.</p>');
     i++;
  }else
  {
   $('#jorg_name').html('');
  }
if($('#about').val()=='')
  {
     $('#jabout').html('<p>*about company required.</p>');
     i++;
  }else
  {
   $('#jabout').html('');
  }
if($('#address1').val()=='')
  {
     $('#jaddress1').html('<p>*Company address required.</p>');
     i++;
  }else
  {
   $('#jaddress1').html('');
  }
if($('#city').val()=='')
  {
     $('#jcity').html('<p>*city name required.</p>');
     i++;
  }else
  {
   $('#jcity').html('');
  }
if($('#pin').val()=='')
  {  
     $('#jpin').html('<p>*Company pin required.</p>');
     i++;
  }else
  {
   $('#jpin').html('');
  }
if($('#mobile').val()=='')
  {
     $('#jmobile').html('<p>*Company mobile required.</p>');
     i++;
  }else
  {
   $('#jmobile').html('');
  }
if($('#co_email').val()=='')
  {
     $('#jemail').html('<p>*Company email required.</p>');
     i++;
  }else
  {
   $('#jemail').html('');
  }      
if(i == 0)
{
  return true;
}
else
{
  return false;
}

}
});
  
  function getGender()
  {
    var genderId = id;
    gender = genderId;
  }
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDv7v3jJInF4dT2KKMXQIR6SHmtkMLX1SE&sensor=false&libraries=places&language=en-AU"></script>
<script type="text/javascript">

            var autocomplete = new google.maps.places.Autocomplete($("#location")[0], {});
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
               // console.log(place.address_components);
            });
            var autocomplete = new google.maps.places.Autocomplete($("#address1")[0], {});
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
               // console.log(place.address_components);
            });
            

</script>
<!-- <div class="input-append date form_datetime">
    <input size="16" type="text" value="" readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div> -->
 
<script type="text/javascript">
function add_organisation(sess_userid)
      {  var userid =  sess_userid;
         var org_data = 
         { "id":$('#org_id').val(),//org_id,
           "userid":sess_userid,
           "org_name":$('#org_name').val(),
           "about":$('#about').val(),
           "address1":$('#address1').val(),
           "address2":$('#address2').val(),
           "city":$('#city').val(),
           "pin":$('#pin').val(),
           "state":$('#state').val(),
           "mobile":$('#mobile').val(),
           "email":$('#co_email').val(),
           "gstin":$('#gstin').val()
         }
       org_data = JSON.stringify(org_data);
       $.ajax({
        url:url+'/angularapi.php?act=addOrg',
        method:"POST",
        data:org_data,
        dataType:'text',
        success:function(result)
        {
            if($.trim(result) != 0)
            { 
              return $.trim(result);
            }
        },
        failure:function(result)
        {
          
          alert_msg("Something went wrong");
          return false;
        }

      });
     }

</script>
<div id="alert" class="modal fade">
  <div class="modal-dialog" >
    <div class="modal-content" style="background: #fff">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" style="color:#000;text-align: center;" data-dismiss="modal"></button>
        
      </div>
      <!-- dialog buttons -->
      <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
    </div>
  </div>
</div>
<div class="loading" hidden>Loading&#8230;</div>   
</html>
