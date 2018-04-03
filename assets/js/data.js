
function getListing(module,id)
{  
$(id).empty();

(function($){   
    $.fn.loaddata = function(options) {// Settings
        var settings = $.extend({ 
            loading_gif_url : "http://www.getsporty.in/staging/uploads/profile/ajax-loader.gif", //url to loading gif
            end_record_text : 'No more records found!', //no more records to load
            data_url        : 'https://getsporty.in/testingapp/website_controller.php?act='+module+'', //url to PHP page
            start_page      : 1 //initial page
        }, options);
        
        var el = this;  
        loading  = false; 
        end_record = false;
        contents(el, settings); //initial data load
        
        $(window).scroll(function() { //detact scroll
            if($(window).scrollTop() + $(window).height() >= $(document).height()){ //scrolled to bottom of the page
                contents(el, settings); //load content chunk 
            }
        });     
    }; 
    //Ajax load function
    function contents(el, settings){
        var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
        var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text
        //$("#myModa").empty();
        if(loading == false && end_record == false){
            loading = true; //set loading flag on
            el.append(load_img); //append loading image
            $.post( settings.data_url, {'page': settings.start_page}, function(data){ //jQuery Ajax post
                if(data.trim().length == 0){ //no more records
                    el.append(record_end_txt); //show end record text
                    load_img.remove(); //remove loading img
                    end_record = true; //set end record flag on
                    return; //exit
                }
                loading = false;  //set loading flag off
                load_img.remove(); //remove loading img 
                el.append(data);  //append content 
                settings.start_page ++; //page increment
            })
        }
    }

})(jQuery);


$(id).loaddata();



} // End of Function


// if(module=='job')
// {
// $("#job_listing").loaddata();
// }



// $('#event_listing').html('<img src="img/200.gif" >');

//    $.ajax({
//     method: 'GET',
//      url:service_url+'/get_Event',crossDomain: true ,success: function(result)
//      {
      
//         data         = JSON.parse(result);
//         event_data   = data.data;
//         var event_temp = '';
//         $("#event_temp").empty();
//         for (var i = 0; i < event_data.length; i++)
//         {  
//             var event_title             = event_data[i]['name'].substring(0,20);;
//             var event_summary           = event_data[i]['description'];
//             var event_org_name          = event_data[i]['organizer_name'];
//             var event_type              = event_data[i]['type'];
//             var event_email             = event_data[i]['email_app_collection'];
//             var event_location          = event_data[i]['location'];
//             var event_url               = "event-detail/"+event_data[i]['id'];
//             var event_img               = "event/";
//             var event_image_path        = image_url+event_img+event_data[i]['image']; 

//       //   event_temp += '<div class="col-lg-3 col-md-3"><div class=" hover-boxs"><div class="job-box"><img src="https://getsporty.in/portal/uploads/resources/'+data[i]['image']+'" alt="img"></div><div class="slide-job-list"><h4>'+title+'</h4> <p><span> '+summary+'</span></p>  <div class="read-c"><a href="'+url+''+data[i]['id']+'">Read More</a> </div>                                                        </div>                            </div>                  </div> ';

         //event_temp +='<div class="col-lg-3 col-md-3"><div class=" hover-boxs"><div class="job-box"><img src="'+event_image_path+'"></div><div class="slide-job-list"><h4>'+event_title+'</h4><p> Type : <span> '+event_type+'</span></p><p> Organizer Name : <span> '+event_org_name+' </span></p><p> Location : <span>'+event_location+'</span></p><p> Email : <span> '+event_email+' </span></p><div class="read-c"><a href="'+event_url+'">Read More</a> </div></div></div></div> ';
         
        
//          } // End of for Loop

//      $("#event_listing").html(event_temp);  

//     }}); //End of ajax


//}



// function getJobListing()
// {



// (function($){   
//     $.fn.loaddata = function(options) {// Settings
//         var settings = $.extend({ 
//             loading_gif_url : "http://www.getsporty.in/staging/uploads/profile/ajax-loader.gif", //url to loading gif
//             end_record_text : 'No more records found!', //no more records to load
//             data_url        : 'https://getsporty.in/testingapp/website_controller.php?act=job', //url to PHP page
//             start_page      : 1 //initial page
//         }, options);
        
//         var el = this;  
//         loading  = false; 
//         end_record = false;
//         contents(el, settings); //initial data load
        
//         $(window).scroll(function() { //detact scroll
//             if($(window).scrollTop() + $(window).height() >= $(document).height()){ //scrolled to bottom of the page
//                 contents(el, settings); //load content chunk 
//             }
//         });     
//     }; 
//     //Ajax load function
//     function contents(el, settings){
//         var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
//         var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text
        
//         if(loading == false && end_record == false){
//             loading = true; //set loading flag on
//             el.append(load_img); //append loading image
//             $.post( settings.data_url, {'page': settings.start_page}, function(data){ //jQuery Ajax post
//                 if(data.trim().length == 0){ //no more records
//                     el.append(record_end_txt); //show end record text
//                     load_img.remove(); //remove loading img
//                     end_record = true; //set end record flag on
//                     return; //exit
//                 }
//                 loading = false;  //set loading flag off
//                 load_img.remove(); //remove loading img 
//                 el.append(data);  //append content 
//                 settings.start_page ++; //page increment
//             })
//         }
//     }

