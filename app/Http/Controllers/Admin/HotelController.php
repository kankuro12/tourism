<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function index()
    {
        $hotels=DB::table('hotels')->get();
        return view('admin.hotels.index',compact('hotels'));
    }

    public function add(Request $request){
        if($request->getMethod()=="POST"){
            $this->saveHotel($request,new Hotel());
            return redirect()->back()->with('message','Hotel Saved Sucessfully');
        }else{
            return view('admin.hotels.add');
        }
    }
    public function edit(Request $request,Hotel $hotel){
        if($request->getMethod()=="POST"){
            $this->saveHotel($request,$hotel);
            return redirect()->back()->with('message','Hotel Saved Sucessfully');
        }else{
            return view('admin.hotels.edit',compact('hotel'));
        }
    }

    private function saveHotel(Request $request,Hotel $hotel)
    {
        $hotel->name=$request->name;
        $hotel->owner=$request->owner;
        $hotel->address=$request->address;
        $hotel->phone=$request->phone;
        $hotel->email=$request->email;
        $hotel->facebook=$request->facebook;
        $hotel->instagram=$request->instagram;
        $hotel->twitter=$request->twitter;
        $hotel->amenities=$request->amenities;
        $hotel->short_desc=$request->short_desc;
        $hotel->desc=$request->desc;
        $hotel->map=$request->map;
        if($request->hasFile('image')){
            $hotel->image=$request->image->store('uploads/hotels');
        }
        $hotel->save();
        return $hotel;
    }

    public function del(Hotel $hotel){
        $hotel->delete();
        return redirect()->back()->with('message','Hotel Deleted Sucessfully');

    }
}
