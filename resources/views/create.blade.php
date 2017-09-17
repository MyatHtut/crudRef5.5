@extends('app')
@section('content')
    <form action="{{url("index/store/")}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Body</label>
            <input type="text" name="body" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
    @if(($errors->any()))
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection