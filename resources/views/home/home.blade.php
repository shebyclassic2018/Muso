@extends('template.muso')
@section('mainContent')
<div class="image-slider">
<br>
<div id="content-slider">
  <div class="wrap-slider">	


  
    <!-- ===== IMages ======= -->							

    <div class="slider">
      <div class="inset">

        @foreach($sliderImages as $sli)
          <figure class="bg-333 figure">
            <!-- 
            <figcaption class="title-1">
              <h1>PAK FA T-50</h1>
              <p>{!! html_entity_decode($sli->descript) !!}</p>
              <a href="">read more...</a>
            </figcaption> 
            -->
            <div class="flex-center ht-100">
              <img src="{{ URL::to('file/gallery/' . $sli->picture) }}" alt="" id="i-1" class="">	
            </div>            					
          </figure>
        @endforeach			
      </div>
    </div>					

  </div>		
</div>
</div>
<br>









<!-- <================================= START OF LEADER  AND NEWS BOARD ===========================================> -->
<div class="vbar-orange pad-15 bg-black-color" id="news-">
  <marquee behavior="scroll" scrollamount="3">
    @foreach ($heads as $head)
      <a class="mg-10" href="#news-{{ $head->id }}">{{ $head->head }}</a>
    @endforeach
  </marquee>
</div>
<div class="row" style="height: 1010px">
  <!-- LEADER BOARD -->
  <div class="v-rline wt-250 pad-15 ht-100 flow-y-auto">
  <div class="wt-220 vbar-orange pad-15 bg-black-color">LEADERS</div>
    @foreach($leader as $lea)
    <div class="flex-center">
      <div class="leader-card2 mg-15 pad-8 bg-fff">
        <div class="picture mg-auto">
          <img src="{{ URL::to('file/passport/' . $lea->passport) }}">
        </div>
        <div class="details align-center line-ht-1-h fs-smaller">
          {{ $lea->name }} <br>{{ $lea->pos }}<br>{{ $lea->m_name }}<br> {{ $lea->faculty_name }}<br>{{ $lea->timerange }}
        </div>
      </div>
    </div>
    @endforeach
    <div class="align-right"><button class="btn more-leaders">Go to leader page <span class="fa fa-angle-right"></span></button></div>
  </div>

  <!-- NEWS AND UPDATES -->
  <div class="flex-1 ht-100 pad-15 txt-wrap">
    <div class="row ht-100 flow-y-auto">
      <div class="news-roller ht-100 wt-95 mg-auto">
      <div class="flex-1 vbar-orange pad-15 bg-black-color">NEWS & UPDATES</div><br>
        @foreach($news as $new)
        <div class="news-card pad-15 ht-auto shadow-000-5 bg-white" id="news-{{ $new->id }}">
          @if(!empty($new->poster))
          <br>
            <div class="ht-250 pos-rel" style="background: url({{ URL::to('file/poster/' . $new->poster) }})"><img src="{{ URL::to('file/poster/' . $new->poster) }}" alt=""></div>
          @endif
          <div class="news-title pad-15 underline">
            <h1>{{ $new->head }}</h1>
          </div>
          <div class="news-content pad-tb-15">
            {!! html_entity_decode($new->body) !!}
          </div>
          <div class="news-time pad-tb-15 align-right"> <small><em>Posted on {{ $new->date_uploaded->format('M d, Y H:i') }} </em></small> </div>
        </div>
        <br>
        @endforeach
      </div>
    </div>
  </div>

  <!-- EVENTS -->
  <div class="wt-250 pad-15 v-lline ht-100">
      <div class="wt-220 vbar-orange pad-15 bg-black-color">EVENTS</div>
      <div class="ht-40 bg-wheat flow-y-auto">
        @foreach($events as $eve)
        <div class="underline-333 pad-8">
          <div class="date"><h2> {{ $eve->date_uploaded->format('M d, Y') }} </h2></div>
          <div class="main justify">
            {!! html_entity_decode($eve->body) !!}
          </div>
        </div>
        @endforeach
      </div><br>
      <div class="wt-220 vbar-orange pad-15 bg-black-color">YOUTUBE LINKS</div>
      <div class="ht-50 bg-wheat flow-y-auto">
        @foreach($videos as $vid)
        <br>
        <div class="video pos-rel ht-auto">
          <a href="/video-player/{{ $vid->id }}" class="pos-abs wt-100 ht-100"></a>
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $vid->link }}?&autoplay=0&showinfo=0&controls=0&autohide=1" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
        <div class="video-title mg-5"><a href="/video-player/{{ $vid->id }}" class="txt-blue txt-decorate-underline">{{ $vid->heading }}</a></div>
        @endforeach
      </div>
    </div>
</div>
<br>
<br>


<!-- <====== SCROLL TO TOP======> -->
  <button class="scrollTop hide-vs btn-v round-5 btn-green pos-fixed btm-15 right-15"><span class="fa fa-long-arrow-up"></span></button>
<!-- <====== END OF SCROLL TO TOP======> -->


@stop