@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
<head>
    <style type="text/css">
        * {
    margin: 0; padding: 0;
}
html, body, #container {
    height: 100%;
}
header {
    height: 50px;
}
main {
    height: 100%;
}
.half {
    height: 50%;
}
    </style>
</head>
@php 
$detail = $detail[0];
@endphp

<h1></h1>



<main>
        <section class="half">
        <h1>{{$detail->title}}</h1>
             <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="clearfix jobSave" id="job_details">
                                <p><span>Job Title:</span>  {{$detail->title}} <a href="{{url('/manage/edit/')}}/{{$detail->id}}">Edit</a></p>
                                <p><span>Job Description:</span>  {{$detail->description}} </p>
                                <p><span>Job Location:</span> {{$detail->org_city}} </p>
                                <p><span>Job Type:</span> {{$detail->type}}</p>
                                <p><span>Sport:</span>  {{$detail->sport}} </p>
                                <p><span>Salary:</span>  {{$detail->salary}}</p>
                            </div>
                        </section>
                        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="clearfix jobSave" id="job_requirements">
                                <p><span>Email:</span>  {{$detail->email}} </p>
                                <p><span>WorkExperience:</span>{{$detail->work_experience}}</p>
                                <p><span>Key Requirements:</span>{{$detail->key_requirement}} </p>
                                <p><span>Desired Skills:</span>{{$detail->desired_skills}}</p>
                            </div>
                        </section>
                        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="viewImg" id="org_details">
                                <figure><img class="img-responsive" src="<?php echo config('constant.IMAGE_URL')?>/job/{{$detail->image}}"></figure>
                                </div>
                        </section>
                        </section>
        <section class="half">
        <div>
        <div class="clearfix">
        <!-- <button class="btn btn-n viewBtn"><i class="fa fa-eye"></i> View More</button> -->
        <div class="container" style="max-height: 20px;">
  <h2>Applicants List</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true">Applied Candidates</a></li>
    <li><a data-toggle="tab" href="#menu2">Shortslisted</a></li>
    <li><a data-toggle="tab" href="#menu3">Offer</a></li>
    <!-- <li><a data-toggle="tab" href="#menu4">Offer Accepted</a></li> -->
  </ul>

  <div class="tab-content" style="max-height: 200px;overflow-y: scroll;">
    <div id="home" class="tab-pane fade">
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
<script type="text/javascript">
var id = '';
$(document).ready(function(){
  var url_string = window.location.href;
  var param = url_string.split('/');
  id = param['6'];
  function getJobData()
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
            
            applicant_list +='<tr> <th scope="row">'+i+'</th> <align="center" width="10"> <!----><div > <img  class="pull-left img-circle nav-user-photo" src="assets/images/user.jpg" width="50">&nbsp;&nbsp; </div> <!----> </td> <td>'+data.name+'</td> <td>'+data.location+'</td> <td>'+data.email+'</td> <td>'+getAge(data.dob)+'</td> <td><button class="btn btn-success" onclick="shortlistCandidate('+data+');">Shortlist</button></td> </tr>';
            
            if(data.status < '4')
            {++j;
            short_list +='<tr> <th scope="row">'+j+'</th> <td>Mark</td> <td>'+data.name+'</td> <td>'+data.contact_no+'</td> <td><button class="btb btn-primary">Schedule Interview</button></td> <td>25 March 2018</td> <td><button class="btn btn-success">Sent Offer</button></td> </tr>';
            }
             else if(data.status > '4')
            {++k;
            offer +='<tr> <th scope="row">'+k+'</th> <align="center" width="10"> <!----><div > <img  class="pull-left img-circle nav-user-photo" src="assets/images/user.jpg" width="50">&nbsp;&nbsp; </div> <!----> </td> <td>'+data.name+'</td> <td>'+data.location+'</td> <td>'+data.email+'</td> <td>'+getAge(data.dob)+'</td><td><button class="btn btn-warning">DECLINED</button></td> </tr>';
            }
           // i++;
          });

          $('#cand_list').html(applicant_list);
          $('#shortlist').html(short_list);
          $('#offer').html(offer);
        }

     }
   });
  }
  getJobData();
  function getAge(birth) {
  ageMS = Date.parse(Date()) - Date.parse(birth);
  age = new Date();
  age.setTime(ageMS);
  ageYear = age.getFullYear() - 1970;

  return ageYear;
  }
});   

function shortlistCandidate(data)
 {
  $userid            =  $userdata->userid ;
  $id                =  $userdata->id;
  $status            =  $userdata->status;    // Status = 2 for shortlist
  $module            =  $userdata->module;





 }

</script>
                       


@stop