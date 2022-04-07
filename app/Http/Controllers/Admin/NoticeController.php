<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NoticeController extends Controller
{
    public function index()
    {
        $notices=Notice::orderBy('id','desc')->get();
        return view('admin.notices.index',compact('notices'));
    }

    public function add(Request $request)
    {
        if($request->getMethod()=="POST"){
            $notice=new Notice();
            $notice->name=$request->name;
            $notice->desc=$request->desc;

            if(File::exists(public_path('uploads/notice/'.$request->image->getClientOriginalName()))){
                $i=1;
                while(File::exists(public_path('uploads/notice/'.$i.$request->image->getClientOriginalName()))){
                    $i+=1;
                }
                $notice->image=$request->image->storeAs('uploads/notice',$i.$request->image->getClientOriginalName());
            }else{

                $notice->image=$request->image->storeAs('uploads/notice',$request->image->getClientOriginalName());
            }
            $notice->save();
            return redirect()->back()->with('message','Notice Saved Sucessfully');
        }else{
            return view('admin.notices.add');
        }
    }

    public function edit(Request $request,Notice $notice)
    {
        if($request->getMethod()=="POST"){
            $notice->name=$request->name;
            $notice->desc=$request->desc;
            if($request->hasFile('image')){
                if(File::exists(public_path('uploads/notice/'.$request->image->getClientOriginalName()))){
                    $i=1;
                    while(File::exists(public_path('uploads/notice/'.$i.$request->image->getClientOriginalName()))){
                        $i+=1;
                    }
                    $notice->image=$request->image->storeAs('uploads/notice',$i.$request->image->getClientOriginalName());
                }else{

                    $notice->image=$request->image->storeAs('uploads/notice',$request->image->getClientOriginalName());
                }
            }
            $notice->save();
            return redirect()->back()->with('message','Notice Saved Sucessfully');
        }else{
            return view('admin.notices.edit',compact('notice'));
        }
    }

    public function del(Request $request,Notice $notice)
    {
        $notice->delete();
        return redirect()->back()->with('message','Notice Deleted Sucessfully');

    }
}
