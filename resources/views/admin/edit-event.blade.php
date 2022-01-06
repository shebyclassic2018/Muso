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

  
<div class="event-form">
<form method="post" action="/update-event">
  @csrf

  <!-- EVENTS -->

  <div class="admin-event pad-lr-15 ht-auto flow-y-auto">
    <div class="wt-220 vbar-orange pad-15 bg-black-color">EVENTS</div>
    <div class="pad-8">{{ $alert }}</div>
      @foreach($events as $eve)
      <div class="mg-8 underline-333 pad-tb-8">
        <div class="date"><h2> {{ $eve->date_uploaded->format('M d, Y') }} </h2></div>
        <div class="main justify">
          {!! html_entity_decode($eve->body) !!}
        </div>
        <div class="align-right">
          <a href="/edit-event/{{ $eve->id }}"><span class="fa fa-edit"></span> Edit</a>&nbsp;&nbsp;
          <a href="/delete-event/{{ $eve->id }}" class="txt-red bold"><span class="fa fa-trash-o"></span> Delete</a>
        </div>
        
      </div>
      @endforeach
  </div>




 <!-- EVENTS FORM -->
  <div class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
    <h3 class="underline-333">Event editor</h3><br>
    <h3>Descriptions</h3>
    <textarea id="mytextarea" name="body">{{ session('edit-event') }}</textarea>
    <br><br>
    <div class="row">
        <div class="flex-1">
        <h3>Event Date</h3>
        @php
          if(session('edit-event-date')){
            $edit_event_date = session('edit-event-date')->format('Y-m-d');
          }else{
            $edit_event_date = "0000-00-00";
          }
        @endphp
        <input type="date" name="date_uploaded" value="{{ $edit_event_date }}">
        </div>
    </div>
    <input type="hidden" name="id" value="{{ session('event-id') }}">
    <br>
    <div class="row">
        <div class="flex-1"><a href="/event" class="btn "><span class="fa fa-times"></span> Cancel</a></div>
        <button class="btn btn-blue"><span class="fa fa-edit"></span> Update</button>
    </div>
    <div class="row">{{ session('event_alert')}}</div>
    
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
<script>
  $(documet).ready(functcion(){
    var id = $('.event_id').val();
    alert(id);
  });
</script>
</body>
</html>