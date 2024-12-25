<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Settings\NpdatPage;

class NpdatController extends Controller
{
    public function index(NpdatPage $npdatSetting)
    {
        return view('website.npdat.index', get_defined_vars());
    }
}
