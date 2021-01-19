@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'СТАРТАП-МАРАФОН ФРИИ В ЯРОСЛАВЛЕ!')
@else
@section('title', 'FRIAS STARTUP MARATHON IN YAROSLAVL!')
@endif
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="years__project_grid">
            <div class="years__project_sticky">
                @if(App::isLocale('ru'))
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p>1 этап</p>
                        <p>12:00-14:30</p>
                        <p>Регистрация участников, вводная часть, образовательная часть</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 этап</p>
                        <p>15:00-18:30</p>
                        <p>Питчи стартапов, экспертная сессия</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>18:30-19:00</p>
                        <p>Объявление результатов</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Stage 1 </p>
                        <p> 12: 00-14: 30 </p>
                        <p> Registration of participants, introductory part, educational part </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Stage 2 </p>
                        <p> 15: 00-18: 30 </p>
                        <p> Startup pitches, expert session </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> 18: 30-19: 00 </p>
                        <p> Announcement of results </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">СТАРТАП-МАРАФОН ФРИИ В ЯРОСЛАВЛЕ!</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    3 июня (суббота) в Ярославле пройдет Стартап-марафон ФРИИ при поддержке Корпорации развития МСП (БИЗНЕС-ИНКУБАТОР Ярославской области) и ПАО МТС.
                </p>
                <p>
                    Приглашаем стартапы и бизнес-проекты в сфере ИТ, интернета и мобильных технологий принять участие в бесплатном и очень полезном мероприятии. Участников ждут:
                    <br><br>
                    мастер-классы и воркшопы экспертов и серийных предпринимателей
                    индивидуальные консультации с экспертами и инвесторами
                    приглашение лучших команд в инвестиционные программы ФРИИ и полуфинал программы Телеком Идея от ПАО МТС
                    Не пропустите возможность за один день изменить темп развития вашего бизнеса и получить ценнейшие идеи и контакты!
                    <br><br>
                    Для того, чтобы принять участие, необходимо до 31 мая подать заявку.


                </p>
            </div>
            @else

            <div>
                <p class="title__years_solo"> STARTUP-MARATHON FRIA IN YAROSLAVL! </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    On June 3 (Saturday), the IIDF Startup Marathon will be held in Yaroslavl with the support of the SME Development Corporation (BUSINESS INCUBATOR of the Yaroslavl Region) and MTS PJSC.
                </p>
                <p>
                    We invite startups and business projects in the field of IT, Internet and mobile technologies to take part in a free and very useful event. Participants are waiting for:
                    <br> <br>
                    master classes and workshops by experts and serial entrepreneurs
                    individual consultations with experts and investors
                    invitation of the best teams to the IIDF investment programs and the semi-finals of the Telecom program Idea from MTS PJSC
                    Don't miss the opportunity to change the pace of your business development in one day and get the most valuable ideas and contacts!
                    <br> <br>
                    In order to take part, you must submit an application by May 31st.


                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection