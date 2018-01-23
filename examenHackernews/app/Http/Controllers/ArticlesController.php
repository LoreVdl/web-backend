<?php

namespace Hackernews\Http\Controllers;

use Hackernews\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    public function addArticle()
    {
      $this->middleware('auth');
      return view('addArticle');
    }
}
