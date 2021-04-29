@extends('profile.master')
@section('title', 'Настройки профиля')
@section('content')
@include('profile.alerts')
<section id="admin_allusers">
<div id="app" class="nav__items">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div class="table__all_users">
    <expert-view 
    :currentuserdata='@json($currentUser)' 
    :currentprojectdata='@json($currentprojectsdata)'
    :currentuserdatalinks='@json($currentuserdatalinks)'></expert-view>
    </div>
</div>
</section>
@endsection