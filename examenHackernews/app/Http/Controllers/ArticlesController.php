<?php

namespace Hackernews\Http\Controllers;

use DB;
use Hackernews\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortByDesc("votes");
        return view('home', compact('articles'));
    }

    public function addArticle()
    {
      return view('addArticle');
    }

    public function insertArticle(Request $request)
    {
      $this->validate($request, [
        'articleTitle' => 'required|max:255',
        'articleUrl' => 'required|url'
      ]);

      $article = new Article;

      $article->title = $request->articleTitle;
      $article->url = $request->articleUrl;
      $article->user_id = auth()->user()->id;
      $article->save();

      return redirect('/');
    }

}
