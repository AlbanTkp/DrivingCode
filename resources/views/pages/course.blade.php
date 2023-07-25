@extends('layouts.master')
@section('content')
<div class="middle-sidebar-left">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card border-0 mb-0 rounded-lg overflow-hidden" style="background-image: url({{$course->files[0]->path}});">
                        <div class="card-body p-5 bg-black-08">
                            <h2 class="fw-700 font-lg d-block lh-4 mb-1 text-white mt-2">{{$course->title}}</h2>
                            <p class="font-xsss fw-500 text-grey-100 lh-30 pr-5 mt-3 mr-5">{{$course->description}}</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0">
                    <div class="card h-100 overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0 shadow-xss">
                        <div class="card-body p-3 d-block text-left">
                            <h1 class="display1-size text-current fw-700 mb-4">Simulations</h1>
                            <div class="px-4">
                                <a href="#" onclick="alert('Cette option n\'est pas encore disponible')" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-lg d-block mt-4 w-100 p-2 lh-34 text-center ls-3">Commencer les simulations</a>
                                {{-- <a href="{{route('simulations.show',$course->simulations[0]->id)}}" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase font-xssss float-left rounded-lg d-block mt-4 w-100 p-2 lh-34 text-center ls-3">Commencer les simulations</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4">
                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Contenu</h2>
                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">
                    {!!$course->text!!}
                </p>
                <div class="row">
                    @if ($previous_id != 0)
                    <div class="col-{{$next_id != 0 ? '6':'12'}}">
                        <a href="{{route('courses.show',$previous_id)}}" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase  float-left rounded-lg d-block mt-4 w-100 p-2 lh-34 text-center ls-3 "><i class="feather-chevrons-left"></i> Lesson Précédente</a>
                    </div>
                    @endif
                    @if ($next_id != 0)
                    <div class="col-{{$previous_id != 0 ? '6':'12'}}">
                        <a href="{{route('courses.show',$next_id)}}" class="bg-primary-gradiant border-0 text-white fw-600 text-uppercase  float-left rounded-lg d-block mt-4 w-100 p-2 lh-34 text-center ls-3 "> Lesson suivante <i class="feather-chevrons-right"></i></a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
