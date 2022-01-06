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
        <nav class="flex bg-mu-color pad-15"><br></nav>
        <main class="admin-main pos-rel">
            <div class="ht-100 flow-y-auto">
                <div class="vbar-orange pad-15 bg-black-color z2">LOGIN</div>
                <main class="login-main">
                    <div class="ht-100 pos-rel">
                        <img src="{{ asset('image/logo.jpg') }}" class="responsive-image pos-abs mod-blur z-1">
                        <div class="ht-100 pos-abs wt-100 bg-ggg flex-center z1">
                            <div class="login-box bg-ddd shadow-000-5 flex-center">
                                <form method="post" action="/login">
                                @csrf
                                    <div class="flex-center"><input type="email" name="email" placeholder="Email"></div><br>
                                    <div class="flex-center"><input type="password" name="password" placeholder="Password"></div><br>
                                    <div class="flex-center"><div class="flex-1"><a href="#">Forget password?</a></div><button class="btn btn-blue round-5" type="submit">Login</button></div>
                                    <div class="row">{{ session('error') }}</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
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