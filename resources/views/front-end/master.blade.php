<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="this site create by truaT">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
        rel="stylesheet"
        >
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">

        {{-- bootstrap - 5 start --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        {{-- bootstrap - 5 end --}}

    <link rel="stylesheet" href="{{ asset('front-end/css/home.css') }}">
    <link rel="icon" href="front-end\img\Logo_mini.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>
    <title> Rahimjon Gaziyev </title>
</head>
<body>

<!-- #*#*#*#*#*#*#*#   NAVBAR   #*#*#*#*#*#*#*# -->
<nav class = "navbar1 mb-5">
    <div class="left-nav">
        <a href="admin"> <img class="logo1 img-fluid" src="{{asset('front-end/img/Logo.svg')}}" alt="Rahimjon_Gaziyev"> </a>
    </div>

    <ul class="right-nav">
        <li class="col-lg-3 col-md-3 col-sm-3 col-3"><a  href="/"> Blog </a></li>
        <li class="col-lg-3 col-md-3 col-sm-3 col-3"><a  href="#"> History </a></li>
        <li class="col-lg-3 col-md-3 col-sm-3 col-3"><a  href="#"> Loyihalarim</a></li>
    </ul>
</nav>

{{-- respons nabar start --}}

<nav class="navbar navbar-expand-lg navbar-light mb-5 px-3">
    <div class="container-fluid">
       <a href="admin"> <img class="logo1 img-fluid" src="{{asset('front-end/img/Logo.svg')}}" alt="Rahimjon_Gaziyev"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Loyihalarim</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- response navbar end --}}


<!-- #*#*#*#*#*#*#*#   HEAD   #*#*#*#*#*#*#*# -->
    <div class="head mb-5">
        <div class = "containerg">
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <h2> Assalomu alaykum, ijodiy sahifamga xush kelibsiz! </h2>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <p>
                        Ushbu sahifada kasbim va ijodlarim namunasi, o'rgangan bilim va
                        tajribalarimni baham ko'rish, hamda hayotimdagi ba'zi voqeliklarni
                        (imkon qadar) joylab borishni niyat qildim.
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- #*#*#*#*#*#*#*#   BLOG   #*#*#*#*#*#*#*# -->
<div class="containerg">
    <h1> Blog </h1>
    @yield('content')
</div>
<!-- #*#*#*#*#*#*#*#   FOYDALNADIGAN DASTURLARIM   #*#*#*#*#*#*#*# -->
<div class="containerg mt-5">

    <h1> Foydalanadigan dasturlarim: </h1>
    <div class = "row  programs my-5">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 text">
            <h2> Grafik  <br /> dizaynda </h2>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-9 col-sm-12 pro-icon">
            <img src="{{asset('front-end/img/Ps.svg')}}" alt="Photoshop">
            <img src="{{asset('front-end/img/Ai.svg')}}" alt="Illustrator">
            <img src="{{asset('front-end/img/Afphoto.svg')}}" alt="Afphoto">
            <img src="{{asset('front-end/img/Afdesigner.svg')}}" alt="Afdesigner">
        </div>
    </div>

    <!-- #*#*#*#*#*#*#*#   FOOTER   #*#*#*#*#*#*#*# -->

    <h1> Sahifamda yana nimalarni ko’rishni xohlaysiz? <br> Muhokamada qoldiring ↓ </h1>
    <div class="containerg">
        <a href="https://t.me/hayotidunyo" type="button" target="_blank" class="btn btn-1 col-sm-12"> Telegram </a>
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- @yield('js') --}}
</body>
</html>
