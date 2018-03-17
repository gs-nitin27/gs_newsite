@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')

    <section class="bodySec deshboard2">
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
            // alert(a.id);  
             window.location.href = route_url+'/manage/view'+a.id;


        }
        
     
        $(document).ready(function(){
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
            if(data != 0)
            {
              data.forEach(function(data){
                 if(data.publish == 0)
                 { 
                card1 += '<section class="clearfix colSec"> <div class="colBox" id="'+data.id+'" onclick="getid(this);"> <figure><img class="img-responsive" src="'+image_url+'job/'+data.image+'"></figure> <p class="">'+data.title+'</p> </div> <p class="cricket"><i class="fa fa-map-marker"></i>'+data.org_city+'- '+data.sport+'</p> <a href="{{url("/manage/View")}}" class="publishCard">Publish</a> </section>';
                 }
                 if(data.publish == 1)
                 {
                card2 += '<section class="clearfix colSec"> <div class="colBox" id="'+data.id+'" onclick="getid(this);"> <figure><img class="img-responsive" src="'+image_url+'job/'+data.image+'"></figure> <p class="">'+data.title+'</p> </div> <p class="cricket"><i class="fa fa-map-marker"></i>'+data.org_city+'- '+data.sport+'</p> <a href="{{url("/manage/View")}}" class="publishCard">Publish</a> </section>';
                 }else if(data.publish < 0)
                 {
                    card3 += '<section class="clearfix colSec"> <div class="colBox" id="'+data.id+'" onclick="getid(this);"> <figure><img class="img-responsive" src="'+image_url+'job/'+data.image+'"></figure> <p class="">'+data.title+'</p> </div> <p class="cricket"><i class="fa fa-map-marker"></i>'+data.org_city+'- '+data.sport+'</p> <a href="{{url("/manage/View")}}" class="publishCard">Publish</a> </section>';
                 }
             


          
          });  
              
               var empty = '<figure><img src="{{asset("manage_assets/img/na.png")}}" alt=""></figure>';
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
             }
          }
        });
      });
    </script>
  @stop