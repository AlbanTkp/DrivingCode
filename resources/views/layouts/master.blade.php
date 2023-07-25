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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.20/sweetalert2.all.min.js" integrity="sha512-g6SyD3meGVFsbHBlMq7eDdEXPvtH9/yPKS9HNZKN1sB6nDVSzVwcmArToKFPb0EIlT16Q45/urC6DjJf1q8rIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if($alert = session()->get('alert'))
    <script>
        Swal.fire(
            "{{$alert['title']}}",
            "{{$alert['msg']}}",
            "{{$alert['type']}}"
        )
    </script>
    @endif
    @yield('script')
</body>
</html>
