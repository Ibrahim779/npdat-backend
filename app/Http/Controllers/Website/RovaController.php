<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutImage;
use App\Models\Member;
use App\Models\Partner;
use App\Settings\AboutPage;

class RovaController extends Controller
{
    public function index()
    {
        return view('website.rova.index', get_defined_vars());
    }
}
