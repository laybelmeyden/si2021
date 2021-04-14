<div class="left__navbar">
    <div class="sticky__bar">
        <div class="left__navbar_logo">
            <img src="/assets/img/logo_lk.svg" alt="logo_lk.svg">
        </div>
        <div class="left__navbar_title">
            <div class="img">
                @if(Auth::user() -> user_avatar == null)
                <img src="/assets/img/user__logo.svg" alt="">
                @else
                <img src="/storage/{{Auth::user() -> user_avatar}}" alt="">
                @endif
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
            <a href="https://disk.yandex.ru/d/9WRSlvX_hX3IpQ?w=1" target="_blank">
                <div id="vebinar">
                Инструкция заполнения
                </div>
            </a>
            @if(Auth::user() -> role_id === 1)
            <a href="/allUsers">
                <div id="allUsers">
                    Все пользователи
                </div>
            </a>
            <a href="{{ route('projects.index') }}">
                <div id="projects">
                Все проекты
                </div>
            </a>
            @endif
        </div>
    </div>
</div>