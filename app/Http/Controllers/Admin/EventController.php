<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events=Event::all();
        return view('admin.events.index',compact('events'));
    }

    public function add(Request $request)
    {
        if($request->getMethod()=="POST"){
            $event=new Event();
            $event->name=$request->name;
            $event->desc=$request->desc;
            $event->start=$request->start;
            $event->end=$request->end;
            $event->short_desc=$request->short_desc;
            $event->image=$request->image->store('uploads/event');
            $event->save();
            return redirect()->back()->with('message','Event Saved Sucessfully');
        }else{
            return view('admin.events.add');
        }
    }

    public function edit(Request $request,Event $event)
    {
        if($request->getMethod()=="POST"){
            $event->name=$request->name;
            $event->desc=$request->desc;
            $event->start=$request->start;
            $event->end=$request->end;
            $event->short_desc=$request->short_desc;
            if($request->hasFile('image')){
                $event->image=$request->image->store('uploads/event');
            }
            $event->save();
            return redirect()->back()->with('message','Event Saved Sucessfully');
        }else{
            return view('admin.events.edit',compact('event'));
        }
    }

    public function del(Request $request,Event $event)
    {
        $event->delete();
        return redirect()->back()->with('message','Event Deleted Sucessfully');

    }
}