// })(jQuery);

// $("#job_listing").loaddata();


// // $('#job_listing').html('<img src="img/200.gif" >');

// //    $.ajax({
// //      method: 'GET',
// //      url:service_url+'/get_job',crossDomain: true ,success: function(result)
// //      {
// //         data = JSON.parse(result);
// //         job_data = data.data;
// //         var job_temp ='';
// //         var url = "job-detail/";
// //         $("#job_listing").empty();

// //         for (var i = 0; i < job_data.length; i++)
// //         {              
// //             var job_title           = job_data[i]['title'].substring(0,32);;
// //             var job_summary         = job_data[i]['description'].substring(0,200);
// //             var job_location        =  job_data[i]['org_city'];
// //             var job_org_name        =  job_data[i]['organisation_name'];
// //             var job_url             = "job-detail/"+job_data[i]['id'];
// //             var job_img             = "job/";
// //             var job_image_path      = image_url+job_img+job_data[i]['image'];
// //             var date_created        = job_data[i]['date_created']  ;  
// //             function parseDate(str) {
// //             var mdy = str.split('-');
// //             return new Date(mdy[1], mdy[0]-1,mdy[2]);
// //             }
// //             function datediff(first, second) {
// //             return Math.round((second-first)/(1000*60*60*24));
// //             }
// //             var today = new Date();
// //             var dd = today.getDate();
// //             var mm = today.getMonth()+1; //January is 0!
// //             var yyyy = today.getFullYear();
// //             if(dd<10) {
// //             dd = '0'+dd
// //             } 
// //             if(mm<10) {
// //             mm = '0'+mm
// //             } 
// //             current_date  = yyyy +'-' +  mm + '-' + dd ;
// //             var post_date =  datediff(parseDate(date_created), parseDate(current_date));
// //             if (job_data[i]['image']) 
// //             {
// //             job_temp +='<div class="col-lg-3 col-md-3"><div class=" hover-boxs"><div class="job-box"><img src="'+job_image_path+'" alt="img"></div><div class="slide-job-list"><h4>'+job_title+'</h4><p> Location : <span>'+job_location+' </span></p><p> Posted : <span> '+post_date+' Day ago </span></p><p> Organisation Name : <span> '+job_org_name+' </span></p><div class="read-c"><a href="'+job_url+'">Read More</a> </div></div></div></div> ';
// //             }
// //         } // End of for Loop

// //         $("#job_listing").html(job_temp);   
// //     }}); //End of ajax

// }







// function getArticleListing()
// {  
    
// (function($){   
//     $.fn.loaddata = function(options) {// Settings
//         var settings = $.extend({ 
//             loading_gif_url : "http://www.getsporty.in/staging/uploads/profile/ajax-loader.gif", //url to loading gif
//             end_record_text : 'No more records found!', //no more records to load
//             data_url        : 'https://getsporty.in/testingapp/website_controller.php?act=article', //url to PHP page
//             start_page      : 1 //initial page
//         }, options);
        
//         var el = this;  
//         loading  = false; 
//         end_record = false;
//         contents(el, settings); //initial data load
        
//         $(window).scroll(function() { //detact scroll
//             if($(window).scrollTop() + $(window).height() >= $(document).height()){ //scrolled to bottom of the page
//                 contents(el, settings); //load content chunk 
//             }
//         });     
//     }; 
//     //Ajax load function
//     function contents(el, settings){
//         var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
//         var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text
        
//         if(loading == false && end_record == false){
//             loading = true; //set loading flag on
//             el.append(load_img); //append loading image
//             $.post( settings.data_url, {'page': settings.start_page}, function(data){ //jQuery Ajax post
//                 if(data.trim().length == 0){ //no more records
//                     el.append(record_end_txt); //show end record text
//                     load_img.remove(); //remove loading img
//                     end_record = true; //set end record flag on
//                     return; //exit
//                 }
//                 loading = false;  //set loading flag off
//                 load_img.remove(); //remove loading img 
//                 el.append(data);  //append content 
//                 settings.start_page ++; //page increment
//             })
//         }
//     }

// })(jQuery);

// $("#temp_article").loaddata();


//    //  $('#temp_article').html('<img src="img/200.gif" >');

//    // $.ajax({
//    //  method: 'GET',
//    //   url:service_url+'/get_Article',crossDomain: true ,success: function(result)
//    //   {





//    //      data = JSON.parse(result);
//    //      data = data.data;
//    //      var article_temp ='';
//    //      var res_url = '';
//    //      var title   = ''; 
//    //      var summary = ''; 
//    //      var temp  = '';
//    //      var s = 0;
//    //      var abc ='';

//    //      $("#temp_article").empty();
//    //      var url = "article-detail/";
//    //      for (var i = 0; i <data.length; i++)
//    //      {  
         
