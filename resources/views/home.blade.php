@extends('profile.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')
<section id="peoject__sections">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div class="card__project" id="app">
        <h1>МОЙ ПРОЕКТ</h1>
        @if(
            (Auth::user()->user_name === null) || 
            (Auth::user()->user_phone === null) ||
            (Auth::user()->email === null) ||
            (Auth::user()->user_city === null)
            )
        <div class="no__project">
            <p>Внимание! Заполните <a href="/setting_profile/{{ Auth::user()->id }}">настройки профиля</a> чтобы получить возможность отправлять проекты
            </p>
        </div>
        @else
        <project></project>
        @endif
    </div>
</section>
@endsection