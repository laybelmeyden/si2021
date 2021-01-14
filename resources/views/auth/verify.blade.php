@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021 - Авторизация')
@section('content')
</section>
<div class="container" id="auth__form">
            <div class="card__auth">
            <p>Подтвердите свой E-mail адрес</p>

                    <!-- @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif -->
                    <p class="verify__email_p">
                    Прежде чем продолжить, пожалуйста, проверьте свою электронную почту.
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
