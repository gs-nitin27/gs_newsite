@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')

<section class="bodySec">
        <div class="container">
            <section class="tabSec">
            <div id="validate_div" style="color: #fb0606"><span>Fill all fields marked as*</span></div>
                <ul id = "myTab" class = "nav-tabs clearfix">
                     <li class = "active">
                        <a class="tab01" href = "#tab01" data-toggle = "tab">
                            <!-- <img class="img-responsive" src="img/tab01.png"> -->
                            Job Detail
                        </a>
                     </li>                 
                     <li>
                        <a class="tab02" href = "#tab02" data-toggle = "tab">
                           <!--  <img class="img-responsive" src="img/tab02.png"> -->
                            Requirement
                        </a>
                   </li>
                   <li>
                        <a class="tab03" href = "#tab03" data-toggle = "tab">
                            <!-- <img class="img-responsive" src="img/tab03.png"> -->
                            Organization
                        </a>
                   </li>
                </ul>
                <div id = "myTabContent" class = "tab-content tabContentBox clearfix">
                    <div class = "tab-pane fade in active" id = "tab01">
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Job Title*</label>
                                    <input class="form-control" placeholder=" " type="text" name="title" id="title"><span id="jtitle"></span>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Job Location*</label>
                                    <input class="form-control" placeholder=" " type="text" name="city" id="city"><span id="jcity"></span>
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group ">
                                    <label for="" class="">Job type*</label>
                                    <select class="form-control" id="type" name="type">
                                        <option></option>
                                        <option>Permanent</option>
                                        <option>Part-time</option>
                                        <option>Contractual</option>
                                        </select>

                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group ">
                                    <label for="" class="">Job sport</label>
                                     <select class="form-control" id="sport" name="sport">
                                        
                                    </select><span id="jsport"></span>
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group adrs">
                                    <label for="" class="">Address Line 1</label>
                                    <textarea class="form-control" placeholder=" "  id="address1"></textarea>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group adrs">
                                    <label for="" class="">Address Line 2</label>
                                    <textarea class="form-control" placeholder=" "  id="address2"></textarea>
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Email*</label>
                                    <input class="form-control" placeholder=" " type="text" name="email" id="email"><span id="jemail"></span>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">                                    
                                    <label for="" class="">Job  Description*</label>
                                    <textarea class="form-control" placeholder=" " name="desc" id="desc"></textarea><span id="jdesc"></span>
                                </div>                                    
                            </aside>                           
                        </section>
                             <div class="form-group">
                                <a href="#tab02" data-toggle = "tab"><button class="btn btn-n nextBtn " type="button">Next</button></a>
                            </div>
                     </div>
                     
                     <div class = "tab-pane fade" id = "tab02">
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Work Experience</label>
                                    <input class="form-control" placeholder=" " type="text" name="work_exp" id="work_exp">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Qualification*</label>
                                    <input class="form-control" placeholder=" " type="text" name="qualification" id="qualification">
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Key Requirements</label>
                                    <input class="form-control" placeholder=" " type="text" name="keyreq" id="keyreq">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Salary</label>
                                    <input class="form-control" placeholder=" " type="text" name="salary" id="salary">
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Desired Skill*</label>
                                    <input class="form-control" placeholder=" " type="text" id="desiredskill" name="desiredskill">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Any</option>                                        
                                    </select>
                                </div>
                            </aside>
                        </section>
                        <div class="form-group">
                            <a href="#tab03" data-toggle = "tab"><button class="btn btn-n nextBtn " type="button">Next</button></a>
                        </div>
                     </div>
                     <div class = "tab-pane fade" id = "tab03">
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Organization Name</label>
                                    <input class="form-control" placeholder=" " type="text" name="org_name" id="org_name">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">About Organization</label>
                                    <input class="form-control" placeholder=" " type="text" id="about" name="about">
                                </div>
                            </aside>
                         </section>
                         <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group adrs">
                                    <label for="" class="">Address 1</label>
                                    <textarea class="form-control" placeholder=" " id="org_address1" name="org_address1"></textarea>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group adrs">
                                    <label for="" class="">Address 2</label>
                                    <textarea class="form-control" placeholder=" " id="org_address2" name="org_address2"></textarea>
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Organisation Location</label>
                                    <input class="form-control" placeholder=" " type="text" name="org_city" id="org_city"><span id="jorg_city"></span>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">State</label>
                                    <input class="form-control" placeholder=" " type="text" name="state" id="org_state">
                                </div>
                            </aside>
                         </section>
                         <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Mobile No.*</label>
                                    <input class="form-control" placeholder=" " type="tel" id="contact" name="contact" maxlength="11">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Pin</label>
                                    <input class="form-control" placeholder=" " type="text" name="pin" id="org_pin" maxlength="8">
                                </div>
                            </aside>
                         </section>
                         <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Upload Image</label>
                                    <!-- <input type="file" id="uploadFile">
                                    <span class="uploadFileBtn"><i class="fa fa-chain"></i>Attachment</span> -->

                                   <div class="uploadBlock">
                                      <!-- <input type="button" id="btnFileUpload" class="uploadFileBtn" value="Attachment" /> -->
                                      <span id="spnFilePath"></span>
                                     <!--  <input type="file" id="FileUpload1" style="display: block" /> -->
                                     <!-- <input  /> -->
                                     <input type='file' id="imgInp" class="uploadFileBtn" value="Attachment"/>
                                  </div>

                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="uploadBox">
                                    <figure><!-- <img class="img-responsive" src="{{asset('manage_assets/img/demo.jpg')}}"> -->
                                        <img id="blah" src="{{asset('public/manage_assets/img/demo.jpg')}}" alt="your image" style="max-width: 100%;" />
                                    </figure>
                                </div>
                            </aside>
                         </section>
                         
                         <div class="form-group">
                            <button class="btn btn-n nextBtn" id="create_job" type="button">Submit</button>
                        </div>
                     </div>
                </div>
            </section>
        </div>
    </section>
   <script type="text/javascript">
        
        var image_data = '';
        $(document).ready(function(){

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
            $('#org_address1').val(org_data.address1);
            $('#org_address2').val(org_data.address2);
            $('#org_city').val(org_data.city);
            $('#org_pin').val(org_data.pin);
            $('#org_state').val(org_data.state);
            $('#contact').val(org_data.mobile);
            $('#email').val(org_data.email);
            //$('#gstin').val(org_data.gstin);
           }
         }
       });
        }getorg_details();
         getSportsList();
        
        $('#create_job').click(function(){
        if(validate())
          {
           loading.style.display = "block";
           create_job();
          }
      });
           
           // funtion for creating a job
           function create_job() 
           {   var job_data = {
                "id":"0",
                "userid":sess_userid,
                "title":$('#title').val(),
                "type":$('#type').val(),
                "sports":$('#sport').val(),
                "description":$('#desc').val(),
                "gender":$('#gender').val(),
                "location":$('#city').val(),
                "work_experience":$('#work_exp').val(),
                "desired_skills":$('#desiredskill').val(),
                "qualification":$('#qualification').val(),
                "key_requirement":$('#keyreq').val(),
                "org_address1":$('#org_address1').val(),
                "org_address2":$('#org_address2').val(),
                "org_city":$('#org_city').val(),
                "org_state":$('#org_state').val(),
                "org_pin":$('#org_pin').val(),
                "organisation_name":$('#org_name').val(),
                "about":$('#about').val(),
                "address1":$('#address1').val(),
                "address2":$('#address2').val(),
                "city":$('#city').val(),
                "state":$('#state').val(),
                "pin":$('#org_pin').val(),
                "contact":$('#contact').val(),
                "email_app_collection":$('#email').val(),
                "image":image_data,
                "salary":$('#salary').val()
                };
              //  alert_msg(JSON.stringify(job_data));return;
                
                $.ajax({
                    type: "POST",
                    async:false,
                    url: url+'/create_database.php?act=createjob',
                    data: JSON.stringify(job_data),
                    dataType: "text",
                    success: function(result){
                    result = JSON.parse(result);
                    if(result.status == '1')
                    {   
                        alert_msg('Job Sucessfully created');
                        loading.style.display = "none";
                        window.location.href = "{{url('/manage/dashbo')}}";
                    }
                    else
                    {
                        alert_msg('Something went Wrong');
                        loading.style.display = "none";
                    }
                   }
                  }); 
            }
          //Create job function Ends here
     });
         function validate()
         {  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            $('#validate_div').html('');
            var n = 0;
            var message = [];
            if($('#title').val()=='')
            {
               n=n+1;
               message.push('<span>*Job title required</span>');
            }
            if($('#desc').val()=='')
            {
                n=n+1;
                message.push('<span>*Job description required</span>');
            }
            if($('#city').val()=='')
            {
                n=n+1;
                message.push('<span>*Job location required</span>');
            }
            if($('#type').val()=='')
            {
                n=n+1;
                message.push('<span>*Specify Job type</span>');
            }
            if($('#org_name').val()=='')
            {
                n=n+1;
                message.push('<span>*Organisation name required</span>');
            }
            if($('#contact').val()=='')
            {
                n=n+1;
                message.push('<span>*Contact number Required</span>');
            }
            if($('#email').val()=='')
            {
                n=n+1;
                message.push('<span>*Contact email Required</span>');
            }
            if($('#desiredskill').val()=='')
            {
                n=n+1;
                message.push('<span>*Specify the Desired skill</span>');
            }
            if($('#qualification').val()=='')
            {
                n=n+1;
                message.push('<span>*Please specify the required qualifications</span>');
            }
            if(!($('#email').val().match(mailformat)))
            {

                n=n+1;
                message.push('<span>*Enter valid email address</span>');
            }
            if(image_data=='' || image_data == undefined)
            {
                n=n+1;
                message.push('<span>*Job image required</span>');
            }
            if(n>0)
            {   var msg_data = message.join('</br>');
                $('#validate_div').html(msg_data);
                window.scrollTo(500, 0);
                return false;
            }
            else
            {
              return true;
            }
           }

        // Code For image view and Generating base64 Format
        function readURL(input) {
        if (input.files && input.files[0]) {
            loading.style.display = "block";
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                image_data = e.target.result;
                image_data = image_data.split(',')[1];
            }
             reader.readAsDataURL(input.files[0]);
             loading.style.display = "none";
        }
    }
    //function for image upload starts
             function image_upload()
             {
                $.ajax({
                url:url+'/angularapi_image.php?act=jobimage&ui=la',
                data:image_data,
                type:'POST',
                dataType:'text',
                success:function(result)
                {  
                  var image_name = JSON.parse(result);
                  if(image_name.status == '1')
                  {
                  image_data = image_name.data;
                 // alert_msg(image_data);
                  return image_data;
                  }
                else
                 {
                  return false;                   
                 }
               }
           });
        }
           //function for image upload ends here
    $("#imgInp").change(function(){
        readURL(this);
    });
    </script>
    @stop
    