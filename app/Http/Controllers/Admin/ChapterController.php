<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters=Chapter::all();
        return view('admin.chapters.index',compact('chapters'));
    }

    public function add(Request $request)
    {
        if($request->getMethod()=="POST"){
            $chapter=new Chapter();
            $chapter->name=$request->name;
            $chapter->desc=$request->desc;
            $chapter->short_desc=$request->short_desc;
            $chapter->image=$request->image->store('uploads/chapter');
            $chapter->save();
            return redirect()->back()->with('message','Chapter Saved Sucessfully');
        }else{
            return view('admin.chapters.add');
        }
    }

    public function edit(Request $request,Chapter $chapter)
    {
        if($request->getMethod()=="POST"){
            $chapter->name=$request->name;
            $chapter->desc=$request->desc;
            $chapter->short_desc=$request->short_desc;
            if($request->hasFile('image')){
                $chapter->image=$request->image->store('uploads/chapter');
            }
            $chapter->save();
            return redirect()->back()->with('message','Chapter Saved Sucessfully');
        }else{
            return view('admin.chapters.edit',compact('chapter'));
        }
    }
}
