@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <div class = 'breadcrumb'>
            <a href = "{{route('/')}}"> ← back to overview</a>
          </div>

            <div class="panel panel-default">
                <div class="panel-heading space-between">Article: {{$article->title}}</div>

                <div class="panel-content">
                  <div class = 'vote'>
                    <div class = 'form-inline upvote'>
                      <i class = 'fa fa-btn fa-caret-up disabled upvote' title = 'You need to be logged in to upvote'></i>
                    </div>

                    <div class = 'form-inline pvote'>
                      <i class = 'fa fa-btn fa-caret-down disabled downvote' title = 'You need to be logged in to downvote'></i>
                    </div>
                  </div>

                  <div class = 'url'>
                    <a href = '{{ $article->url }}' class = 'urlTitle'> {{$article ->title}} </a>
                  </div>

                  <div class = 'info'>
                    <div> {{ $article->votes}} points | posted  by {{$article->user->name}} | <a href = "comments/{{ $article->id }}"> {{$article->comment->count()}} comments </a></div>
                  </div>

                  <div class = 'comments'>
                    @if($article->comment->count() > 0)
                      <ul>
                        @foreach ($article->comment as $comment)
                          <li>
                            <div class = 'comment-body'>{{ $comment -> body}}</div>
                            <div class = 'comment-info'>Poste by {{$comment -> user -> name}} on {{$comment -> created_at}}</div>
                          </li>
                        @endforeach
                      </ul>
                    @else
                      <div><p>No comments yet</p></div>
                    @endif

                    @guest
                      <div><p>You need to be <a href = "/login">logged in </a>to comment</p></div>
                    @endguest
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
