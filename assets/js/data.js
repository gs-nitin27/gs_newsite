
function getEventListing()
{  //alert(service_url);return;
   $.ajax({
    method: 'GET',
     url:service_url+'/get_Event',crossDomain: true ,success: function(result)
     {
        data         = JSON.parse(result);
        event_data   = data.data;
        var event_temp = '';
        
        for (var i = 0; i < event_data.length; i++)
        {  
            var event_title             = event_data[i]['name'];
            var event_summary           = event_data[i]['description'];
            var event_org_name          = event_data[i]['organizer_name'];
            var event_type              = event_data[i]['type'];
            var event_email             = event_data[i]['email_app_collection'];
            var event_location          = event_data[i]['location'];
            var event_url               = "event-detail/"+event_data[i]['id'];
            var event_img               = "event/";
            var event_image_path        = image_url+event_img+event_data[i]['image']; 
            event_temp +='<div class="col-lg-3 col-md-3"><div class=" hover-boxs"><div class="job-box"><img src="'+event_image_path+'"></div><div class="slide-job-list"><h4>'+event_title+'</h4><p> Type : <span> '+event_type+'</span></p><p> Organizer Name : <span> '+event_org_name+' </span></p><p> Location : <span>'+event_location+'</span></p><p> Email : <span>'+event_email+' </span></p><div class="read-c"><a href="'+event_url+'">Read More</a> </div></div></div></div> ';
         } // End of for Loop

     $("#event_listing").html(event_temp);  

    }}); //End of ajax
}



function getJobListing()
{

   $.ajax({
     method: 'GET',
     url:service_url+'/get_job',crossDomain: true ,success: function(result)
     {
        data = JSON.parse(result);
        job_data = data.data;
        var job_temp ='';
        var url = "job-detail/";
        for (var i = 0; i < job_data.length; i++)
        {              
            var job_title           = job_data[i]['title'].substring(0,32);;
            var job_summary         = job_data[i]['description'].substring(0,200);
            var job_location        =  job_data[i]['org_city'];
            var job_org_name        =  job_data[i]['organisation_name'];
            var job_url             = "job-detail/"+job_data[i]['id'];
            var job_img             = "job/";
            var job_image_path      = image_url+job_img+job_data[i]['image'];
            var date_created        = job_data[i]['date_created']  ;  
            function parseDate(str) {
            var mdy = str.split('-');
            return new Date(mdy[1], mdy[0]-1,mdy[2]);
            }
            function datediff(first, second) {
            return Math.round((second-first)/(1000*60*60*24));
            }
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            if(dd<10) {
            dd = '0'+dd
            } 
            if(mm<10) {
            mm = '0'+mm
            } 
            current_date  = yyyy +'-' +  mm + '-' + dd ;
            var post_date =  datediff(parseDate(date_created), parseDate(current_date));
            if (job_data[i]['image']) 
            {
            job_temp +='<div class="col-lg-3 col-md-3"><div class=" hover-boxs"><div class="job-box"><img src="'+job_image_path+'" alt="img"></div><div class="slide-job-list"><h4>'+job_title+'</h4><p> Location : <span>'+job_location+' </span></p><p> Posted : <span> '+post_date+' Day ago </span></p><p> Organisation Name : <span> '+job_org_name+' </span></p><div class="read-c"><a href="'+job_url+'">Read More</a> </div></div></div></div> ';
            }
        } // End of for Loop

        $("#job_listing").html(job_temp);   
    }}); //End of ajax

}







function getArticleListing()
{
   $.ajax({
    method: 'GET',
     url:service_url+'/get_Article',crossDomain: true ,success: function(result)
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
     url:service_url+'/get_Tounament',crossDomain: true ,success: function(result)
   
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







