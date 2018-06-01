<?php 
$url = $_SERVER['REQUEST_URI'];//die;
$param = explode('/', $url);
if (env('APP_ENV') === 'production' || env('APP_ENV') === 'testing') {
   
   $section = explode('/', base64_decode($param['3']));
   $apply_data = $param['3'];
   
}else
{
  $section = explode('/', base64_decode($param['4']));
  $apply_data = $param['4'];
}
  $section = $section['0'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Getsporty:Registration</title>
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
  * { box-sizing: border-box; }
body {
  font: 16px Arial; 
}
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}
input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
  .hide_div{
    display: none;
  }
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

 <div class="loading" style="display: none" id="loading">Loading&#8230;</div>
 <script type="text/javascript">
   var loading = document.getElementById('loading');
 </script>
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
                                    <label class="col-lg-3 col-form-label form-control-label">City</label>
                                    <div class="col-lg-9">
                                      <span id="rlocation" class="invalid"><p></p></span>
                                        <input class="form-control" type="text" Placeholder="City" id="location">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">House No./Street</label>
                                    <div class="col-lg-9">
                                      <span id="rlocation" class="invalid"><p></p></span>
                                        <input class="form-control" type="text" Placeholder="location" id="address1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">State</label>
                                    <div class="col-lg-9">
                                      <span id="rlocation" class="invalid"><p></p></span>
                                        <input class="form-control" type="text" Placeholder="State" id="state">
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
                                    <label class="col-lg-3 col-form-label form-control-label">Sport</label>
                                    <div class="col-lg-9">
                                      <span id="rsport" class="invalid"><p></p></span>
                                        <select class="form-control" id="sport" name="sport" onfocus="getSportsList()">
                                        </select><span id="jsport"></span>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Height</label>
                                    <div class="col-lg-9">
                                      <span id="rlocation" class="invalid"><p></p></span>
                                        <input class="form-control" type="text" Placeholder="height" id="height">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Weight</label>
                                    <div class="col-lg-9">
                                      <span id="rlocation" class="invalid"><p></p></span>
                                        <input class="form-control" type="text" Placeholder="weight" id="weight">
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
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
                                </div><span id="rgender" class="invalid"><p></p></span>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <div class="col-lg-9">
                                       <span id="rgender" class="invalid"><p></p></span>
                                        <select class="form-control" size="0" id="gender">
                                          <option value="">--Select--</option>
                                          <option value="Male">Male</option> 
                                          <option value="Female">Female</option>
                                        </select>
                                    </div>
                                  </div>

                                <!-- <div class="form-group row" id="coach_reg">
                                    <label class="col-lg-3 col-form-label form-control-label">Register as/with</label>
                                    <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="reg_type" onchange="show_org(1)"> Indivisual
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="reg_type" onchange="show_org(2)"> Organisation
                                    </label>
                                </div>
                                </div> -->

                                <div class="form-group row" id="prof" hidden>
                                    <label class="col-lg-3 col-form-label form-control-label">Proffession</label>
                                    <div class="col-lg-9">
                                       <span id="rproffession" class="invalid"><p></p></span>
                                        <select class="form-control" size="0" id="proffession">
                                          <option value="">--Select--</option>
                                          <option value="2">Coach</option> 
                                          <option value="1">Athlete</option>
                                          <option value="6">Parent</option>
                                        </select>
                                    </div>
                                  </div>
                                
                                
                               <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <!-- <input type="reset" class="btn btn-secondary" value="Cancel"> -->
                                        <input type="button" class="btn btn-primary" value="Submit" id="btnLogin">
                                    </div>
                                </div>
                        </form></div>
                            </form>
                        </div>
                    </div>
                
