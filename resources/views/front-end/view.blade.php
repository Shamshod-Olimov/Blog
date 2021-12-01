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
<div class="contener">
    <!-- #*#*#*#*#*#*#*#   NAVBAR   #*#*#*#*#*#*#*# -->
    <nav class = "navbar1 mb-5">
        <div class="left-nav">
            <a href=""> <img class="logo1 img-fluid" src="{{asset('front-end/img/Logo.svg')}}" alt="Rahimjon_Gaziyev"> </a>
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

    <div class="containerg" style="padding: 0 10% 10% 10%;">
        @foreach($blogs as $blog)
        <img src="{{ asset('uploads'.$blog->img) }}" alt="image" class="rasm-yil-kunlari img-fluid mb-2" style="width: 50%; margin-left: auto; margin-right: auto; display: block; padding-bottom: 5%;">
        <h2> {{ $blog->title }} </h2>
        <p>  <?=$blog->text ?> </p>
        <br>
        <a href="{{ $blog->comment }}" class="btn btn-secondary" target="_blank">Fikringizni izohda qoldiring!</a>
        @endforeach
    </div>

</div>
</body>
</html>
