<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class galleryController extends Controller
{
    
    function index($view = 'home/ourgallery'){
        $date_uploaded = gallery::orderBy('date_uploaded','DESC')
        ->select('grouped_date as date')
        ->groupBy('grouped_date')
        ->get();


        $gallery = gallery::orderBy('id','DESC')->get();
        $total_pictures = count($gallery);
        if($total_pictures % 6 == 0)
            $rows = $total_pictures / 6;
        else
            $rows = floor($total_pictures / 6) + 1;
        

        return view($view,[
            'gallery' => $gallery,
            'date_uploaded' => $date_uploaded,
            'rows' => $rows
        ]);
    }

    function getForm(){
        $date_uploaded = gallery::orderBy('date_uploaded','DESC')
        ->select('grouped_date as date')
        ->groupBy('grouped_date')
        ->get();

        $gallery = gallery::orderBy('id','DESC')->get();
        $total_pictures = count($gallery);
        if($total_pictures % 6 == 0)
            $rows = $total_pictures / 6;
        else
            $rows = floor($total_pictures / 6) + 1;
        

        return view('admin/add-to-gallery',[
            'gallery' => $gallery,
            'date_uploaded' => $date_uploaded,
            'rows' => $rows
        ]);
    }

    function addToGallery(Request $req){
        $data = $req->input();
        $file = $req->file('picture');
        $now = $this->now('Y-m-d');
        $grouped_date = $this->now('F Y');
        $target = "file/gallery";
        if(!empty($file)){
            $filename = $file->getClientOriginalName();
            if($file->move($target, $filename)){
                $values = [
                    'picture' => $filename,
                    'descript' => $data['descript'],
                    'date_uploaded' => $now,
                    'grouped_date' => $grouped_date
                ];
        
                $insert = gallery::create($values);
                if($insert)
                    $req->session()->flash('gallery_alert','Picture uploaded successful');
                else
                    $req->session()->flash('gallery_alert','Picture not uploaded');
            }else{
                $req->session()->flash('gallery_alert','Error: Picture not uploaded');
                $req->session()->put('descript',$data['descript']);
            }

        }else{
            $req->session()->flash('gallery_alert','Error: No picture to upload');
            $req->session()->put('descript',$data['descript']);
        }
        
        return $this->getForm();
    }

    function view_image($id){
        $image = gallery::where('id', $id)->get();
        $next = $this->next_image($id);
        $previous = $this->previous_image($id);

        return view('home/slider', [
            'image' => $image,
            'next' => $next,
            'previous' => $previous
        ]);
    }

    function admin_view_image($id){
        $image = gallery::where('id', $id)->get();
        $next = $this->next_image($id);
        $previous = $this->previous_image($id);

        return view('admin/admin-slider', [
            'image' => $image,
            'next' => $next,
            'previous' => $previous
        ]);
    }

    function previous_image($id){
        $id = $id - 1;
        $image = gallery::where('id', $id)->get();
        if(count($image) > 0)
            return $id;
        else
            return $id = $id + 1;
    }

    function next_image($id){
        $id = $id + 1;
        $image = gallery::where('id', $id)->get();
        if(count($image) > 0)
            return $id;
        else
            return $id = $id - 1;
    }

    function delete_image($id){
        $delete = gallery::where('id',$id)->delete();
        if($delete)
            $this->alert = "Picture deleted successful";
        else
            $this->alert = 'Picture not deleted';

        $id += 1;
        $image = gallery::where('id', $id)->get();
        if(count($image) == 0){
            $id -= 2;
            $image = gallery::where('id', $id)->get();
            if(count($image) == 0)
                return redirect('galleryForm');
        }
            
           
        return $this->admin_view_image($id);
    }

    function get_gallery_to_edit($id){
        $data = gallery::where('id', $id)->get();
        if($data){
            foreach($data as $row){
                Session::put('gallery-id', $row->id);
                Session::put('descript', $row->descript);
                Session::put('picture', $row->picture);
            }
        }
        return $this->index("admin/edit-gallery");
    }

    function update_gallery(Request $req){
        $data = $req->input();
        if($file = $req->file('picture')){
            $filename = $file->getClientOriginalName();
            $target = "file/gallery";
            $values = [
                'picture' => $filename,
                'descript' => $data['descript']
            ];
            $file->move($target, $filename);
        }else{
            $values = [
                'descript' => $data['descript']
            ];
        }

        $update = gallery::where('id', $data['id'])->update($values);
        if($update)
            return $this->index('admin/add-to-gallery');
        else
            return $this->get_gallery_to_edit($data['id']);
    }
}
