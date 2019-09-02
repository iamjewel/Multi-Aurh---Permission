@extends('layouts.app')

@section('title', '| View Post')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class='col-lg-8 col-lg-offset-4'>


                <div class="post">

                    <div class="user-block">

                        <img class="img-circle img-bordered-sm" src="{{asset('/')}}dist/img/user1-128x128.jpg"
                             alt="user image">

                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                        </span>

                        <span class="description">Shared publicly - 7:30 PM today</span>

                    </div>

                    <h1>{{ $post->title }}</h1>

                    <p>
                        {{ $post->body }}
                    </p>

                </div>

                <hr>

                {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}

                <a href="{{route('posts.index') }}" class="btn btn-primary">Back</a>



                {!! Form::close() !!}


            </div>

        </div>
    </div>




@endsection
