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
                                <p><span>Job Title:</span>  {{$detail->title}} </p>
                                <p><span>Job Description:</span>  {{$detail->description}} </p>
                                <p><span>Job Location:</span> {{$detail->org_city}} </p>
                                <p><span>Job Type:</span> {{$detail->type}}</p>
                                <p><span>Sport:</span>  {{$detail->sport}} </p>
                                <p><span>Salary:</span>  {{$detail->salary}}</p>
                            </div>
                        </section>
                        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="clearfix jobSave" id="job_requirements">
                                <p><span>Email:</span>  {{$detail->description}} </p>
                                <p><span>WorkExperience:</span>{{$detail->work_experience}}</p>
                                <p><span>Key Requirements:</span>{{$detail->description}} </p>
                                <p><span>Desired Skills:</span>{{$detail->description}}</p>
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
        <div class="container">
  <h2>Applicants List</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Applied Candidates</a></li>
    <li><a data-toggle="tab" href="#menu1">Shortslisted</a></li>
    <li><a data-toggle="tab" href="#menu2">Selected</a></li>
    <li><a data-toggle="tab" href="#menu3">Offer Accepted</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div  class="tab-content">
      <div  class="tab-pane fade active in" id="example1-tab1" role="tabpanel">
      <table  border="0" class="table-users table">
      <thead >
      <tr >
      <th ></th>
      <th >Name</th>
      <th >Location</th>
      <th >Mobile</th>
      <th >Age</th>
      <th >View</th>
      </tr>
      </thead>
      <tbody id="candidates_list">
      </tbody>
      </table>
      </div>
      
      <div  class="tab-pane fade" id="example1-tab3" role="tabpanel">
      <table  border="0" class="table-users table">
      <thead >
      <tr >
      <th ></th>
      <th >Name</th>
      <th >Location</th>
      <th >Mobile</th>
      <th >Age</th>
      <th >Status</th>
      </tr>
      </thead>
      <tbody id="shortlist"> 
      </tbody>
      </table>              
      </div>
     
    
      <div  class="tab-pane fade" id="example1-tab2" role="tabpanel">
      <table  border="0" class="table-users table">
      <thead >
      <tr >
      <th ></th>
      <th >Name</th>
      <th >Mobile</th>
      <th >Age</th>
      <th >Interview</th>
      <th >Interview Date</th>
      <th >Sent Offer</th>
      </tr>
      </thead>
      <tbody id="shortlist">  
      <!---->
      </tbody>
      </table>           

    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
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
  //alert(url_string);
  var param = url_string.split('/');
  id = param['7'];
  function getJobData()
  {
    $.ajax({
     url:url+'/angularapi.php?act=jobapplyUser&id='+id,
     method:"GET",
     dataType:"text",
     success:function(result)
     { var status = '';
       var data = JSON.parse(result);       
        if(data != 0)
        {  var applicant_list = '';
           var short_list = '';
          data.forEach(function(data){
            if(data.status == '1')
            {
               status = 'Shortlist';
            }else
            {
                status = 'Shortlisted';
            }
            if(data.status == '1')
            {
            applicant_list +='<tr  class="" ><td  align="center" width="10"> <!----><div > <img  class="pull-left img-circle nav-user-photo" src="assets/images/user.jpg" width="50">&nbsp;&nbsp; </div> <!----> </td> <td > <a  target="_blank" href="#/allProfile/486/1">'+data.name+'</a> <br ><i  class="fa fa-envelope"></i> </td> <td >'+data.location+'</td> <td > '+data.contact_no+'<br > </td> <td >'+getAge(data.dob)+'<br > </td> <td  align="left"> <!----> <!----><div > <a  class="btn btn-success btn-block btn-sm">Shortlisted</a> </div></td></tr>';
            }
            else if(data.status <= '3')
            {
            short_list +='<tr   class=""> <td   align="center" width="10"> <!----> <!----><div  > <img   class="pull-left img-circle nav-user-photo" width="50" src="https://lh3.googleusercontent.com/-x3RK2qLjO4M/AAAAAAAAAAI/AAAAAAAAACI/iCTNcmvF-zY/photo.jpg">&nbsp;&nbsp; </div> </td> <td  > <a   target="_blank" href="#/allProfile/515/1">'+data.name+'</a> <br  ><i   class="fa fa-envelope"></i> </td> <td  > Delhi </td> <td  > '+data.contact_no+'<br  > </td> <td  >'+getAge(data.dob)+'<br  > </td> <td   align="left"> <!----> <!----><div  > <a   class="btn btn-success btn-block btn-sm">Shortlisted</a> </div> </td> </tr>';
            }
          });

          $('#candidates_list').html(applicant_list);
          $('#shortlist').html(short_list);
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

  // ageMonth = age.getMonth(); // Accurate calculation of the month part of the age
  // ageDay = age.getDate();    // Approximate calculation of the day part of the age
}
});   
</script>
                       


@stop