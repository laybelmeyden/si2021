@extends('profile.master')
@section('title', 'Настройки профиля')
@section('content')
<section id="admin_allusers">
<div id="app" class="nav__items">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div class="table__all_users">
    <h1>Просмотр пользователя - {{$id -> email}}</h1>
    <table class="table table-hover">
        <tr>
            <th>ID</th><th>{{$id -> id}}</th>
        </tr>
        <tr>
            <th>Имя и Фамилия</th><th>{{$id -> user_name}}</th>
        </tr>
        <tr>
            <th>Email</th><th>{{$id -> email}}</th>
        </tr>
        <tr>
            <th>Мобильный телефон</th><th>{{$id -> user_phone}}</th>
        </tr>
        <tr>
            <th>Город (место проживания страна/город)</th><th>{{$id -> user_city}}</th>
        </tr>
        <tr>
            <th>IT start 2021</th><th>{{$id -> check__itstart}}</th>
        </tr>
    </table>
    </div>
</div>
</section>
@endsection