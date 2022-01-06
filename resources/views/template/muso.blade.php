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

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="container" id="container">
        <header class="pad-15 flex">
            <div class="flex-left fs-large flex-1">
                <img height=70px width=70px class="round" src="{{ asset('image/logo.jpg') }}" alt="" srcset=""> <span class="align-cente"><b>MUSO</b><br><small>Mzumbe University Student's Organization</small></span>
            </div>
            <div class="flex-1 flex-right fs-x-large">
                <div><small class="bold">MAIN CAMPUS</small><br></div>
            </div>
        </header>
        <nav class="flex bg-mu-color">
            <div class="flex flex-1">
                <div class="tab active home-link">Home</div>
                <div class="tab our-gallery">Our Gallery</div>
                <div class="tab news-link">News & Updates</div>
                <div class="tab suggestion-box">Suggestion Box</div>
                <div class="tab about-us">About Us</div>
            </div>
        </nav>
        <main>
            @yield('mainContent')
            <!-- <================================= START OF FOOTER ===========================================> -->
            <footer class="pad-15">
                <div class="flex-1 pad-15 ht-80">
                <span class="title txt-blue" style="color: #888">Sign up to our newsletter</span> <br>
                <form method="post" class="body"><br>
                @csrf
                    <span>Email <span class="txt-red">*</span></span><br>
                    <input type="email" name="newsletter-email" required><br>
                    <span class="align-right wt-100 "><small><i><span class="txt-red">*</span> indicates required</i></small></span><br><br>
                    <button class="btn btn-blue round-5">Subscribe</button>
                </form>
                </div>
                <div class="flex-1 pad-15 ht-100">
                <span class="title">Social Media</span> <br>
                <div class="links">
                    <li><a target="_blank" href="//www.mzumbe.ac.tz" class="txt-blue bold"><span class="fa fa-facebook-square"></span> Facebook</a></li>
                    <li><a target="_blank" href="//www.mzumbe.ac.tz" class="txt-red-o bold"><span class="fa fa-instagram"></span> Instagram</a></li>
                    <li><a target="_blank" href="//www.mzumbe.ac.tz" class="txt-lightblue bold"><span class="fa fa-twitter-square"></span> Twitter</a></li>
                </div>
                </div>
                <div class="flex-1 pad-15">
                <span class="title">Academic links</span> <br>
                <div class="links">
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="https://elearning.mzumbe.ac.tz/">E-learning</a></li>
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="//dlts.mzumbe.ac.tz">Our Prospectus</a></li>
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="//olas.heslb.go.tz">MU-ARMS</a></li>
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="//www.tcu.go.tz">University Almanac</a></li>
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="//www.tcu.go.tz">Examination By-laws</a></li>
                </div>
                </div>
                <div class="flex-1 pad-15">
                <span class="title">Quick links</span> <br>
                <div class="links">
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="//www.mzumbe.ac.tz">About University</a></li>
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="//dlts.mzumbe.ac.tz">Our library</a></li>
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="//olas.heslb.go.tz">Heslb</a></li>
                    <li><span class="fa fa-angle-right"></span> <a target="_blank" href="//www.tcu.go.tz">TCU</a></li>
                </div>
                </div>
            </footer>
<!-- <====== END OF FOOTER======> -->
        </main>
    </div>


    <script src="{{ asset('js/default/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/default/classicQuery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>