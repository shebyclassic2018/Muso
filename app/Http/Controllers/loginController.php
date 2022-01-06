<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(Request $req){
        $data = $req->input();
        $password = md5($data['password']);
        $values = [
            'email' => $data['email'],
            'password' => $password
        ];

        $select = admin::where($values)->get();
        $found = count($select);
        if($found == 1){
            foreach($select as $key => $row){
                $req->session()->put('user_id',$row['id']);
                $req->session()->put('username',$row['name']);
                $req->session()->put('email',$row['email']);
            }
            return redirect('admin-home');
        }else{
            $error = "Either username or password is incorrect";
            $req->session()->flash('error', $error);
            return redirect('admin');
        }
    }
}
