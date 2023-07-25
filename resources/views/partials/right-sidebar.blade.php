
<div class="middle-sidebar-right scroll-bar">
    <div class="middle-sidebar-right-content">

        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url({{asset('assets/images/user-pattern.png')}});">
                <a href="{{route('profile')}}" class="position-absolute right-0 mr-4"><i class="feather-edit text-grey-500 font-xs"></i></a>
                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAMAAABjGQ9NAAAAY1BMVEUAAAD////s7Oz6+vrZ2dnz8/O0tLQvLy8WFhbw8PDo6OhFRUXS0tK+vr46OjpCQkJZWVkdHR3f3981NTWenp7Hx8eIiIhnZ2d9fX0KCgqrq6tLS0spKSleXl5wcHB3d3eUlJTLhqyJAAAEXElEQVRogc2b6bqyOgyFywwKgsikgHD/V/nhs48ehrZJGnDv9V/fp1OarBRhGclNiqENQhEG7VAkrtmfCPpPvKS+iqWudeJ9ge02gZApaMijJ7LdWgr+UU2kk9hepSG/VJFmnsJO7gB6kn8I23nC5ElPZ392dEOhp00X7c3O18dKrWu+L9sN0Wgh7sj9jmOf8KN+KTztx/bk4UStDnXWUOyMiBYi24tdkNFCjPuwcwO0EIj9hmDTZ/wlxKzDbN8IjYmuINu5GLJvYHAF2abDFuLBZTutMfsMDRxix8ZoIWImu2GwBx7b6xhsKLICbM6UC1Gy2Cbh9H8VLLb5Ln+pZbER2aFOHHbEQwubweZtNeiE69kJk50w2ObB/Ef6u0zPfjDZ+uvk77J/c85/c6+5TDbnjHlMtr4sPDSm3vV/DrDN8uO3gDwZYPMOGe8O5QV0IGED2A61Ap0rABJVKFeEnCWdKuC//3KOzNjpLbc2YIRVfUDFsJ2zITrl14JWacgGknMU29LZt2rV8B8j2LYRG2FzYbwek8AKFt9ItoVzced6Yv4WxSYbAGDZj2dbHs10ueEsfKSXa2Md7JcCfSlEZVsRPsSkWAMd7d07PRKdoRsHhH7JiEJjjFQ624rhRKKD7k1TNmyBAAkai21Flbp5EVbI/W3Ink5bId/x54JINurFWvF4Xo4+PI8xvi3GYk+yS7/q0y7s0r7yS/KIWexd9LfZtutXWfqEU6C3yibLKt+FFwJgn/z+HVCeuFW135d90D+A3EXHdvxFch6CSe+kZNFBzHzd9lez7XHTiMygxpO7qSSuo/pWU7EdeSFW6+J1LM9oK9XY5WxHHbjPvnzdbV99wysSRynb1eZn1/6RLycyyh+9tlPcShdLxkbkxJd+KJI4z/M4eTQZnM3dZUOXsLEJCk2SOmXDJqakeG1rwzU7pzwuoGnzDmLFdmmPC4hwV8fOOdYOrNtJzY6OWuu3lqn7gp0ejJ7gKjbHz8KqkrNNzQ2aShnbPu50zXU/SdjDV9BzW+DD/s6Mv5Ss2cY2Gl0XZ8XmdmUo8ldsiq/AVbBkf3PYnxX/j83r71NV/OK44+V6H32LzNWs9hq3y07Q5+nJJ7Z84yL50Sa2WN63gst7xufxnNt3ReriSdjsRjtOs5xtnjuYNQhomtcIi5zp+MC6qBAW7MPTh2VjeJkjH3zK20jDPjaDSFceyLomOhAerO2XTS143K2ycX62NfBBIw+3doWk/j5kw8kaGTLfId//nGcyt0nqt5x4zzu2aqRNK4XPtG+hoGgnqPy1PRM4lRWr9BXzvQpi9ccuGj913IN815iwOi93646SNeh6hMDbOZ7/0nLekFneaP6Sq4Ne/YN9A3s0I4da6xzHnlTQTbcU4/Pj+v4J6dXBtcJ9zITtE9kP5LuDDv/JJKFHlfs1dMlcmhL3CRWVPcmLH8NNvvPDtKJ+o2rybWpc+sXQt7fuLsLu0tZN4ZeuQT/0H8U6OSCKbLa4AAAAAElFTkSuQmCC" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                <div class="clearfix"></div>
                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1">{{$auth->lastname.' '.$auth->firstname}}</h2>
                {{-- <h4 class="text-grey-500 font-xssss mt-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4> --}}
                <div class="clearfix"></div>
                {{-- <div class="col-12 text-center mt-4 mb-2">
                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-comment-alt font-sm"></i></a>
                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-lock font-sm"></i></a>
                    <a href="#" class="p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                </div> --}}
                {{-- <ul class="list-inline border-0 mt-4">
                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">500+ <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Connections</span></h4></li>
                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">88.7 k <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Follower</span></h4></li>
                    <li class="list-inline-item text-center"><h4 class="fw-700 font-md">1,334 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Followings</span></h4></li>
                </ul> --}}

                <div class="col-12 pl-0 mt-4 text-left">
                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">Mes badges <a href="{{route('profile')}}"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                    @forelse ($auth->rewards as $reward)
                    <div class="item">
                        <a href="#" class="btn-round-xxxl border bg-greylight d-inline-block p-3">
                            <img src="{{asset('assets/images/'.$reward->badge->icon)}}" alt="icon" class="h-100 w-100 rounded rounded-circle">
                            {{-- <small class="text-gray">{{$reward->badge->title}}</small> --}}
                        </a>
                    </div>
                    @empty
                    <h5 class="text-center text-muted">Vous n'avez aucun badge pour le moment</h5>
                    @endforelse
                    </div>
                </div>

            </div>
        </div>

        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3 shadow-none">
            <div class="card-body d-flex justify-content-between align-items-end p-4">
                <div>
                    <h4 class="font-xsss text-grey-900 mb-2 d-flex align-items-center justify-content-between mt-2 fw-700">
                        Mode sombre
                    </h4>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                    <label class="custom-control-label bg-success" for="darkmodeswitch"></label>
                </div>

            </div>
        </div>
    </div>
</div>
