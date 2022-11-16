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
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Notice;
use App\Models\TourGuide;
use App\SM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //

    public function home(Request $request)
    {
        $chapters = DB::table('chapters')->get(['id','slug', 'name', 'short_desc', 'image']);
        $festivals = DB::table('festivals')->take(6)->get(['id','slug', 'name', 'short_desc', 'image']);
        $guides = DB::table('tour_guides')->orderByRaw('RAND()')->take(4)->get();
        $notices = Notice::orderBy('id', 'desc')->take(6)->get();
        $hasmore=Notice::count()>6;
        $destinations = DB::table('destinations')->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image']);
        $experiences = DB::table('experiences')->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image', 'short_desc']);
        $galleries = DB::table('galleries')->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image']);
        $hotels = DB::table('hotels')->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image','short_desc','address','phone']);
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
        $chaptermap=(array)SM::getSetting('chaptermap');
        return view('front.home.index', compact('hotels','chaptermap','hasmore','festivals', 'notices', 'data', 'chapters', 'guides', 'galleries', 'destinations', 'experiences'));
    }

    public function chapters()
    {
        $chapters = DB::table('chapters')->get(['id','slug', 'name', 'image']);
        $data = SM::getSetting('homepage');

        return view('front.chapters.index', compact('chapters', 'data'));
    }
    public function chapter( $chapter)
    {
        $chapter=Chapter::where('slug',$chapter)->first();
        if($chapter==null){
            abort(404);
        }
        $chapters = DB::table('chapters')->where('id', '!=', $chapter->id)->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image']);
        $medias = Image::where('type', 0)->where('key', $chapter->id)->get();
        return view('front.chapters.single', compact('chapters', 'chapter', 'medias'));
    }
    public function hotels()
    {
        $hotels = DB::table('hotels')->get(['id','slug', 'name', 'image','short_desc','address','phone']);
        $data = SM::getSetting('homepage');

        return view('front.hotels.index', compact('hotels', 'data'));
    }
    public function hotel( $hotel)
    {
        $hotel=Hotel::where('slug',$hotel)->first();
        if($hotel==null){
            abort(404);
        }
        $hotels = DB::table('hotels')->where('id', '!=', $hotel->id)->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image']);
        $medias = Image::where('type', 6)->where('key', $hotel->id)->get();
        return view('front.hotels.single', compact('hotels', 'hotel', 'medias'));
    }
    public function festivals()
    {
        $festivals = DB::table('festivals')->get(['id','slug', 'name', 'image']);
        $data = SM::getSetting('homepage');

        return view('front.festivals.index', compact('festivals', 'data'));
    }
    public function festival( $festival)
    {
        $festival=Festival::where('slug',$festival)->first();
        if($festival==null){
            abort(404);
        }
        $festivals = DB::table('festivals')->where('id', '!=', $festival->id)->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image']);
        $medias = Image::where('type', 3)->where('key', $festival->id)->get();
        return view('front.festivals.single', compact('festivals', 'festival', 'medias'));
    }
    public function experiences()
    {
        $experiences = DB::table('experiences')->get(['id','slug', 'name', 'image']);
        $data = SM::getSetting('homepage');

        return view('front.experiences.index', compact('experiences', 'data'));
    }
    public function experience( $experience)
    {
        $experience=Experience::where('slug',$experience)->first();
        if($experience==null){
            abort(404);
        }
        $experiences = DB::table('experiences')->where('id', '!=', $experience->id)->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image']);
        $medias = Image::where('type', 4)->where('key', $experience->id)->get();
        return view('front.experiences.single', compact('experiences', 'experience', 'medias'));
    }
    public function galleries()
    {
        $galleries = DB::table('galleries')->get(['id','slug', 'name', 'image']);
        $data = SM::getSetting('homepage');

        return view('front.galleries.index', compact('galleries', 'data'));
    }
    public function gallery( $gallery)
    {
        $gallery=gallery::where('slug',$gallery)->first();
        if($gallery==null){
            abort(404);
        }
        $medias = Image::where('type', 2)->where('key', $gallery->id)->get();
        return view('front.galleries.single', compact( 'gallery', 'medias'));
    }
    public function destinations( $type)
    {
        $type=DestinationType::where('slug',$type)->first();
        if($type==null){
            abort(404);
        }
        $destinations = DB::table('destinations')->where('destination_type_id', $type->id)->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image']);
        return view('front.destinations.index', compact('destinations', 'type'));
    }
    public function destination( $destination)
    {
         $destination=Destination::where('slug', $destination)->first();
        if( $destination==null){
            abort(404);
        }
        $type = DB::table('destination_types')->where('id', $destination->destination_type_id)->first();
        $destinations = DB::table('destinations')->where('destination_type_id', $type->id)->where('id', '!=', $destination->id)->orderByRaw('RAND()')->take(6)->get(['id','slug', 'name', 'image']);
        $medias = Image::where('type', 1)->where('key', $destination->id)->get();
        $contacts = DestinationContact::where('destination_id', $destination->id)->get();
        return view('front.destinations.single', compact('contacts', 'destinations', 'destination', 'type', 'medias'));
    }

    public function events()
    {
        $events = Event::orderBy('start','desc')->paginate(5);
        $data = SM::getSetting('homepage');
        // dd($events);
        return view('front.events.index', compact('events', 'data'));
    }
    public function event( $event)
    {

        $event=Event::where('slug',$event)->first();
        if($event==null){
            abort(404);
        }
        $events = DB::table('events')->where('id', '!=', $event->id)->orderByRaw('RAND()')->take(3)->get(['id','slug', 'name', 'image']);
        $medias = Image::where('type', 5)->where('key', $event->id)->get();
        return view('front.events.single', compact('events', 'event', 'medias'));
    }

    public function guides()
    {
        $guides = DB::table('tour_guides')->paginate(6);
        $data = SM::getSetting('homepage');

        return view('front.guides.index', compact('guides', 'data'));
    }
    public function guide(TourGuide $guide)
    {
        $guides = DB::table('guides')->where('id', '!=', $guide->id)->orderByRaw('RAND()')->take(3)->get(['id','slug', 'name', 'image']);
        $medias = Image::where('type', 3)->where('key', $guide->id)->get();
        return view('front.guides.single', compact('guides', 'guide', 'medias'));
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

    public function tenders(){
        $tenders=DB::table('tenders')->orderBy('id','desc')->select(DB::raw('id,title,file,date(updated_at) as published'))->get();
        $data = SM::getSetting('homepage');
        return view('front.tenders.index',compact('tenders','data'));
    }

}
