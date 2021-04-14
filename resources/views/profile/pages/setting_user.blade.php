@extends('profile.master')
@section('title', 'Настройки профиля')
@section('content')

@include('profile.alerts')
<section id="setting__profile">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div id="app" class="nav__items">
        <div>
            <h1>МОЙ ПРОФИЛЬ</h1>
            <form action="{{ route('updateCurrentUser',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="settings__form">
                    <div class="item">
                        <label for="user_name">Имя и Фамилия</label>
                        <input type="text" name="user_name" id="user_name" value="{{ $user -> user_name}}" class="form-control" placeholder="Иванов Иван" required>
                    </div>
                    <div class="item">
                        <label for="user_phone">Мобильный телефон</label>
                        <input type="text" name="user_phone" id="user_phone" value="{{ $user -> user_phone}}" class="form-control" placeholder="+7 988 888 88 88" required>
                    </div>
                    <div class="item">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" value="{{ $user -> email}}" class="form-control" placeholder="example@gmail.com" required>
                    </div>
                    <div class="item">
                        <label for="user_city">Город (место проживания страна/город)</label>
                        <input type="text" name="user_city" id="user_city" value="{{ $user -> user_city}}" class="form-control" placeholder="Москва" required>
                    </div>
                    <user-cropp></user-cropp>
                    <div class="item">
                        <div class="checkboxes">
                            <input id="check__itstart" type="checkbox" name="check__itstart" @if($user -> check__itstart === 'on')
                            checked
                            @endif
                            /><label class="green-background" for="check__itstart">Участник региональной программы <a href="/">Social Idea 2021 «IT-Start»</a></label>
                        </div>
                    </div>
                    <div class="item">
                        <p>Выбирая данное поле, вы подтверждаете, что являетесь участником региональной программы Social Idea 2021 «IT-Start».</p>
                        <p>
                            <span>!Если вы не участник региональной программы, оставьте поле незаполненным!</span>
                        </p>
                        <p>Подробности о региональной программе смотри на <a href="/">сайте</a> конкурса.</p>
                    </div>
                    <div class="item">
                        <button type="submit" class="btn btn__setting">СОхРАНИТЬ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection