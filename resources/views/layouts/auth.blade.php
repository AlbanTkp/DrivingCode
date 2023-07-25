<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">



</head>

<body class="color-theme-blue">

    <div class="preloader"></div>

    <div class="main-wrap">
        <div class="header-wrapper pos-fixed p-2">
            <div class="container-fluid pl-lg--5 pr-lg--5">
                <div class="row">
                    <div class="col-lg-9 navbar pt-0 pb-0">
                        <h1 class="fredoka-font ls-3 fw-700 text-current font-xxl">{{config('app.name')}} <span class="d-block font-xsssss ls-1 text-grey-500 open-font ">Apprendre le code de la route</span></h1>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-menu float-none text-center">
                            </ul>
                        </div>

                    </div>
                    @if (Route::currentRouteName() === 'password.request')
                    <div class="col-lg-3 text-right d-none d-lg-block">
                        <a href="{{route('login')}}" class="header-btn bg-dark fw-500 text-white font-xsss p-2 lh-32 w100 text-center d-inline-block rounded-xl">Connexion</a>
                        <a href="{{route('register')}}" class="header-btn bg-current fw-500 text-white font-xsss p-2 lh-32 w100 text-center d-inline-block rounded-xl">Inscription</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" style="background-image: url({{asset('assets/images/bb-9.jpg')}});"></div>
            <div class="col-xl-7 vh-lg-100 align-items-center d-flex bg-white rounded-lg overflow-hidden">
                <div class="card shadow-none border-0 ml-auto mr-auto login-card">
                    <div class="card-body rounded-0 text-left">
                        <h3 class="fw-400 display1-size display2-md-size mb-3">{{$page_title}}</h3>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/plugin.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
