@extends('profile.master')
@section('title', 'Настройки профиля')
@section('content')
<section id="admin_allusers">
<div id="app" class="nav__items">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div class="table__all_users">
    <expert-project  ></expert-project>
    </div>
</div>
</section>
@endsection