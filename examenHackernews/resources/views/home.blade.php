@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading space-between">Article overview</div>

                <div class="panel-content">
                  <ul class = 'article-overview'>
                    @guest
                      @foreach ($articles as $article)
                        <li>
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
                            <div> {{ $article->votes}} points | posted  by {{$article->user->name}} | <a href = "comment/{{ $article->id }}"> {{$article->comment->count()}} comments </a></div>
                          </li>
                        @endforeach
                      @else
                        @foreach ($articles as $article)
                          <li>
                            <div class = 'vote'>
                              <div class = 'form-inline upvote'>
                                <i class = 'fa fa-btn fa-caret-up' title = 'You need to be logged in to upvote'></i>
                              </div>

                              <div class = 'form-inline pvote'>
                                <i class = 'fa fa-btn fa-caret-down' title = 'You need to be logged in to downvote'></i>
                              </div>
                            </div>

                            <div class = 'url'>
                              <a href = '{{ $article->url }}' class = 'urlTitle'> {{$article ->title}} </a>
                            </div>

                            <div class = 'info'>
                              <div> {{ $article->votes}} points | posted  by {{$article->user->name}} | <a href = "comment/{{ $article->id }}"> {{$article->comment->count()}} comments </a></div>
                            </li>
                          @endforeach
                      @endguest

                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
