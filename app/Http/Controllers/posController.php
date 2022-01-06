<?php

namespace App\Http\Controllers;

use App\Models\pos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class posController extends Controller
{
    function index($view = 'position'){
        $grouped_date = pos::orderBy('pos.id', 'DESC')
        ->join('duration as d', ['d.id' => 'lship_year'])
        ->select('d.id as year_id','lship_year', 'timerange')
        ->groupBy('lship_year')
        ->get();

        $position = pos::all();
        $year = $this->LeadershipYear('id', 'DESC');
        return view('admin/' . $view, [
            'position' => $position,
            'grouped_date' => $grouped_date,
            'year' => $year,
            'i' => 1
        ]);
    }

    function add_position(Request $req) {
        $insert = pos::create([
            'pos' => $req->input('pos'),
            'lship_year' => $req->input('year')
        ]);
        if($insert)
            Session::flash('pos-alert', 'Position added successful');
        else
            Session::flash('pos-alert', 'Position not added');

        return $this->index();
    }

    function delete_position($id){
        $delete = pos::where('id', $id)->delete();
        if($delete)
            Session::flash('pos-alert', 'Position deleted successful');
        else
            Session::flash('pos-alert', 'Position not deleted');

        return $this->index();
    }


    function get_position_to_edit($id){
        $pos = pos::where('id', $id)->get();
        foreach($pos as $pt){
            Session::put('pos', $pt->pos);
            Session::put('pos_id', $pt->id);
        }

        return $this->index('edit-position');
    }

    function update_position(Request $req){
        $update = pos::where('id', $req->input('id'))->update([
            'pos' => $req->input('pos'),
            'lship_year' => $req->input('year')
        ]);

        if($update)
            Session::put('pos-alert','Position updated successful');
        else
            Session::put('pos-alert','Position not updated');

        return $this->index();
    }
}
