<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Destination;
use App\Models\DestinationContact;
use App\Models\DestinationType;
use App\Models\Event;
use App\Models\Experience;
use App\Models\Festival;
use App\Models\gallery;
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
        $guides = DB::table('tour_guides')->orderByRaw('RAND()')->take(4)->get();
        $notices = Notice::orderBy('id', 'desc')->take(6)->get();
        $hasmore=Notice::count()>6;
        $destinations = DB::table('destinations')->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        $experiences = DB::table('experiences')->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image', 'short_desc']);
        $galleries = DB::table('galleries')->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        $data = SM::getSetting('homepage')??(object)([
            'slider_title'=>'',
            'slider_subtitle'=>'',
            'slider_image'=>'',
            'explore_title'=>'',
            'explore_text'=>'',
            'explore_bg'=>'',
            'explore_image'=>'',
            'exp_image'=>'',
            'explore_video'=>''
        ]);;
        return view('front.home.index', compact('hasmore','festivals', 'notices', 'data', 'chapters', 'guides', 'galleries', 'destinations', 'experiences'));
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
    public function festivals()
    {
        $festivals = DB::table('festivals')->get(['id', 'name', 'image']);
        $data = SM::getSetting('homepage');

        return view('front.festivals.index', compact('festivals', 'data'));
    }
    public function festival(Festival $festival)
    {
        $festivals = DB::table('festivals')->where('id', '!=', $festival->id)->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        $medias = Image::where('type', 3)->where('key', $festival->id)->get();
        return view('front.festivals.single', compact('festivals', 'festival', 'medias'));
    }
    public function experiences()
    {
        $experiences = DB::table('experiences')->get(['id', 'name', 'image']);
        $data = SM::getSetting('homepage');

        return view('front.experiences.index', compact('experiences', 'data'));
    }
    public function experience(Experience $experience)
    {
        $experiences = DB::table('experiences')->where('id', '!=', $experience->id)->orderByRaw('RAND()')->take(6)->get(['id', 'name', 'image']);
        $medias = Image::where('type', 4)->where('key', $experience->id)->get();
        return view('front.experiences.single', compact('experiences', 'experience', 'medias'));
    }
    public function galleries()
    {
        $galleries = DB::table('galleries')->get(['id', 'name', 'image']);
        $data = SM::getSetting('homepage');

        return view('front.galleries.index', compact('galleries', 'data'));
    }
    public function gallery(gallery $gallery)
    {
        $medias = Image::where('type', 2)->where('key', $gallery->id)->get();
        return view('front.galleries.single', compact( 'gallery', 'medias'));
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

    public function events()
    {
        $events = DB::table('events')->get(['id', 'name', 'image'])->paginate(5);
        $data = SM::getSetting('homepage');

        return view('front.events.index', compact('events', 'data'));
    }
    public function event(Event $event)
    {
        $events = DB::table('events')->where('id', '!=', $event->id)->orderByRaw('RAND()')->take(3)->get(['id', 'name', 'image']);
        $medias = Image::where('type', 3)->where('key', $event->id)->get();
        return view('front.events.single', compact('events', 'event', 'medias'));
    }

    public function notices()
    {
        $notices = Notice::orderBy('id','desc')->paginate(10);
        $data = SM::getSetting('homepage');

        return view('front.notices.index', compact('notices', 'data'));
    }

    public function contact(){
        $data=SM::getSetting('contact')??(object)([
            'map'=>'',
            'map_bg'=>'',
            'phone'=>'',
            'email'=>'',
            'addr'=>'',
            'slider_image'=>'',
            "others"=>[],
            "contact_title"=>"",
            "contact_subtitle"=>"",
            "contact_image"=>"",
            "contact_bg"=>"",
        ]);
        return view('front.contact.index',compact('data'));
    }

}
