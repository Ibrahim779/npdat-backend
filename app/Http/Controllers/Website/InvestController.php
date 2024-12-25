<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutImage;
use App\Models\Member;
use App\Models\Partner;
use App\Settings\AboutPage;

class InvestController extends Controller
{
    public function index()
    {
        return view('website.invest.index', get_defined_vars());
    }
}
