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
                <div class="pad-15"><h2>{{ $date->date }}</h2></div>
                <div class="grid-auto underline-333 pad-15">
                    @foreach($gallery as $gal)
                        @if($gal->grouped_date == $temp)
                            <label for="id" class="leader-card mg-5">
                                <a href="/view/{{$gal->id}}">
                                    <img src="{{ URL::to('file/gallery/' . $gal->picture) }}" alt="" sizes="" srcset="">
                                </a>
                            </label> 
                        @endif
                    @endforeach
                    <br>
                </div> 
             @endforeach
            <!-- <================ PICTURE CARD ================ --> 
        </div>
    <!-- <============== END OF GALLERY ============== -->


    
@stop