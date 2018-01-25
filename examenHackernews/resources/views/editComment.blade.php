@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
          @if (count($errors))
            <div class = 'alert alert-danger'>
              <strong>Whoops! Something went wrong</strong>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }} </li>
                @endforeach
              </ul>
            </div>
          @endif

          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

            <div class = 'breadcrumb'>
              <a href = "{{route('/')}}"> ← back to overview</a>
            </div>

            <div class = 'panel panel-default'>
              <div class = 'panel-heading'>Edit article
                <a href = '#' class='btn btn-danger btn-xs pull-right'>
                  <i class = 'fa fa-btn fa-trash' title = 'delete'></i>
                  delete
                </a>
              </div>

              <div class = 'panel-content'>
                <form class = 'form-horizontal' action = "{{ $comment->id }}" method = 'POST'>
                  {{ csrf_field() }}

                  <div class = 'form-group'>
                    <label class = 'col-sm-3 control-label' for = 'commentBody'>Comment</label>

                    <div class = 'col-sm-6'>
                      <textarea class = 'form-control' type = 'text' name = 'commentBody' id = 'commentBody'>{{$comment->body}}</textarea>
                    </div>
                  </div>
                  <div class = 'form-group'>
                    <div class = 'col-sm-offset-3 col-sm-6'>
                      <button class = 'btn btn-default' type = 'submit'>
                        <i class = 'fa fa-pencil-square-o'></i>
                        Edit comment
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
