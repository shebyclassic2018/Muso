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
        
        <main class="ht-100 pos-rel">
        @foreach($image as $img)
<!-- <============== GALLERY SLIDER ============== -->
<div class="slider2 pos-abs top-0 wt-100 bg-black-color">
        <div class="row pad-15">
            <div class="flex-1"></div>
            <div class="close bold">
                <h1>
                    <a href="/get-gallery-details/{{ $img->id }}" class="txt-ddd"><span class="fa fa-edit"></span></a> &nbsp;&nbsp;
                    <a href="/delete-image/{{ $img->id }}" class="txt-ddd"><span class="fa fa-trash-o"></span></a> &nbsp;&nbsp;
                    <a href="/galleryForm" class="txt-red bold">&times;</a>
                </h1>
            </div>
        </div>
        <div class="row gallery-slider">
            
            
                <a href = "/admin-view/{{ $previous }}"  class="previous flex-center pad-15">
                    <span class="fa fa-angle-left"></span>
                </a>
                <div class="flex-1 ">
                    <div class="picture-screen mg-auto pad-15">
                        <div class="blurred-view" style="background: url({{ URL::to('file/gallery/' . $img->picture) }});background-size:cover;"></div>
                        <img class="mg-auto " src="{{ URL::to('file/gallery/' . $img->picture) }}" alt="" sizes="" srcset="">
                    </div>
                    <div class="caption flow-y-auto pad-15 mg-auto line-ht-1-h justify">
                        {!! $img->descript !!}
                    </div>
                </div>
                <a href = "/admin-view/{{ $next }}" class="next flex-center pad-15">
                    <span class="fa fa-angle-right"></span>
                </a>
           
            
        </div>
    </div>
    <!-- <============== END OF GALLERY SLIDER ============== -->
    @endforeach
        </main>
    </div>


    <script src="{{ asset('js/default/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/default/classicQuery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

