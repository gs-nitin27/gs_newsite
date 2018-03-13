@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')

<section class="bodySec">
        <div class="container">
            <section class="tabSec">
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
                            Orgenization
                        </a>
                   </li>
                </ul>
                <div id = "myTabContent" class = "tab-content tabContentBox clearfix">
                    <div class = "tab-pane fade in active" id = "tab01">
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Job Title</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Job Location</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group ">
                                    <label for="" class="">Job type</label>
                                    <select class="form-control" id="">
                                        <option></option>
                                        <option>2000 - 5000</option>
                                        <option>2000 - 5000</option>                                        
                                    </select>

                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group ">
                                    <label for="" class="">Job sport</label>
                                     <select class="form-control" id="">
                                        <option></option>
                                        <option>2000 - 5000</option>
                                        <option>2000 - 5000</option>                                        
                                    </select>
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
                                    <label for="" class="">Email</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">                                    
                                    <label for="" class="">Job  Discription</label>
                                    <textarea class="form-control" placeholder=" "></textarea>
                                </div>                                    
                            </aside>                           
                        </section>
                             <div class="form-group">
                            	<button class="btn btn-n nextBtn " type="button">Next</button>
                            </div>
                     </div>
                     
                     <div class = "tab-pane fade" id = "tab02">
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Work Experience</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Qualification</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Desired Skill</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Gender</label>
                                    <select class="form-control" id="">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>                                        
                                    </select>
                                </div>
                            </aside>
                        </section>
                        <div class="form-group">
                            <button class="btn btn-n nextBtn " type="button">Next</button>
                        </div>
                     </div>
                     <div class = "tab-pane fade" id = "tab03">
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Orgenization Name</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">About Orgenization</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                         </section>
                         <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group adrs">
                                    <label for="" class="">Address 1</label>
                                    <textarea class="form-control" placeholder=" "></textarea>
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group adrs">
                                    <label for="" class="">Address 2</label>
                                    <textarea class="form-control" placeholder=" "></textarea>
                                </div>
                            </aside>
                        </section>
                        <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Job Location</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">State</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                         </section>
                         <section class="clearfix">
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Mobile No.</label>
                                    <input class="form-control" placeholder=" " type="text">
                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="form-group">
                                    <label for="" class="">Pan</label>
                                    <input class="form-control" placeholder=" " type="text">
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
                                      <input type="file" id="FileUpload1" style="display: none" />
                                  </div>

                                </div>
                            </aside>
                            <aside class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mobView">
                                <div class="uploadBox">
                                    <figure><img class="img-responsive" src="{{asset('manage_assets/img/demo.jpg')}}"></figure>
                                </div>
                            </aside>
                         </section>
                         
                         <div class="form-group">
                            <button class="btn btn-n nextBtn " type="button">Submit</button>
                        </div>
                     </div>
                </div>
            </section>
        </div>
    </section>
    @stop