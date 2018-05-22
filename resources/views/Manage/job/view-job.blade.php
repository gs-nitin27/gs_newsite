@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
@php 
$detail = $detail[0];
@endphp

<main><section class="half">
        <h3>{{$detail->title}}</h3><a class="job-edit" href="{{url('/manage/edit/')}}/{{$detail->id}}"><span>Edit</span></a>
             <div class="job-view col-md-12 col-xs-12 col-sm-4">
             <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="clearfix jobSave" id="job_details">
                                <p><span><b>Job Title:</b></span>  {{$detail->title}}</p>
                                <p><span><b>Job Description:</b></span>  {{$detail->description}} </p>
                                <p><span><b>Job Location:</b></span> {{$detail->org_city}} </p>
                                <p><span><b>Job Type:</b></span> {{$detail->type}}</p>
                                <p><span><b>Sport:</b></span>  {{$detail->sport}} </p>
                                <p><span><b>Salary:</b></span>  {{$detail->salary}}</p>
                            </div>
                        </section>
                        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="clearfix jobSave" id="job_requirements">
                                <p><span><b>Email:</b></span>  {{$detail->email}} </p>
                                <p><span><b>WorkExperience:</b></span>{{$detail->work_experience}}</p>
                                <p><span><b>Key Requirements:</b></span>{{$detail->key_requirement}} </p>
                                <p><span><b>Desired Skills:</b></span>{{$detail->desired_skills}}</p>
                            </div>
                        </section>
                        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="viewImg" id="org_details">
                                <figure><img class="img-responsive"  src="<?php echo config('constant.IMAGE_URL')?>/job/{{$detail->image}}" style="max-width:53%;"></figure>
                                </div>
                        </section>
                        </div>
                        </section>
        <section class="half">
        <div>
        <div class="clearfix">
        <!-- <button class="btn btn-n viewBtn"><i class="fa fa-eye"></i> View More</button> -->
        <div class="container" style="max-height: 20px;width: 100%;">
  <!-- <span class="cand_list"><h2>Applicants List</h2></span> -->

  <ul class="nav nav-tabs">
      <div class="col-md-12 col-xs-12 col-xl-12 cand_list">
  <h3>Applicant List</h3>
  
</div>
    <li class="nav active col-xs-4 recruit_tab"><a data-toggle="tab" href="#home" aria-expanded="true" id="cabnd">Applied Candidates</a></li>
    <li class="col-xs-4 recruit_tab"><a data-toggle="tab" href="#menu2">Shortslisted</a></li>
    <li class="col-xs-4 recruit_tab"><a data-toggle="tab" href="#menu3">Offer</a></li>
    <!-- <li><a data-toggle="tab" href="#menu4">Offer Accepted</a></li> -->
  </ul>

  <div class="tab-content" style="max-height: 400px; overflow-y: scroll; min-height: 400px;"> <div id="home" class="tab-pane active in">
      <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody id="cand_list">
     
  </tbody>
</table>
    </div><div id="menu2" class="tab-pane fade">
      <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Interview</th>
      <th scope="col">Interview Date</th>
      <th scope="col">Offer</th>
    </tr>
  </thead>
  <tbody id="shortlist">
    
  </tbody>
</table>
    </div>
    <div id="menu3" class="tab-pane fade">
      <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">OFFER STATUS</th>
    </tr>
  </thead>
  <tbody id="offer">
    
  </tbody>
</table>
    </div>
    <!-- <div id="menu4" class="tab-pane fade">
      <h3>Menu 4</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div> -->
  </div>
</div>
        </div>
        </div>
        </section>
</main>
 <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 79%;">
        <div class="modal-content" style="background-color: #fff;">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Shedule Interview
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
               
             </div>

<script type="text/javascript">
// var url_string = window.location.href;
//   var param = url_string.split('/');
  var id = window.location.pathname.split("/").pop();
