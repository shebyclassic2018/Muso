<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="{{ asset('css/default/awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default/imageslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/muso.css') }}">

    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
    <title>MUSO Media</title>
</head>
<body>
    <div class="container">
        <header class="pad-15 underline-333 bg-333 txt-ddd flex"><h2 class="flex-1"><span class="pointer open-overlay">&#9776;</span></h2><h2><span class="fa fa-youtube"></span> MUSO Media</h2></header>
        <main class="player flex ">
            <div class="flex-1 ht-100 flow-y-auto pos-rel">
                <div class="pos-abs ht-100 bg-444 wt-250 shadow-000-5 txt-ddd overlay"><br>
                    <h2 class="align-right"><span class="pointer pad-15 close-overlay">&times;</span></h2>
                    <h3 class="pad-8"><a class="btn btn-orange round-5 wt-100" href="/"><span class="fa fa-long-arrow-left"></span> Back Home </a></h3>
                </div>
                @foreach($mainVideo as $video)
                <iframe class="mg-15" src="https://www.youtube.com/embed/{{$video->link}}?&autoplay=1" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                <div class="pad-15">
                    <div class="underline pad-tb-5 flex">
                        <h2 class="flex-1">{{ $video->heading }}</h2>
                        <div><small>{{ $video->date_uploaded->format('F d, Y') }}</small></div>
                    </div>
                    <div class="pad-tb-5">
                        <small>Video description</small>
                        <div class="">
                            {{ $video->descript }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div style="width: 450px;" class="bg-ddd ht-100 flow-y-auto">
            <br>
                @foreach($videos as $vid)
                    <div class="row ">
                        <div class="right pos-rel ht-auto flex-center mgl-5">
                            <a href="/video-player/{{ $vid->id }}" class="pos-abs wt-100 ht-100"></a>
                            <iframe  src="https://www.youtube.com/embed/{{$vid->link}}?&autoplay=0&showinfo=0&autohide=1" frameborder="0" ></iframe>
                        </div>
                        <div class="flex-1 mg-5">
                            <h4><a href="/video-player/{{ $vid->id }}">{{ $vid-> heading}}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

    <script src="{{ asset('js/default/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/default/classicQuery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>