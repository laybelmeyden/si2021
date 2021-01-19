@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Архив 2018 года')
@else
@section('title', 'Archive 2018')
@endif
@section('content')

</section>
<section class="years__blade_items">
    <div class="container">
        @if(App::isLocale('ru'))
        <h1>Архив 2018 года</h1>
        @else
        <h1>Archive 2018</h1>
        @endif
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/124c9e1ac4048294d6c62f2dd3a91103.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2018/telekom_amur_2018">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>HAHATHON AMURDIGITALHACK</p>
                            <p></p>
                            @else
                            <p>HAHATHON AMURDIGITALHACK</p>
                            <p></p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2018/telekom_amur_2018" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/Align-Portfolio-with-Strategy.png" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2018/telekom_hub_2018">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>MTS STARTUP HUB</p>
                            <p>Корпоративный акселератор</p>
                            @else
                            <p>MTS STARTUP HUB</p>
                            <p>Corporate accelerator</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2018/telekom_hub_2018" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/DdyMYMqV4AEgbO8.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2018/telekom_unior_2018">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ ЮНИОР</p>
                            <p>В рамках программы Телеком Идея по поиску, поддержке и развитию талантливой молодежи компании ПАО МТС ежегодно проводит конкурс для школьников 7-11 классов Телеком Идея Юниор</p>
                            @else
                            <p>TELECOM IDEA JUNIOR</p>
                            <p>Within the framework of the Telecom Idea program for the search, support and development of talented youth, MTS PJSC annually holds a competition for schoolchildren of grades 7-11 Telecom Idea Junior</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2018/telekom_unior_2018" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/scale_1200dsaa.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2018/telekom_idea_2018">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ 2018</p>
                            <p>Конкурс инновационных проектов молодежи в сфере информационно - коммуникационных технологий и услуг для решения коммерческих социальных и государственных задач</p>
                            @else
                            <p>TELECOM IDEA 2018</p>
                            <p>Competition of innovative youth projects in the field of information and communication technologies and services for solving commercial social and state problems</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2018/telekom_idea_2018" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/Hakaton.png" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2018/telekom_hack_2018">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>HAHATHON MTC 2018</p>
                            <p></p>
                            @else
                            <p>HAHATHON MTC 2018</p>
                            <p></p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2018/telekom_hack_2018" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
                    <a href="/years2018/telekom_it_2018">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ОКРУЖНЫЕ ИТ-ШКОЛЫ: ВСЕ ВОЗМОЖНОСТИ НА ОДНОЙ ПЛОЩАДКЕ!</p>
                            <p>Если ты интересуешься ИТ-технологиями, у тебя есть идея или проект, если ты мечтаешь о работе в крупной международной компании</p>
                            @else
                            <p>DISTRICT IT SCHOOLS: ALL OPPORTUNITIES IN ONE SITE!</p>
                            <p>If you are interested in IT technologies, you have an idea or a project, if you dream of working for a large international company</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2018/telekom_it_2018" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection