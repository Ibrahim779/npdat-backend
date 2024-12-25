<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = Privacy::first();

        return view('website.privacy.index', compact('privacy'));
    }
}
