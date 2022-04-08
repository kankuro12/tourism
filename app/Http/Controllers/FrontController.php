<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Destination;
use App\Models\DestinationContact;
use App\Models\DestinationType;
use App\Models\Image;
use App\Models\Notice;
use App\SM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //

    public function home(Request $request)
    {
        $chapters = DB::table('chapters')->get(['id', 'name', 'short_desc', 'image']);
        $festivals = DB::table('festivals')->take(6)->get(['id', 'name', 'short_desc', 'image']);
        $guides = DB::table('tour_guides')->orderByRaw('RAND()')->take(6)->get();
        $notices = Notice::orderBy('id', 'desc')->take(6)->get();
        $destinations = DB::table('destinations')->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        $experiences = DB::table('experiences')->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image', 'short_desc']);
        $galleries = DB::table('galleries')->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        $data = SM::getSetting('homepage');
        return view('front.home.index', compact('festivals', 'notices', 'data', 'chapters', 'guides', 'galleries', 'destinations', 'experiences'));
    }

    public function chapters()
    {
        $chapters = DB::table('chapters')->get(['id', 'name', 'image']);
        $data = SM::getSetting('homepage');

        return view('front.chapters.index', compact('chapters', 'data'));
    }
    public function chapter(Chapter $chapter)
    {
        $chapters = DB::table('chapters')->where('id', '!=', $chapter->id)->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        $medias = Image::where('type', 0)->where('key', $chapter->id)->get();
        return view('front.chapters.single', compact('chapters', 'chapter', 'medias'));
    }
    public function destinations(DestinationType $type)
    {
        $destinations = DB::table('destinations')->where('destination_type_id', $type->id)->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        return view('front.destinations.index', compact('destinations', 'type'));
    }
    public function destination(Destination $destination)
    {
        $type = DB::table('destination_types')->where('id', $destination->destination_type_id)->first();
        $destinations = DB::table('destinations')->where('destination_type_id', $type->id)->where('id', '!=', $destination->id)->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        $medias = Image::where('type', 1)->where('key', $destination->id)->get();
        $contacts = DestinationContact::where('destination_id', $destination->id)->get();
        return view('front.destinations.single', compact('contacts', 'destinations', 'destination', 'type', 'medias'));
    }
}
