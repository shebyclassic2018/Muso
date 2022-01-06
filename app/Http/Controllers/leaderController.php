<?php

namespace App\Http\Controllers;

use App\Models\pos;
use App\Models\leader;
use App\Models\duration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class leaderController extends Controller
{
    function index($year_id){
        $minisrty = DB::table('ministry')->get();
        $faculty = DB::table('faculty')->get();
        $duration = duration::orderBy('id', 'DESC')->get();
        $leaders = $this->get_leaders($year_id);
        $position = $this->get_position();
        
        return view('admin/leader-form',[
            'ministry'  => $minisrty,
            'faculty'   => $faculty,
            'duration'  => $duration,
            'leaders'   => $leaders,
            'position'  => $position
        ]);
    }

    function leader_index($year_id){
        $duration = duration::orderBy('id', 'DESC')->get();
        $leaders = $this->get_leaders($year_id);

        return view('home/leaders', [
            'duration'  => $duration,
            'leaders'   => $leaders
        ]);
    }

    function Register_Leader (Request $request){
        $data = $request->input();
        $Leader_Name = trim($data['fname']) . ' ' . trim($data['lname']);
        $Sex = $data['sex'];
        $dur_id = $data['duration'];
        $faculty_id = $data['fac_id'];
        $ministry_id = $data['min_id'];
        $email = $data['email'];
        $phone = $data['phone'];
        $pos_id = $data['position'];

        $passport = $request->file('passport');
        $passport_name = $passport->getClientOriginalName();

        $cv = $request->file('cv');
        if($cv)
            $cv_name = $cv->getClientOriginalName();

        $passport_target = 'file/passport';
        $cv_target = 'file/cv';

        if($passport->move($passport_target, $passport_name)){
            if($cv)
                $cv->move($cv_target, $cv_name);

            $insert = leader::create([
                'name' => $Leader_Name,
                'sex' => $Sex,
                'dur_id' => $dur_id,
                'email' => $email,
                'phone' => $phone,
                'f_id' => $faculty_id,
                'min_id' => $ministry_id,
                'passport' => $passport_name,
                'pos_id' => $pos_id
            ]);

            if($insert)
                $request->session()->flash('alert','Successful inserted');
            else
                $request->session()->flash('alert','Not Successful inserted');
        }
        return $this->index(1);            
    }

    function get_leaders($year_id){
        return leader::join('ministry as m',['m.id' => 'leader.min_id'])
        ->join('faculty as f', ['f.id' => 'leader.f_id'])
        ->join('duration as d', ['d.id' => 'leader.dur_id'])
        ->join('pos as p', ['p.id' => 'leader.pos_id'])
        ->where('d.id', $year_id)
        ->get();
    }

    function get_position(){
        return pos::all();
    }
}
