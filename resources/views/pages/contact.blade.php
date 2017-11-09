<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{--<link href="{{asset('css/video-js.css')}}" rel="stylesheet">--}}
   {{--<link href="{{mix('css/app.css')}}" type="text/css" rel="stylesheet">--}}
   {{--<link href="{{asset('node_modules/font-awesome/scss/font-awesome.scss')}}" type="text/css" rel="stylesheet">--}}
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <ul>
        @foreach ($tasks as $task)
                <li>{{$task}}</li>
                @endforeach
            </ul>
        </div>
        <i class="fa fa-cc" aria-hidden="true"></i>
        <div class="container">
            <h2>Simple Collapsible</h2>
            <p>Click on the button to toggle between showing and hiding content.</p>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
            <div id="demo" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
    </div>
</div>

{{--<script src="{{asset('js/video.js/video.js')}} type="text/javascript"></script>--}}

{{--<script src="{{mix('js/app.js')}}" type="text/javascript"></script>--}}
</body>
</html>
