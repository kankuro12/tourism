<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\DestinationContact;
use App\Models\DestinationType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationController extends Controller
{


    public function index(DestinationType $type)
    {
        $destinations=DB::table('destinations')->where('destination_type_id',$type->id)->get();
        return view('admin.destination.index',compact('destinations','type'));
    }

    public function add(Request $request,DestinationType $type)
    {
        if($request->getMethod()=="POST"){
            $destination=new Destination();
            $destination->name=$request->name;
            $destination->desc=$request->desc;
            $destination->map=$request->map;
            $destination->destination_type_id=$type->id;
            $destination->image=$request->image->store('uploads/destination');
            $destination->save();
            return redirect()->back()->with('message','Destination Saved Sucessfully');
        }else{
            return view('admin.destination.add',compact('type'));
        }
    }
    public function edit(Request $request,Destination $destination)
    {
        if($request->getMethod()=="POST"){
            $destination->name=$request->name;
            $destination->desc=$request->desc;
            $destination->map=$request->map;
            $destination->image=$request->image->store('uploads/destination');
            $destination->save();
            return redirect()->back()->with('message','Destination Saved Sucessfully');
        }else{
            $type=DB::table('destination_types')->where('id',$destination->destination_type_id)->first();
            return view('admin.destination.edit',compact('destination','type'));
        }
    }

    public function del(Request $request,Destination $destination)
    {
        $destination->delete();
        return response('ok');
    }

    public function contactIndex(Request $request,Destination $destination)
    {
            $type=DB::table('destination_types')->where('id',$destination->destination_type_id)->first();
            $contacts=DB::table('destination_contacts')->where('destination_id',$destination->id)->get();
            return view('admin.destination.contact.index',compact('destination','type','contacts'));

    }

    public function typeIndex(Request $request)
    {
        $types=DB::table('destination_types')->get();
        return view('admin.destination.type.index',compact('types'));
    }

    public function contactAdd(Request $request){
        $contact=new DestinationContact();
        $contact->name=$request->name;
        $contact->address=$request->address??"";
        $contact->phone=$request->phone;
        $contact->destination_id=$request->destination_id;
        $contact->save();
        return view('admin.destination.contact.single',compact('contact'));
    }
    public function contactEdit(Request $request){
        $contact=DestinationContact::where('id',$request->id)->first();
        $contact->name=$request->name;
        $contact->address=$request->address??"";
        $contact->phone=$request->phone;
        $contact->save();
        return response('ok');
    }
    public function contactDelete(Request $request){
        $contact=DestinationContact::where('id',$request->id)->first();

        $contact->delete();
        return response('ok');
    }

    public function typeAdd(Request $request)
    {
        if($request->getMethod()=="POST"){
            $type=new DestinationType();
            $type->name=$request->name;
            $type->desc=$request->desc;
            $type->image=$request->image->store('uploads/destination/type');
            $type->save();
            return redirect()->back()->with('message','Destination Type Saved Sucessfully');
        }else{
            return view('admin.destination.type.add');
        }
    }

    public function typeEdit(Request $request,DestinationType $type)
    {
        if($request->getMethod()=="POST"){
            $type->name=$request->name;
            $type->desc=$request->desc;
            if($request->hasFile('image')){
                $type->image=$request->image->store('uploads/destination/type');
            }
            $type->save();
            return redirect()->back()->with('message','Destination Type Saved Sucessfully');
        }else{
            return view('admin.chapters.edit',compact('type'));
        }
    }

    public function typeDelete(DestinationType $type)
    {
        $type->delete();
        return redirect()->back()->with('message','Destination Type Deleted Sucessfully');

    }


}
