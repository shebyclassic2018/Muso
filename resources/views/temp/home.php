@extends('template.muso')
@section('mainContent')
<div class="image-slider">
<br>
<div id="content-slider">
  <div class="wrap-slider">	

    

    <!-- ===== Thumbnail ControlNav ======= -->			
    <input type="radio" id="a-1" name="a" >			
    <input type="radio" id="a-2" name="a" >			
    <input type="radio" id="a-3" name="a" >
    <input type="radio" id="a-4" name="a" >

    <nav id="main">
      <label for="a-1" class="first"></label>
      <label for="a-2" class="first"></label>
      <label for="a-3" class="first"></label>
      <label for="a-4" class="first"></label>
    </nav>

    <!-- =================================== -->	
    <nav id="control">
      <label for="a-1"></label>
      <label for="a-2"></label>
      <label for="a-3"></label>
      <label for="a-4"></label>
    </nav>
    <!-- =================================== -->

  

    <!-- ===== IMages ======= -->							

    <div class="slider">
      <div class="inset">

        <figure>
          <figcaption class="title-1">
            <h1>PAK FA T-50</h1>
            <p>Stealth multirole fighter</p>
            <a href="">read more...</a>
          </figcaption>
          <img src="https://github.com/lime7/slider/blob/master/images/1.png?raw=true" alt="" id="i-1" class="f">						
        </figure>

        <figure>
          <figcaption class="title-2">
            <h1>Kamov Ka-50 "Black Shark"</h1>
            <p>Attack helicopter</p>
            <a href="">read more...</a>
          </figcaption>
          <img src="https://github.com/lime7/slider/blob/master/images/10.png?raw=true" alt="" id="i-2" class="f">						
        </figure>

        <figure>
          <figcaption class="title-3">
            <h1>Sukhoi Su-27</h1> 
            <p>Air superiority fighter</p> 
            <a href="">read more...</a>
          </figcaption>
          <img src="https://github.com/lime7/slider/blob/master/images/3.png?raw=true" alt="" id="i-3" class="f">						
        </figure>

        <figure>
          <figcaption class="title-4">
            <h1>mil mi-28</h1>
            <p>Attack helicopter</p>
            <a href="">FIND OUT MORE</a>
          </figcaption>
          <img src="https://github.com/lime7/slider/blob/master/images/4.png?raw=true" alt="" id="i-4" class="f">						
        </figure>


        <figure>
          <figcaption class="title-5">
            <h1>PAK FA T-50</h1>
            <p>Stealth multirole fighter</p>
            <a href="">read more...</a>
          </figcaption>
          <img src="https://github.com/lime7/slider/blob/master/images/1.png?raw=true" alt="" id="i-5" class="f">						
        </figure>				
      </div>
    </div>					

  </div>		
</div>
</div>
<br>









<!-- <================================= START OF LEADER BOARD ===========================================> -->

