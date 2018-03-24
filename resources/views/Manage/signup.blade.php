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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="{{asset('js/custom-validation.js')}}"></script>
<style type="text/css">
  .invalid{
    color: #de1124;
  }
</style>
</head>
<body>
 <!-- form user info -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">User Information</h3>
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
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Proffession</label>
                                    <div class="col-lg-9">
                                       <span id="rproffession" class="invalid"><p></p></span>
                                        <select class="form-control" size="0" id="proffession">
                                          <option value="5">job-creator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <!-- <input type="reset" class="btn btn-secondary" value="Cancel"> -->
                                        <input type="button" class="btn btn-primary" value="Save Changes" id="btnLogin">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
</body>
<script type="text/javascript">
  window.register_validation = function register_validation(){};
  var url = '<?php echo config('constant.ENV_URL')?>';
  $(document).ready(function(){
     var radioValue = $("input[name='gender']:checked").val();
            if(radioValue){
                alert("Your are a - " + radioValue);
            }
 
     if(window.localStorage)
     {var userid = localStorage.getItem('userid');
      var data = localStorage.getItem('userdata');
      data = JSON.parse(data);
      if(data.email != '')
      {
        $('#email_div').hide();
        $('#email').val(data.email);
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
    {
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
   console.log(user_info_data);//return;
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
          window.location.href = "<?php echo url('/'); ?>"+"/manage/dashbo";
        }
        
      }
   });
}
});
function register_validation()
{
var mailformat = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';

var i = 0;
if($('#name').val()== '')
{
  $('#rname').text('Please enter the you name');
  i++;
}
else
{
  $('#rname').text('');
    
}
if($('#email').val().match(mailformat))
{
  $('#remail').text('');
}else
{
  $('#remail').text('Please enter a valid email');
  i++;  
}
if($('#mobile').val()== '')
{
  $('#rmobile').text('Please enter the valid number');
  i++;
}else
{
  $('#rmobile').text('');
    
}
if($('#location').val() == '')
{
   $('#rlocation').text('Please enter the location');
}else
{
   $('#rlocation').text('');
}
if($('#datepicker').val() == '')
{
   $('#rdob').text('Please enter the dob');
}else
{
   $('#rdob').text('');
}
if($('#proffession').val() == '')
{
   $('#rproffession').text('Please enter the proffession');
}else
{
   $('#rproffession').text('');
}

if(i == 0)
{
  return true;
}else
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDv7v3jJInF4dT2KKMXQIR6SHmtkMLX1SE&sensor=false&libraries=places&language=en-AU"></script>
<script type="text/javascript">
            var autocomplete = new google.maps.places.Autocomplete($("#location")[0], {});
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                console.log(place.address_components);
            });


</script>
</html>
