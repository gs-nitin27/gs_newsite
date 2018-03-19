<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;;
use App\Http\Requests;
use App\WebModel;
    class WebController extends Controller
    {

    public function index()
    {
    $obj  = new WebModel();
    $resp = $obj->getHomeData();
    return View::make("welcome")->with('name', $resp);
    }

    public function getaboutus()
    {
       
    return View::make("aboutus");
    }

    public function getsupport()
    {
       
    return View::make("support");
    }
    
    public function getevent()
    {
    return View::make("event");
    }

    public function getjob()
    {
       
    return View::make("job-listing");
    }

    public function gettournament()
    {
    $obj  = new WebModel();
    $resp = $obj->getHomeData();
    return View::make("tournament");
    }



    public function article()
    {
    $obj  = new WebModel();
    $resp = $obj->getHomeData();
    return View::make("article");
    }


    public function getlandingjob()
    {
    $obj  = new WebModel();
    $resp = $obj->getHomeData();
    return View::make("landing-job");
    }

    public function getlandingevent()
    {
    return View::make("landing-event");
    }


    public function get_Job()
    {
      
    $obj  = new WebModel();
    $res = $obj->getJobData();
    $data = array('data'=>$res,'status'=>'1');
    echo json_encode($data);

    }

    public function get_Article()
    {
      
    $obj  = new WebModel();
    $res = $obj->getResourcesData();
    $data = array('data'=>$res,'status'=>'1');
    echo json_encode($data);

    }


    public function get_Event()
    {
      
    $obj  = new WebModel();
    $res = $obj->getEventData();
    $data = array('data'=>$res,'status'=>'1');
    echo json_encode($data);

    }


    public function get_Tounament()
    {
      
    $obj  = new WebModel();
    $res = $obj->getTournamentData();
    $data = array('data'=>$res,'status'=>'1');
    echo json_encode($data);

    }


    
    public function event_detail($id)
    {
    $obj  = new WebModel();
    $resp = $obj->getEventDetail($id);
    $sport_name = $resp[0]->sport_name;
    $resp1 = $obj->getEventDetail_data($sport_name);
    
    return View::make("event-detail")->with('name', $resp)->with('name1',$resp1);
    }


    public function job_detail($id)
    {
    $obj  = new WebModel();
    $resp = $obj->getJobDetail($id);

    $sport_name = $resp[0]->sport;

    $resp1 = $obj->getJobDetail_data($sport_name);
    
   // print_r($resp1);die();

    return View::make("job-listing-detail")->with('name', $resp)->with('name1',$resp1);
    }



    public function tournament_detail($id)
    {
      
    $obj  = new WebModel();
    $resp = $obj->getTournamentDetail($id);

    $sport_name = $resp[0]->sport;
    $resp1 = $obj->getTournamentDetail_data($sport_name);

    return View::make("tournament-detail")->with('name', $resp)->with('name1',$resp1);

    }

    public function article_detail($id)
    {

    $obj  = new WebModel();
    $resp = $obj->getArticleDetail($id);
    $topic_of_artical = $resp[0]->topic_of_artical;
    $resp1 = $obj->getResourcDetail_data($topic_of_artical);
    return View::make("article-detail")->with('name', $resp)->with('name1',$resp1);
    }







}
