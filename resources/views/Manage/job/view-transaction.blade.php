@extends('Manage.layouts.master')
@section('pageTitle','Home')
@section('content')
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 30px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
    max-height: 10px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 30px;
}
</style>
</head>
<body>

<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab" id="txn_element">
</div>
<div id="detail">
</div>
<script>
$(document).ready(function(){
//alert(sess_userid);return;
      $.ajax({
          url:url+'/paymentController.php?act=getTransactionList&userid='+sess_userid,
          method:"GET",
          success:function(result)
          {
            var data = JSON.parse(result);
            if(data.status == '1')
            { alert(data.status);

              var struct = '';
              var detail = '';
              data = data.data;
              data.forEach(function(data){
              struct += '<button class="tablinks" onclick="openCity(event, '+data.invoice_id+')">'+data.invoice_id+'</button>';
              detail += '<div id="'+data.invoice_id+'" class="tabcontent"> <h3>'+data.invoice_id+'</h3> <p>London is the capital city of England.</p> </div>';
              });
              
              $('#txn_element').html(struct);
              $('#detail').html(detail);
             } 
          }

      });
});

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
@stop