@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
<?php 
//$name = $sess_data->name;
//echo $name;die;
?>

<style>
.blogShort{ border-bottom:1px solid #ddd;}
.add{background: #333; padding: 10%; height: 300px;}

.nav-sidebar { 
    width: 100%;
    padding: 30px 0; 
    border-right: 1px solid #ddd;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
}
.nav-sidebar .active a { 
    cursor: default;
    background-color: #0b56a8; 
    color: #fff; 
}
.nav-sidebar .active a:hover {
    background-color: #E50000;   
}
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}

.btn-blog {
    color: #ffffff;
    background-color: #E50000;
    border-color: #E50000;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#0b56a8;
    border-color: #0b56a8;
}
article h2{color:#333333;}
h2{color:#0b56a8;}
 .margin10{margin-bottom:10px; margin-right:10px;}
 
 .container .text-style
{
  text-align: justify;
  line-height: 23px;
  margin: 0 13px 0 0;
  font-size: 19px;
}
.title h1 {
        font-size: 50px;
    color: #fff;
    font-weight: bold;
    text-shadow: 3px 1px 9px #666;
    letter-spacing: -5px;
}

    .title p strong{
        font-size: 28px;
        color: #555;
    }
    strong{
        font-size: 16px;
    }
    .billy p,.title p{
        margin: 5px 0;
    }
    .invoice-box{
        max-width:1000px;
        margin:auto;
        padding:20px;
        border:1px solid #eee;
        font-size:15px;
        line-height:18px;
        font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    td.billy-lft {
        width: 54.6%;
    }
    
    .invoice-box table tr.top table td{
       /* padding-bottom:20px;*/
    }
    
    .invoice-box table tr.top table td.title{
        font-size:28px!important;
        color:#555;
    }
    
    .invoice-box table tr.information table td{
        /*padding-bottom:40px;*/
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    td.billy-lft {
    min-width: 180px;
    }
    tr.heading td,tr.details td {
    padding-left: 12px;
}
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
</style>
</head>
<!-- <div class="container">
  <div class="col-sm-2">
    <nav class="nav-sidebar">
    <ul class="nav tabs" id="invoice_id">
    </ul>
  </nav>
</div> -->
<!-- tab content -->
<!-- <div class="tab-content" id="detail">

</div>
</div> -->
<div class="container">
<ul class="nav nav-pills nav-stacked col-md-2" id="invoice_id">
  
<!--   <li><a href="#tab_b" data-toggle="pill">Pill B</a></li>
  <li><a href="#tab_c" data-toggle="pill">Pill C</a></li>
  <li><a href="#tab_d" data-toggle="pill">Pill D</a></li> -->
</ul>
<div class="tab-content col-md-10" id="detail">
         <!-- <div class="tab-pane" id="tab_b">
             <h4>Pane B</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas.</p>
        </div>
        <div class="tab-pane" id="tab_c">
             <h4>Pane C</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas.</p>
        </div>
        <div class="tab-pane" id="tab_d">
             <h4>Pane D</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas.</p>
        </div> -->
</div><!-- tab content -->
</div><!-- end of container -->
<script>
$(document).ready(function(){
$('.loading').show();
      $.ajax({
          url:url+'/paymentController.php?act=getTransactionList&userid='+sess_userid,
          method:"GET",
          success:function(result)
          {
            var data = JSON.parse(result);
            if(data.status == '1')
            { //alert(data.status);

              var struct = '';
              var detail = '';
              data = data.data;
              var trans  = '';
              var trans_data = '';
              var i = 0;
              var active = '';
              data.forEach(function(data){
                trans = data.invoice_id.split('/');
                trans = trans[3];
                console.log(data.transaction_data);
              //  trans_data = $.parseJSON(data.transaction_data);
                console.log(trans_data);
               if(i == 0)
               {
                active = "active";
               }else
               {
                active = "";
               }

              struct += '<li class="'+active+'"><a href="#'+trans+'" data-toggle="pill">'+data.invoice_id+'</a></li>';
              detail += '<div class="tab-pane '+active+'" id="'+trans+'"><div class="invoice-box"> <table cellpadding="0" cellspacing="0"> <tr class="top"> <td colspan="2"> <table> <tr> <td class="title"> <h1>getsporty</h1> <p><strong>Invoice</strong></p> </td> <td> </td> </tr> </table> </td> </tr> <tr class="information"> <td colspan="2"> <table> <tr> <td> <strong>Invoice Number:</strong> <span>'+data.invoice_id+'</span> </td> <td> <strong>Invoice Date:</strong> <span>'+data.date+'</span> </td> </tr> </table> </td> </tr> <tr class="billy"> <td colspan="2"> <table> <tr> <td class="billy-lft"> <strong>Bill From:</strong> <p>Getsporty</p> <p>Darkhorsesports PVT.LTD.</p> <p>A-20 Sector-35</p> <p>Noida</p> <p>pin- 201003</p> </td> <td class="billy-rht"> <strong>Bill To:</strong> <p>'+sess_name+'</p> <p>'+sess_name+'</p> <p>'+sess_email+'</p> </td> </tr> </table> </td> </tr> <tr class="heading"> <td> Mode Of Payment </td> <td> Online </td> </tr> <tr class="details"> <td> Transaction Id </td> <td>'+data.transaction_id+'</td> </tr> </table> <table> <tr class="heading"> <td>Description</td> <td>Duration</td> <td>Ammount</td> <td>Total</td> </tr> <tr class="details"> <td>'+'JOB TITLE'+'</td> <td>30 days</td> <td>'+data.amount+'</td> <td>'+data.amount+'</td> </tr> </table> </div> </div>';
               i++;
               });
              
              $('#invoice_id').html(struct);
              $('#detail').html(detail);
             } 
         $('.loading').hide();
          }
       
      });
});
// function getContent(id)
// {
// alert(id);
// $('#'+id).addClass("Active");

// }
// function openCity(evt, cityName) {
//     var i, tabcontent, tablinks;
//     tabcontent = document.getElementsByClassName("tabcontent");
//     for (i = 0; i < tabcontent.length; i++) {
//         tabcontent[i].style.display = "none";
//     }
//     tablinks = document.getElementsByClassName("tablinks");
//     for (i = 0; i < tablinks.length; i++) {
//         tablinks[i].className = tablinks[i].className.replace(" active", "");
//     }
//     document.getElementById(cityName).style.display = "block";
//     evt.currentTarget.className += " active";
// }
</script>
@stop