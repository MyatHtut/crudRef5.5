<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {{--<link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css"/>--}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all" rel="stylesheet"
          type="text/css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{--<link rel="stylesheet" href="/public/css/app.css">--}}
</head>
<body>
{{--<div class="container">--}}
{{--<div class="col-md-6">--}}
{{--<h1>HEllo</h1>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<h1>HEllo</h1>--}}
{{--</div>--}}
{{--</div>--}}
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
            </tr>

            </thead>
            <tbody>
            @foreach($users as $user)
                @foreach($user->posts as $post)

                    <tr>
                        <td>{{$post['id']}}</td>


                        <td>{{$post['title']}}</td>
                    </tr>

                @endforeach
            @endforeach
            </tbody>

        </table>
    </div>
</div>

<script></script>


</body>
</html>