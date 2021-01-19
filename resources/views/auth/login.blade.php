@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021 - Авторизация')
@section('content')
</section>
<div class="container" id="auth__form">

    <div class="card__auth">
    <p>@lang('words.login')</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <input id="email" 
                type="email" 
                class="form-control-froms @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email" 
                autofocus
                placeholder="E-mail">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input id="password" 
                type="password" 
                class="form-control-froms @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="current-password"
                placeholder="Пароль">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="btn__submit_container">
                @if (Route::has('password.request'))
                <a class="btn btn-forms-remembe" href="{{ route('password.request') }}">
                    @lang('words.remembe')
                </a>
                @endif
                <button type="submit" class="btn btn-primary-forms-submit">
                @lang('words.login')
                </button>
            </div>
        </form>
    </div>
</div>
@endsection