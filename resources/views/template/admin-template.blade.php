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
    <div class="container admin">
        <header class="pad-15 flex">
            <div class="flex-left fs-large flex-1">
                <img height=70px width=70px class="round" src="{{ asset('image/logo.jpg') }}" alt="" srcset=""> <span class="align-center"><b>MZUMBE UNIVERSITY</b><br>CHUO KIKUU MZUMBE</span>
            </div>
            <div class="flex-1 flex-right fs-x-large">
                <div><b>MUSO</b> <br><small><i>Mzumbe University Student's Organization</i></small></div>
            </div>
        </header>
        <nav class="flex bg-mu-color">
            <div class="flex-1 fs-large "></div>
            <div class="tab"><span class="fa fa-bell-o"></span></div>
            <div class="tab"><span class="fa fa-user-o"></span></div>
            <div class="tab logout" id="logout-btn"><span class="fa fa-power-off"></span></div>
        </nav>
        <main class="admin-main pos-rel">
            <div class="alert-body bg-black-trans-5 pos-abs wt-100 ht-100 z2 flex-center">
                <div class="alerter bg-ddd ht-auto round-5" style="height:135px">
                    <div class="alert-header pad-8 bg-333 txt-ddd"><span class="fa fa-power-off"></span> Logout</div>
                    <div class="alert-main pad-15">
                       <span class="fa fa-warning"></span> Are you sure?
                    </div>
                    <div class="alert-bottom pad-15">
                        <button type="button" class="btn" id="cancel-logout">&times; Cancel</button>
                        <a href="/logout" class="btn btn-blue"><span class="fa fa-check"></span> Confirm</a>
                    </div>
                </div>
            </div>
            @yield('mainContentAdmin')
        </main>
    </div>
    <input type="hidden" class="urlf">

<!-- <script src="https://cdn.tiny.cloud/1/6iszgu8muqohjnima6g99ko60hb6x6ecct6mtpd44bqp0jax/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector:"#eventEditor"
        })
    </script> -->
    <script src="{{ asset('js/default/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/default/jquery.message.js') }}"></script>
    <script src="{{ asset('/js/default/classicQuery.js') }}"></script>
    <script>
        
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
    
    
</body>
</html>