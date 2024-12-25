<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::slug($slug)->active()->first();

        if (!$page) {
            abort(404);
        }

        return view('website.pages.show', compact('page'));
    }
}
