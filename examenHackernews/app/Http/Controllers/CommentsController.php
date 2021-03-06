<?php

namespace Hackernews\Http\Controllers;

use Hackernews\Article;
use Hackernews\Comment;
use Hackernews\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

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
       $this->validate($request, [
         'commentBody' => 'required'
       ]);

       $user = User::all();
       $comment = new Comment;
       $comment->user_id = auth()->user()->id;
       $comment->body = $request->commentBody;
       $comment->article_id = $id;
       $comment->save();
       return redirect()->back()->with('success', 'Your comment is added successfully!');
     }

     public function editComment($id)
     {
       $comment = Comment::find($id);
       if (!(Auth::user()->id == $comment->user_id)) {
         return redirect('/')->withErrors("You can't edit an comment that is not yours");
       }

       $comment = Comment::find($id);
       return view('editComment', compact('comment'));
     }

     public function updateComment(Request $request, $id)
     {
       $data = Comment::where('article_id', $id)->get();
       $article = $this->getArticleData($id);
       $user = User::find($id);

       $comment = Comment::find($id);

       $this->validate($request, [
         'commentBody' => 'required'
       ]);

       $comment->body = $request->commentBody;
       $comment->update($request->all());
       return back()->with('success', 'Your comment is updated successfully!');
     }

     public function showConfirm ($id)
     {
        $comment        = Comment::find($id);
        $articleId      = $comment->article_id;
        return back()->with('danger', 'Are you sure you wanne delete this item?')->with('comment', $comment);
     }

     public function delete ($id)
     {
        $comment        = Comment::find($id);
        $articleId      = $comment->article_id;

        if (isset($_POST['delete']))
        {
          $comment->delete();
          return redirect('comments/' . $articleId)->with('success', 'Your comment is removed succesfully!');
        }
        elseif(isset($_POST['cancel']))
        {
          return back();
        }
     }
}
