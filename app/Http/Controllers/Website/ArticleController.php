<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles  = Article::active()->filter()->simplePaginate(10);

        return view('website.articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::slug($slug)->active()->first();

        if (!$article) {
            abort(404); 
        }

        $article->views_count++;
        $article->save();

        $articles = Article::active()->take(4)->get();

        return view('website.articles.show', compact('article', 'articles'));
    }
}
