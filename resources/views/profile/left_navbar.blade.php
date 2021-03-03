<!-- <div id="laft_nav__container"> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
    </svg> -->
    <div class="left_nav__items">
        <div class="left_nav__avatar">
            <div class="left_nav__border">
                <img src="/assets/img/auth_img.svg" alt="">
            </div>
        </div>
        <div class="auth__user_info">
            <p>{{ Auth::user()->name }}</p>
            <p>{{ Auth::user()->email }}</p>
        </div>
        <a href="/home">Мой проект</a><br><br>
        <!-- <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Выход</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> -->
        <!-- <a href="/setting_profile/{{ Auth::user()->id }}">Настройки профиля</a><br><br>
        <a href="/allUsers">Все пользователи</a><br><br> -->
    </div>
<!-- </div> -->