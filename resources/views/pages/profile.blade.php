@extends('layouts.master')
@section('content')
<div class="middle-sidebar-left">
    <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-3" style="background-image: url(images/bb-16.png);">
        <div class="card-body p-lg-5 p-4 bg-black-08">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-lg-12 pl-xl-5 pt-xl-5">
                    <figure class="avatar ml-0 mb-4 position-relative w100 z-index-1"><img src="images/user-12.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                </div>
                <div class="col-xl-4 col-lg-6 pl-xl-5 pb-xl-5 pb-3">

                    <h4 class="fw-700 font-md text-white mt-3 mb-1">Hendrix Stamp <i class="ti-check font-xssss btn-round-xs bg-success text-white ml-1"></i></h4>
                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-0">support@gmail.com</span>
                    <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Desinger</span>
                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">PHP</span>
                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">HTML5</span>
                    <ul class="memberlist mt-3 mb-2 ml-0">
                        <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                        <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                        <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                        <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 text-center font-xssss ls-3">+2</a></li>

                    </ul>
                </div>
                <div class="col-xl-4 col-lg-6 d-block">
                    <h2 class="display5-size text-white fw-700 lh-1 mr-3">98 <i class="feather-arrow-up-right text-success font-xl"></i></h2>
                    <h4 class="text-white font-sm fw-600 mt-0 lh-3">Your learning level points! </h4>

                </div>
                <div class="col-xl-3 mt-4">
                    <div id="chart-users-blue3" class="mt-2"></div>
                </div>
            </div>



        </div>
    </div>
    <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
        <ul class="nav nav-tabs xs-p-4 d-flex align-items-center justify-content-between product-info-tab border-bottom-0" id="pills-tab" role="tablist">
            <li class="active list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 ml-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase active" href="#navtabs0" data-toggle="tab">Paramètres</a></li>
            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs1" data-toggle="tab">Video</a></li>
            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs2" data-toggle="tab">Badges</a></li>
            <li class="list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase" href="#navtabs3" data-toggle="tab"></a></li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="navtabs0">
            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-lg-4 p-2">
                <div class="card-body mb-lg-3 pb-0"><h2 class="fw-400 font-lg d-block">  <b>Paramètres</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="font-xssss fw-600 lh-28 text-grey-500 pl-0">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals. Currently am a freelance motion graphics artist and a Music producer. I like to be productive and creative at work. I like to continuously increase my skills and stay in tuned with the technology industry.</p>
                            <p class="font-xssss fw-600 lh-28 text-grey-500 pl-0">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals. Currently am a freelance motion graphics artist and a Music producer. I like to be productive and creative at work. I like to continuously increase my skills and stay in tuned with the technology industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="navtabs1">
            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-lg-4 p-2">
                <div class="card-body mb-lg-3 pb-0"><h2 class="fw-400 font-lg d-block">My  <b>Courses</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card w-100 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1">
                                <div class="card-image w-100 mb-3">
                                    <a href="home-3.html" class="video-bttn position-relative d-block"><img src="images/v-1.png" alt="image" class="w-100"></a>
                                </div>
                                <div class="card-body pt-0">
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1">Python</span>
                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 240</span>
                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="home-3.html" class="text-dark text-grey-900">Complete Python Bootcamp From Zero to Hero in Python </a></h4>
                                    <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 32 Lesson </h6>
                                    <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                        <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card w-100 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1">
                                <div class="card-image w-100 mb-3">
                                    <a href="home-3.html" class="video-bttn position-relative d-block"><img src="images/v-4.jpg" alt="image" class="w-100"></a>
                                </div>
                                <div class="card-body pt-0">
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1">Python</span>
                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 670</span>
                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="home-3.html" class="text-dark text-grey-900">Fundamentals for Scrum Master and Agile Projects </a></h4>
                                    <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 32 Lesson </h6>
                                    <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                        <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card w-100 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1">
                                <div class="card-image w-100 mb-3">
                                    <a href="home-3.html" class="video-bttn position-relative d-block"><img src="images/v-6.jpg" alt="image" class="w-100"></a>
                                </div>
                                <div class="card-body pt-0">
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">Desinger</span>
                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 450</span>
                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="home-3.html" class="text-dark text-grey-900">Complete Python Bootcamp From Zero to Hero in Python </a></h4>
                                    <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 24 Lesson </h6>
                                    <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                        <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card w-100 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1">
                                <div class="card-image w-100 mb-3">
                                    <a href="home-3.html" class="video-bttn position-relative d-block"><img src="images/v-5.jpg" alt="image" class="w-100"></a>
                                </div>
                                <div class="card-body pt-0">
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">Develop</span>
                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 370</span>
                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="home-3.html" class="text-dark text-grey-900">The Data Science Course Complete Data Science </a></h4>
                                    <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 23 Lesson </h6>
                                    <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                        <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card w-100 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1">
                                <div class="card-image w-100 mb-3">
                                    <a href="home-3.html" class="video-bttn position-relative d-block"><img src="images/v-3.png" alt="image" class="w-100"></a>
                                </div>
                                <div class="card-body pt-0">
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Bootstrap</span>
                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 60</span>
                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="home-3.html" class="text-dark text-grey-900">Java Programming Masterclass for Developers</a></h4>
                                    <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 14 Lesson </h6>
                                    <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                        <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card w-100 p-0 shadow-xss border-0 rounded-lg overflow-hidden mr-1">
                                <div class="card-image w-100 mb-3">
                                    <a href="home-3.html" class="video-bttn position-relative d-block"><img src="images/v-2.png" alt="image" class="w-100"></a>
                                </div>
                                <div class="card-body pt-0">
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-danger d-inline-block text-danger mr-1">Desinger</span>
                                    <span class="font-xss fw-700 pl-3 pr-3 ls-2 lh-32 d-inline-block text-success float-right"><span class="font-xsssss">$</span> 40</span>
                                    <h4 class="fw-700 font-xss mt-3 lh-28 mt-0"><a href="home-3.html" class="text-dark text-grey-900">Complete Python Bootcamp From Zero to Hero in Python </a></h4>
                                    <h6 class="font-xssss text-grey-500 fw-600 ml-0 mt-2"> 24 Lesson </h6>
                                    <ul class="memberlist mt-3 mb-2 ml-0 d-block">
                                        <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                                        <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3 text-center">+2</a></li>
                                        <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">Student apply</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="navtabs2">
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
                                    <img src="{{$reward->badge->icon}}" alt="icon" class="w-100">
                                </a>
                                <h4 class="fw-700 font-xsss mt-4">{{$reward->badge->title}}</h4>
                                <p class="fw-500 font-xssss text-grey-500 mt-3">{{$reward->badge->description}}</p>
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

        <div class="tab-pane fade" id="navtabs3">

        </div>

        <div class="tab-pane fade" id="navtabs4">
            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-lg-4 p-2">
                <div class="card-body mb-lg-3 pb-0"><h2 class="fw-400 font-lg d-block">My <b>Friend</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-11.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <div class="clearfix"></div>
                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-7.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <div class="clearfix"></div>
                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-7.jpg);"></div>
                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-6.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Mohannad Zitoun </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <div class="clearfix"></div>
                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-16.png);"></div>
                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-5.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Stephen Grider </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <div class="clearfix"></div>
                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/blog-2.jpg);"></div>
                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-4.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Hendrix Stamp </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <div class="clearfix"></div>
                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-7.jpg);"></div>
                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-3.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Kimberley Kelly </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <div class="clearfix"></div>
                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-1.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <div class="clearfix"></div>
                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                                <div class="card-body d-block w-100 pl-2 pr-2 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-2.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <div class="clearfix"></div>
                                    <ul class="text-center d-block mt-3 list-inline ml-2 mr-2 mb-3">
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                        <li class="m-1 list-inline-item"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="navtabs7">
            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-lg-4 p-2">
                <div class="card-body mb-lg-3 pb-0"><h2 class="fw-400 font-lg d-block">Live<b> Channel</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                                <div class="card-body d-block w-100 pl-4 pr-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-11.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <span class="live-tag mt-2 bg-dark p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">OFFLINE</span>
                                    <div class="clearfix"></div>
                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                                <div class="card-body d-block w-100 pl-4 pr-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-7.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                    <div class="clearfix"></div>
                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-7.jpg);"></div>
                                <div class="card-body d-block w-100 pl-4 pr-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-6.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Mohannad Zitoun </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <span class="live-tag mt-2 bg-dark p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">OFFLINE</span>
                                    <div class="clearfix"></div>
                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-16.png);"></div>
                                <div class="card-body d-block w-100 pl-4 pr-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-5.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Stephen Grider </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                    <div class="clearfix"></div>
                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/blog-2.jpg);"></div>
                                <div class="card-body d-block w-100 pl-4 pr-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-4.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Hendrix Stamp </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                    <div class="clearfix"></div>
                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-7.jpg);"></div>
                                <div class="card-body d-block w-100 pl-4 pr-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-3.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Kimberley Kelly </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                    <div class="clearfix"></div>
                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                                <div class="card-body d-block w-100 pl-4 pr-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-1.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">Aliqa Macale </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <span class="live-tag mt-2 bg-dark p-2 z-index-1 rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">OFFLINE</span>
                                    <div class="clearfix"></div>
                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                                <div class="card-body position-relative h100 bg-gradiant-bottom bg-image-cover bg-image-center" style="background-image: url(images/bb-9.jpg);"></div>
                                <div class="card-body d-block w-100 pl-4 pr-4 text-center">
                                    <figure class="avatar ml-auto mr-auto mb-0 mt--6 position-relative w75 z-index-1"><img src="images/user-2.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    <div class="clearfix"></div>
                                    <h4 class="fw-700 font-xsss mt-3 mb-1">John Steere </h4>
                                    <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-2">support@gmail.com</p>
                                    <span class="live-tag mt-2 bg-danger p-2 z-index-1  rounded-lg text-white font-xsssss text-uppersace fw-700 ls-3">LIVE</span>
                                    <div class="clearfix"></div>
                                    <a href="#" class="mt-4 mb-4 p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
