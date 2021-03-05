@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021 - Авторизация')
@section('content')
</section>
<div class="container" id="auth__form">
            <div class="card__auth">
            <p>Успешная регистрация !</p>

                    <!-- @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif -->
                    <p class="verify__email_p">
                    Осталось только подтвердить Ваш email и вы получите доступ к личному кабинету, ссылка для подтверждения отправлена на Ваш email.
                    </p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div class="btn__submit_container btn__verify">
                        <button type="submit" class="btn btn-primary-forms-submit">Нажмите сюда, если письмо не пришло</button>
                        </div>
                    </form>
                    
            </div>
</div>
@endsection
