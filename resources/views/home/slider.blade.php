@extends('template.lr-bars')
@section('mainContentLeaders')

<!-- <============== GALLERY SLIDER ============== -->
<div class="slider2 pos-abs top-0 wt-100 bg-black-color">
        <div class="row pad-15">
            <div class="flex-1"></div>
            <div class="close bold"><h1><a href="/ourgallery" class="txt-ddd bold">&times;</a></h1></div>
        </div>
        <div class="row gallery-slider">
            
            @foreach($image as $img)
                <a href = "/view/{{ $previous }}"  class="previous flex-center pad-15">
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
                <a href = "/view/{{ $next }}" class="next flex-center pad-15">
                    <span class="fa fa-angle-right"></span>
                </a>
            @endforeach
            
        </div>
    </div>
    <!-- <============== END OF GALLERY SLIDER ============== -->
@stop