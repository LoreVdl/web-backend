@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
          <div class = 'breadcrumb'>
            <a href = "{{route('/')}}"> ← back to overview</a>
          </div>

          <div class = 'panel panel-default'>
            <div class = 'panel-heading'>Add article</div>

            <div class = 'panel-content'>
              <form class = 'form-horizontal' action = "{{route('insertArticle')}}" method = 'POST'>
                {{ csrf_field() }}

                <div class = 'form-group'>
                  <label class = 'col-sm-3 control-label' for = 'articleTitle'>Title (max. 255 character)</label>

                  <div class = 'col-sm-6'>
                    <input class = 'form-control' type = 'text' name = 'articleTitle' id = 'articleTitle'>
                  </div>
                </div>

                <div class = 'form-group'>
                  <label class = 'col-sm-3 control-label' for = 'articleUrl'>URL</label>

                  <div class = 'col-sm-6'>
                    <input class = 'form-control' type = 'text' name = 'articleUrl' id = 'articleUrl'>
                  </div>
                </div>


                <div class = 'form-group'>
                  <div class = 'col-sm-offset-3 col-sm-6'>
                    <button class = 'btn btn-default' type = 'submit'>
                      <i class = 'fa fa-plus'></i>
                      Add article
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
