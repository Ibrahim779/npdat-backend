<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\WeOffer;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = WeOffer::take(6)->get();
        return view('website.services.index', get_defined_vars());
    }
}
