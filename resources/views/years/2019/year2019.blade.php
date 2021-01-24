@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Архив 2019 года')
@else
@section('title', 'Archive 2019')
@endif
@section('content')

</section>
<section class="years__blade_items">
    <div class="container">
        @if(App::isLocale('ru'))
        <h1>Архив 2019 года</h1>
        @else
        <h1>Archive 2019</h1>
        @endif
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/article.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2019/telekom_si_2019">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>SOCIAL IDEA 2019</p>
                            <p>Конкурс проектов, направленных на решение важных социальных проблем, с применением цифровых технологий</p>
                            @else
                            <p>SOCIAL IDEA 2019</p>
                            <p>Competition of projects aimed at solving important social problems using digital technologies</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2019/telekom_si_2019" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/krediidipoliitika-pilt-1-1024x683.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2019/telekom_school_2019">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ШКОЛЫ СОЦИАЛЬНОГО ПРЕДПРИНИМАТЕЛЬСТВА</p>
                            <p>В рамках программы ИТ-старт</p>
                            @else
                            <p>SOCIAL ENTREPRENEURSHIP SCHOOLS</p>
                            <p>Within the framework of the IT start program</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2019/telekom_school_2019" class="btn btn__modal_tender">@lang('words.more_info')<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/6ddafed67729afa5c098b.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2019/telekom_cup_2019">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>CUP RUSSIAN</p>
                            <p>Кейс-чемпионат</p>
                            @else
                            <p>CUP RUSSIAN</p>
                            <p>Case Championship</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2019/telekom_cup_2019" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/1080.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2019/telekom_raise_2019">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>RAISE</p>
                            <p>Образовательный проект</p>
                            @else
                            <p>RAISE</p>
                            <p>Educational project</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2019/telekom_raise_2019" class="btn btn__modal_tender">@lang('words.more_info')<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection