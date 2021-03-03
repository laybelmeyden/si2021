@extends('profile.master')
@section('title', 'Настройки профиля')
@section('content')
<div id="app" class="nav__items">
<div>
@include('profile.left_navbar')
</div>
<div>
    <h1>Настройки профиля</h1>
    <form action="{{ route('updateCurrentUser',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Имя:{{ $user -> user_name}}</strong>
                    <input type="text" name="user_name" value="" class="form-control" placeholder="{{ $user -> user_name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Фамилия:{{ $user -> user_surname}}</strong>
                    <input type="text" name="user_surname" value="" class="form-control" placeholder="{{ $user -> user_surname}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Отчество:{{ $user -> user_middlename}}</strong>
                    <input type="text" name="user_middlename" value="" class="form-control" placeholder="{{ $user -> user_middlename}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Телефон:{{ $user -> user_phone}}</strong>
                    <input type="text" name="user_phone" value="" class="form-control" placeholder="{{ $user -> user_phone}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Город:{{ $user -> user_city}}</strong>
                    <input type="text" name="user_city" value="" class="form-control" placeholder="{{ $user -> user_city}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Образование:{{ $user -> user_education}}</strong>
                    <input type="text" name="user_education" value="" class="form-control" placeholder="{{ $user -> user_education}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Доп инфо:{{ $user -> user_moreinfo}}</strong>
                    <input type="text" name="user_moreinfo" value="" class="form-control" placeholder="{{ $user -> user_moreinfo}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
</div>
@endsection
