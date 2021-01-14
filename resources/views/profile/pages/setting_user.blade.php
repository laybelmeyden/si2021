@extends('profile.master')
@section('title', 'Настройки профиля')
@section('content')
<div id="app" class="nav__items">
<div>
@include('profile.left_navbar')
</div>
<div id="contants" class="container">
<div class="card__project">
    <input type="text" placeholder="{{$user -> name}}">
</div>
</div>
</div>
@endsection
