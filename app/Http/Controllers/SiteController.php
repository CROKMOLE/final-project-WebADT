<?php

namespace App\Http\Controllers;

use App\Models\Helldiver;
use App\Models\Planet;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function generateMainPage() {
        $helldivers = Helldiver::query()->limit(40)->get();
        $planets = Planet::query()->limit(40)->orderBy('id')->get();
        return view('main', ["helldivers" => $helldivers, 'planets' => $planets]);
    }
}
