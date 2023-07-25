@extends('layouts.master')
@section('script')
@endsection
@section('content')
<div class="middle-sidebar-left">
    <div class="row">
        <div class="col-xxl-4 col-xl-5 col-md-12">
            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-md-5 p-4 border-0 text-center">
                <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3">
                    {{-- <i class="ti-more text-grey-500 font-xs"></i> --}}
                </a>
                <img src="{{$chapter->banner}}" alt="icon" class="p-1 img-fluid">
                <h4 class="fw-700 font-xs mt-4">{{$chapter->title}}</h4>
                {{-- <p class="fw-500 font-xssss text-grey-500 mt-3">Chapitre signalisation</p> --}}
                <div class="clearfix"></div>
                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 bg-lightblue d-inline-block text-grey-800 mr-1">{{$questions->count()}} questions</span>
                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">{{$duration}} Min</span>
                <div class="clearfix"></div>
                {{-- <ul class="memberlist mt-4 mb-2">
                    <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                    <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                    <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                    <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                    <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                    <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">ont fait ce chapitre</a></li>
                </ul> --}}
                <div class="card-body p-0 w250 ml-auto mr-auto"><div class="timer mt-4 mb-2"></div></div>
                <div class="clearfix"></div>


                {{-- <a href="#" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">APPLIED</a> --}}
            </div>
        </div>
        <div class="col-xxl-8 col-xl-7 col-md-12">
            <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-5 border-0 text-left question-div">
                @foreach($questions as $k=>$question)
                <div class="card-body p-0" id="question{{$k}}" @if($k!=0)style="display: none;"@endif>
                    <h4 class="font-xssss text-uppercase text-current fw-700 ls-3">Question {{$k+1}}</h4>
                    <h3 class="font-sm text-grey-800 fw-700 lh-32 mt-4 mb-4">{{$question->text}}</h3>
                    @foreach($question->answers as $answer)
                    <p data-answer="{{$answer->id}}" class="bg-lightblue theme-dark-bg  p-4 mt-3 question-ans style1 rounded-lg font-xsss fw-600 lh-30 text-grey-700 mb-0 p-2">{{$answer->text}}</p>
                    @endforeach
                    <a href="#" data-current="{{$k}}" data-question="question{{$k+1}}" class="next-bttn p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">NEXT</a>
                </div>
                @endforeach
                <div class="card-body text-center p-3 bg-no-repeat bg-image-topcenter" id="question{{$k+1}}" style="display: none; background-image: url({{asset('assets/images/user-pattern.png')}});">
                    {{-- <img src="images/world-cup.png" alt="icon" class="d-inline-block"> --}}
                    <h2 class="fw-700 mt-5 text-grey-900 font-xxl">Congratulation</h2>
                    <p class="font-xssss fw-600 lh-30 text-grey-500 mb-0 p-2">Vous avez terminé le test. Votre note est de:</p>
                    <a id="score" href="{{route('stats')}}" class="p-2 mt-3 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current"></a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
