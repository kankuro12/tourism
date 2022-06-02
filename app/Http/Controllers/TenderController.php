<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenderController extends Controller
{
    //
    public function index()
    {
        $tenders=DB::table('tenders')->get();
        return view('admin.tenders.index',compact('tenders'));
    }

    public function add(Request $request){
        if($request->getMethod()=="POST"){
            $tender=new Tender();
            $tender->title=$request->title;
            $tender->file=$request->file->store('uploads/tenders');
            $tender->save();
            return redirect()->back()->with('message','Tender Added Sucessfully');
        }else{
            return view('admin.tenders.add');
        }
    }
    public function edit(Tender $tender,Request $request){
        if($request->getMethod()=="POST"){
            $tender->title=$request->title;
            if($request->hasFile('file')){
                $tender->file=$request->file->store('uploads/tenders');
            }
            $tender->save();
            return redirect()->back()->with('message','Tender Updated Sucessfully');
        }else{
            return view('admin.tenders.edit',compact('tender'));
        }
    }
    public function del(Tender $tender,Request $request){
        $tender->delete();
        return redirect()->back()->with('message','Tender Deleted Sucessfully');

    }
}
