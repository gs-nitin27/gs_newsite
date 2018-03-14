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
                                        <input class="form-control" type="text" Placeholder="John Doe">
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
                                        <input class="form-control" type="email" Placeholder="email@gmail.com" id="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Mobile</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="number" Placeholder="1002002325" id="mobile">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Location</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" Placeholder="Location" id="location">
                                    </div>
                                </div>
                                <div class="form-group row" data-provide="datepicker">
                                    <label class="col-lg-3 col-form-label form-control-label">DOB</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" id="datepicker">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                    <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Blue
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Red
                                    </label>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Proffession</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" id="proffession">
                                          <option value="5">job-creator</option></select>
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
  $(document).ready(function(){
     if(window.localStorage)
     {
      var data = localStorage.getItem('userdata');
      data = JSON.parse(data);
      alert(data);
      if(data.email != '')
      {
        $('#email_div').hide();
        $('#email').val(data.email);
      }
     }


  });
  
  $( function() {
    $( "#datepicker" ).datepicker();
  } );

  // validation example for Login form
$("#btnLogin").click(function(event) {
    
    var form = $("#loginForm");
    if (form[0].checkValidity() === false) {
      console.log(1);
      event.preventDefault();
      event.stopPropagation();
    }
    else
    {
      var data = {
        'email':$('#email').val(),
        'Mobile':$('#mobile').val(),
        'location':$('#location').val(),
        'dob':$('#datepicker').val(),
        'gender':$('#gender').val(),
        'proffession':$('#proffession').val()
        }
   data  = JSON.stringify(data);
   form.addClass('was-validated');
//    $item->app            =  $data1->app;
// $item->userid         =  $data1->userid;
// $item->loginType      =  $data1->loginType;
// $item->id             =  $data1->data->id;
// $item->name           =  $data1->data->name;
// $item->email          =  $data1->data->email;
// $item->image          =  $data1->data->image;
// $item->phone_no       =  $data1->phone_no;
// $item->prof_name      =  $data1->prof_name;
// $item->sport          =  $data1->sport;
// if(isset($data1->login_status)){
// $item->login_status   =  $data1->login_status;  
// }
// $item->gender         =  $data1->gender;
// $item->dob            =  $data1->dob;
// $item->userType       =  $data1->userType; 
// $item->location       =  $data1->location;
// //$item->forget_code    =  $forgot_code;
// $item->prof_id        =  $data1->prof_id;
// $item->device_id      =  $data1->device_id;
// $device_id_column     =  $item->app."_device_id";
   $.ajax({
      url()

   })
   }
    
    // if validation passed form
    // would post to the server here
    
    
});
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
