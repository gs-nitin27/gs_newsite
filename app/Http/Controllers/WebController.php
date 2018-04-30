<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;;
use App\Http\Requests;
use App\WebModel;
use DateTime;

    class WebController extends Controller
    {


    // public function __construct()
    // {

     


    // }


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


    public function get_Event($page)
    {     
     
    $obj  = new WebModel();
    $res = $obj->getEventData($page);
    //$data = array('data'=>$res,'status'=>'1');
   // echo json_encode($data);

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
    $resp1 = $obj->getEventDetail_data($sport_name,$id);
    if (count($resp1)==0)
    {
     $resp1 = $resp;
    }
    
    
    return View::make("event-detail")->with('name', $resp)->with('name1',$resp1);
    }


    public function job_detail($id)
    {
    $obj  = new WebModel();
    $resp = $obj->getJobDetail($id);

    $sport_name = $resp[0]->sport;

    $resp1 = $obj->getJobDetail_data($sport_name,$id);
    
   // print_r($resp1);die();

    return View::make("job-listing-detail")->with('name', $resp)->with('name1',$resp1);
    }



    public function tournament_detail($id)
    {
      
    $obj  = new WebModel();
    $resp = $obj->getTournamentDetail($id);

    $sport_name = $resp[0]->sport;
    $resp1 = $obj->getTournamentDetail_data($sport_name,$id);

    return View::make("tournament-detail")->with('name', $resp)->with('name1',$resp1);

    }

    public function article_detail($id)
    {

    $obj  = new WebModel();
    $resp = $obj->getArticleDetail($id);
    $topic_of_artical = $resp[0]->topic_of_artical;
    $resp1 = $obj->getResourcDetail_data($topic_of_artical,$id);
    return View::make("article-detail")->with('name', $resp)->with('name1',$resp1);
    }

public function getw()
    {
       
    return View::make("support");
    }
    
public function getSportsList(Request $request)
   {
    $id   = $request->id;
    $obj  = new WebModel();
    $resp = $obj->getSportsList($id);
    $resp = array('data' => $resp );
    echo json_encode($resp);
   }
public function user_subscription(Request $request)
   {
     $data = $request->all();
   
    $where1 = "`sport` ='".$data['sport']."' ";
    if($data['where'] != '')
    {
    $where2  = " AND `".$data['where']."` LIKE '%".$data['type']."'";    
    }else
    {
    $where2 = '';
    }
    $where = $where1.$where2;
   
    $phone = $data['phone'];
    $unique_code = md5($phone.$where.$data['mod_name']);
    
     $obj_test = new WebModel();
     $varify = $obj_test->getSubscribed($unique_code);
    //  $n = 0;
    //  $subscribe = 0;
   // print_r($varify);die;
    if(!empty($varify))
    { 
      $subscribe = '-1';
    }
 else
    {
     $subscribe = $obj_test->saveSubscribed($data,$where,$unique_code);
    }
        if($subscribe == 1)
        {
         $res = 1;
         $msg = 'Successfully subscribed';   
        }else if($subscribe == '-1')
        {
         $res = 0;
         $msg = 'Already subscribed for same criteria';
        }
        else
        {
         $res = 0;
         $msg = 'Something Went wrong';
        }
        $resp = array('status' =>$res ,'msg'=>$msg );
        echo json_encode($resp);
 }

 }
