@extends('lite_user.template.master')
@section('pageTitle','Event booking checkout')
@section('content')
<?php $userdata = json_decode($userdata);$item_data = $item_data[0];?>
<script type="text/javascript">
	var data = localStorage.getItem('apply_data');
	//console.log(data);
event_apply();
function event_apply()  
{

      loading.style.display = "block";
     var ApplyEvent = [{"applicant_id":"{{$userdata->userid}}","event_id":"{{$item_data->id}}","fee_amount":"{{$item_data->fee + ($item_data->fee * 0.18)}}","organiser_id":"{{$item_data->userid}}"}];
     var userdata = {"email":$('#email').val(),"name":$('#fname').val(),"address":$('#adr').val(),"city":$('#city').val(),"fincome":$('#fincome').val(),"dob":"{{$userdata->dob}}","gender":"{{$userdata->gender}}","event_title":"{{$item_data->name}}"};
     var resp_data ="{{$resp_data}}";
     apply_data = {"ApplyEvent":ApplyEvent,"userdata":userdata,"resp_data":resp_data};
     console.log(apply_data);
    return;
     var apply_data =JSON.stringify({"ApplyEvent":ApplyEvent,"userdata":userdata,"response_data":JSON.stringify(response_data)}); 
     $.ajax({
      url:url+'/eventcontroller.php?act=quick_event_apply',
      method:'POST',
      crossDomain: true,
      data:apply_data,
      dataType:'text',
      beforeSend: function () { loading.style.display = "block"; },
      success:function(result)
      {loading.style.display = "none";
      
        //var data = JSON.parse(result);
        if(result == 1)
        {  $('#booking').text('Booking Confirmed');
          // alert_msg("Event sucessfully booked"+'<br>'+'a confirmation mail has been sent to your registered email id '+' {{$userdata->email}}');
          $.confirm({
    title: 'Successfully applied',
    content: 'a confirmation mail has been sent to your registered email id '+' {{$userdata->email}}',
    buttons: {
        Ok: function () {
            window.location.href = "<?php echo url('/user/logout'); ?>";
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