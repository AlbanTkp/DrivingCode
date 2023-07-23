@php
    $page_title="Mot de passe oublié"
@endphp

@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    @csrf

    <div class="form-group icon-input mb-3">
        <input id="email" type="email" placeholder="Votre adresse mail" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <i class="font-sm ti-email text-grey-500 pr-0"></i>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-sm-12 p-0 text-left">
        <div class="form-group mb-1">
            <button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Recevoir le lien de réinitialisation</button>
        </div>
    </div>
</form>
@endsection
