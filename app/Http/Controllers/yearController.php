<?php

namespace App\Http\Controllers;

use App\Models\duration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class yearController extends Controller
{
    function index($view = 'leadership-year'){
        $year = duration::orderBy('id', 'DESC')->get();
        return view('admin/' . $view, [
            'year' => $year,
            'i' => 1
        ]);
    }

    function add_year(Request $req){
        $data = $req->input();
        $insert = duration::create([
            'timerange' => $data['year']
        ]);
        if($insert)
            $req->session()->flash('year-alert','Year added successful');
        else
            $req->session()->flash('year-alert','Year not added');

        return $this->index();
    }

    function delete_year($id){
        $delete = duration::where('id', $id)->delete();
        if($delete)
            Session::flash('year-alert', 'Year deleted successful');
        else
            Session::flash('year-alert', 'Year not deleted');

        return $this->index();
    }

    function get_year_to_edit($id){
        $year = duration::where('id', $id)->get();
        foreach($year as $yr){
            Session::put('year', $yr->timerange);
            Session::put('year_id', $yr->id);
        }

        return $this->index('edit-year');
    }

    function update_year(Request $req){
        $update = duration::where('id', $req->input('id'))->update([
            'timerange' => $req->input('year')
        ]);

        if($update)
            Session::put('year-alert','Year updated successful');
        else
            Session::put('year-alert','Year not updated');

        return $this->index();
    }
}
