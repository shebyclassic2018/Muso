<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\video;
use App\Models\events;
use App\Models\leader;
use App\Models\gallery;
use App\Models\duration;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(){
        $leader = leader::join('ministry as m',['m.id' => 'leader.min_id'])
        ->join('faculty as f', ['f.id' => 'leader.f_id'])
        ->join('duration as d', ['d.id' => 'leader.dur_id'])
        ->join('pos as p', ['p.id' => 'leader.pos_id'])
        ->skip(0)->take(4)->get();

        $news = $this->get_news();
        $events = $this->get_events();
        $sliderImages = $this->get_sliderImages();
        $heads = $this->get_news_heading();
        $videos = video::orderBy('id', 'DESC')->get();
        

        return view('home/home',[
            'leader' => $leader,
            'news' => $news,
            'events' => $events,
            'sliderImages' => $sliderImages,
            'heads' => $heads,
            'videos' => $videos
        ]);
    }
    
    function get_news_heading(){
        $heads = news::skip(0)->take(5)
        ->orderBy('id','DESC')
        ->get();

        return $heads;
    }

    
}
