<?php

namespace Hackernews\Http\Controllers;

use Hackernews\Article;
use Hackernews\Comment;
use Hackernews\User;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    public function voteUp(Request $request, $id)
     {
        $article = Article::findOrFail($id);
        $article->votes += 1;
        $article->update($request->all());
        return redirect()->back();
     }

     public function voteDown(Request $request, $id)
     {
       $article = Article::findOrFail($id);
       $article->votes -= 1;
       $article->update($request->all());
       return redirect()->back();
     }
}
