@extends('lite_user.template.master')
@section('pageTitle','Event booking checkout')
@section('content')
<?php $userdata = json_decode($userdata);$item_data = $item_data[0];$resp_data =base64_encode(json_encode($_POST));
$item = '2/'.$item_data->id;
$url_param = base64_encode($item);
?>

<div id="success"></div>
<script type="text/javascript">
	var data = JSON.parse(localStorage.getItem('apply_data'));
	
event_apply();
function event_apply()  
{
     loading.style.display = "block";
     var ApplyEvent = [{"applicant_id":"{{$userdata->userid}}","event_id":"{{$item_data->id}}","fee_amount":"{{$item_data->fee + ($item_data->fee * 0.18)}}","organiser_id":"{{$item_data->userid}}"}];
     var userdata = {"email":"{{$userdata->email}}","name":"{{$userdata->name}}","address":data.userdata.address,"city":data.userdata.city,"fincome":data.userdata.fincome,"dob":"{{$userdata->dob}}","gender":"{{$userdata->gender}}","event_title":"{{$item_data->name}}"};
     var resp_data ='<?php echo $resp_data; ?>';
     var apply_data =JSON.stringify({"ApplyEvent":ApplyEvent,"userdata":userdata,"response_data":{"result":resp_data}});
    // console.log("{{url('/')}}/user/login/{{$url_param}}");return;
     $.ajax({
      url:url+'/eventcontroller.php?act=event_apply&mode=1',
      method:'POST',
      crossDomain: true,
      data:apply_data,
      dataType:'text',
      beforeSend: function () { loading.style.display = "block"; },
      success:function(result)
      {loading.style.display = "none";
      var result = JSON.parse(result);
      if(result.status == 1)
        {  
   $.confirm({
    title: 'Successfully applied',
    content: 'a confirmation mail has been sent to your registered email id '+' {{$userdata->email}}',
    buttons: {
        Ok: function () {
            window.location.href = "{{url('/')}}/user/login/{{$url_param}}";
                 },
             }
        });
        }
        else
        { 
          $('#booking').attr('disabled',false);
          alert_msg("Something went wrong! Please try after sometime");
        }
      }
     });
   }

</script>
@stop