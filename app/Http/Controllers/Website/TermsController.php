<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $terms = Term::get();

        return view('website.terms.index', compact('terms'));
    }
}
