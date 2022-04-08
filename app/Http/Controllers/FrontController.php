<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\SM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //

    public function home(Request $request)
    {
        $chapters=DB::table('chapters')->get(['id','name','short_desc','image']);
        $guides=DB::table('tour_guides')->orderByRaw('RAND()')->take(6)->get();
        $notices=Notice::orderBy('id','desc')->take(6)->get();
        $destinations=DB::table('destinations')->orderByRaw('RAND()')->take(6)->get(['id','name','image']);
        $experiences=DB::table('experiences')->orderByRaw('RAND()')->take(6)->get(['id','name','image','short_desc']);
        $galleries=DB::table('galleries')->orderByRaw('RAND()')->take(6)->get(['id','name','image']);
        $data=SM::getSetting('homepage');
        return view('front.home.index',compact('notices','data','chapters','guides','galleries','destinations','experiences'));
    }
}
