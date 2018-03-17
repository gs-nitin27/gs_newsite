<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WebModel extends Model
{
    public function getHomeData()
    {
     $resources  = DB::table('gs_resources')->select('id','title', 'summary','image')->where('status', '1')->limit(8)->get();
     $job 		 = DB::table('gs_jobInfo')->select('id','title', 'description','image','organisation_name','org_city')->where('publish', '1')->limit(8)->get();
     $event 	 = DB::table('gs_eventinfo')->select('id','name', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date')->where('publish', '1')->limit(8)->get();
     $tournament = DB::table('gs_tournament_info')->select('id','name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport')->where('publish', '1')->limit(8)->get();
	$data =  array('resources' => $resources,'job'=>$job,'event'=>$event,'tournament'=>$tournament );
    return $data;
    }


    public function getJobData()
    {

     $job 		 = DB::table('gs_jobInfo')->select('id','title', 'description','image','organisation_name','org_city','date_created')->where('publish', '1')->get();

    return $job;

 	}

	public function getResourcesData()
    {
     $resources  = DB::table('gs_resources')->select('id','title', 'summary','image')->where('status', '1')->get();
     return $resources;
 	}


    public function getEventData()
    {
     $event 	 = DB::table('gs_eventinfo')->select('id','name', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date','email_app_collection','type','location','organizer_name')->where('publish', '1')->get();
     return $event;
 	}


    public function getTournamentData()
    {
    $tournament = DB::table('gs_tournament_info')->select('id','name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport')->where('publish', '1')->get();
     return $tournament;
 	}


 public function getEventDetail($id)
    {
     $event      = DB::table('gs_eventinfo')->select('id','name','type', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date','pin','address_1','organizer_name','email_app_collection','event_links')->where('id', $id)->get();
     return $event;
    }
    


   

 public function getJobDetail($id)
    {
        $job         = DB::table('gs_jobInfo')->select('title', 'description','image','organisation_name','org_city','gender','type','type','work_experience','organisation_name','about','address1','org_city','pin','job_link','sport')->where('id', $id)->get();

     return $job;
    }


 public function getTournamentDetail($id)
 {
 $tournament = DB::table('gs_tournament_info')->select('name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport','address_1','description','tournaments_link','org_city','org_pin','organiser_name')->where('id',$id)->get();
     return $tournament;
 }


 public function getArticleDetail($id)
    {
        $resources  = DB::table('gs_resources')->select('title', 'summary','image','description','date_created','url','location','topic_of_artical')->where('id', $id)->get();
     return $resources ;

    }

/*     Card View  Detail Page  */ 

public function  getEventDetail_data($sport_name)
{
     $event      = DB::table('gs_eventinfo')->select('name','type', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date','pin','address_1','organizer_name','email_app_collection','event_links')->where('sport_name', $sport_name)->get();
     return $event;


}


 public function  getJobDetail_data($sport_name)
    {

     
     $job        = DB::table('gs_jobInfo')->select('id','title', 'description','image','organisation_name','org_city','date_created','sport','image')->where('sport', $sport_name)->get();
    return $job;

    }

   
    public function  getResourcDetail_data($topic_of_artical)
    {
          $resources  = DB::table('gs_resources')->select('id','title', 'summary','image','topic_of_artical')->where('topic_of_artical', $topic_of_artical)->get();
    return $resources;
    }

   
    public function  getTournamentDetail_data($sport_name)
    {
      $tournament = DB::table('gs_tournament_info')->select('id','name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport')->where('sport', $sport_name)->get();
      
     return $tournament;
     
    }

   



    
}
