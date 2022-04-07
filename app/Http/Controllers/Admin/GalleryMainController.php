<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryMainController extends Controller
{
    //

    public function index()
    {
        $galleries=DB::table('galleries')->get();
        return view('admin.gallery.index',compact('galleries'));
    }

    public function add(Request $request){
        if($request->getMethod()=="POST"){
            $gallery=new gallery();
            $gallery->name=$request->name;
            $gallery->image=$request->image->store('upload/galleries');
            $gallery->type=1;
            $gallery->save();
            return redirect()->back()->with('message','Gallery Added Sucessfully');

        }else{
            return view('admin.gallery.add');
        }
    }

    public function edit(Request $request,gallery $gallery){
        if($request->getMethod()=="POST"){
            $gallery->name=$request->name;
            if($request->hasFile('image')){
                $gallery->image=$request->image->store('upload/galleries');
            }
            $gallery->save();
            return redirect()->back()->with('message','Gallery updated Sucessfully');
        }else{
            return view('admin.gallery.edit',compact('gallery'));
        }
    }

    public function del(Request $request,gallery $gallery){
        $gallery->delete();
        return redirect()->back()->with('message','Gallery deleted Sucessfully');
    }
}
