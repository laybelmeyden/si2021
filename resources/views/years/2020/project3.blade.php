@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ПРОГРАММА “IT-START” КОНКУРСА «SOCIAL IDEA»')
@else
@section('title', 'PROGRAM "IT-START" COMPETITION "SOCIAL IDEA"')
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
                        <p>Осень 2020</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Калининград</p>
                        <p>Осень 2020</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Уфа</p>
                        <p>Осень 2020</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Якутск</p>
                        <p>Осень 2020</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Рязань</p>
                        <p>Осень 2020</p>
                        <p></p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Krasnodar </p>
                        <p> Autumn 2020 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Kaliningrad </p>
                        <p> Autumn 2020 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Ufa </p>
                        <p> Autumn 2020 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Yakutsk </p>
                        <p> Autumn 2020 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Ryazan </p>
                        <p> Autumn 2020 </p>
                        <p> </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ПРОГРАММА “IT-START” КОНКУРСА «SOCIAL IDEA»</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                </p>
                <p>
                    Это интенсивный 3 - дневный курс, который включает в себя мастер-классы на тему как создать социальный бизнес – собрать команду проекта, подготовить качественную презентацию, найти партнеров и получить финансирование, практические занятия по современным IT-технологиям, питчи финалистов.
                    <br><br> IT школы являются региональными отборочными этапами конкурса «Social Idea»: в результате обучения участники получают возможность защитить свой проект и попасть в полуфинал международного конкурса.
                    <br><br> В числе экспертов – сотрудники МТС, преподаватели местных и московских ВУЗов, а также представители региональных бизнес-сообществ, IT бизнеса и инновационной инфраструктуры.
                    <br><br> Организатор — Агентство инновационного развития при поддержке ПАО «МТС».
                    <br><br> Регистрация на сайте: https://www.itstart2020.ru
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> “IT-START” PROGRAM OF THE “SOCIAL IDEA” COMPETITION </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                </p>
                <p>
                    This is an intensive 3-day course, which includes master classes on how to create a social business - to assemble a project team, prepare a high-quality presentation, find partners and receive funding, practical exercises on modern IT technologies, and finalist pitches.
                    <br> <br> IT schools are regional qualifying stages of the "Social Idea" competition: as a result of training, participants get the opportunity to defend their project and get to the semifinals of the international competition.
                    <br> <br> Among the experts are MTS employees, teachers of local and Moscow universities, as well as representatives of regional business communities, IT business and innovation infrastructure.
                    <br> <br> Organizer - Agency for Innovative Development with the support of MTS PJSC.
                    <br> <br> Registration on the website: https://www.itstart2020.ru
                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection