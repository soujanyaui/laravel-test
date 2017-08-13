<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{--<link href="{{asset('css/video-js.css')}}" rel="stylesheet">--}}
   <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
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
        <video id="video1" class="video-js vjs-default-skin vjs-big-play-centered" height="300" width="600" controls data-setup="{}">
            <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
            <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
            <source src="http://vjs.zencdn.net/v/oceans.ogv" type='video/ogg'>
            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
        </video>
    </div>
</div>

{{--<script src="{{asset('js/video.js/video.js')}} type="text/javascript"></script>--}}

<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
