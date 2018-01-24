<?php

namespace Hackernews\Http\Controllers;

use Hackernews\Article;
use Hackernews\Comment;
use Hackernews\User;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function getArticleData ($id) {
        $data = Article::find($id);
        return $data;
    }

    public function showComments($id)
    {
        $data = Comment::where('article_id', $id)->get();
        $article = $this->getArticleData($id);
        $user = User::find($id);

        return view('comments')->with('article', $article);
    }

    public function create(Request $request, $id)
     {
          $user = User::all();
          $comment = new Comment;
          $comment->user_id = auth()->user()->id;
          $comment->body = $request->commentBody;
          $comment->article_id = $id;
          $comment->save();
          return redirect()->back();
     }
}
