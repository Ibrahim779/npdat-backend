<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutImage;
use App\Models\Member;
use App\Models\Partner;
use App\Settings\AboutPage;

class AboutController extends Controller
{
    public function index(AboutPage $aboutSetting)
    {
        $aboutImages = AboutImage::limit(4)->get();
        $partners = Partner::limit(5)->get();

        return view('website.about.index', get_defined_vars());
    }
}
