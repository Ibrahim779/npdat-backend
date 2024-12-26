<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\RovaImage;
use App\Models\RovaProduct;
use App\Models\RovaReview;
use App\Settings\RovaPage;

class RovaController extends Controller
{
    public function index(RovaPage $rovaSetting)
    {
        $partners = Partner::limit(10)->get();
        $products = RovaProduct::limit(10)->get();
        $reviews = RovaReview::limit(10)->get();
        $images = RovaImage::limit(10)->get();
        return view('website.rova.index', get_defined_vars());
    }
}
