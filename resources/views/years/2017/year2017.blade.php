@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Архив 2017 года')
@else
@section('title', 'Archive 2017')
@endif
@section('content')

</section>
<section class="years__blade_items">
    <div class="container">
        @if(App::isLocale('ru'))
        <h1>Архив 2017 года</h1>
        @else
        <h1>Archive 2017</h1>
        @endif
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/sirket-bilgilerimiz.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2017/telekom_rostov_2017">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>СТАРТАП-ХАКАТОН ЮФО В РОСТОВЕ-НА-ДОНУ</p>
                            <p>Стартап-хакатон</p>
                            @else
                            <p>STARTUP-HAKATON SOFD IN ROSTOV-ON-DON</p>
                            <p>Startup hackathon</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2017/telekom_rostov_2017" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/scale_1200.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2017/telekom_yarik_2017">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>СТАРТАП-МАРАФОН ФРИИ В ЯРОСЛАВЛЕ!</p>
                            <p>Стартап-марафон</p>
                            @else
                            <p>FRIA'S STARTUP MARATHON IN YAROSLAVL!</p>
                            <p>Startup marathon</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2017/telekom_yarik_2017" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/cover.png" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2017/telekom_spirit_2017">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>SOCIAL SPIRIT</p>
                            <p>Хакатон МТС </p>
                            @else
                            <p>SOCIAL SPIRIT</p>
                            <p>Hackathon MTS</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2017/telekom_spirit_2017" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/14772f409339a9fb758e6.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2017/telekom_cup_2017">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>CHANGELLENGE >> CUP RUSSIAN 2017</p>
                            <p> Финал главного кейс-чемпионата</p>
                            @else
                            <p>CHANGELLENGE >> CUP RUSSIAN 2017</p>
                            <p>Final of the main case championship</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2017/telekom_cup_2017" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/business-objects-PV4F7XV-2048x1365.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2017/telekom_idea_2017">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ 2017</p>
                            <p>Конкурс инновационных проектов моложеи в сфере информационно-коммуникационных технологий и услуг для решения коммерческих, социальных и государственных задач </p>
                            @else
                            <p>TELECOM IDEA 2017</p>
                            <p>Competition for innovative projects of the younger in the field of information and communication technologies and services for solving commercial, social and government problems</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2017/telekom_idea_2017" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection