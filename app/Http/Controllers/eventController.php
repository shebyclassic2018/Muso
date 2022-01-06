<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class eventController extends Controller
{
    public $alert = "";
    

    function index($view = 'event'){
        $events = $this->get_events();
        return view("admin/$view",[
        'events' => $events,
        'alert' => $this->alert
        ]);
    }

    function event(Request $req){
        $data = $req->input();
        $values = [
            'body' => $data['body'],
            'date_uploaded' => $data['date_uploaded']
        ];
        $insert = events::create($values);
        $insertID = $insert->id;
        if($insert) {
            $req->session()->flash('event_alert','Event added successful');
            $this->logs($this->user_id(), 'events', 'insert', $insertID, $this->now());
        } else {
            $req->session()->flash('event_alert','Event not added');
        }            

        return $this->index();
    }

    function delete_event($id){
        $delete = events::where('id', $id)->delete();
        if($delete) {
            $this->alert = "Event deleted successful";
            $this->logs($this->user_id(), 'events', 'delete', $id, $this->now());
        } else {
            $this->alert = "Event not deleted";
        }
           

        return $this->index();
    }

    function edit_event($id) {
        $event = events::where('id', $id)->get();
        if($event){
            foreach($event as $eve){
                Session::put('edit-event', $eve->body);
                Session::put('edit-event-date', $eve->date_uploaded);
                Session::put('event-id', $eve->id);
            }
        }
            
        return $this->index('edit-event');
    }

    function update_event(Request $req){
        $data = $req->input();
        $values = [
            'body' => $data['body'],
            'date_uploaded' => $data['date_uploaded']
        ];

        $update = events::where('id', $data['id'])->update($values);
        if($update)
            $this->alert = "Event updated successful";
        else
            $this->alert = "Event not updated";

        return $this->index();
    }
}