// var getJobApplicants = function(){};
window.getJobApplicants = function foo() {
    {
    $.ajax({
     url:url+'/angularapi.php?act=jobapplyUser&id='+id,
     method:"GET",
     dataType:"text",
     success:function(result)
     { 

       var status = '';
       var data = JSON.parse(result);       
        if(data != 0)
        {  
           var applicant_list = '';
           var short_list = '';
           var offer = '';
           var i = 0;
           var j = 0;
           var k = 0;
           var profile_pic = '';
           var interview_date = '';
           

          data.forEach(function(data){
            ++i;
            if(data.status == '1')
            {
                status = 'Shortlist';

            }
            else
            {
                status = 'Shortlisted';
            }
            if(data.user_image != '')
            {
              profile_pic = data.user_image;
            }
            else
            {
              if(data.gender == 'F' || data.gender == 'Female')
                {
                  profile_pic = "{{config('constant.RMT_DIR')}}"+'/img/'+'female.jpg';
                }else
                {
                  profile_pic = "{{config('constant.RMT_DIR')}}"+'/img/'+'user.jpg';
                }  
            }
            applicant_list +='<tr> <th scope="row">'+i+'</th> <align="center" width="10"> <!----><div ><td><a href="'+route_url+'/manage/job/candidate_profile/'+data.userid+'" target="_blank"><img src="'+profile_pic+'" class="pull-left img-circle nav-user-photo" alt="Smiley face" width="42" height="42"></a>&nbsp;&nbsp; </div> <!----> </td> <td>'+data.name+'</td> <td>'+data.location+'</td> <td>'+data.email+'</td> <td>'+getAge(data.dob)+'</td> <td><button class="btn btn-success" onclick="shortlistCandidate('+data.userid+','+data.status+');">'+status+'</button></td> </tr>';
            
            if(data.status < '4' && data.status > '1')
            {++j;
            if(data.status == '2')
            {
                interview_status = 'Schedule';
                offer_status = 'Disabled';
                interview_date = '';

            }
            else
            {
                interview_status = 'Re-Schedule';
                offer_status    = '';
                var d = new Date(data.interview_date);
                interview_date = d.toDateString();
            }  
            short_list +='<tr> <th scope="row">'+j+'</th> <td><a href="'+route_url+'/manage/job/candidate_profile/'+data.userid+'" target="_blank"><img src="'+profile_pic+'" class="pull-left img-circle nav-user-photo" alt="Smiley face" width="42" height="42" target="_blank"></a>&nbsp;&nbsp; </div> <!----> </td><td>'+data.name+'</td> <td>'+data.contact_no+'</td> <td><button class="btb btn-primary" id="'+data.userid+'" data-myval="'+data.name+'" onclick="open_modal(this,1);">'+interview_status+' Interview</button></td> <td>'+interview_date+'</td> <td><button class="btn btn-success" '+offer_status+' onclick="open_modal('+data.userid+',2)">'+'Send offer'+'</button></td> </tr>';
            }
             else if(data.status >= '4')
            {++k;
              if(data.status > '4')
              {
                cand_status = '<button class="btn btn-success" Disabled>Accepted</button>';
              }else if(data.status == '4')
              {
                cand_status = '<button class="btn btn-primary" Disabled>Offer sent</button>';
              }else if(data.status < '4')
              {
                cand_status = '<button class="btn btn-danger" Disabled>Declined</button>';
              }
            offer +='<tr> <th scope="row">'+k+'</th> <align="center" width="10"> <!----><div ><td><a href="'+route_url+'/manage/job/candidate_profile/'+data.userid+'" target="_blank"><img src="'+profile_pic+'" class="pull-left img-circle nav-user-photo" alt="Smiley face" width="42" height="42" target="_blank"></a>&nbsp;&nbsp; </div> <!----> </td></div> <!----> </td> <td>'+data.name+'</td> <td>'+data.location+'</td> <td>'+data.email+'</td> <td>'+getAge(data.dob)+'</td><td>'+cand_status+'</td> </tr>';
            }
           // i++;
          });

          $('#cand_list').html(applicant_list);
          $('#shortlist').html(short_list);
          $('#offer').html(offer);
        }
        else
        {
           $('#cand_list').html('<span>No data</span>');
          $('#shortlist').html('<span>No data</span>');
          $('#offer').html('<span>No data</span>');
        }

     }
   });
  }    // …
  }
  function getAge(birth) {
  ageMS = Date.parse(Date()) - Date.parse(birth);
  age = new Date();
  age.setTime(ageMS);
  ageYear = age.getFullYear() - 1970;
  return ageYear;
  }
$(document).ready(function(){
  getJobApplicants();

  var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

    $('#date').datepicker({
        minDate: new Date(currentYear, currentMonth, currentDate),
        dateFormat: 'yy-mm-dd'
    });
        
  
});   
function shortlistCandidate(data,status)
{if(status == 1)
  {
 var data = {"userid":data,"id":id,"status":'2',"module":"1"};
 $.ajax({
    url:url+'/create_database.php?act=shortlist',
    data:JSON.stringify(data),
    method:"POST",
    success:function(result)
    {
      var resp  = JSON.parse(result);
      if(resp.status == '1')
      { // alert_msg(resp.status);
         getJobApplicants();
      }
    }
  });
}

}


