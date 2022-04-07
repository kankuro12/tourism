<?php

namespace App\Http\Controllers;

use App\SM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //

    public function home(Request $request)
    {
        $chapters=DB::table('chapters')->get(['id','name','short_desc','image']);
        $data=SM::getSetting('homepage');
        return view('front.home.index',compact('data','chapters'));
    }
}
