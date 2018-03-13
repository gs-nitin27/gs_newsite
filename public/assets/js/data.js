
function getEventListing()
{
   $.ajax({
    method: 'GET',
     url:"/get/gs_newsite/public/get_Event",crossDomain: true ,success: function(result)
     {
        data = JSON.parse(result);
        data = data.data;
        var event_temp = '';
        for (var i = 0; i < data.length; i++)
        {  
            
            title             = data[i]['name'];
            summary           = data[i]['description'];
            organizer_name    = data[i]['organizer_name'];
            type              = data[i]['type'];
            email             = data[i]['email_app_collection'];
            var  location     = data[i]['location'];
            var url = "event-detail/";
            var image_path = "https://getsporty.in/portal/uploads/event/";
            event_temp +='    <div class="col-lg-3 col-md-3"><div class=" hover-boxs">           <div class="job-box">                      <img src="'+image_path+''+data[i]['image']+'"></div>                         <div class="slide-job-list">                         <h4>'+title+'</h4>                              <p> Type : <span> '+type+'</span></p>                              <p> Organizer Name : <span> '+organizer_name+' </span></p>                              <p> Location : <span>'+location+'</span></p>                              <p> Email : <span>'+email+' </span></p>                              <div class="read-c"><a href="'+url+''+data[i]['id']+'">Read More</a> </div>                               </div>                              </div>                      </div> ';
         } // End of for Loop
     $("#temp_event").html(event_temp);    
    }}); //End of ajax
}



function getJobListing()
{
   $.ajax({
     method: 'GET',
     url:"/get/gs_newsite/public/get_job",crossDomain: true ,success: function(result)
     {
        data = JSON.parse(result);
        data = data.data;
        var job_listing_temp ='';
        var title   = ''; 
        var summary = ''; 
        var location = '';
        var date = '';
        var url = "job-detail/";

        for (var i = 0; i < data.length; i++)
        {              
            title           = data[i]['title'].substring(0,32);;
            summary         = data[i]['description'].substring(0,200);
            location        =  data[i]['org_city'];
            if (data[i]['image']) 
            {
            job_listing_temp +='<div class="col-lg-3 col-md-3"><div class=" hover-boxs"><div class="job-box"><img src="https://getsporty.in/portal/uploads/job/'+data[i]['image']+'" alt="img"></div><div class="slide-job-list"><h4>'+title+'</h4><p> Location : <span>'+location+' </span></p><p> Posted : <span> '+date+' </span></p><p> Organisation Name : <span> IIT Jammu, Indian Institute of Technology </span></p><div class="read-c"><a href="'+url+''+data[i]['id']+'">Read More</a> </div></div></div></div> ';
            }
        } // End of for Loop

        $("#job_listing").html(job_listing_temp);   
    }}); //End of ajax
}







function getArticleListing()
{

   $.ajax({
    method: 'GET',
     url:"/get/gs_newsite/public/get_Article",crossDomain: true ,success: function(result)
 
    {
        data = JSON.parse(result);
        data = data.data;

        var article_temp ='';
        var res_url = '';
        var title   = ''; 
        var summary = ''; 
        var temp  = '';
        var s = 0;
        var url = "article-detail/";


        for (var i = 0; i < data.length; i++)
        {  
            res_url     = 'blog.php?n='+data[i]['id']+'';//data[i]['url'];
            title       = data[i]['title'].substring(0,32);
            summary     = data[i]['summary'].substring(0,200);
            
            article_temp +=' <div class="col-lg-3 col-md-3">                      <div class=" hover-boxs">                         <div class="job-box">                            <img src="https://getsporty.in/portal/uploads/resources/'+data[i]['image']+'" alt="img">                          </div>                          <div class="slide-job-list">                              <h4>'+title+'</h4> <p><span> '+summary+'</span></p>  <div class="read-c"><a href="'+url+''+data[i]['id']+'">Read More</a> </div>                                                        </div>                            </div>                  </div> ';
            
        } // End of for Loop

    $("#temp_article").html(article_temp);    

    }}); //End of ajax


}

function getTournamentListing()
{

   $.ajax({
    method: 'GET',
     url:"/get/gs_newsite/public/get_Tounament",crossDomain: true ,success: function(result)
   
    {
        data = JSON.parse(result);
        data = data.data;
        var temp_tour ='';
        var res_url = '';
        var title   = ''; 
        var summary = ''; 
        var temp  = '';
        var s = 0;
        var location = '';

var url = "tournament-detail/";

        for (var i = 0; i < 11; i++)
        {  
            title             = data[i]['name'].substring(0,20);
             location         = data[i]['org_city'].substring(0,200);
             start_date       = data[i]['start_date'].substring(0,200);
             end_date         = data[i]['end_date'].substring(0,200);

            temp_tour +='<div class="col-lg-3 col-md-3">                    <div class=" hover-boxs">                     <div class="job-box">                      <img src="https://getsporty.in/portal/uploads/tournament/'+data[i]['image']+'" alt="img">                       </div>                         <div class="slide-job-list">                          <h4>'+title+'</h4>                   <p> Location : <span> '+location+'</span></p>                    <p> Start : <span> '+start_date+' - '+end_date+'</span></p>                      <p> Entry : <span> Dec 1, 2017 - Jan 1, 2018 </span></p>                      <p> Sport : <span>Lawn Tennis </span></p>                       <div class="read-c">                        <a href="'+url+''+data[i]['id']+'">Read More</a> </div>                             </div>                              </div>                      </div>    ';        } // End of for Loop

    $("#temp_tour").html(temp_tour);    

    }}); //End of ajax


}







