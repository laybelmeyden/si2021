<section class="about__section">
    <header>
        <nav>
            <div class="container">
                <div class="nav__content">
                    <div class="nav__content_years">
                        <a href="/years2011">
                            <div>
                                <p>2011</p>
                            </div>
                        </a>
                        <a href="/years2012">
                            <div>
                                <p>2012</p>
                            </div>
                        </a>
                        <a href="/years2013">
                            <div>
                                <p>2013</p>
                            </div>
                        </a>
                        <a href="/years2014">
                            <div>
                                <p>2014</p>
                            </div>
                        </a>
                        <a href="/years2015">
                            <div>
                                <p>2015</p>
                            </div>
                        </a>
                        <a href="/years2016">
                            <div>
                                <p>2016</p>
                            </div>
                        </a>
                        <a href="/years2017">
                            <div>
                                <p>2017</p>
                            </div>
                        </a>
                        <a href="/years2018">
                            <div>
                                <p>2018</p>
                            </div>
                        </a>
                        <a href="/years2019">
                            <div>
                                <p>2019</p>
                            </div>
                        </a>
                        <a href="/years2020">
                            <div>
                                <p>2020</p>
                            </div>
                        </a>
                        <a href="/">
                            <div>
                                <p>2021</p>
                            </div>
                        </a>
                    </div>
                    <div class="nav__content_language">
                        <div>
                            <a id="ru_lan" href="/locale/ru">ru</a>
                            <a id="en_lan" href="/locale/en">en</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="banners__si_2021">
            <div class="container">
                <div class="auth__btn">
                    <div class="auth__btn__burger_menu">
                        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
                        <label for="checkbox" class="mobile-menu__btn">
                            <div class="mobile-menu__icon"></div>
                        </label>
                    </div>
                    <div class="auth__btn_items">
                        @guest
                        <img src="/assets/img/auth_img.svg" alt="">
                        <div>
                            <a href="{{ route('login') }}">@lang('words.login')</a>
                            <a href="{{ route('register') }}">@lang('words.register')</a>
                        </div>
                        @else
                        <div class="mini__logo">
                            @if(Auth::user() -> user_avatar == null)
                            <img src="/assets/img/auth_img.svg" alt="">
                            @else
                            <img src="/storage/{{Auth::user() -> user_avatar}}" alt="">
                            @endif
                        </div>
                        <div>
                            <a href="/home">
                                {{ Auth::user()->user_name }}
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">@lang('words.exit')</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest
                    </div>
                </div>
                <div class="navigations__header">
                    <a href="/#about__tender">@lang('words.about')</a>
                    <a href="/#nominations">@lang('words.nomina')</a>
                    <a href="/#timeline__sections">@lang('words.stages')</a>
                    <a href="/#history">@lang('words.history')</a>
                    <a href="/#experts">@lang('words.expert')</a>
                    <a href="/#news">@lang('words.news')</a>
                    <!-- <a href="">галерея</a> -->
                    <a href="/#partners">@lang('words.parts')</a>
                    <a href="/#footer">@lang('words.contacts')</a>
                </div>
            </div>
        </div>
    </header>