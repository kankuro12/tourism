<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SM;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function front(Request $request)
    {
        if($request->getMethod()=="GET"){

        }else{

        }
    }

    public function homePage(Request $request)
    {
        if($request->getMethod()=="GET"){
            $data=SM::getSetting('homepage')??(object)([
                'slider_title'=>'',
                'slider_subtitle'=>'',
                'slider_image'=>'',
                'explore_title'=>'',
                'explore_text'=>'',
                'explore_bg'=>'',
                'explore_image'=>'',
                'explore_video'=>''
            ]);
            return view('admin.setting.home',compact('data'));
        }else{
            $data=[
                'slider_title'=>$request->slider_title,
                'slider_subtitle'=>$request->slider_subtitle,
                'slider_image'=>$request->slider_image->store('upload'),
                'explore_title'=>$request->explore_title,
                'explore_text'=>$request->explore_text,
                'explore_bg'=>$request->explore_bg->store('upload'),
                'explore_image'=>$request->explore_image->store('upload'),
                'explore_video'=>$request->explore_video
            ];
            SM::setSetting('homepage',$data);
            return redirect()->back()->with('message','Homepage Setting Saved Sucessfuly');
        }
    }
}