<div class="leader-board">
  <div class="flex title-bar bg-black-color pad-15">LEADERS 2020/2021</div>
  <br>
  <div class="row flex-center">
    <div class="leader-card mg-5">
      <div class="profile-picture">
        <img src="{{ asset('image/bg1.jpg') }}" alt="" sizes="" srcset="">
      </div>
      <div class="leader-details ">
        <div class="top-details align-center pad-5 bold">
            <span class="leader-pos">PRESIDENT</span><br>
            <span class="leader-name">SHABANI H. RAJABU</span><br>
            <span class="ministry">MUSO ORGANIZATION</span>
        </div>
        <div class="down-details pad-15">
          <div class="row pad-tb-5">
            <div class="flex-1">Duration:</div>
            <div class="flex-1 align-center">2020 - 2021</div>
          </div>
          <div class="row">
            <div class="flex-1 align-center">Faculty of Science and Technology <br> FST</div>
          </div>
        </div>
      </div>
    </div>


    <div class="leader-card mg-5">
      <div class="profile-picture">
        <img src="{{ asset('image/bg1.jpg') }}" alt="" sizes="" srcset="">
      </div>
      <div class="leader-details ">
        <div class="top-details align-center pad-5 bold">
            <span class="leader-pos">PRESIDENT</span><br>
            <span class="leader-name">SHABANI H. RAJABU</span><br>
            <span class="ministry">MUSO ORGANIZATION</span>
        </div>
        <div class="down-details pad-15">
          <div class="row pad-tb-5">
            <div class="flex-1">Duration:</div>
            <div class="flex-1 align-center">2020 - 2021</div>
          </div>
          <div class="row">
            <div class="flex-1 align-center">Faculty of Science and Technology <br> FST</div>
          </div>
        </div>
      </div>
    </div>

    <div class="leader-card mg-5">
      <div class="profile-picture">
        <img src="{{ asset('image/bg1.jpg') }}" alt="" sizes="" srcset="">
      </div>
      <div class="leader-details ">
        <div class="top-details align-center pad-5 bold">
            <span class="leader-pos">PRESIDENT</span><br>
            <span class="leader-name">SHABANI H. RAJABU</span><br>
            <span class="ministry">MUSO ORGANIZATION</span>
        </div>
        <div class="down-details pad-15">
          <div class="row pad-tb-5">
            <div class="flex-1">Duration:</div>
            <div class="flex-1 align-center">2020 - 2021</div>
          </div>
          <div class="row">
            <div class="flex-1 align-center">Faculty of Science and Technology <br> FST</div>
          </div>
        </div>
      </div>
    </div>

    <div class="leader-card mg-5 ">
      <div class="profile-picture">
        <img src="{{ asset('image/bg1.jpg') }}" alt="" sizes="" srcset="">
      </div>
      <div class="leader-details ">
        <div class="top-details align-center pad-5 bold">
            <span class="leader-pos">PRESIDENT</span><br>
            <span class="leader-name">SHABANI H. RAJABU</span><br>
            <span class="ministry">MUSO ORGANIZATION</span>
        </div>
        <div class="down-details pad-15">
          <div class="row pad-tb-5">
            <div class="flex-1">Duration:</div>
            <div class="flex-1 align-center">2020 - 2021</div>
          </div>
          <div class="row">
            <div class="flex-1 align-center">Faculty of Science and Technology <br> FST</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="leaders-link pad-15 align-right">
  <button class="btn btn-blue more-leaders round-5">More <span class="fa fa-angle-right"></span></button>
</div>
<!-- <================================= END OF LEADER BOARD ===========================================> -->
<br>











<!-- <================================= START OF NEWS BOARD ===========================================> -->

<div class="news" id="news">
  <div class="flex news-title title-bar bg-black-color pad-15">
    <div class="flex-1">NEWS</div>
  </div>
    <!-- <================================= START OF TOP-1-NEWS ===========================================> -->
  <div class="flex top-news">

    <div class="card flex-1 mg-5">
      <div class="title">Serikali ya Wanafunzi (MUSO) yafanikisha kupunguza gharama za Bima ya Afya kwa wanafunzi</div>
      <div class="row option-nav">
        <div class="flex-1 pad-5"><span class="fa fa-clock-o"></span> January,21 2020</div>
        <div class="flex-1 pad-5"><span class="fa fa-comment"></span> Comment</div>
      </div>
      <div class="news-body pad-5">
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
      </div>
    </div>

    <div class="card flex-1 mg-5">
      <div class="title">Serikali ya Wanafunzi (MUSO) yafanikisha kupunguza gharama za Bima ya Afya kwa wanafunzi</div>
      <div class="row option-nav">
        <div class="flex-1 pad-5"><span class="fa fa-clock-o"></span> January,21 2020</div>
        <div class="flex-1 pad-5"><span class="fa fa-comment"></span> Comment</div>
      </div>
      <div class="news-body pad-5">
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
      </div>
    </div>

    <div class="card flex-1 mg-5">
      <div class="title">Serikali ya Wanafunzi (MUSO) yafanikisha kupunguza gharama za Bima ya Afya kwa wanafunzi</div>
      <div class="row option-nav">
        <div class="flex-1 pad-5"><span class="fa fa-clock-o"></span> January,21 2020</div>
        <div class="flex-1 pad-5"><span class="fa fa-comment"></span> Comment</div>
      </div>
      <div class="news-body pad-5">
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
        Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
      </div>
    </div>

  </div>
  <br>
    <!-- <================================= END OF TOP-1-NEWS ===========================================> -->

    <!-- <================================= START OF TOP-2-NEWS ===========================================> -->
  <div class="flex top-news">

