@extends('app')
@section('content')
    <form action="{{url("index/update/".$post->id)}}" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$post->title}}" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$post->body}}" name="body" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection