@extends('layouts.master')
@section('content')
<div class="middle-sidebar-left">

    <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
        <ul class="nav nav-tabs xs-p-4 d-flex align-items-center justify-content-between product-info-tab border-bottom-0" id="pills-tab" role="tablist">
            <li class="active list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 ml-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase active" href="#navtabs0" data-toggle="tab">Mes Informations</a></li>
            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs1" data-toggle="tab">Mes Badges</a></li>
            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs2" data-toggle="tab">Paramètres</a></li>
            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs3" data-toggle="tab"></a></li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="navtabs0">
            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-lg-4 p-2">
                <div class="card-body mb-lg-3 pb-0"><h2 class="fw-400 font-lg d-block">Mes  <b>Informations</b></h2></div>
                <div class="card-body pb-0">
                    <div class="middle-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 text-center">
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w100"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAMAAABjGQ9NAAAAY1BMVEUAAAD////s7Oz6+vrZ2dnz8/O0tLQvLy8WFhbw8PDo6OhFRUXS0tK+vr46OjpCQkJZWVkdHR3f3981NTWenp7Hx8eIiIhnZ2d9fX0KCgqrq6tLS0spKSleXl5wcHB3d3eUlJTLhqyJAAAEXElEQVRogc2b6bqyOgyFywwKgsikgHD/V/nhs48ehrZJGnDv9V/fp1OarBRhGclNiqENQhEG7VAkrtmfCPpPvKS+iqWudeJ9ge02gZApaMijJ7LdWgr+UU2kk9hepSG/VJFmnsJO7gB6kn8I23nC5ElPZ392dEOhp00X7c3O18dKrWu+L9sN0Wgh7sj9jmOf8KN+KTztx/bk4UStDnXWUOyMiBYi24tdkNFCjPuwcwO0EIj9hmDTZ/wlxKzDbN8IjYmuINu5GLJvYHAF2abDFuLBZTutMfsMDRxix8ZoIWImu2GwBx7b6xhsKLICbM6UC1Gy2Cbh9H8VLLb5Ln+pZbER2aFOHHbEQwubweZtNeiE69kJk50w2ObB/Ef6u0zPfjDZ+uvk77J/c85/c6+5TDbnjHlMtr4sPDSm3vV/DrDN8uO3gDwZYPMOGe8O5QV0IGED2A61Ap0rABJVKFeEnCWdKuC//3KOzNjpLbc2YIRVfUDFsJ2zITrl14JWacgGknMU29LZt2rV8B8j2LYRG2FzYbwek8AKFt9ItoVzced6Yv4WxSYbAGDZj2dbHs10ueEsfKSXa2Md7JcCfSlEZVsRPsSkWAMd7d07PRKdoRsHhH7JiEJjjFQ624rhRKKD7k1TNmyBAAkai21Flbp5EVbI/W3Ink5bId/x54JINurFWvF4Xo4+PI8xvi3GYk+yS7/q0y7s0r7yS/KIWexd9LfZtutXWfqEU6C3yibLKt+FFwJgn/z+HVCeuFW135d90D+A3EXHdvxFch6CSe+kZNFBzHzd9lez7XHTiMygxpO7qSSuo/pWU7EdeSFW6+J1LM9oK9XY5WxHHbjPvnzdbV99wysSRynb1eZn1/6RLycyyh+9tlPcShdLxkbkxJd+KJI4z/M4eTQZnM3dZUOXsLEJCk2SOmXDJqakeG1rwzU7pzwuoGnzDmLFdmmPC4hwV8fOOdYOrNtJzY6OWuu3lqn7gp0ejJ7gKjbHz8KqkrNNzQ2aShnbPu50zXU/SdjDV9BzW+DD/s6Mv5Ss2cY2Gl0XZ8XmdmUo8ldsiq/AVbBkf3PYnxX/j83r71NV/OK44+V6H32LzNWs9hq3y07Q5+nJJ7Z84yL50Sa2WN63gst7xufxnNt3ReriSdjsRjtOs5xtnjuYNQhomtcIi5zp+MC6qBAW7MPTh2VjeJkjH3zK20jDPjaDSFceyLomOhAerO2XTS143K2ycX62NfBBIw+3doWk/j5kw8kaGTLfId//nGcyt0nqt5x4zzu2aqRNK4XPtG+hoGgnqPy1PRM4lRWr9BXzvQpi9ccuGj913IN815iwOi93646SNeh6hMDbOZ7/0nLekFneaP6Sq4Ne/YN9A3s0I4da6xzHnlTQTbcU4/Pj+v4J6dXBtcJ9zITtE9kP5LuDDv/JJKFHlfs1dMlcmhL3CRWVPcmLH8NNvvPDtKJ+o2rybWpc+sXQt7fuLsLu0tZN4ZeuQT/0H8U6OSCKbLa4AAAAAElFTkSuQmCC" alt="image" class="shadow-sm rounded-lg w-100"></figure>
                                <h2 class="fw-700 font-sm text-grey-900 mt-3">{{$auth->lastname.' '.$auth->firstname}}</h2>
                                <h4 class="text-grey-500 fw-500 mb-3 font-xsss mb-4">{{$auth->email}}</h4>

                            </div>
                        </div>

                        <form method="post" action="{{route('profile.update')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xsss">Nom</label>
                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" value="{{$auth->lastname}}" name="lastname">
                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xsss">Prénom(s)</label>
                                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" value="{{$auth->firstname}}" name="firstname">
                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xsss">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$auth->email}}" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xsss">Contact</label>
                                        <input type="text" class="form-control @error('tel') is-invalid @enderror" value="{{$auth->tel}}" name="tel">
                                        @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="bg-current border-0 text-center text-white font-xsss fw-600 p-3 w175 w-100 rounded-lg d-inline-block">Enrégistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="navtabs1">
            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-lg-4 p-2">
                <div class="card-body mb-lg-3 pb-0"><h2 class="fw-400 font-lg d-block">Mes <b>Badges</b>
                    {{-- <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a> --}}
                </h2></div>
                <div class="card-body pb-0">
                    <div class="row">
                        @forelse ($auth->rewards as $reward)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
                                {{-- <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a> --}}
                                <a href="#" class="btn-round-xxxl rounded-lg ml-auto mr-auto">
                                    <img src="{{asset('assets/images/'.$reward->badge->icon)}}" alt="icon" class="w-100">
                                </a>
                                <h4 class="fw-700 font-xsss mt-4">{{$reward->badge->title}}</h4>
                                <p class="fw-500 font-xsss text-grey-600 mt-3">{{$reward->badge->description}}</p>
                                <div class="clearfix"></div>
                                {{-- <div class="progress mt-3 h10">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                </div> --}}
                                {{-- <a href="#" class="mt-3 d-inline-block text-grey-900 fw-700 rounded-lg text-center font-xssss ls-3">UNLOCK</a> --}}
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <h3 class="text-center">Vous n'avez aucun badge pour le moment</h3>
                        </div>

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="navtabs2">
            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-lg-4 p-2">
                <div class="card-body mb-lg-3 pb-0"><h2 class="fw-400 font-lg d-block">  <b>Paramètres</b></h2></div>
                <div class="card-body pb-0">

                    <form method="post" action="{{route('profile.update')}}">
                        @csrf
                        <div class="d-flex justify-content-around">
                            <h3 class="fw-700 text-grey-600">Difficulté:</h3>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="radio_easy" name="level" {{$auth->level == LEVEL_EASY ? 'checked':''}} value="{{LEVEL_EASY}}" class="custom-control-input">
                                <label class="custom-control-label" for="radio_easy">Niveau Facile</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="radio_medium" name="level" {{$auth->level == LEVEL_MEDIUM ? 'checked':''}} value="{{LEVEL_MEDIUM}}" class="custom-control-input">
                                <label class="custom-control-label" for="radio_medium">Niveau Moyen</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="radio_hard" name="level" {{$auth->level == LEVEL_HARD ? 'checked':''}} value="{{LEVEL_HARD}}" class="custom-control-input">
                                <label class="custom-control-label" for="radio_hard">Niveau Difficile</label>
                            </div>
                        </div>
                        <div class="mt-5 px-5">
                            <button type="submit" class="bg-current border-0 text-center text-white font-xsss fw-600 p-3 w175 w-100 rounded-lg d-inline-block">Enrégistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
