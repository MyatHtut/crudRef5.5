@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($posts as $post)
                    <div class="row">

                        <div class="col-md-12">
                            <a href="{{url("index/show/".$post->id)}}"><h1> {{$post->title}} </h1></a>
                        </div>
                        <div class="col-md-12">
                            <p>{{$post->body}} </p>
                        </div>
                        @auth
                        @if(Auth::User()->id==$post->user_id)
                            <a href="{{action('PostController@edit',$post->id)}}" methods="post"
                               class="btn btn-primary">Edit</a>
                            <form action="{{url("index/delete/".$post->id)}}" method="POST">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-danger">Delete</button>
                            </form>

                        @endif
                        @endauth
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection