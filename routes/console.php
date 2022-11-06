<?php

use App\Models\Chapter;
use App\Models\Destination;
use App\Models\DestinationType;
use App\Models\Event;
use App\Models\Experience;
use App\Models\Festival;
use App\Models\gallery;
use App\Models\Hotel;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('pass', function () {
    echo bcrypt('55ryx82aEu8cVE3');
})->purpose('Display an inspiring quote');


Artisan::command('work', function () {
    foreach (DestinationType::all() as $key => $value) {
        $value->touch();
    }
    foreach (Event::all() as $key => $value) {
        $value->touch();
    }
    foreach (Destination::all() as $key => $value) {
        $value->touch();
    }
    foreach (Chapter::all() as $key => $value) {
        $value->touch();
    }
    foreach (Festival::all() as $key => $value) {
        $value->touch();
    }
    foreach (gallery::all() as $key => $value) {
        $value->touch();
    }
    foreach (Experience::all() as $key => $value) {
        $value->touch();
    }
    foreach (Hotel::all() as $key => $value) {
        $value->touch();
    }

});
