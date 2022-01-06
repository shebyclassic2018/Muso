<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class videoController extends Controller
{
    function videoPlayer($id) {
        $mainVideo = video::where('id', $id)->get();
        $videos = video::orderBy('id', 'DESC')->get();

        return view('home/video-player', [
            'mainVideo' => $mainVideo,
            'videos' => $videos
        ]);
    }
}
