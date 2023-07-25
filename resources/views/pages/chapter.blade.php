@extends('layouts.master')
@section('content')
<div class="middle-sidebar-left">
    <div class="row">
        <div class="col-xl-8 col-xxl-9">
            <div class="card border-0 mb-0 rounded-lg overflow-hidden" style="background-image: url({{$chapter->banner}});">
                <div class="card-body p-5 bg-black-08">
                    {{-- <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1">Python</span> --}}
                    <h2 class="fw-700 font-lg d-block lh-4 mb-1 text-white mt-2">{{$chapter->title}}</h2>
                    <p class="font-xsss fw-500 text-grey-100 lh-30 pr-5 mt-3 mr-5">{{$chapter->description}}</p>
                    {{-- <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Developer</span>
                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Design</span>
                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Developer</span>
                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">HTML5</span>
                    <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Jquery</span>
                    <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                    <span class="font-xssss fw-700 text-primary d-inline-block ml-0 ">Follow Author</span> --}}

                    <div class="clearfix"></div>
                    {{-- <div class="star d-block w-100 text-left mt-2">
                        <img src="images/star.png" alt="star" class="w15 float-left">
                        <img src="images/star.png" alt="star" class="w15 float-left">
                        <img src="images/star.png" alt="star" class="w15 float-left">
                        <img src="images/star.png" alt="star" class="w15 float-left">
                        <img src="images/star-disable.png" alt="star" class="w15 float-left mr-2">
                    </div> --}}
                    {{-- <p class="review-link font-xssss fw-600 text-grey-500 lh-3 mb-4">(456 ratings ) 2 customer review</p> --}}

                    {{-- <a href="#" class="btn-round-lg ml-3 d-inline-block rounded-lg bg-greylight"><i class="feather-share-2 font-sm text-grey-700"></i></a>
                    <a href="#" class="btn-round-lg ml-2 d-inline-block rounded-lg bg-danger"><i class="feather-bookmark font-sm text-white"></i> </a> --}}

                    <a href="{{route('courses.show', $chapter->courses[0]->id)}}" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-lg d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200">Démarrer</a>
                </div>
            </div>




            <div class="card d-block border-0 rounded-lg overflow-hidden mt-4">
                <div id="accordion" class="accordion mb-0">
                    @foreach ($chapter->courses as $k=>$course)
                    <div class="card shadow-xss mb-0">
                        <div class="card-header bg-greylight theme-dark-bg d-flex justify-content-between" id="heading{{$course->id}}">
                            <a href="{{route('courses.show', $course->id)}}" class="bg-primary-gradiant text-white fw-600 text-uppercase font-xssss float-right rounded-lg p-2 text-center ">Démarrer</a>
                            <h5 class="mb-0">
                                <button class="btn font-xsss fw-600 btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$course->id}}" aria-expanded="false" aria-controls="collapse{{$course->id}}">{{$course->title}}</button>

                            </h5>
                        </div>
                        <div id="collapse{{$course->id}}" class="collapse p-3" aria-labelledby="heading{{$course->id}}" data-parent="#accordion">
                            {!!$course->plan!!}
                            {{-- <div class="card-body d-flex p-2">
                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">1</span>
                                <span class="font-xssss fw-500 text-grey-500 ml-2">Introduction to the course</span>
                                <span class="ml-auto font-xssss fw-500 text-grey-500">12:34</span>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4 alert-success">
                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 text-success mb-4">Ce que vous apprendrez dans ce chapitre</h2>
                @foreach ($chapter->topics as $topic)
                    <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24">
                        <i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>
                        {{$topic->text}}
                    </h4>
                @endforeach

            </div>
        </div>
        <div class="col-xl-4 col-xxl-3 mt-3 mt-xl-0">
            <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0 shadow-xss">
                <div class="card-body p-3 d-block text-left">
                    <h1 class="display1-size text-current fw-700 mb-4">TEST</h1>
                    <h4 class="pl-35 mb-4 font-xsss fw-600 text-grey-900 position-relative"><i class="feather-help-circle font-xxl text-current position-absolute left-0"></i> <span class="text-grey-500 mt-1 font-md pl-1">{{$nb_questions}} questions  </span></h4>
                    <h4 class="pl-35 mb-4 font-xsss fw-600 text-grey-900 position-relative"><i class="feather-clock font-xxl text-current position-absolute left-0"></i> <span class="text-grey-500 mt-1 font-md pl-1">{{$duration}} min </span></h4>

                    <a href="{{route('chapters.test',$chapter->id)}}" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-lg d-block mt-4 w-100 p-2 lh-34 text-center ls-3 ">Démarrer le test</a>
                </div>
            </div>



            <div class="card shadow-xss rounded-lg border-0 p-4 mb-4">
                <h4 class="font-xs fw-700 text-grey-900 d-block mb-3">Lessons
                    {{-- <a href="#" class="float-right"><i class="ti-arrow-circle-right text-grey-500 font-xss"></i></a> --}}
                </h4>
                @foreach ($chapter->courses as $k=>$course)
                <div class="row ml-1 mt-3">
                    <div class="col-sm-1 p-0">
                        <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">{{$k+1}}</span>
                    </div>
                    <div class="col-sm-9 p-0">
                      <span class="font-xssss fw-500 text-grey-500 mx-2">{{$course->title}}</span>
                    </div>
                    <div class="col-sm-2 p-0">
                        <span class="font-xssss fw-900 text-grey-500">{{$course->duration}} min</span>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
