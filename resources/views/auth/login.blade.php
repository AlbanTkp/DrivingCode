@php
    $page_title="Connexion"
@endphp
@extends('layouts.auth')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group icon-input mb-3">
        <i class="font-sm ti-email text-grey-500 pr-0"></i>
        <input id="email" type="email" placeholder="Votre adresse mail" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group icon-input mb-1">
        <input id="password" type="password" placeholder="Mot de passe" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <i class="font-sm ti-lock text-grey-500 pr-0"></i>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-check text-left mb-3">
        <input class="form-check-input mt-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label font-xsss text-grey-500" for="remember">Restez connecter</label>
        @if (Route::has('password.request'))
         <a href="{{ route('password.request') }}" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Mot de passe oublié ?</a>
        @endif
    </div>

    <div class="col-sm-12 p-0 text-left">
        <div class="form-group mb-1">
            <button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Connexion</button>
        </div>
        <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Vous n'avez pas un compte <a href="{{route('register')}}" class="fw-700 ml-1">Inscrivez-vous !</a></h6>
    </div>
    <div class="col-sm-12 p-0 text-center mt-2">

    </div>
</form>

@endsection
