<!DOCTYPE html>
<html>
<head>
  @include('Manage.layouts.head')
 <title>Tournament Updates</title>
  <style type="text/css">
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 30%;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #fff;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
    width: 60%
    top:0;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

.btn-upload {
    position: relative;
    overflow: hidden;
    display: inline-block;
}
.btn-upload input[type=file] {
    position: absolute;
    opacity: 0;
    z-index: 0;
    max-width: 100%;
    height: 100%;
    display: block;
}
.btn-upload .btn{
    padding: 8px 20px;
    background: #337ab7;
    border: 1px solid #2e6da4;
    color: #fff;
    border: 0;
}
.btn-upload:hover .btn{
    padding: 8px 20px;
    background: #2e6da4;
    color: #fff;
    border: 0;
}
  </style>
</head>
<body>
<nav class="navbar navbar-default" style="background: #03a9f4">
  <div class="container-fluid">
    <div class="navbar-header">
     <h1><center><a class="navbar-brand" href="#" style="color: #fff;text-align:center; ">{{$data[0]->name}}</a></center></h1> 
    </div>
    <ul class="nav navbar-nav">
    </ul>
  </div>
</nav>
<div class="sidenav">
<center><span style="background: #ccc"><h4>Tournament Updates</h4></span></center>
<ul class="list-group" id="updates">
<h1 style="color: #ccc">No Updates yet</h1>
</ul>
</div>
<div class="main" style="width: 60%;">
<div class="container" style="float: left">
  <img src="https://getsporty.in/portal/uploads/resources/res_1493288985.jpg" alt="Cinque Terre" width="304" height="236" id="blah"> 
<label class="btn-upload">
<span id="spnFilePath"></span>
<input type='file' id="imgInp" value="Attachment"/>
<button class="btn">Browse</button></label>
</div>
<br>
<form>
<div class="form-group">
    <label for="exampleInputEmail1">Title</label><span id="e_title"></span>
    <input type="email" class="form-control" id="title"  placeholder="Enter Title">
</div>
  <div class="form-group">
    <label for="exampleTextarea">Update Content</label><span id="e_desc"></span>
    <textarea class="form-control" id="desc" rows="5" cols="50" maxlength="360"></textarea>
  </div>
</form>
 <button onclick="create_update();" class="btn btn-primary">Submit</button>
</div>
</body>
<script type="text/javascript">
var tournament_id = '{{$data[0]->id}}';
var image_data = '';
var url = '<?php echo config('constant.ENV_URL')?>';
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                image_data = e.target.result;
                image_data = image_data.split(',')[1];
            }
             reader.readAsDataURL(input.files[0]);
        }
    }
$("#imgInp").change(function(){
        readURL(this);
    });
function create_update()
{
     var i = 0;
     var update_info = {};
    if($('#title').val() != '')
    {
      update_info.title = $('#title').val();
    }
    else
    { $('#e_title').text("Enter title for update");
      i++;
    }

    if($('#desc').val() != '')
    {
      update_info.description = $('#desc').val();
    }
    else
    { $('#e_desc').text("Enter description");
      i++;
    }

    if(i == 0)
    {
      update_info.image = image_data;
      create_update_info(update_info);
    }
    else
    {
      return false;
    }
 }

function create_update_info(update_info)
 {
  
     var data = {"tournamentid":tournament_id,"userid":'234',"update_info":update_info};
     console.log(JSON.stringify(data));
     $.ajax({
     url: url+'/tournamentcontroller.php?act=post_update',
     method:"POST",
     data:JSON.stringify(data),
     success:function(result)
     {
       var resp = JSON.parse(result);
       if(resp.status == '1')
       {
         var update_data = JSON.parse(resp.data.update_info);
         console.log(resp.data.update_info);
         var list = '';
         update_data.forEach(function(update_data){
         list += '<li class="list-group-item"><img src="{{config("constant.IMAGE_URL")}}tournament/updates/'+update_data.image+'" class="img-rounded" alt="Cinque Terre" width="50" height="50"><h3>'+update_data.title+'</h3><p>'+update_data.description+'</p></li>'
        });
         $('#updates').html(list);
       }
     }
  });   
 }
$(document).ready(function(){
$.ajax({
url:url+'/tournamentcontroller.php?act=get_update&tournament_id='+tournament_id,
method:"GET",
success:function(result){
var resp = JSON.parse(result);
var list = '';
if(resp.status == '1')
 {
 var update_data = resp.data;
 console.log(resp.data);
 update_data.forEach(function(update_data){
 list += '<li class="list-group-item"><img src="{{config("constant.IMAGE_URL")}}tournament/updates/'+update_data.image+'" class="img-rounded" alt="Cinque Terre" width="50" height="50"><h3>'+update_data.title+'</h3><p>'+update_data.description+'</p></li>';
 });
   }
   else
   {
    list = '<li class="list-group-item"><p>'+'No updates yet'+'</p></li>'; 
   }
   $('#updates').html(list);
  }
 });
});
</script>
</html>
