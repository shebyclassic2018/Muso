<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\logs;
use App\Models\news;
use App\Models\events;
use App\Models\gallery;
use App\Models\duration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $user_id;
    function user_id(){
        return Session::get('user_id');
    }


    public function timezone(){
        // $timestamp ='1411205843';  //Timestamp which you need to convert 

        $sourceTimezone = new DateTimeZone('UTC');
       
        $destinationTimezone = new DateTimeZone('Africa/Nairobi'); 
       
        $dt = new DateTime(date('m/d/Y h:i A'), $sourceTimezone);
        $dt->setTimeZone($destinationTimezone);
       
        return $dt;
    }

    public function now($format = 'Y-m-d H:i:s'){
        return $this->timezone()->format($format);
    }

    function get_news(){
        return news::orderBy('id','DESC')->get();
   }

   function get_events(){
       return events::orderBy('id','DESC')->get();
   }

   function get_sliderImages(){
       return gallery::skip(0)->take(5)
       ->orderBy('id','DESC')
       ->get();
   }

   function logs($user_id, $table, $action, $item_id, $action_date) {
        $insert = logs::create([
            'user_id' => $user_id,
            'table_visited' => $table,
            'action' => $action,
            'item_id' => $item_id,
            'action_date' => $this->now()
        ]);
        if($insert)
            return true;
        else
            return false;
   }

   function LeadershipYear($column, $order) {
       return duration::orderBy($column, $order)->get();
   }
}
