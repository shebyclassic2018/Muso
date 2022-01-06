<?php

namespace App\Http\Controllers;

use App\Models\faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class facultyController extends Controller
{
    function index($view = 'faculty'){
        $faculty = faculty::all();
        return view('admin/' . $view, [
            'faculty' => $faculty,
            'i' => 1
        ]);
    }

    function add_faculty(Request $req){
        $data = $req->input();
        $insert = faculty::create([
            'faculty_name' => $data['f_name'],
            'faculty_abbr' => $data['f_abbr']
        ]);
        if($insert)
            $req->session()->flash('faculty-alert','Faculty added successful');
        else
            $req->session()->flash('faculty-alert','Faculty not added');

        return $this->index();
    }

    function delete_faculty($id){
        $delete = faculty::where('id', $id)->delete();
        if($delete)
            Session::flash('faculty-alert', 'Faculty deleted successful');
        else
            Session::flash('faculty-alert', 'Faculty not deleted');

        return $this->index();
    }

    function get_faculty_to_edit($id){
        $faculty = faculty::where('id', $id)->get();
        foreach($faculty as $fac){
            Session::put('f_name', $fac->faculty_name);
            Session::put('f_abbr', $fac->faculty_abbr);
            Session::put('f_id', $fac->id);
        }

        return $this->index('edit-faculty');
    }

    function update_faculty(Request $req){
        $update = faculty::where('id', $req->input('id'))->update([
            'faculty_name' => $req->input('f_name'),
            'faculty_abbr' => $req->input('f_abbr')
        ]);

        if($update)
            Session::put('faculty-alert','Faculty updated successful');
        else
            Session::put('faculty-alert','Faculty not updated');

        return $this->index();
    }
    
}
