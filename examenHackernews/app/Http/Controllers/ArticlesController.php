<?php

namespace Hackernews\Http\Controllers;

use DB;
use Auth;
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

    public function editArticle($id)
    {
      $article = Article::find($id);
      if (!(Auth::user()->id == $article->user_id)) {
        return redirect('/')->withErrors("You can't edit an article that is not yours");
      }

      $article = Article::find($id);
      return view('editArticle', compact('article'));
    }

    public function updateArticle(Request $request, $id)
    {
      $article = Article::find($id);

      $this->validate($request, [
        'title' => 'required|max:255',
        'url' => 'required|url'
      ]);

      $article->update($request->all());
      return redirect('/');
    }

}
