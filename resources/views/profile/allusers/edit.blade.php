@extends('profile.master')
@section('title', 'Настройки профиля')
@section('content')
<div id="app" class="nav__items">
<div>
@include('profile.left_navbar')
</div>
<div>
    <h1>Настройки профиля</h1>
    <form action="" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Имя:{{ $id -> email}}</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Имя:{{ $id -> user_name}}</strong>
                    <input type="text" name="user_name" value="{{ $id -> user_name}}" class="form-control" placeholder="{{ $id -> user_name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Фамилия:{{ $id -> user_surname}}</strong>
                    <input type="text" name="user_surname" value="{{ $id -> user_surname}}" class="form-control" placeholder="{{ $id -> user_surname}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Отчество:{{ $id -> user_middlename}}</strong>
                    <input type="text" name="user_middlename" value="{{ $id -> user_middlename}}" class="form-control" placeholder="{{ $id -> user_middlename}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Телефон:{{ $id -> user_phone}}</strong>
                    <input type="text" name="user_phone" value="{{ $id -> user_phone}}" class="form-control" placeholder="{{ $id -> user_phone}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Город:{{ $id -> user_city}}</strong>
                    <input type="text" name="user_city" value="{{ $id -> user_city}}" class="form-control" placeholder="{{ $id -> user_city}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Образование:{{ $id -> user_education}}</strong>
                    <input type="text" name="user_education" value="{{ $id -> user_education}}" class="form-control" placeholder="{{ $id -> user_education}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Доп инфо:{{ $id -> user_moreinfo}}</strong>
                    <input type="text" name="user_moreinfo" value="{{ $id -> user_moreinfo}}" class="form-control" placeholder="{{ $id -> user_moreinfo}}">
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
