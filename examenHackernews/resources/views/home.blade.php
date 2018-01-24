@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
          @if (count($errors))
            <div class = 'bg-danger'>
              @foreach ($errors->all() as $error)
                {{ $error }}
              @endforeach
            </div>
          @endif
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
                            <div> {{ $article->votes}} points | posted  by {{$article->user->name}} | <a href = "comments/{{ $article->id }}"> {{$article->comment->count()}}
                              @if ($article->comment->count() == 1)
                                comment
                              @else
                                comments
                              @endif
                            </a></div>
                          </li>
                        @endforeach
                      @else
                        @foreach ($articles as $article)
                          <li>
                              @if(Auth::user()->id == $article->user_id)
                                <div class = 'vote'>
                                  <div class = 'form-inline upvote'>
                                    <i class = 'fa fa-btn fa-caret-up disabled upvote' title = 'You need to be logged in to upvote'></i>
                                  </div>

                                  <div class = 'form-inline downvote'>
                                    <i class = 'fa fa-btn fa-caret-down disabled downvote' title = 'You need to be logged in to downvote'></i>
                                  </div>
                                </div>

                                <div class = 'url'>
                                  <a href = '{{ $article->url }}' class = 'urlTitle'> {{$article ->title}} </a>
                                  <a href = 'article/edit/{{ $article->id }}' class = 'btn btn-primary btn-xs edit-btn'>edit</a>
                                </div>
                              @else
                                <div class = 'vote'>
                                  <form class= 'form-inline upvote' action = "vote/up/{{ $article->id }}" method = 'POST'>
                                    {{ csrf_field() }}
                                    <button name = 'voteUp' value = "{{ $article->id }}">
                                      <i class = 'fa fa-btn fa-caret-up' title = 'You need to be logged in to upvote'></i>
                                    </button>
                                  </form>

                                  <form class= 'form-inline downvote' action = "vote/down/{{ $article->id }}" method = 'POST'>
                                    {{ csrf_field() }}
                                    <button name = 'voteDown' value = "{{ $article->id }}">
                                      <i class = 'fa fa-btn fa-caret-down' title = 'You need to be logged in to upvote'></i>
                                    </button>
                                  </form>
                                </div>

                                <div class = 'url'>
                                  <a href = '{{ $article->url }}' class = 'urlTitle'> {{$article ->title}} </a>
                                </div>
                              @endif

                            <div class = 'info'>
                              <div> {{ $article->votes}} points | posted  by {{$article->user->name}} | <a href = "comments/{{ $article->id }}"> {{$article->comment->count()}} comments </a></div>
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
