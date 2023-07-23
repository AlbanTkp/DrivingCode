@php
    $page_title="Inscription"
@endphp
@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group icon-input mb-3">
        <i class="font-sm ti-user text-grey-500 pr-0"></i>
        <input id="lastname" type="text" placeholder="Votre nom" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
        @error('lastname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group icon-input mb-3">
        <i class="font-sm ti-user text-grey-500 pr-0"></i>
        <input id="firstname" type="text" placeholder="Votre prénom" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600 @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
        @error('firstname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group icon-input mb-3">
        <i class="font-sm ti-mobile text-grey-500 pr-0"></i>
        <input id="tel" type="tel" placeholder="Votre téléphone" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600 @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>
        @error('tel')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group icon-input mb-3">
        <i class="font-sm ti-email text-grey-500 pr-0"></i>
        <input id="email" type="email" placeholder="Votre email" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     </div>
     <div class="form-group icon-input mb-1">
        <input id="password" type="password" placeholder="Mot de passe" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
         <i class="font-sm ti-lock text-grey-500 pr-0"></i>
         @error('password')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="form-group icon-input mb-1">
        <input id="password-confirm" type="password" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmation du mot de passe">
         <i class="font-sm ti-lock text-grey-500 pr-0"></i>
     </div>
    <div class="col-sm-12 p-0 text-left">
        <div class="form-group mb-1">
            <button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Inscription</button>
        </div>
        <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Vous avez un compte? <a href="{{route('login')}}" class="fw-700 ml-1">Connectez-vous !</a></h6>
    </div>
    <div class="col-sm-12 p-0 text-center mt-2">

    </div>
</form>
@endsection
