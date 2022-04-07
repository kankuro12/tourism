<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function index()
    {
        $festivals=Festival::all();
        return view('admin.festivals.index',compact('festivals'));
    }

    public function add(Request $request)
    {
        if($request->getMethod()=="POST"){
            $festival=new Festival();
            $festival->name=$request->name;
            $festival->desc=$request->desc;
            $festival->short_desc=$request->short_desc;
            $festival->image=$request->image->store('uploads/festival');
            $festival->save();
            return redirect()->back()->with('message','Festival Saved Sucessfully');
        }else{
            return view('admin.festivals.add');
        }
    }

    public function edit(Request $request,Festival $festival)
    {
        if($request->getMethod()=="POST"){
            $festival->name=$request->name;
            $festival->desc=$request->desc;
            $festival->short_desc=$request->short_desc;
            if($request->hasFile('image')){
                $festival->image=$request->image->store('uploads/festival');
            }
            $festival->save();
            return redirect()->back()->with('message','Festival Saved Sucessfully');
        }else{
            return view('admin.festivals.edit',compact('festival'));
        }
    }

    public function del(Request $request,Festival $festival)
    {
        $festival->delete();
        return redirect()->back()->with('message','Festival Deleted Sucessfully');

    }

}
