@extends('layouts.master')
@section('content')
<div class="middle-sidebar-left">
    <div class="row">
        <div class="col-12">
            <div class="card border-0 mb-0 rounded-lg overflow-hidden" style="background-image: url({{$course->files[0]->path}});">
                <div class="card-body p-5 bg-black-08">
                    {{-- <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-warning d-inline-block text-warning mr-1">Python</span> --}}
                    <h2 class="fw-700 font-lg d-block lh-4 mb-1 text-white mt-2">{{$course->title}}</h2>
                    <p class="font-xsss fw-500 text-grey-100 lh-30 pr-5 mt-3 mr-5">{{$course->description}}</p>
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
                    {{-- <a href="{{route('courses.show', $chapter->courses[0]->id)}}" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-lg d-inline-block mt-0 p-2 lh-34 text-center ls-3 w200">Démarrer</a> --}}
                </div>
            </div>


            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4">
                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Contenu</h2>
                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">{!!$course->text!!}</p>
            </div>
        </div>

    </div>
</div>
@endsection
