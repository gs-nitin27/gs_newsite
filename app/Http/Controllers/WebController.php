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

   // $obj  = new WebModel();
 //   $resp = $obj->getHomeData();

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









}
