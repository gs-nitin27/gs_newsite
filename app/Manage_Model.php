<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Manage_Model extends Model
{
    public function getJobDetail($id)
    {

     $pricing_plan  = DB::table('gs_pricing_plan')->select('amount','duration')->where('module', '1')->get();
     $job 	= DB::table('gs_jobInfo')->select('id','title','org_city')->where('id', '$id')->limit(8)->get();
     $data =  array('plan' =>$pricing_plan ,'job'=>$job );
     return $data;


    }
}
