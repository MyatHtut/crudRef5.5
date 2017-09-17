@extends('layouts.app')
@section('content')
    @foreach($post as $a)

        <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="title">{{$a->title}}</label>
                </div>
                <div class="form-group">
                    <label for="title">{{$a->body}}</label>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Comment</div>
                    @foreach($a->comment as $comments)
                        {{--{{$comments}}--}}
                        <div class="form-group">
                            <p>{{$comments['title']}}</p>
                            <h4>userName is <a href="{{url("user/".$comments->user->id)}}">{{$comments->user->name}}</a></h4>
                        </div>
                    @endforeach
                    @auth
                    <div class="panel-body">
                        <form action="{{url("index/comment/".$a->id)}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" class="form-control" name="title">
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    @endauth
                    @endforeach
                </div>
            </div>
        </div>
@endsection