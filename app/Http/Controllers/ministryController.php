<?php

namespace App\Http\Controllers;

use App\Models\faculty;
use App\Models\duration;
use App\Models\ministry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ministryController extends Controller
{
    function index($view = 'ministry'){
        $ministry = ministry::all();
        $faculty = faculty::all();
        $year = $this->LeadershipYear('id', 'DESC');
        return view('admin/' . $view, [
            'ministry' => $ministry,
            'year' => $year,
            'i' => 1
        ]);
    }

    function add_ministry(Request $req){
        $data = $req->input();
        $container = [
            'm_name' => $data['m_name'],
            'lship_year' => $data['year']
        ];
        $insert = ministry::create($container);
        if($insert)
            $req->session()->flash('min-alert','Ministry added successful');
        else
            $req->session()->flash('min-alert','Ministry not added');

        return $this->index();
    }

    function delete_ministry($id){
        $delete = ministry::where('id', $id)->delete();

        if($delete)
            Session::put('min-alert','Ministry deleted successful');
        else
            Session::put('min-alert','Ministry not deleted');
            
        return $this->index();
    }

    function get_ministry_to_edit($id){
        $ministry = ministry::where('id', $id)->get();
        foreach($ministry as $min){
            Session::put('ministry', $min->m_name);
            Session::put('min_id', $min->id);
        }

        return $this->index('edit-ministry');
    }

    function update_ministry(Request $req){
        $update = ministry::where('id', $req->input('id'))->update([
            'm_name' => $req->input('m_name'),
            'lship_year' => $req->input('year')
        ]);

        if($update)
            Session::put('min-alert','Ministry updated successful');
        else
            Session::put('min-alert','Ministry not updated');

        return $this->index();
    }

    
}
