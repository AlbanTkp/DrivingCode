<nav class="navigation scroll-bar">
    <div class="container pl-0 pr-0">
        <div class="nav-content">
            <div class="nav-top">
                <a href="#"><i class="feather-slack text-success display1-size mr-3 ml-3"></i><span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xl logo-text mb-0">{{config('app.name')}}</span> </a>
                <a href="#" class="close-nav d-inline-block d-lg-none"><i class="ti-close bg-grey mb-4 btn-round-sm font-xssss fw-700 text-dark ml-auto mr-2 "></i></a>
            </div>
            <div class="nav-caption fw-600 font-xssss text-grey-500">Menu</div>
            <ul class="mb-3">
                <li class="logo d-none d-xl-block d-lg-block"></li>
                <li><a href="{{route('home')}}" class="nav-content-bttn open-font" data-tab="chats"><i class="feather-tv mr-3"></i><span>Chapitres</span></a></li>
                {{-- <li><a href="default-follower.html" class="nav-content-bttn open-font" data-tab="friends"><i class="feather-shopping-bag mr-3"></i><span>Section 2</span></a></li>
                <li><a href="default-channel.html" class="nav-content-bttn open-font" data-tab="favorites"><i class="feather-globe mr-3"></i><span>Section 3</span></a></li> --}}
            </ul>
            <hr>
            <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Mon compte</div>
            <ul class="mb-3">
                <li class="logo d-none d-xl-block d-lg-block"></li>
                <li><a href="{{route('profile')}}" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-user mr-3 text-grey-500"></i><span>Profil</span></a></li>
                {{-- <li><a href="{{route('stats')}}" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-pie-chart mr-3 text-grey-500"></i><span>Statistique</span></a></li> --}}
            </ul>
            <hr>
            <ul class="mb-3">
                <li class="logo d-none d-xl-block d-lg-block"></li>
                <li><a href="{{route('logout')}}" class="nav-content-bttn open-font h-auto pt-2 pb-2 logout"><i class="font-sm ti-arrow-circle-left mr-3 text-grey-500"></i><span>Déconnexion</span></a></li>
            </ul>

        </div>
    </div>
</nav>
