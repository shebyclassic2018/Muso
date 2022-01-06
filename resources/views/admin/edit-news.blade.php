<!DOCTYPE html>
<html>
<head>
    <title>MUSO - Mzumbe University Student's Organization</title>
    <link rel="stylesheet" href="{{ asset('css/default/awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default/imageslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/muso.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>

  
<div class="news-form ht-100">
<form class="row pos-rel" method="post" action="/update-news" enctype="multipart/form-data">
  @csrf
  <div class="flex-1 ht-100">
    <!-- NEWS AND UPDATES -->
    <div class="admin-news ht-100 pad-15 flow-y-auto">
            <div class="row ht-100 flow-y-auto">
            <div class="news-roller ht-100 wt-95 mg-auto">
            <div class="flex-1 vbar-orange pad-15 bg-black-color">NEWS & UPDATES</div><br>
            <div class="pad-15">{{ $alert }}</div>
                @foreach($news as $new)
                <div class="news-card ht-auto shadow-000-5 bg-white" id="news-{{$new->id}}">
                @if(!empty($new->poster))
                    <br>
                    <div class="ht-250 pos-rel" style="background: url({{ URL::to('file/poster/' . $new->poster) }})"><img src="{{ URL::to('file/poster/' . $new->poster) }}" alt=""></div>
                @endif
                <div class="news-title pad-15 underline">
                    <h1>{{ $new->head }}</h1>
                </div>
                <div class="news-content pad-15 ">
                    {!! html_entity_decode($new->body) !!}
                </div>
                <div class="news-time pad-15 flex">
                    <div class="flex-1">
                        <a href="/edit-news/{{ $new->id }}"><span class="fa fa-edit"></span> Edit</a> &nbsp;&nbsp;
                        <a href="/delete-news/{{ $new->id }}" class="txt-red bold"><span class="fa fa-trash-o"></span> Delete</a>
                    </div>
                    <small><em>Posted on {{ $new->date_uploaded->format('M d, Y H:i') }} </em></small>
                </div>
                </div>
                <br>
                @endforeach
            </div>
            </div>
        </div>
  </div>

  <!-- NEWS EDITOR -->
  <div class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
  <h3>News editor</h3>
    <div class="row">
        <input type="file" name="poster" id="poster">
        <label for="poster" class="btn round-5"><span class="fa fa-cloud-upload"></span> Choose a news poster</label>
    </div>
    <div class="row">
        <div class="poster-image">
            <img src="{{ URL::to('file/poster/' . session('poster')) }}" class="responsive-image poster-img">
            <div id="filename">{{ session('poster') }}</div>
        </div>
    </div>
    <br><br><br>
    <h3>Heading</h3>
    <textarea class="wt-100" name="heading">{{ session('head') }}</textarea>
    <br>
    <h3>Descriptions</h3>
    <textarea id="mytextarea" name="body">{{ session('news-body') }}</textarea>
    <br>
    <div class="row">
        <div class="flex-1"><a href="/news" class="btn "><span class="fa fa-times"></span> Cancel</a></div>
        <button class="btn btn-blue"><span class="fa fa-edit"></span> Update</button>
    </div>
    <div class="row">{{ session('news_alert')}}</div>
    <br><br>
  </div>
  <input type="hidden" name="id" value="{{ session('news-id') }}">
</form>
</div>



<script src='https://cdn.tiny.cloud/1/6iszgu8muqohjnima6g99ko60hb6x6ecct6mtpd44bqp0jax/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#mytextarea'
  });
</script>
<script src="{{ asset('js/default/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/js/default/jquery.message.js') }}"></script>
<script src="{{ asset('/js/default/classicQuery.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>