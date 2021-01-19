@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ШКОЛЫ СОЦИАЛЬНОГО ПРЕДПРИНИМАТЕЛЬСТВА')
@else
@section('title', 'SOCIAL ENTREPRENEURSHIP SCHOOLS')
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
                        <p>Краснодар</p>
                        <p>19 – 21 апреля</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Тольятти</p>
                        <p>26 – 28 апреля</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Челябинск</p>
                        <p>17 – 19 мая</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Благовещенск</p>
                        <p>24 – 26 мая</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Рязань</p>
                        <p>29 – 31 мая</p>
                        <p></p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Krasnodar </p>
                        <p> April 19 - 21 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Togliatti </p>
                        <p> April 26 - 28 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Chelyabinsk </p>
                        <p> May 17 - 19 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Blagoveshchensk </p>
                        <p> May 24 - 26 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Ryazan </p>
                        <p> May 29 - 31 </p>
                        <p> </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ШКОЛЫ СОЦИАЛЬНОГО ПРЕДПРИНИМАТЕЛЬСТВА</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Что такое школы социального предпринимательства?
                </p>
                <p>
                    Это интенсивный 3-дневный курс, он включает в себя мастер-классы на тему, как создать социальный бизнес – собрать команду проекта, подготовить качественную презентацию, найти партнеров и получить финансирование; практические занятия по современным IT-технологиям; питчи участников обучения.
                    <br><br>
                    Школы социального предпринимательства являются региональными отборочными этапами проекта «Social Idea», то есть в результате обучения участники получают возможность защитить свой проект и попасть в полуфинал международного конкурса.
                    <br><br>Города проведения школ социального предпринимательства:
                    <br><br>• 19.04 - 21.04 — Краснодар
                    <br><br>• 26.04 - 28.04 — Тольятти
                    <br><br>• 17.05 - 19.05 — Челябинск
                    <br><br>• 24.05 - 26.05 — Благовещенск
                    <br><br>• 29.05 - 31.05 — Рязань
                    <br><br>Кто проводит
                    <br><br>Организатор школ социального предпринимательства — Агентство инновационного развития, при поддержке Фонда президентских грантов и компании ПАО «МТС».
                    <br><br>В числе экспертов стартап-школ – сотрудники МТС, преподаватели местных и московских ВУЗов, а также представители региональных бизнес-сообществ, IT бизнеса и инновационной инфраструктуры.
                    <br><br>Подайте заявку на участие в школе социального предпринимательства

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> SOCIAL ENTREPRENEURSHIP SCHOOLS </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    What are social entrepreneurship schools?
                </p>
                <p>
                    This is an intensive 3-day course, it includes master classes on how to create a social business - to assemble a project team, prepare a high-quality presentation, find partners and obtain funding; practical training on modern IT technologies; pitches of the training participants.
                    <br> <br>
                    Schools of social entrepreneurship are the regional qualifying stages of the Social Idea project, that is, as a result of training, participants get the opportunity to defend their project and get to the semifinals of the international competition.
                    <br> <br> Cities for schools of social entrepreneurship:
                    <br> Exhibition • 19.04 - 21.04 - Krasnodar
                    <br> Exhibition • 26.04 - 28.04 - Togliatti
                    <br> Exhibition • 17.05 - 19.05 - Chelyabinsk
                    <br> Exhibition • 24.05 - 26.05 - Blagoveshchensk
                    <br> Exhibition • 29.05 - 31.05 - Ryazan
                    <br> <br> Who conducts
                    <br> <br> The organizer of the schools of social entrepreneurship is the Agency for Innovative Development, with the support of the Presidential Grants Fund and MTS PJSC.
                    <br> <br> Experts of start-up schools include MTS employees, teachers of local and Moscow universities, as well as representatives of regional business communities, IT business and innovation infrastructure.
                    <br> <br> Apply for the School of Social Entrepreneurship

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection