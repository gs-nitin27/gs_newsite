@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
<head>
  <style type="text/css">
    .company{
    background: linear-gradient(#ccc,#03a9f5);
    box-shadow: #ccc;
    padding: 9px 9px 9px 9px;
    box-shadow: 4px #ccc;
    box-shadow: 18px 6px 20px #ccc;
    border-radius: 5%;
    font-size: 27px;
    color: #fff;
    color: #f4f4f4;
    box-shadow: 0 0 black;
    background-color: #03a9f5;
    text-decoration: none;
    }
  </style>
</head>

    <section class="bodySec deshboard2">
    <center id="org_div"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalHorizontal" onclick="getorg_details()"><span class="glyphicon glyphicon-plus"></span>Add Organisation</button></center><br><br><br>
        

        <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
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
                    Add Organisation
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <input type="hidden" class="form-control" id="org_id" />
                <form class="form-horizontal" role="form">
                   <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Organisation Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="org_name" placeholder="Organisation Name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">About</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="about" placeholder="About"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Address1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="address1" placeholder="Address1"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Address2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="address2" placeholder="Address2"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="city" placeholder="city"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">State</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="state" placeholder="city"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Pin</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" 
                        id="pin" placeholder="Ex.101010"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Mobile No.</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" 
                        id="mobile" placeholder="9010202929"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="email" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >GSTIN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="gstin" placeholder="GST No."/>
                    </div>
                  </div>
                </form>
                
                
                
                
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal" id="close">
                            Close
                </button>
                <button type="button" class="btn btn-primary" onclick="add_organisation()">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

        <div class="container">
            <section class="tabSec">
                <ul id = "myTab" class = "nav-tabs clearfix">
                     <li class = "active">
                        <a class="tab04" href = "#tab01" data-toggle = "tab">
                            <!-- <img class="img-responsive" src="img/tab01.png"> -->
                            Active Jobs
                        </a>
                     </li>                 
                     <li>
                        <a class="tab05" href = "#tab02" data-toggle = "tab">
                           <!--  <img class="img-responsive" src="img/tab02.png"> -->
                            Close Jobs
                        </a>
                   </li>
                   <li>
                        <a class="tab06" href = "#tab03" data-toggle = "tab">
                            <!-- <img class="img-responsive" src="img/tab03.png"> -->
                            Save Jobs
                        </a>
                   </li>
                </ul>
                <div id = "myTabContent" class = "tab-content tabContentBox clearfix">
                    <div class = "tab-pane fade in active jobActiveSec" id = "tab01">
                    </div>
                    <div class = "tab-pane fade" id = "tab02">
                    </div>
                    <div class = "tab-pane fade jobsaveTab" id = "tab03">
                        
                        <!-- <div class="clearfix">
                        	<button class="btn btn-n viewBtn"><i class="fa fa-eye"></i> View More</button>
                        </div> -->
                     </div>
                </div>
                </section>
                </div>
    <a href="create" class="cleateJob"><i class="glyphicon glyphicon-plus"></i><span>Create Job</span></a>
    </section>
    <script type="text/javascript">
        function getid(a)
        {
               
             window.location.href = route_url+'/manage/view/'+a.id;


        }
        
          var org_name = '';
          var org_id = '0';
          var local_userdata = localStorage.getItem('userdata');

               local_userdata = JSON.parse(local_userdata);
        $(document).ready(function(){
          
          
          if(local_userdata.org_data.hasOwnProperty('org_id') == true)
          {   org_name = local_userdata.org_data.org_name;
              org_id = local_userdata.org_data.org_id;
              //alert(org_name);return;
          if(org_name != '')
          { 
            var org_div = '<div data-target="#myModalHorizontal" onclick="getorg_details();" data-toggle="modal" style="text-decoration:none"> <h1><a><span class="company">'+org_name+'</span><h1></a></div>';
            $('#org_div').html(''); 
            $('#org_div').html(org_div);
          }
          }
          
          
          $.ajax({
          url:url+'/angularapi.php?act=getjoblist&id='+sess_userid,
          method:"GET",
          dataType:"text",
          success:function(result)
          {
            var data = JSON.parse(result);
            var card1 = '';
            var card2 = '';
            var card3 = '';
            var empty = '<center><figure><img src="{{asset("manage_assets/img/na.png")}}" alt=""></figure></center>';
            if(data != 0)
            {
              data.forEach(function(data){
                 if(data.publish == 0)
                 { if(data.org_city == undefined)
                     {
                      var location = data.location;
                     }else
                     {
                      var location = data.org_city;
                     }
                card1 += '<section class="clearfix colSec"> <div class="colBox" id="'+data.id+'" onclick="getid(this);"> <figure><img class="img-responsive" src="'+image_url+'/job/'+data.image+'"></figure> <p class="">'+data.title+'</p> </div> <p class="cricket"><i class="fa fa-map-marker"></i>'+data.org_city+'- '+data.sport+'</p> <a href="javascript:void(0)" class="publishCard" onclick="get_job_id('+data.id+');">Publish</a> </section>';
                 }
                 if(data.publish == 1)
                 {
                card2 += '<section class="clearfix colSec"> <div class="colBox" id="'+data.id+'" onclick="getid(this);"> <figure><img class="img-responsive" src="'+image_url+'/job/'+data.image+'"></figure> <p class="">'+data.title+'</p> </div> <p class="cricket"><i class="fa fa-map-marker"></i>'+data.org_city+'- '+data.sport+'</p></section>';
                 }else if(data.publish < 0)
                 {
                    card3 += '<section class="clearfix colSec"> <div class="colBox" id="'+data.id+'" onclick="getid(this);"> <figure><img class="img-responsive" src="'+image_url+'/job/'+data.image+'"></figure> <p class="">'+data.title+'</p> </div> <p class="cricket"><i class="fa fa-map-marker"></i>'+data.org_city+'- '+data.sport+'</p> <a href="{{url("/manage/View")}}" class="publishCard" onclick="get_job_id('+data.id+');">Republish</a> </section>';
                 }
             


          
          });  
              
               
               if(card2 == '')
               {
               $('#tab01').html(empty); 
               }
               else
               {
                $('#tab01').html(card2);
               }

               if(card3 == '')
               {
               $('#tab02').html(empty); 
               }
               else
               {
                $('#tab02').html(card3);
               }

               if(card1 == '')
               {
               $('#tab03').html(empty); 
               }
               else
               {
                $('#tab03').html(card1);
               }
             }else
             {
              $('#tab01').html(empty); 
              $('#tab02').html(empty); 
              $('#tab03').html(empty); 

             }
          }
        });
      });
        function add_organisation()
        {

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
           "email":$('#email').val(),
           "gstin":$('#gstin').val()
         }
       org_data = JSON.stringify(org_data);
     // alert(org_data);return;
       $.ajax({
        url:url+'/angularapi.php?act=addOrg',
        method:"POST",
        data:org_data,
        success:function(result)
        {//console.log(result);return;
          var resp_data = result;//JSON.parse(result);
           if(resp_data != '0')
           { var org_name = '<a href="javascript:void(0)" data-target="#myModalHorizontal" onclick="getorg_details();" data-toggle="modal" style="text-decoration:none"><h1><span class="company">'+$('#org_name').val()+'</span><h1></a>';
             alert("Organisation Created");
             $('#org_div').html('');
             $('#org_div').html(org_name);
             var userdata = JSON.parse(localStorage.getItem('userdata'));
             userdata.org_data.org_id = resp_data;
             userdata.org_data.org_name = $('#org_name').val();
             localStorage.setItem('userdata',JSON.stringify(userdata));
             $('.modal').modal('hide');
           }
           else
           {
           alert('Something wemt wrong'); 
           }
           
         }
       });
      }
      function getorg_details()
      {
        $.ajax({
        url:url+'/angularapi.php?act=getorgdetails&userid='+sess_userid,
        method:"GET",
        // data:org_data,
        success:function(result)
        {
           var resp_data = JSON.parse(result);
           if(resp_data.status == '1')
           { 
            var org_data = resp_data.data;
            $('#org_id').val(org_data.id);
            $('#org_name').val(org_data.org_name);
            $('#about').val(org_data.about);
            $('#address1').val(org_data.address1);
            $('#address2').val(org_data.address2);
            $('#city').val(org_data.city);
            $('#pin').val(org_data.pin);
            $('#state').val(org_data.state);
            $('#mobile').val(org_data.mobile);
            $('#email').val(org_data.email);
            $('#gstin').val(org_data.gstin);
           }
         }
       });
      }
      function get_job_id(id)
      {

       window.location.href = route_url+'/manage/publish/checkout/'+id;

      }
    </script>
  @stop