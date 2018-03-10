<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WebModel extends Model
{
    public function getHomeData()
    {
     $resources  = DB::table('gs_resources')->select('title', 'summary','image')->get();
     $job 		 = DB::table('gs_jobInfo')->select('title', 'description','image','organisation_name','org_city')->get();
     $event 	 = DB::table('gs_eventinfo')->select('name', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date')->get();
     $tournament = DB::table('gs_tournament_info')->select('name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport')->get();
	$data =  array('resources' => $resources,'job'=>$job,'event'=>$event,'tournament'=>$tournament );
    return $data;
    }


    public function getJobData()
    {
     $job 		 = DB::table('gs_jobInfo')->select('title', 'description','image','organisation_name','org_city')->where('publish', '1')->get();
     return $job;
 	}

	public function getResourcesData()
    {
     $resources  = DB::table('gs_resources')->select('title', 'summary','image')->where('status', '1')->get();
     return $resources;
 	}


    public function getEventData()
    {
     $event 	 = DB::table('gs_eventinfo')->select('name', 'description','image','sport_name','organizer_city','start_date','end_date','entry_start_date','entry_end_date')->where('publish', '1')->get();
     return $event;
 	}


    public function getTournamentData()
    {
    $tournament = DB::table('gs_tournament_info')->select('name', 'image','start_date','end_date','event_entry_date','event_end_date','org_city','sport')->where('publish', '1')->get();
     return $tournament;
 	}



    
}