function open_modal(data,status)
{ 
  var val = 0;
  $("#myModal").modal();
  var act = '';
  if(status == '1')
{
  $('.modal-body').html(' <input type="hidden" class="form-control" id="org_id" /> <form class="form-horizontal" role="form"> <div class="form-group"> <label  class="col-sm-2 control-label"for="inputEmail3">Interview Date</label> <div class="col-sm-10"> <span id="idate"><p></p></span> <input type="date" class="form-control"id="date" /> </div> </div> <div class="form-group"> <label  class="col-sm-2 control-label"for="inputEmail3">Venue</label> <div class="col-sm-10"> <span id="ivenue"><p></p></span> <input type="text" class="form-control"id="venue" placeholder="Venue"/> </div> </div> <div class="form-group"> <label  class="col-sm-2 control-label"for="inputEmail3">Message</label> <div class="col-sm-10"> <span id="imessage"><p><p></span> <input type="text" class="form-control"id="message" placeholder="Enter Message..."/> </div> </div> </form> <div class="modal-footer"> <button type="button" class="btn btn-default"data-dismiss="modal" id="close">Cancel</button> <button type="button" class="btn btn-primary" id="schedule_interview">Shedule Interview</button> </div>');
}
else
{
   $('.modal-body').html(' <input type="hidden" class="form-control" id="org_id" /> <form class="form-horizontal" role="form"> <div class="form-group"> <label  class="col-sm-2 control-label"for="inputEmail3">Joining Date</label> <div class="col-sm-10"> <span id="ijoindate"><p></p></span> <input type="date" class="form-control"id="joindate" /> </div> </div> <div class="form-group"> <label  class="col-sm-2 control-label"for="inputEmail3">Salary</label> <div class="col-sm-10"> <span id="isalary"><p></p></span> <input type="text" class="form-control"id="salary" placeholder="salary"/> </div> </div></form> <div class="modal-footer"> <button type="button" class="btn btn-default"data-dismiss="modal" id="close">Send Later</button> <button type="button" class="btn btn-primary" id="Send_offer">Send Offer </button> </div>');
}
  $('#schedule_interview').click(function(){
  var applicant_data = ''; 
  var applicant_id = '';
  $(data).each(function() {
    $.each(this.attributes, function() {
    if(this.specified) {
        console.log(this.name, this.value);
        if(this.name == 'data-myval')
        {
          applicant_data = this.value;
        }
        if(this.name == 'id')
        {
          applicant_id = this.value;
        } 
       }
     });
   });
    if($('#venue').val() == '')
    {
      $('#ivenue').text('Please enter the venue');
      val++;
    }else
    {
      $('#ivenue').text('');
    }
    if($('#message').val() == '')
    {
      $('#message').text('Please enter the message');
      val++;
    }else
    {
      $('#message').text('');
    }
    if($('#date').val() == '')
    {
      $('#message').text('Please select the date of interview');
      val++;
    }else
    {
      $('#ivenue').text('');
    }
    if(val == 0)
    {  var interview_data = {};
       interview_data.employer_id =  sess_userid;
       interview_data.username    =  applicant_data;
       interview_data.applicant_id=  applicant_id;
       interview_data.job_id      =  id;
       interview_data.status      =  '3';
       interview_data.module      =  '1';
       interview_data.date        =  $('#date').val();
       interview_data.msg         =  $('#message').val();
       interview_data.venue       =  $('#venue').val();
       act = 'interview_schedule';
       recruitment_update(interview_data,act);
    }
     else
    {
      return false;
    }
    });

  $('#Send_offer').click(function(){
    if($('#joindate').val() == '')
    {
      $('#ijoindate').text('Please enter the joining date');
      val++;
    }else
    {
      $('#ijoindate').text('');
    }
    if($('#salary').val() == '')
    {
      $('#isalary').text('Please enter the salary');
      val++;
    }else
    {
      $('#isalary').text('');
    }
    
    if(val == 0)
    {  var offer_data = {};
       offer_data.emp_id       =  sess_userid;
       offer_data.salary       =  $("#salary").val();
       offer_data.applicant_id =  data;
       offer_data.job_id       =  id;
       offer_data.joining_date =  $("#joindate").val();
       act = 'send_offer';
       recruitment_update(offer_data,act);
    }
     else
    {
      return false;
    }
  });
}

function recruitment_update(recruitment_data,act)
{ loading.style.display = "block";
  $.ajax({
    
    url:url+'/create_database.php?act='+act,
    data:JSON.stringify(recruitment_data),
    method:"POST",
    success:function(result)
    {
       getJobApplicants();
       $('#myModal').modal('hide');
       loading.style.display = "none";
    },
    failure:function()
    {
      alert_msg('Server error');
      loading.style.display = "none";
    }

  });
}
// function view_candidate_profile(id)
// {
//   window.location.href="{{url('/manage/job/candidate_profile/"+id+"')}}";
// }
 setTimeout(function() {
              getJobApplicants();

        }, 3000);    
</script>
                       


@stop