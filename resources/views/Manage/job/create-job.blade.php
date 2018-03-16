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
                                    <textarea class="form-control" placeholder=" "></textarea>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group adrs">
                                    <label for="" class="">Address Line 2</label>
                                    <textarea class="form-control" placeholder=" "></textarea>
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
                                    <label for="" class="">Job  Discription*</label>
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
                                    <label for="" class="">Qualification</label>
                                    <input class="form-control" placeholder=" " type="text" name="qualification" id="qualification">
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
                                    <select class="form-control" id="Gender" name="gender">
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
                                    <label for="" class="">Orgenization Name</label>
                                    <input class="form-control" placeholder=" " type="text" name="org_name" id="org_name">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">About Orgenization</label>
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
                                    <input class="form-control" placeholder=" " type="text" name="state" id="state">
                                </div>
                            </aside>
                         </section>
                         <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Mobile No.*</label>
                                    <input class="form-control" placeholder=" " type="text" id="contact" name="contact">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Pin</label>
                                    <input class="form-control" placeholder=" " type="text" name="pin" id="pin">
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
                                      <input type="button" id="btnFileUpload" class="uploadFileBtn" value="Attachment" />
                                      <span id="spnFilePath"></span>
                                     <!--  <input type="file" id="FileUpload1" style="display: block" /> -->
                                     <input type='file' id="imgInp" />
                                  </div>

                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="uploadBox">
                                    <figure><!-- <img class="img-responsive" src="{{asset('manage_assets/img/demo.jpg')}}"> -->
                                        <img id="blah" src="#" alt="your image" />
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
        var url = '<?php echo config('constant.ENV_URL')?>';
        var image_data = '';
        var user_data = JSON.parse(localStorage.getItem('userdata'));
        $(document).ready(function(){

            function getSportsList()
             {
                $.ajax({
                url:url+'/angularapi.php?act=sportlisting',
                type:'GET',
                dataType:'text',
                success:function(result)
                {  var data = JSON.parse(result);
                   var option = '<option></option>';
                   data.forEach(function(data){
                    option += '<option>'+data.sports+'</option>';
                   });
                    $('#sport').html(option);
                }
               });
              }
              getSportsList();

        $('#create_job').click(function(){
        if(validate())
          { function image_upload()
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
                  image_name = image_name.data;  
              }else{
                    
                }
               }
           });
        }
    }
            image_upload();
            var job_data = {

                'userid':user_data.userid,
                'title':$('#title'),
                'type':$('#type'),
                'sports':$('#sports'),
                'gender':$('#Gender'),
                'work_exp':$('#work_exp'),
                'qualification':$('#qualification'),
                'keyreq':$('#keyreq'),
                'org_address1':$('#org_address1'),
                'org_address2':$('#org_address2'),
                'org_city':$('#org_city'),
                'org_state':$('#org_state'),
                'org_pin':$('#org_pin'),
                'name':$('#org_name'),
                'about':$('#about'),
                'address1':$('#address1'),
                'address2':$('#address2'),
                'org_city':$('#org_city'),
                'org_state':$('#org_state'),
                'org_pin':$('#org_pin'),
                'contact':$('#contact'),
                'email':$('#email'),
                'image':image_name,
                'salary':$('#salary')
                }
                $.post({
                   url:url'/create_databse.php?act=create_job',



                });
          
    
        });
    });
         function validate()
         {
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
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                image_data = e.target.result;
            }
             reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imgInp").change(function(){
        readURL(this);
    });
    </script>
    @stop
    