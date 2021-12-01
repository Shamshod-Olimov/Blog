@foreach(session()->get('admin') as $my_profile)
    <?php   $name = $my_profile->name;
            $id = $my_profile->id;
            $img = $my_profile->img;
    ?>
@endforeach

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <link
            rel='stylesheet'
            href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link
            rel='stylesheet'
            href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link
            rel="stylesheet"
            href="{{ asset('back-end/css/admin.css') }}">
        <link rel="stylesheet" href="{{asset('back-end/css/summernote.css')}}">
        <link rel="icon" href="front-end\img\Logo_mini.svg" type="image/x-icon">
        <title>Admin panel</title>
    </head>
    <body>
        <section>
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid mx-4">
                    <div class="d-flex justify-content-center align-items-center px-3 py-4">
                        <img
                            class="rounded-pill img-fluid"
                            width="40"
                            src="{{asset('/'.$img)}}"
                            alt="">
                        <div class="ms-0">
                            <h5 class="fs-6 mb-0">
                                <a class="nav-link text-white" href="profile">{{$name}}</a>
                            </h5>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="toggle-navbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a  class="nav-link" href="/" id="navbarDropdown"
                                    role="button" aria-expanded="false">
                                    <i class="uil-eye"></i>
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a  class="nav-link" href="logout" id="navbarDropdown"
                                    role="button" aria-expanded="false">
                                    <i class="uil-sign-out-alt"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                @yield('content')
            </main>
        </section>
        <script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script  src="{{asset('back-end/js/admin.js')}}"></script>
    </body>
</html>