//    //          token      = data[i]['token'];
//    //          if(token==0)
//    //          {
//    //              res_url     = data[i]['url'];
//    //              var abc =''
//    //          }
//    //          if (token==1 || token==3) 
//    //          {
//    //              var res_url               = "article-detail/"+data[i]['id'];
//    //              var abc ='';
//    //          }
//    //          if (token== 2) 
//    //          {
//    //               res_url     = "https://www.youtube.com/embed/"+data[i]['video_link'];

//    //              var abc =  ' <div class="relative">                         <div class="play-icon" data-toggle="modal" data-target="#myModa">                 <img src="img/play-icon.svg">              </div>        </div> <div id="myModa" class="modal fade" role="dialog">                <div class="modal-dialog">                                 <div class="modal-content">                     <div class="modal-body">                        <button type="button" class="close" data-dismiss="modal">&times;</button>                        <iframe width="100%" height="315" src="'+res_url+'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                     </div>                    </div>                </div>            </div>';
               
            

//    //          }
         
//    //          title       = data[i]['title'].substring(0,32);
//    //          summary     = data[i]['summary'].substring(0,200);
          
//    //          article_temp +=' <div class="col-lg-3 col-md-3">                      <div class=" hover-boxs">                         <div class="job-box">                            <img src="https://getsporty.in/portal/uploads/resources/'+data[i]['image']+'" alt="img">                          </div>                          <div class="slide-job-list">                              <h4>'+title+'</h4> <p><span> '+summary+'</span></p>  <div class="read-c"><a href="'+res_url+'">Read More</a> </div>                                                        </div>                            </div>              '+abc+'    </div> ';
            
//    //      } // End of for Loop

//    // // $("#temp_article").html(article_temp);    

//    //  }}); //End of ajax


// }







// function getTournamentListing()
// {

//     (function($){   
//     $.fn.loaddata = function(options) {// Settings
//         var settings = $.extend({ 
//             loading_gif_url : "http://www.getsporty.in/staging/uploads/profile/ajax-loader.gif", //url to loading gif
//             end_record_text : 'No more records found!', //no more records to load
//             data_url        : 'https://getsporty.in/testingapp/website_controller.php?act=tournament', //url to PHP page
//             start_page      : 1 //initial page
//         }, options);
        
//         var el = this;  
//         loading  = false; 
//         end_record = false;
//         contents(el, settings); //initial data load
        
//         $(window).scroll(function() { //detact scroll
//             if($(window).scrollTop() + $(window).height() >= $(document).height()){ //scrolled to bottom of the page
//                 contents(el, settings); //load content chunk 
//             }
//         });     
//     }; 
//     //Ajax load function
//     function contents(el, settings){
//         var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
//         var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text
        
//         if(loading == false && end_record == false){
//             loading = true; //set loading flag on
//             el.append(load_img); //append loading image
//             $.post( settings.data_url, {'page': settings.start_page}, function(data){ //jQuery Ajax post
//                 if(data.trim().length == 0){ //no more records
//                     el.append(record_end_txt); //show end record text
//                     load_img.remove(); //remove loading img
//                     end_record = true; //set end record flag on
//                     return; //exit
//                 }
//                 loading = false;  //set loading flag off
//                 load_img.remove(); //remove loading img 
//                 el.append(data);  //append content 
//                 settings.start_page ++; //page increment
//             })
//         }
//     }

// })(jQuery);

// $("#temp_tour").loaddata();






// // $('#temp_tour').html('<img src="img/200.gif" >');
// //    $.ajax({
// //     method: 'GET',
// //      url:service_url+'/get_Tounament',crossDomain: true ,success: function(result)
   
// //     {
// //         data = JSON.parse(result);
// //         data = data.data;
// //         var temp_tour ='';
// //         var res_url = '';
// //         var title   = ''; 
// //         var summary = ''; 
// //         var temp  = '';
// //         var s = 0;
// //         var location = '';
// //         $("#temp_tour").empty();
// //         var url = "tournament-detail/";

// //         for (var i = 0; i < 11; i++)
// //         {  
// //             title             = data[i]['name'].substring(0,20);
// //              location         = data[i]['org_city'].substring(0,200);
// //              start_date       = data[i]['start_date'].substring(0,200);
// //              end_date         = data[i]['end_date'].substring(0,200);

// //             temp_tour +='<div class="col-lg-3 col-md-3">                    <div class=" hover-boxs">                     <div class="job-box">                      <img src="https://getsporty.in/portal/uploads/tournament/'+data[i]['image']+'" alt="img">                       </div>                         <div class="slide-job-list">                          <h4>'+title+'</h4>                   <p> Location : <span> '+location+'</span></p>                    <p> Start : <span> '+start_date+' - '+end_date+'</span></p>                      <p> Entry : <span> Dec 1, 2017 - Jan 1, 2018 </span></p>                      <p> Sport : <span>Lawn Tennis </span></p>                       <div class="read-c">                        <a href="'+url+''+data[i]['id']+'">Read More</a> </div>                             </div>                              </div>                      </div>    ';        } // End of for Loop

// //     $("#temp_tour").html(temp_tour);    

// //     }}); //End of ajax


//}







