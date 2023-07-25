@extends('layouts.master')

@section('content')
<div class="row w-100">
    @forelse ($chapters as $chapter)
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card mb-4 d-block w-100 shadow-xss rounded-lg p-xxl-5 p-4 border-0 text-center">
            <a href="#" class="position-absolute right-0 mr-4 top-0 mt-3"><i class="ti-more text-grey-500 font-xs"></i></a>
            <a href="#" class="btn-round-xxxl rounded-lg bg-lightblue ml-auto mr-auto">
                <img src="{{asset('assets/images/'.$chapter->banner)}}" style="width: 60px; height: 60px;" alt="icon" class="p-1">
            </a>
            <h4 class="fw-700 font-xs mt-4">{{$chapter->title}}</h4>
            <p class="fw-500 font-xssss text-grey-500 mt-3">{{$chapter->description}}</p>
            <div class="clearfix"></div>
            {{-- <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mb-1 mr-1">{{$chapter->questions->count()}} questions</span> --}}
            <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info mb-1">{{$chapter->duration}}</span>
            <div class="clearfix"></div>
            {{-- <ul class="memberlist mt-4 mb-2">
                <li><a href="#"><img src="images/user-6.png" alt="user" class="w30 d-inline-block"></a></li>
                <li><a href="#"><img src="images/user-7.png" alt="user" class="w30 d-inline-block"></a></li>
                <li><a href="#"><img src="images/user-8.png" alt="user" class="w30 d-inline-block"></a></li>
                <li><a href="#"><img src="images/user-3.png" alt="user" class="w30 d-inline-block"></a></li>
                <li class="last-member"><a href="#" class="bg-greylight fw-600 text-grey-500 font-xssss ls-3">+2</a></li>
                <li class="pl-4 w-auto"><a href="#" class="fw-500 text-grey-500 font-xssss">suivent ce chapter</a></li>
            </ul> --}}

            <a href="{{route('chapters.show', $chapter->id)}}" class="p-2 mt-4 d-inline-block text-white fw-700 lh-30 rounded-lg w200 text-center font-xsssss ls-3 bg-current">Démarrer</a>
        </div>
    </div>
    @empty
    <div class="col-lg-12 text-center">
        <h3>Aucun cours disponible pour le moment</h3>
    </div>
    @endforelse
</div>
@endsection
