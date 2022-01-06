@extends('template.lr-bars')
@section('mainContentLeaders')
    <!-- <==============GALLERY ============== -->
        <div class="gallery ht-100 bg-ddd-color flow-y-auto">
             <!-- <================ PICTURE CARD ================> -->
             <h1 class="pad-15"><span class="fa fa-photo"></span> Gallery</h1>
             @foreach($date_uploaded as $date)
             @php
                $temp = $date->date;
             @endphp
             <br>
                <div class="pad-15"><h2>{{ $date->date->format('M d, Y') }}</h2></div>
                <div class="grid-auto underline-333 pad-15">
                    @foreach($gallery as $gal)
                        @if($gal->date_uploaded == $temp)
                            <label for="id" class="leader-card mg-5">
                                <img src="{{ URL::to('file/gallery/' . $gal->picture) }}" alt="" sizes="" srcset="">
                            </label> 
                        @endif
                    @endforeach
                    <br>
                </div> 
             @endforeach
            <!-- <================ PICTURE CARD ================ --> 
        </div>
    <!-- <============== END OF GALLERY ============== -->


    <!-- <============== GALLERY SLIDER ============== -->
    <div class="slider2 pos-abs top-0 wt-100 ht-100 bg-black-color">
        <div class="row pad-15">
            <div class="flex-1"></div>
            <div class="close bold"><h1>&times;</h1></div>
        </div>
        <div class="row gallery-slider">
            <div class="previous flex-center pad-15">
                <span class="fa fa-angle-left"></span>
            </div>
            <div class="flex-1 ">
                <div class="row picture-screen mg-auto pad-15">
                    <img class="mg-auto" src="{{ asset('image/bg6.jpg') }}" alt="" sizes="" srcset="">
                </div>
                <div class="row caption pad-15 flow-y-auto mg-auto line-ht-1-h justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolores quidem earum rerum aperiam, obcaecati iure sed, iusto delectus mollitia excepturi? Eligendi inventore nam ab cumque reiciendis. Tenetur, saepe ullam.
                </div>
            </div>
            <div class="next flex-center pad-15">
                <span class="fa fa-angle-right"></span>
            </div>
        </div>
    </div>
    <!-- <============== END OF GALLERY SLIDER ============== -->
@stop