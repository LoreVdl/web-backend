@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Article overview</div>

                <div class="panel-body">
                  @guest
                      <p>You are not logged in</p>
                  @else
                      <p>You are logged in</p>
                  @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
