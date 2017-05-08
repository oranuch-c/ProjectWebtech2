@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                  <form action="/profile" method="POST">
                    <div class="from-group">
                      <div class="col-xs-6 col-md-4">

                        <img src="https://unsplash.it/200?image=0" alt="Sample Image">

                        <label for="exampleInputFile">Select picture profile</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">size 640x840 px.</small>
                        <br>
                        <a href="{{ url('/info') }}" type="button" class="btn btn-primary">Change</a>
                      </div>

                      <div class="col-xs-6 col-md-8">
                        <h1 class="title">{{ Auth::user()->name }}</h1>
                        <h3 class="title">Birth date : {{ Auth::user()->birthdate }}</h3>
                        <a href="/vocher" type="button" class="btn btn-success"><h1>{{ Auth::user()->point }} point</h1></a>
                        <h3 class="title">Email : {{ Auth::user()->email }}</h3>
                        <h3 class="title">Tel : {{ Auth::user()->tel }}</h3>
                        <h5 class="title">Address : {{ Auth::user()->address }}</h5>

                      </div>
                    </div>


                  </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Book lists</div>
                <div class="panel-body">
                <ul class="list-group">

                @foreach ($books as $book)
                  <li class="list-group-item justify-content-between">
                    {{$book}}
                    <span class="badge badge-default badge-pill">Auth::book()->leftover</span>
                    <span class="badge badge-default badge-pill">3</span>
                  </li>
      		     @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
