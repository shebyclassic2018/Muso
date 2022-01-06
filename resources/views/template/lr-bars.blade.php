<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>MUSO - Mzumbe University Student's Organization</title>
    <link rel="stylesheet" href="{{ asset('css/default/awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default/imageslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/muso.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="container">
        <header class="pad-15 flex">
            <div class="flex-left fs-large flex-1">
                <img height=70px width=70px class="round" src="{{ asset('image/logo.jpg') }}" alt="" srcset=""> <span class="align-center"><b>MZUMBE UNIVERSITY</b><br>CHUO KIKUU MZUMBE</span>
            </div>
            <div class="flex-1 flex-right fs-x-large">
                <div><b>MUSO</b> <br><small><i>Mzumbe University Student's Organization</i></small></div>
            </div>
        </header>
        <nav class="flex bg-mu-color">
            <div class="flex flex-1">
                <div class="tab active home-link">Home</div>
                <div class="tab our-gallery">Our Gallery</div>
                <div class="tab news-link">News & Update</div>
                <div class="tab suggestion-box">Suggestion Box</div>
                <div class="tab about-us">About Us</div>
            </div>
        </nav>
        <main class="leader pos-rel">
            @yield('mainContentLeaders')
        </main>
    </div>


    <script src="{{ asset('js/default/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/default/classicQuery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>