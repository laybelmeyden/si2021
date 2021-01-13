@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021 - Восстановление пароля')
@section('content')
</section>
<div class="container" id="auth__form">
    <div class="card__auth">
        <p>Восстановление пароля</p>
        <p class="un_title">Введите почту на которую будет отправлено письмо с новым паролем</p>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <input id="email" 
                type="email" 
                class="form-control @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email" 
                autofocus
                placeholder="E-mail"
                >

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div  class="btn__submit_container_register">
                <button type="submit" class="btn btn-primary-forms-submit">
                    Сбросить
                </button>
            </div>
        </form>
    </div>
</div>
@endsection