</body>
<script type="text/javascript">
  // OPTIONS BASED ON USER TYPE REGISTRATION
  var select  = '<?php echo $section; ?>';
  var apply_data = '<?php echo $apply_data; ?>';
  if(select == '1')
  {
   $('#proffession :selected').text('Recruiter');
   $('#proffession').val('5');
   //$('#coach_reg').hide();
  }
  else if(select == '2')
  {
   $('#proffession :selected').text('Athlete');
   $('#proffession').val('1');
   //$('#coach_reg').show();
  }
  else
  { 
    //$('#coach_reg').hide();
    $('#proffession :selected').text('Manager');
    $('#proffession').val('5');
  }

  //user type option select code ends here



  var user_info_data = '';
  var a = '';
  window.register_validation = function register_validation(){};
  var url = '<?php echo config('constant.ENV_URL')?>';
  //$(".form_datetime").datepicker({format: 'yyyy-mm-dd'});
  $(document).ready(function(){
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

    $('#datepicker').datepicker({
        maxDate: new Date(currentYear, currentMonth, currentDate),
        dateFormat: 'yy-mm-dd'
    });
    if(window.opener)
     var radioValue = $("input[name='gender']:checked").val();
            if(radioValue){
                alert_msg("Your are a - " + radioValue);
            }
 
     if(window.localStorage)
     {var userid = localStorage.getItem('userid');
      var data = localStorage.getItem('userdata');
      data = JSON.parse(data);
      //alert(JSON.stringify(data));return;
      if((data.hasOwnProperty("email")==true) && data.email != '')
      {
        $('#email_div').hide();
        $('#email').val(data.email);
        $('#co_email').val(data.email);
        $('#name').val(data.data.name);
      }else
      {
        $('#email_div').show();
      }
      if(data.loginType == '1')
      {
       $('#name').val(data.data.first_name);
      }
    }
     
     // validation example for Login form
$("#btnLogin").click(function(event) {
    if(!data.data.hasOwnProperty("email"))
    {
       data.data.email = $('#email').val(); 
    }
    var form = $("#loginForm");
    if (register_validation() == false) {
     // console.log(1);
      return;

    }
    else
    {
      loading.style.display = "block";
       user_info_data = {
        'userid':userid,
        'loginType':data.loginType,
        'email':$('#email').val(),
        'phone_no':$('#mobile').val(),
        'location':$('#location').val(),
        'address1':$('#address1').val(),
        'state':$('#state').val(),
        'dob':$('#datepicker').val(),
        'gender':$("#gender").val(),//radioValue,//$('#gender').val(),
        'prof_name':$("#proffession :selected").text(),
        'data':data.data,
        'userType':'104',
        'prof_id':$('#proffession').val(),
        'device_id':'',
        'sport':$('#sport').val(),
        'app':data.app

        }
   user_info_data  = JSON.stringify(user_info_data);
   //return;
   //console.log(user_info_data);return;
   form.addClass('was-validated');
   $.ajax({
      url:url+'/user_access_controller.php?act=gs_signup',
      method:'POST',
      crossDomain: true,
      data:user_info_data,
      dataType:'text',
      async:false,
      success:function(result)
      { loading.style.display = "none";
        var response  = JSON.parse(result);
        if(response.status==1)
        { 
          var result  = JSON.parse(result);
          localStorage.setItem('liteuserdata',JSON.stringify(result.data));
          set_data();
        }
      else
        {
          alert_msg("Something Went wrong, Please try after some time");
        }
         loading.style.display = "none";
        }
     });
   }
});
function set_data(){
      var _token = $('input[name="_token"]').val();
      $.ajax({
      async:false,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{url('/user/set_user_data')}}",
      method:"GET",
      dataType:"text",
      data:'data='+localStorage.getItem('liteuserdata'),
      success:function(result)
      {
          if(result != 0)
        {
          if(select == '2')
          {
           var url = "<?php echo url('/'); ?>"+"/user/user_apply/"+apply_data;
           window.location.href = encodeURI(url);
          }
        }
        else
        {
          alert_msg('server Error');
        }
        //alert(JSON.stringify(result));
      } 

    });
  }

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
if($('#email').val() == '')
{
  $('#remail').text('*Please enter your email address');
  i++; 
}
else
{
  $('#remail').text('');
   
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
if($('#sport').val() == '')
{
   $('#rsport').text('*Please select a sport');
   i++;
}else
{
   $('#rsport').text('');
}
if($('#city').val() == '')
{
   $('#rcity').text('*Please enter your city');
   i++;
}else
{
   $('#rcity').text('');
}
if($('#state').val() == '')
{
   $('#rstate').text('*Please enter state');
   i++;
}else
{
   $('#rstate').text('');
}

if($('#gender').val()=='')
{
   $('#rgender').text('*Please select gender Type');
   i++;
}else
{
   $('#rgender').text('');
}


if(i == 0)
{ // console.log(i);
  return true;
}
else
{ //console.log(i);
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
<!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDv7v3jJInF4dT2KKMXQIR6SHmtkMLX1SE&sensor=false&libraries=places&language=en-AU"></script> -->
<script type="text/javascript">
//https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Vict&types=(cities)&language=pt_BR&key=YOUR_API_KEY

            // var autocomplete = new google.maps.places.Autocomplete($("#location")[0], {});
            // google.maps.event.addListener(autocomplete, 'place_changed', function() {
            //     var place = autocomplete.getPlace();
            //    // console.log(place.address_components);
            // });
            // var autocomplete = new google.maps.places.Autocomplete($("#address2")[0], {});
            // google.maps.event.addListener(autocomplete, 'place_changed', function() {
            //     var place = autocomplete.getPlace();
            //    // console.log(place.address_components);
            // });
            

</script>
<!-- <div class="input-append date form_datetime">
    <input size="16" type="text" value="" readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div> -->
 
<script type="text/javascript">
// function add_organisation(sess_userid)
//       {  var userid =  sess_userid;
//          var org_data = 
//          { "id":$('#org_id').val(),//org_id,
//            "userid":sess_userid,
//            "org_name":$('#org_name').val(),
//            "type":$('#org_type').val(),
//            "about":$('#about').val(),
//            "address1":$('#address1').val(),
//            "address2":$('#address2').val(),
//            "city":$('#city').val(),
//            "pin":$('#pin').val(),
//            "state":$('#state').val(),
//            "mobile":$('#mobile').val(),
//            "email":$('#co_email').val(),
//            "gstin":$('#gstin').val()
//          }
//        org_data = JSON.stringify(org_data);
//        $.ajax({
//         url:url+'/angularapi.php?act=addOrg',
//         method:"POST",
//         crossDomain: true,
//         data:org_data,
//         dataType:'text',
//         success:function(result)
//         {
//             if($.trim(result) != 0)
//             { 
//               return $.trim(result);
//             }
//         },
//         failure:function(result)
//         {
          
//           alert_msg("Something went wrong");
//           return false;
//         }

//       });
//      }
function send_mail(data)
{
  $.ajax({

  url:"{{url('/manage/welcome_mail')}}",
  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
  method:"POST",
  data:data,
  success:function(result)
  {
     alert_msg("Sucessfully Registered");
    return;
  }
  });
}

function show_org(a) 
{
 if(a=='1')
    {
    $('#org_form').hide();
    }
 else
    {
    $('#org_form').show();  
    }
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
</html>
