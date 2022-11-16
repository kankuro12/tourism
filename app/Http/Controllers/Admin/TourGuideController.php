<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function index()
    {
        $guides=TourGuide::all();
        return view('admin.guides.index',compact('guides'));
    }

    public function add(Request $request)
    {
        if($request->getMethod()=="POST"){
            $guide=new TourGuide();
            $guide->name=$request->name;
            $guide->address=$request->address;
            $guide->phone=$request->phone;
            $guide->email=$request->email;
            $guide->facebook=$request->facebook;
            $guide->instagram=$request->instagram;
            $guide->twitter=$request->twitter;
            $guide->about=$request->about;
            if($request->hasFile('image')){
                $guide->image=$request->image->store('uploads/def');
            }else{
                $guide->image='defuser.png';
            }
            $guide->save();
            return redirect()->back()->with('message','Guide Saved Sucessfully');
        }else{
            return view('admin.guides.add');
        }
    }

    public function edit(Request $request,TourGuide $guide)
    {
        if($request->getMethod()=="POST"){
            $guide->name=$request->name;
            $guide->address=$request->address;
            $guide->phone=$request->phone;
            $guide->email=$request->email;
            $guide->facebook=$request->facebook;
            $guide->instagram=$request->instagram;
            $guide->twitter=$request->twitter;
            $guide->about=$request->about;
            if($request->hasFile('image')){
                $guide->image=$request->image->store('uploads/def');
            }
            $guide->save();
            return redirect()->back()->with('message','Guide Saved Sucessfully');
        }else{
            return view('admin.guides.edit',compact('guide'));
        }
    }

    public function del(Request $request,TourGuide $guide){
        $guide->delete();
        return redirect()->back()->with('message','Guide Deleted Sucessfully');

    }

}
