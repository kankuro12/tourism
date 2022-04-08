<?php
namespace App;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SM{

    public static function getFooter(){
        $data=SM::getSetting('footer')??(object)([
            "bg"=>'',
            "address"=>'',
            "phone"=>"",
            "email"=>"",
            'sub_title'=>"",
            'sub_subtitle'=>"",
            "fb"=>"",
            "insta"=>"",
            "twitter"=>"",
            "logo"=>"",

           ]);
           $destinations=DB::table('destinations')->orderByRaw('RAND()')->take(6)->get(['id','name']);
           $galleries=DB::table('galleries')->orderByRaw('RAND()')->take(6)->get(['id','name','image']);
           $festivals=DB::table('festivals')->orderByRaw('RAND()')->take(6)->get(['id','name','image']);
           return compact('data','destinations','galleries','festivals');
    }
    public static function getSetting($key,$direct=false){
        $s=DB::table('settings')->where('key',$key)->select('value')->first();
        return $direct?($s!=null?$s->value:null):($s!=null?json_decode($s->value):null);
    }

    public static function setSetting($key,$value,$direct=false){
        $s=Setting::where('key',$key)->first();
        if($s==null){
            $s=new Setting();
            $s->key=$key;
        }
        if($direct){
            $s->value=$value;
        }else{

            $s->value=json_encode($value);
        }
        $s->save();
        return $s;
    }
}
