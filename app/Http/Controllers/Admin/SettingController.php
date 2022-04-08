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

    public function footer(Request $request)
    {
        if($request->getMethod()=="GET"){
            $data=SM::getSetting('footer')??(object)([
             "bg"=>'',
             "logo"=>'',
             "address"=>'',
             "phone"=>"",
             "email"=>"",
             'sub_title'=>"",
             'sub_subtitle'=>"",
             "fb"=>"",
             "insta"=>"",
             "twitter"=>"",

            ]);
            return view('admin.setting.footer',compact('data'));
        }else{

            $olddata=SM::getSetting('footer')??(object)([
                "bg"=>'',
                "logo"=>'',
                "address"=>'',
                "phone"=>"",
                "email"=>"",
                'sub_title'=>"",
                'sub_subtitle'=>"",
                "fb"=>"",
                "insta"=>"",
                "twitter"=>"",

               ]);
            $data=[
                'address'=>$request->address,
                'fb'=>$request->fb,
                'insta'=>$request->insta,
                'twitter'=>$request->twitter,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'sub_title'=>$request->sub_title,
                'sub_subtitle'=>$request->sub_subtitle,
            ];

            if($request->hasFile('bg') ){
                $data['bg']=$request->bg->store('uploads');
            }else{
                $data['bg']=$olddata->bg;
            }
            if($request->hasFile('logo') ){
                $data['logo']=$request->logo->store('uploads');
            }else{
                $data['logo']=$olddata->logo;
            }

            SM::setSetting('footer',$data);
            return redirect()->back()->with('message','Footer Setting Saved Sucessfuly');
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
                'exp_image'=>'',
                'explore_video'=>''
            ]);
            return view('admin.setting.home',compact('data'));
        }else{

            $olddata=SM::getSetting('homepage')??(object)([
                'slider_title'=>'',
                'slider_subtitle'=>'',
                'slider_image'=>'',
                'explore_title'=>'',
                'explore_text'=>'',
                'explore_bg'=>'',
                'explore_image'=>'',
                'explore_video'=>'',
                'exp_image'=>'',
            ]);
            $data=[
                'slider_title'=>$request->slider_title,
                'slider_subtitle'=>$request->slider_subtitle,
                'explore_title'=>$request->explore_title,
                'explore_text'=>$request->explore_text,
                'explore_video'=>$request->explore_video
            ];
            if($request->hasFile('slider_image') ){
                $data['slider_image']=$request->slider_image->store('uploads');
            }else{
                $data['slider_image']=$olddata->slider_image;
            }
            if($request->hasFile('explore_bg') ){
                $data['explore_bg']=$request->explore_bg->store('uploads');
            }else{
                $data['explore_bg']=$olddata->explore_bg;
            }

            if($request->hasFile('explore_image') ){
                $data['explore_image']=$request->explore_image->store('uploads');
            }else{
                $data['explore_image']=$olddata->explore_image;
            }
            if($request->hasFile('exp_image') ){
                $data['exp_image']=$request->exp_image->store('uploads');
            }else{
                $data['exp_image']=$olddata->exp_image??'';
            }
            SM::setSetting('homepage',$data);
            return redirect()->back()->with('message','Homepage Setting Saved Sucessfuly');
        }
    }
}
