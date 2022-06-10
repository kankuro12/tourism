<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\SM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index($type,$key)
    {
        $types=[
            "Chapters ",
            "Destinations ",
            "Galleries ",
            "Festivals ",
            "Experiences ",
            "Events ",
            "Hotels ",
        ];
        $name='';
        if($type==0){
            $name=DB::table('chapters')->where('id',$key)->first(['name'])->name;
        }else if($type==1){
            $name=DB::table('destinations')->where('id',$key)->first(['name'])->name;

        }else if($type==2){
            $name=DB::table('galleries')->where('id',$key)->first(['name'])->name;

        }
        else if($type==3){
            $name=DB::table('festivals')->where('id',$key)->first(['name'])->name;

        }
        else if($type==4){
            $name=DB::table('experiences')->where('id',$key)->first(['name'])->name;

        }
        else if($type==5){
            $name=DB::table('events')->where('id',$key)->first(['name'])->name;

        } else if($type==6){
            $name=DB::table('hotels')->where('id',$key)->first(['name'])->name;

        }
        $images=DB::table('images')->where('type',$type)->where('key',$key)->get();
        return view('admin.images.index',compact('images','key','type','types','name'));
    }

    public function add(Request $request){
        $image=new Image();
        $image->type=$request->type;
        $image->key=$request->key;
        $image->media=$request->media;
        if($request->media==1){
            $image->image=$request->image->store('uploads/type'.$request->type.'/key'.$request->key);
        }else{
            $image->image=$request->image;

        }
        $image->save();
        return response()->json($image);
    }

    public function del(Request $request)
    {
        DB::delete('delete from images where id=?',[$request->id]);
        return response('ok');
    }



}
