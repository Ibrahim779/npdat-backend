<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        $questions = Question::take(3)->get();

        return view('website.finances.index', get_defined_vars());
    }
}
