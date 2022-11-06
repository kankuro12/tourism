<?php

use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FestivalController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GalleryMainController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TourGuideController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TenderController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('migrate/{password}', function ($password) {
    if($password=='ghp_rgy3sJsLENMe1Z20I1Zv2'){
        Artisan::call('migrate');
    }
});

Route::get('work/{password}', function ($password) {
    if($password=='ghp_rgy3sJsLENMe1Z20I1Zv2'){
        Artisan::call('work');
    }
});


Route::get('/', [FrontController::class,'home'])->name('home');
route::get('chapters',[FrontController::class,'chapters'])->name('chapters');
Route::get('chapter/{chapter}', [FrontController::class,'chapter'])->name('chapter');
route::get('hotels',[FrontController::class,'hotels'])->name('hotels');
Route::get('hotel/{hotel}', [FrontController::class,'hotel'])->name('hotel');
route::get('festivals',[FrontController::class,'festivals'])->name('festivals');
Route::get('festival/{festival}', [FrontController::class,'festival'])->name('festival');
route::get('events',[FrontController::class,'events'])->name('events');
Route::get('event/{event}', [FrontController::class,'event'])->name('event');
route::get('guides',[FrontController::class,'guides'])->name('guides');
Route::get('guide/{guide}', [FrontController::class,'guide'])->name('guide');
route::get('notices',[FrontController::class,'notices'])->name('notices');
Route::get('notice/{notice}', [FrontController::class,'notice'])->name('notice');
route::get('experiences',[FrontController::class,'experiences'])->name('experiences');
Route::get('experience/{experience}', [FrontController::class,'experience'])->name('experience');
Route::get('destinations/{type}', [FrontController::class,'destinations'])->name('destinations');
Route::get('destination/{destination}', [FrontController::class,'destination'])->name('destination');
Route::get('galleries', [FrontController::class,'galleries'])->name('galleries');
Route::get('gallery/{gallery}', [FrontController::class,'gallery'])->name('gallery');
Route::get('tenders', [FrontController::class,'tenders'])->name('tenders');
Route::get('who-is-who', [FrontController::class,'contact'])->name('contact');
route::redirect('login','admin/login')->name('login');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::match(['get', 'post'], 'logout', function () {
        Auth::logout();
    });
    Route::prefix('setting')->name('setting.')->group(function(){
        route::match(['GET','POST'],'front',[SettingController::class,'front'])->name('front');
        route::match(['GET','POST'],'meta',[SettingController::class,'meta'])->name('meta');
        route::match(['GET','POST'],'footer',[SettingController::class,'footer'])->name('footer');
        route::match(['GET','POST'],'homepage',[SettingController::class,'homePage'])->name('homepage');
        route::match(['GET','POST'],'contact',[SettingController::class,'contact'])->name('contact');
    });

    Route::prefix('gallery-main')->name('gallery.main.')->group(function(){
        Route::get('',[GalleryMainController::class,'index'])->name('index');
        Route::match(['GET','POST'],'add',[GalleryMainController::class,'add'])->name('add');
        Route::match(['GET','POST'],'edit/{gallery}',[GalleryMainController::class,'edit'])->name('edit');
        Route::get('del/{gallery}',[GalleryMainController::class,'del'])->name('del');
    });

    Route::prefix('destination')->name('destination.')->group(function(){
        Route::get('@{type}',[DestinationController::class,'index'])->name('index');
        Route::match(['GET','POST'],'add/@{type}',[DestinationController::class,'add'])->name('add');
        Route::match(['GET','POST'],'edit/{destination}',[DestinationController::class,'edit'])->name('edit');
        Route::get('del/{destination}',[DestinationController::class,'del'])->name('del');


        Route::prefix('contact')->name('contact.')->group(function(){
            Route::get('index/@{destination}',[DestinationController::class,'contactIndex'])->name('index');
            Route::post('add',[DestinationController::class,'contactAdd'])->name('add');
            Route::post('edit',[DestinationController::class,'contactEdit'])->name('edit');
            Route::post('delete',[DestinationController::class,'contactDelete'])->name('delete');
        });

        Route::prefix('type')->name('type.')->group(function(){
            Route::get('',[DestinationController::class,'typeIndex'])->name('index');
            Route::Match(['GET','POST'],'add',[DestinationController::class,'typeAdd'])->name('add');
            Route::Match(['GET','POST'],'edit/{type}',[DestinationController::class,'typeEdit'])->name('edit');
            Route::get('delete/{type}',[DestinationController::class,'typeDelete'])->name('delete');
        });
    });

    Route::prefix('gallery')->name('gallery.')->group(function(){
        Route::get('index/{type}/{key}',[GalleryController::class,'index'])->name('index');
        Route::post('add',[GalleryController::class,'add'])->name('add');
        Route::post('del',[GalleryController::class,'del'])->name('del');
    });
    Route::prefix('chapters')->name('chapters.')->group(function(){
        Route::get('',[ChapterController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[ChapterController::class,'add'])->name('add');
        Route::match(["GET","POST"],'map',[ChapterController::class,'map'])->name('map');
        Route::match(["GET","POST"],'edit/{chapter}',[ChapterController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{chapter}',[ChapterController::class,'del'])->name('del');

    });
    Route::prefix('experiences')->name('experiences.')->group(function(){
        Route::get('',[ExperienceController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[ExperienceController::class,'add'])->name('add');
        Route::match(["GET","POST"],'edit/{experience}',[ExperienceController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{experience}',[ExperienceController::class,'del'])->name('del');

    });
    Route::prefix('events')->name('events.')->group(function(){
        Route::get('',[EventController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[EventController::class,'add'])->name('add');
        Route::match(["GET","POST"],'edit/{event}',[EventController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{event}',[EventController::class,'del'])->name('del');

    });
    Route::prefix('tenders')->name('tenders.')->group(function(){
        Route::get('',[TenderController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[TenderController::class,'add'])->name('add');
        Route::match(["GET","POST"],'edit/{tender}',[TenderController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{tender}',[TenderController::class,'del'])->name('del');

    });
    Route::prefix('notices')->name('notices.')->group(function(){
        Route::get('',[NoticeController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[NoticeController::class,'add'])->name('add');
        Route::match(["GET","POST"],'edit/{notice}',[NoticeController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{notice}',[NoticeController::class,'del'])->name('del');

    });
    // Route::prefix('chapters')->name('chapters.')->group(function(){
    //     Route::get('',[ChapterController::class,'index'])->name('index');
    //     Route::match(["GET","POST"],'add',[ChapterController::class,'add'])->name('add');
    //     Route::match(["GET","POST"],'edit/{chapter}',[ChapterController::class,'edit'])->name('edit');
    //     Route::match(["GET","POST"],'del/{chapter}',[ChapterController::class,'del'])->name('del');

    // });
    Route::prefix('festivals')->name('festivals.')->group(function(){
        Route::get('',[FestivalController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[FestivalController::class,'add'])->name('add');
        Route::match(["GET","POST"],'edit/{festival}',[FestivalController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{festival}',[FestivalController::class,'del'])->name('del');

    });
    Route::prefix('festivals')->name('festivals.')->group(function(){
        Route::get('',[FestivalController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[FestivalController::class,'add'])->name('add');
        Route::match(["GET","POST"],'edit/{festival}',[FestivalController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{festival}',[FestivalController::class,'del'])->name('del');

    });
    Route::prefix('tourguide')->name('tourguide.')->group(function(){
        Route::get('',[TourGuideController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[TourGuideController::class,'add'])->name('add');
        Route::match(["GET","POST"],'edit/{guide}',[TourGuideController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{guide}',[TourGuideController::class,'del'])->name('del');

    });
    Route::prefix('hotels')->name('hotels.')->group(function(){
        Route::get('',[HotelController::class,'index'])->name('index');
        Route::match(["GET","POST"],'add',[HotelController::class,'add'])->name('add');
        Route::match(["GET","POST"],'edit/{hotel}',[HotelController::class,'edit'])->name('edit');
        Route::match(["GET","POST"],'del/{hotel}',[HotelController::class,'del'])->name('del');

    });

    Route::view('dashboard','welcome')->name('dashboard');
});




Route::prefix('admin')->name('admin.')->middleware(['guest'])->group(function(){
    Route::match(['get', 'post'], 'login',[AuthController::class,'login'])->name('login');
});