<div class="card flex-1 mg-5">
  <div class="title">Serikali ya Wanafunzi (MUSO) yafanikisha kupunguza gharama za Bima ya Afya kwa wanafunzi</div>
  <div class="row option-nav">
    <div class="flex-1 pad-5"><span class="fa fa-clock-o"></span> January,21 2020</div>
    <div class="flex-1 pad-5"><span class="fa fa-comment"></span> Comment</div>
  </div>
  <div class="news-body pad-5">
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
  </div>
</div>

<div class="card flex-1 mg-5">
  <div class="title">Serikali ya Wanafunzi (MUSO) yafanikisha kupunguza gharama za Bima ya Afya kwa wanafunzi</div>
  <div class="row option-nav">
    <div class="flex-1 pad-5"><span class="fa fa-clock-o"></span> January,21 2020</div>
    <div class="flex-1 pad-5"><span class="fa fa-comment"></span> Comment</div>
  </div>
  <div class="news-body pad-5">
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
  </div>
</div>

<div class="card flex-1 mg-5">
  <div class="title">Serikali ya Wanafunzi (MUSO) yafanikisha kupunguza gharama za Bima ya Afya kwa wanafunzi</div>
  <div class="row option-nav">
    <div class="flex-1 pad-5"><span class="fa fa-clock-o"></span> January,21 2020</div>
    <div class="flex-1 pad-5"><span class="fa fa-comment"></span> Comment</div>
  </div>
  <div class="news-body pad-5">
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
    Serikali ya Wanafunzi Chuo Kikuu Mzumbe (MUSO) kupitia Wizara ya Habari, Teknolojia na Mawasiliano na Michezo inapenda kuwatangazia Wanafunzi wote…
  </div>
</div>

</div>

<!-- <================================= END OF TOP-2-NEWS ===========================================> -->
<div class="pad-15 align-right">
  <button class="btn btn-blue news-link round-5">Read more ...</button>
</div>


</div>

<!-- <================================= END OF NEWS BOARD ===========================================> -->















<!-- <================================= START OF FOOTER ===========================================> -->
  <footer class="pad-15">
    <div class="flex-1 pad-15 ht-80">
      <span class="title">Our Mission</span> <br>
      <div class="body">
      The Mission of MUSO is to assist and support University in providing opportunities for acquisition, development, preservation and dissemination of knowledge and skills through training, research, technical and/or professional services.
      </div>
    </div>
    <div class="flex-1 pad-15 ht-100">
      <span class="title">Our Vision</span> <br>
      <div class="body">
      Mzumbe University Student organization is recognized as most important organization within and outside the University for influencing in demand driven knowledge generation, application, preservation and dissemination for social-economic development by 2025.
      </div>
    </div>
    <div class="flex-1 pad-15">
      <span class="title">Core Values</span> <br>
      <div class="body">
      The building of a cohesive and binding organizational culture is a fundamental pre-requisite for the sustainable development of the University. The following are the core values which guides Mzumbe University’s organizational culture.
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




<!-- <====== SCROLL TO TOP======> -->
  <button class="scrollTop hide-vs btn-v round-5 btn-green pos-fixed btm-15 right-15"><span class="fa fa-long-arrow-up"></span></button>
<!-- <====== END OF SCROLL TO TOP======> -->


@stop