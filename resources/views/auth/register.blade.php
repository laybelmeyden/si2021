@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021 - Регистрация')
@section('content')
</section>
<div class="container" id="auth__form">
    <div class="card__auth">
        <p>Регистрация</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <input id="name" 
                type="text" 
                class="form-control @error('name') is-invalid @enderror" 
                name="name" 
                value="{{ old('name') }}" 
                required 
                autocomplete="name" 
                autofocus
                placeholder="Логин"
                >

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input id="email" 
                type="email" 
                class="form-control @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email"
                placeholder="E-mail"
                >

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input id="password" 
                type="password" 
                class="form-control @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="new-password"
                placeholder="Пароль"
                >

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input id="password-confirm" 
                type="password" 
                class="form-control" 
                name="password_confirmation" 
                required 
                autocomplete="new-password"
                placeholder="Введите пароль еще раз"
                >
            </div>
            <div  class="btn__submit_container_register">
                <button type="submit" class="btn btn-primary-forms-submit">
                    Регистрация
                </button>
            </div>
        </form>
    </div>
</div>
@endsection