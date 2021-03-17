@extends('profile.master')
@section('title', 'Настройки профиля')
@section('content')
<section id="admin_allusers">
    <div id="app" class="nav__items">
        <div class="profile__left_navbar">
            @include('profile.left_navbar')
        </div>
        <div class="table__all_users">
            <h1>Редактирование пользователя - {{$id -> email}}</h1>
            <form action="" method="POST">
                @csrf
                @method('PUT')

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Почта: {{ $id -> email}}</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>ФИО:</label>
                        <input type="text" name="user_name" value="{{ $id -> user_name}}" class="form-control" placeholder="{{ $id -> user_name}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Телефон:</label>
                        <input type="text" name="user_phone" value="{{ $id -> user_phone}}" class="form-control" placeholder="{{ $id -> user_phone}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Город</label>
                        <input type="text" name="user_city" value="{{ $id -> user_city}}" class="form-control" placeholder="{{ $id -> user_city}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn__all_users">Сохранить</button>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection