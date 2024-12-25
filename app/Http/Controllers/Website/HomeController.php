<?php

namespace App\Http\Controllers\Website;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Question;
use App\Models\Service;
use App\Settings\App;
use App\Settings\General;
use App\Settings\HomePage;

class HomeController extends Controller
{
    public function index(HomePage $homeSetting)
    {
        $partners = Partner::all();
        $services = Service::all();
        
        return view('website.index', get_defined_vars());
    }
}
