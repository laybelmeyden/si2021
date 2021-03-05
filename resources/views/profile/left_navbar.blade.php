<div class="left__navbar">
    <div class="left__navbar_logo">
        <img src="/assets/img/logo_lk.svg" alt="logo_lk.svg">
    </div>
    <div class="left__navbar_title">
        <div class="img">
            <img src="/assets/img/user__logo.svg" alt="">
        </div>
        <div class="info">
            <div class="info__name">
                <p>{{ Auth::user()->user_name }}</p>
            </div>
            <div class="info__email">
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
    <div class="left__navbar_href">
        <a href="/home">
            <div id="home">
                Мой проект
            </div>
        </a>
        <a href="/setting_profile/{{ Auth::user()->id }}">
            <div id="setting_profile">
                Настройки профиля
            </div>
        </a>
        @if(Auth::user() -> role_id === 1)
        <a href="/allUsers">
            <div id="allUsers">
                Все пользователи
            </div>
        </a>
        @endif
    </div>
</div>