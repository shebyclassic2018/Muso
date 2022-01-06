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

  
<div class="gallery-form">
<form method="post" action="add-to-gallery" enctype="multipart/form-data">
  @csrf
  
  <div class="flex-1 ht-100">
    <!-- <==============GALLERY ============== -->
    <div class="admin-gallery gallery ht-100 bg-ddd-color flow-y-auto">
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
                                <a href="/admin-view/{{$gal->id}}">
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
  </div>

  <!-- ADD TO GALLERY FORM -->
  <div class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
  <h3>Our Gallery</h3>
    <div class="row">
        <input type="file" name="picture" id="poster" required>
        <label for="poster" class="btn round-5"><span class="fa fa-cloud-upload"></span> Upload Picture</label>
    </div>
    <div class="row poster-row">
        <div class="poster-image">
            <img class="poster-img responsive-image">
            <div id="filename"></div>
        </div>
    </div>
    <br>
    <h3>Descriptions</h3>
    <textarea id="mytextarea" name="descript" value="{{ session('descript') }}"></textarea>
    <br>
    <div class="row">
    <div class="flex-1"> {{ session('gallery_alert') }} </div>
        <button class="btn btn-blue"><span class="fa fa-upload"></span> Upload</button>
    </div>
    <br><br>
  </div>
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