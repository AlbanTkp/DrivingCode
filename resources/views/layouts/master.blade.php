<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body class="color-theme-blue mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @include('partials.left-sidebar')
        <!-- navigation -->
        <!-- main content -->
        <div class="main-content">
            <div class="middle-sidebar-header bg-white">
                <button class="header-menu"></button>
                @include('partials.navbar')
            </div>
            <div class="middle-sidebar-bottom">
                @yield('content')
                @include('partials.right-sidebar')
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>
                </button>
            </div>
        </div>
        <!-- main content -->
    </div>
    <script src="{{asset('assets/js/plugin.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script>
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
        $('.logout').click(function (e) {
            e.preventDefault();
            $('#logout-form').submit()
        });
    </script>
    @yield('script')
</body>
</html>
