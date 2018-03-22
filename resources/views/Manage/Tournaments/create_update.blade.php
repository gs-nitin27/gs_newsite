<!DOCTYPE html>
<html>
<head>
  @include('Manage.layouts.head')
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
    background-color: #111;
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
    
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
    width: 60%
    top:0;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
  </style>
</head>
<body>
<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>
<div class="main">
<div class="container" style="float: left">
  <h2>Rounded Corners</h2>
   <img src="https://getsporty.in/portal/uploads/resources/res_1493288985.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236"> 
</div>
<form>
  <div class="form-group">
    <img src="" alt="no image">
    <!-- <label for="exampleInputEmail1">Title</label>
    <input type="email" class="form-control" id="title"  placeholder="Enter Title">
    <small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="email" class="form-control" id="title"  placeholder="Enter Title">
    <small id="titleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Update Content</label>
    <textarea class="form-control" id="content" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<script type="text/javascript">
  
$(document).ready(function(){

// $.ajax({

      

//     });
});

</script>
</html>
