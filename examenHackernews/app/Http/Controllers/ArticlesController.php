<?php

namespace Hackernews\Http\Controllers;

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

      return redirect('/')->with('success', 'You article "' . $article->title . '" has posted succesfully!');
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

    public function showConfirm ()
    {
        return back()->with('danger', 'Are you sure you wanne delete this item?');
    }

    public function delete ($id)
    {
        $curArticle = Article::find($id);

        if (isset($_POST['delete']))
        {
          $curArticle->delete();
          return redirect('/')->with('success', 'Your article is removed succesfully!');
        }
        elseif(isset($_POST['cancel']))
        {
          return back();
        }


    }

}
