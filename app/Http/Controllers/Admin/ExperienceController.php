<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences=Experience::all();
        return view('admin.experiences.index',compact('experiences'));
    }

    public function add(Request $request)
    {
        if($request->getMethod()=="POST"){
            $experience=new Experience();
            $experience->name=$request->name;
            $experience->desc=$request->desc;
            $experience->short_desc=$request->short_desc;
            $experience->image=$request->image->store('uploads/experience');
            $experience->save();
            return redirect()->back()->with('message','Experience Saved Sucessfully');
        }else{
            return view('admin.experiences.add');
        }
    }

    public function edit(Request $request,Experience $experience)
    {
        if($request->getMethod()=="POST"){
            $experience->name=$request->name;
            $experience->desc=$request->desc;
            $experience->short_desc=$request->short_desc;
            if($request->hasFile('image')){
                $experience->image=$request->image->store('uploads/experience');
            }
            $experience->save();
            return redirect()->back()->with('message','Experience Saved Sucessfully');
        }else{
            return view('admin.experiences.edit',compact('experience'));
        }
    }

    public function del(Request $request,Experience $experience)
    {
        $experience->delete();
        return redirect()->back()->with('message','Experience Deleted Sucessfully');

    }
}
