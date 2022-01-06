<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class newsController extends Controller
{
    public $alert = '';
    function index ($view = 'news'){
        $news = $this->get_news();
        return view("admin/$view",[
            'news' => $news,
            'alert' => $this->alert
        ]);
    }
    
    function delete_news($id){
        $delete = news::where('id',$id)->delete();
        if($delete)
            $this->alert = "Post deleted successful";
        else
            $this->alert = 'Post not deleted';

        return $this->index();
    }
    
    public function add_news(Request $req){
        $data = $req->input();
        $file = $req->file('poster');
        $filename = "";
        $target = "file/poster";
        if(!empty($file)){
            $filename = $file->getClientOriginalName();
            $file->move($target, $filename);
        }
        
        $now = $this->now('Y-m-d H:i:s');

        $values = [
            'poster' => $filename,
            'body' => $data['body'],
            'head' => $data['heading'],
            'date_uploaded' => $now
        ];

        $insert = news::create($values);
        if($insert)
            $req->session()->flash('news_alert','News added successful');
        else
            $req->session()->flash('news_alert','News not added');

        return $this->index();
    }

    function get_news_data_to_edit($id){
        $data = news::where('id', $id)->get();
        if($data){
            foreach($data as $row){
                Session::put('news-id', $row->id);
                Session::put('news-body', $row->body);
                Session::put('poster', $row->poster);
                Session::put('head', $row->head);
            }
        }
        $newsId = "#news-" . $id;
        return $this->index("edit-news");
    }

    function update_news(Request $req){
        $data = $req->input();
        if($file = $req->file('poster')){
            $filename = $file->getClientOriginalName();
            $target = "file/poster";
            $values = [
                'poster' => $filename,
                'body' => $data['body'],
                'head' => $data['heading'],
            ];
            $file->move($target, $filename);
        }else{
            $values = [
                'body' => $data['body'],
                'head' => $data['heading'],
            ];
        }

        $update = news::where('id', $data['id'])->update($values);
        if($update)
            return $this->index();
        else
            return $this->get_news_data_to_edit($data['id']);
    }
}
