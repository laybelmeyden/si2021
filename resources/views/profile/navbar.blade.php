<nav>
    <div class="container nav__content">
        <div class="nav__content_href">
            <a href="/">НА ГЛАВНУЮ</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">@lang('words.exit')</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <div class="nav__content_language">
            <div>
                <a id="ru_lan" href="/locale/ru">ru</a>
                <a id="en_lan" href="/locale/en">en</a>
            </div>
        </div>
    </div>
</nav>