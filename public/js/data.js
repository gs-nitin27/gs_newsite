function getResources()
{ 
    $.ajax({
    url:"https://getsporty.in/liveapp/getSportyLite/litecontroller.php?act=blog_api&token_id=dhs2016&token=0,1,3",crossDomain: true ,success: function(result)
    {
        $( "#img1" ).hide();
        data = JSON.parse(result);
        data = data.data;
        var resources_temp ='';
        var res_url = '';
        var title   = ''; 
        var summary = ''; 
        var s = 0;
        var card = ''
        var head = '<div class="owl-stage-outer"><div class="owl-stage" style="transition: 0.45s; width: 7227px; transform: translate3d(-3042px, 0px, 0px);">';

        data.forEach(function(data){
        // if(s<7)
         {                             
         card += '<div class="owl-item cloned" style="width: 380.333px;"><section class="item"> <div class="img-box"><img src="img/resource01.jpg"></div> <div class="white-b"> <h4>Why convert your sports passion into a profession?</h4> <p>Are you passionate about sports? Do you follow a team through thick and thin and re-define the forgotten word through your utter dedication. Most of us would answer in yes, meaning there liv...</p> <div class="readMoreBtn"><a href="#">Read More</a> </div> </div> </section></div>';
         }
        // s++;
     });
        card = head+card+'</div></div>';
       $('#customers-testimonials').html(card);
    }
  }); //End of ajax
} // End of Function




// var sortByProperty = function (property) {

//     return function (x, y) {

//         return ((x[property] === y[property]) ? 0 : ((x[property] > y[property]) ? 1 : -1));

//     };

// };

function GetSortOrder(prop) {  
    return function(a, b) {  
        if (a[prop] > b[prop]) {  
            return 1;  
        } else if (a[prop] < b[prop]) {  
            return -1;  
        }  
        return 0;  
    }  
}  

    
function getEvent()
{
 $.ajax(
   {url: "https://getsporty.in/liveapp/getSportyLite/litecontroller.php?act=event_and_tour_api",crossDomain: true ,success: function(result)
       {
       data = JSON.parse(result);
        data = data.data;

        // alert(JSON.stringify(data));

       data.sort(GetSortOrder("date_diff"));

      //  data.sort(sortByProperty('date_diff'));
        var event_temp ='';
        var name ='';
        var description ='';
        var startdate = '';
        var enddate = '';
        var entrydate = '';
        var entryenddate = '';
        var location = '';
        // var sport = '';

        for (var i = 1; i <data.length; i++)
        {
            var name         = data[i]['name']; 
            var url ;
            var Path         = data[i]['Path']; 
            var sport      = '';

          //  description1 = data[i]['description'].substring(0,150);
            
          

          //  var description = $(description1).text();

           // alert(description);
            
            if(Path=='E') 
            {
            var image_path = "https://getsporty.in/portal/uploads/event/";
            url = 'event.php?n='+data[i]['id']+'';
            startdate = '<b>Start From :  </b>' + formatDate(data[i]['start_date']);
            enddate  = '<b>To : </b> ' + formatDate(data[i]['end_date']);
            entrydate =  '<b>Entry From : </b>' + formatDate(data[i]['entry_start_date']);
            entryenddate = '<b>To - </b>' + formatDate(data[i]['entry_end_date']);
            location = data[i]['location'];
            
            sport =  data[i]['sport_name'];
            }
            else
            {
                var image_path = "https://getsporty.in/portal/uploads/tournament/";
                url     = 'tournament.php?n='+data[i]['id']+'';
                startdate = '<b>Start From : </b>' + formatDate(data[i]['start_date']);
                enddate  = '<b>To :  </b>' + formatDate(data[i]['end_date']);
                entrydate ='<b>Entry :From - </b>' + formatDate(data[i]['event_entry_date']);
                entryenddate =  '<b>To - </b>' + formatDate(data[i]['event_end_date']);
                location = data[i]['location'];
                sport =  data[i]['sport'];
            
            }


            
        if(data[i]['image']!='')
        {
            if (i==1)
            {
                event_temp +='<div class="carousel-item active" ><div class="col-md-4" ><div class="card" style="height:430px;" ><img class="img-fluid" src="'+image_path+''+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+name+'</h4><span style="float:left;" class="label label-success">'+ startdate +'</span><span style="float:right;" class="label label-warning">'+ enddate +'</span><br><span style="float:left;" class="label label-success">'+ entrydate +'</span><span style="float:right;" class="label label-warning">'+ entryenddate +'</span><br><i class="fa fa-location-arrow" style="float: left;"  aria-hidden="true">'+location+'</i><i class="fa fa-futbol-o" style="float: right;" aria-hidden="true"> '+ sport +' </i><br><div><p class="card-text">'+ description +'...</p></div><div class="bottombutton" style="bottom:6px;"><a href="'+url+'"  class="btn btn-primary" target="_blank">View</a></div></div></div></div>';
            }
            else
            {
            if(i%3==0)
            {
                event_temp +='<div class="col-md-4" ><div class="card" style="height:430px;"><img class="img-fluid" src="'+image_path+''+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+name+'</h4><span style="float:left;" class="label label-success">'+ startdate +'</span><span style="float:right;" class="label label-warning">'+ enddate +'</span><br><span style="float:left;" class="label label-success">'+ entrydate +'</span><span style="float:right;" class="label label-warning">'+ entryenddate +'</span><br><i class="fa fa-location-arrow" style="float: left;"  aria-hidden="true">'+location+'</i><i class="fa fa-futbol-o" style="float: right;" aria-hidden="true"> '+ sport +' </i><br><div><p class="card-text">'+description+'...</p></div><div class="bottombutton" style="bottom:6px;"><a href="'+url+'"  class="btn btn-primary" target="_blank">View</a></div></div></div></div></div><div class="carousel-item">';   
        }
        else
        {
            event_temp +='<div class="col-md-4" ><div class="card" style="height:430px;" ><img class="img-fluid" src="'+image_path+''+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+name+'</h4><span style="float:left;" class="label label-success">'+ startdate +'</span><span style="float:right;" class="label label-warning">'+ enddate +'</span><br><span style="float:left;" class="label label-success">'+ entrydate +'</span><span style="float:right;" class="label label-warning">'+ entryenddate +'</span><br><i class="fa fa-location-arrow" style="float: left;"  aria-hidden="true">'+location+'</i><i class="fa fa-futbol-o" style="float: right;" aria-hidden="true"> '+ sport +' </i><br><div><p class="card-text">'+description+'...</p></div><div class="bottombutton" style="bottom:6px;"><a href="'+url+'"  class="btn btn-primary" target="_blank">View</a></div></div></div></div>'; 
        }
     }
}
        } // End of for Loop

        $("#id2").html(event_temp);
       // console.log(event_temp);
     

    }}); //End of ajax


} // End of Function


