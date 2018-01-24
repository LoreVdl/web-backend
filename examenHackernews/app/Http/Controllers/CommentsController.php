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
    
    public function getComments ($id) {
        $data = Comment::where('article_id', $id)->get();
        return $data;
    }

    public function showComments($id)
    {
        $article = $this->getArticleData($id);
        $user = User::find($id);

        return view('comments')->with('article', $article);
    }
}
