<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('back-end/css/login.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
    <link rel="icon" href="front-end\img\Logo_mini.svg" type="image/x-icon">
    <title> Login </title>
</head>
<body>
    <form action="login" method="post">
        @csrf
        <div>
            <div class="main-content">
                <div class="header">
                    <a href="/">
                        <img class="logo" src="{{asset('front-end/img/Logo.svg')}}" alt="Rahimjon_Gaziyev">
                    </a>
                </div>
                <div class="l-part">
                    <input type="text" name="email" placeholder="Email" class="input-1" />
                    <div>
                        <input type="password" name="password" placeholder="Password" class="input-2" />
                    </div>
                    <input type="submit" value="Log in" class="btn" />
                </div>
            </div>
        </div>
    </form>
</body>
</html>