function parseDate() 
{
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10) 
{
    dd='0'+dd;
} 

if(mm<10) 
{
    mm='0'+mm;
} 
today =yyyy+'-'+ mm+'-'+dd;

return today;
}

function daydiff(first, second) 
{
   var fdate = new Date(first);
   var sdate = new Date(second);
    // var result = Math.round((second-first)/(1000*60*60*24));
   var result =  Math.round(Math.abs((fdate - sdate)/(1000*60*60*24)));
   return result;
}




function getJob()
{
   $.ajax({
    url:"https://getsporty.in/liveapp/getSportyLite/litecontroller.php?act=job_api",crossDomain: true ,success: function(result)
    {
        
        data = JSON.parse(result);
        data = data.data;
        var job_temp ='';
        var res_url = '';
        var title   = ''; 
        var summary = ''; 
        var org_name = '';
        var location = '';
        var s = 0;
        for (var i = 0; i < data.length; i++)
        {  
            title           = data[i]['title'];
            // summary         = data[i]['description'];
            res_url     = 'job.php?n='+data[i]['id']+'';
            location    = data[i]['city'];
            var secondDate = data[i]['date_updated'];
            org_name =  '<b> Organisation Name : </b> ' + data[i]['organisation_name'];   
             //alert(secondDate);
            var finddiffDays = daydiff(parseDate(), secondDate);
            var diffDays = '';
            if(finddiffDays == 0)
            {
                diffDays = '<b>Posted : </b> Today'; 
            }
            else if(finddiffDays == '1')
            {
                diffDays = '<b>Posted : </b> ' + finddiffDays + ' day ago';
            } 
            else
            {
                
                diffDays = '<b>Posted : </b>' + finddiffDays + ' days ago';
            }


            summary         = summary.substring(0,140);
            if (i==0)
            {   
                job_temp +='<div class="carousel-item active" ><div class="container-fluid pd0"><div class="row"><div class="col-md-4" style="margin-top:20px;" ><div class="card" style="height:450px;" ><img style="width:337px;height:200px;" class="img-fluid" src="https://getsporty.in/portal/uploads/job/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+title+'</h4><span class="label label-warning">'+diffDays+'</span><i class="fa fa-location-arrow" style="float: right;"  aria-hidden="true">'+location+'</i><span style="float:left" class="label label-warning">'+org_name+'</span><br><p class="card-text">'+summary+' </p><div class="bottombutton" style="bottom:6px;"><a href="'+res_url+'"  class="btn btn-primary" target="_blank">View</a></div></div></div></div>';
            }
            else
            {
                        s = i + 1;
            if(s%3==0)
             {

               job_temp +='<div class="col-md-4" style="margin-top:20px;" ><div class="card" style="height:450px;"><img style="width:337px;height:200px;"  class="img-fluid" src="https://getsporty.in/portal/uploads/job/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+title+'</h4><span class="label label-warning">'+diffDays+'</span><i class="fa fa-location-arrow"  style="float: right;"  aria-hidden="true">'+location+'</i><span style="float:left" class="label label-warning">'+org_name+'</span><br><p class="card-text">'+summary+' </p><div class="bottombutton" style="bottom:6px;"><a href="'+res_url+'"  class="btn btn-primary" target="_blank">View</a></div></div></div></div></div></div></div><div class="carousel-item"><div class="container-fluid pd0"><div class="row">';   
        }

        else

        {

           job_temp +='<div class="col-md-4" style="margin-top:20px;"><div class="card" style="height:450px;" ><img style="width:337px;height:200px;"  class="img-fluid" src="https://getsporty.in/portal/uploads/job/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+title+'</h4><span class="label label-warning">'+diffDays+'</span><i class="fa fa-location-arrow" style="float: right;" aria-hidden="true">'+location+'</i><span style="float:left" class="label label-warning">'+org_name+'</span><br><p class="card-text">'+summary+' </p><div class="bottombutton" style="bottom:6px;"><a href="'+res_url+'"  class="btn btn-primary" target="_blank">View</a></div></div></div></div>'; 



     }

}

        } // End of for Loop

        $("#id3").html(job_temp);

    }}); //End of ajax



} // End of Function


function formatDate(date) 
{
  var monthNames = ["Jan", "Feb", "Mar","Apr", "May", "June", "July","Aug", "Sept", "Oct","Nov", "Dec"];
  var newdate =  new Date(date); 
  var day = newdate.getDate();
  var monthIndex = newdate.getMonth();
  var year = newdate.getFullYear().toString().substr(-2);
  return day + '-' + monthNames[monthIndex] + '-' + year;
}







