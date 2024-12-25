<?php

namespace App\Http\Controllers\Website;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        $questions = Question::get();

        return view('website.faqs.index', compact('questions'));
    }
}
