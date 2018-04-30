<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WebModel extends Model
{
    public function getHomeData()
    {

    $resources  = DB::table('gs_resources')->select('id','title', 'summary','image','video_link')->where('status', '1')->limit(8)->orderBy('id', 'desc')->get();
    
    $job = DB::table('gs_jobInfo')->select('id','title', 'description','image','organisation_name','org_city','date_updated')->where('publish', '1')->limit(8)->orderBy('id', 'desc')->get();

     $event = DB::table('gs_eventinfo')->select('id','name', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date')->where('publish', '1')->where('type','!=', 'Trial')->limit(8)->orderBy('id', 'desc')->get();

    $tournament = DB::table('gs_tournament_info')->select('id','name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport')->where('publish', '1')->limit(8)->orderBy('id', 'desc')->get();

    $trial  = DB::table('gs_eventinfo')->select('id','name', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date')->where('publish', '1')->where('type','=', 'Trial')->limit(8)->orderBy('id', 'desc')->get();

	  $data =  array('resources' => $resources,'job'=>$job,'event'=>$event,'tournament'=>$tournament ,'trial'=>$trial);

    return $data;


   }


 //    public function getJobData()
 //    {

 //     $job 		 = DB::table('gs_jobInfo')->select('id','title', 'description','image','organisation_name','org_city','date_created')->where('publish', '1')->get();

 //    return $job;

 // 	}

	// public function getResourcesData()
 //    {
 //     $resources  = DB::table('gs_resources')->select('id','title', 'summary','image','token','url','video_link')->orderBy('id', 'desc')->get();
 //     return $resources;
 // 	}


// public function getEventData($page)
// {
//    // print_r($page); die();
//     //$page_number = $page ;
//     $item_per_page = 5;
//   //  echo "$item_per_page";
//     $results      = DB::table('gs_eventinfo')->select('id','name', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date','email_app_collection','type','location','organizer_name')->where('publish', '1')->limit($item_per_page)->offset($page)->get();


//   for($i= 0; $i<count($results);$i++)
//   {
//     $data = $results[$i];
//    echo '<li>'.$data->id.') <strong>'.$data->name.'</strong> : '.$data->description.'</li>'; 
//   }


     // $event 	 = DB::table('gs_eventinfo')->select('id','name', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date','email_app_collection','type','location','organizer_name')->where('publish', '1')->get();
     // return $event;


//die();

 	//}





  //   public function getTournamentData()
  //   {
  //   $tournament = DB::table('gs_tournament_info')->select('id','name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport')->where('publish', '1')->get();
  //    return $tournament;
 	// }



public function getEventDetail($id)
{
    $event      = DB::table('gs_eventinfo')->select('id','name','type', 'sport','description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date','pin','address_1','organizer_name','email_app_collection','event_links')->where('id', $id)->get();
     return $event;
}
    


public function getJobDetail($id)
{
    $job         = DB::table('gs_jobInfo')->select('id','title', 'description','image','organisation_name','org_city','gender','type','type','work_experience','organisation_name','about','address1','org_city','pin','job_link','sport','salary')->where('id', $id)->get();

     return $job;
}


public function getTournamentDetail($id)
 {
 $tournament = DB::table('gs_tournament_info')->select('id','name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport','address_1','description','tournaments_link','org_city','org_pin','organiser_name')->where('id',$id)->get();
     return $tournament;
}


public function getArticleDetail($id)
{
        $resources  = DB::table('gs_resources')->select('id','title', 'summary','image','description','date_created','url','location','topic_of_artical','token','video_link')->where('id', $id)->get();
        return $resources ;

}

/*     Card View  Detail Page  */ 




public function  getEventDetail_data($sport_name,$id)
{
    $event      = DB::table('gs_eventinfo')->select('id','name','type', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date','pin','address_1','organizer_name','email_app_collection','event_links')->where('id','<>',$id)->where('sport_name',$sport_name)->where('publish','1')->get();
     return $event;
}


public function  getJobDetail_data($sport_name,$id)
{
    $job  = DB::table('gs_jobInfo')->select('id','title', 'description','image','organisation_name','org_city','date_created','sport','image','date_updated')->where('id','<>',$id)->where('publish','1')->where('sport', $sport_name)->get();
    return $job;
}

   
public function  getResourcDetail_data($topic_of_artical,$id)
{
   $resources  = DB::table('gs_resources')->select('id','title', 'summary','image','topic_of_artical','token')->where('topic_of_artical', $topic_of_artical)->where('status','1')->where('id','<>',$id)->get();
    return $resources;
}

   
public function  getTournamentDetail_data($sport_name,$id)
{
   $tournament = DB::table('gs_tournament_info')->select('id','name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport','date_updated')->where('sport', $sport_name)->where('publish','1')->where('id','<>',$id)->get();
  return $tournament;
}

public function getSportsList($id)
{
$tournament = DB::table('gs_sports')->select('sports')->get();
return $tournament;
} 
public function getSubscribed($where)
{
$getData  = DB::table('visitor_subscribe')->select('*')->where('unique_code','=',$where)->get();
return $getData;
}

public function saveSubscribed($data,$where,$code)
{ 
//$unique_code = md5($data['module'].$data['sport'].$data['age'].$data['phone']); 
$data_insert = DB::table('visitor_subscribe')->insert(
    ['email' =>$data['email'], 'sport' =>$data['sport'],'phone' =>$data['phone'],'where'=>$where,'module'=>$data['module'],'ip_address'=>$data['ipaddress'],'unique_code'=>$code]
);
  if($data_insert)
  {
    return 1;
  }else
  {
    return 0;
  }
}
    
} // End of Class
