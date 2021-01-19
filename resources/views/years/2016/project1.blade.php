@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ ЮНИОР')
@else
@section('title', 'TELECOM IDEA JUNIOR')
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
                        <p>3 марта – 10 июня</p>
                        <p>Старт проекта, прием заявок, организация отборочных мероприятий. Определение полуфиналистов конкурса.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 этап</p>
                        <p>10 июня – 6 июля</p>
                        <p>Образовательная и менторская часть проекта. Определение финалистов Конкурса.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>6 – 8 июля</p>
                        <p>Определение победителей Федерального Конкурса Телеком Идея.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>4 ЭТАП</p>
                        <p>1 – 15 сентября</p>
                        <p>Акселерационная программа для лучших проектов финалистов Telecom-трека (не более 15 проектов). Международный Телеком Тур.</p>
                    </div>
                </div>
            @else
            <div class = "years__project_date">
                    <div class = "years__project_date_items">
                        <p> Stage 1 </p>
                        <p> March 3 - June 10 </p>
                        <p> Start of the project, acceptance of applications, organization of selection events. Determination of the semi-finalists of the competition. </p>
                    </div>
                    <div class = "years__project_date_items">
                        <p> Stage 2 </p>
                        <p> June 10 - July 6 </p>
                        <p> Educational and mentoring part of the project. Determination of the finalists of the Competition. </p>
                    </div>
                    <div class = "years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> 6 - 8 July </p>
                        <p> Determination of the winners of the Federal Telecom Idea Competition. </p>
                    </div>
                    <div class = "years__project_date_items">
                        <p> STAGE 4 </p>
                        <p> September 1 - 15 </p>
                        <p> Acceleration program for the best projects of Telecom track finalists (no more than 15 projects). International Telecom Tour. </p>
                    </div>
                </div>
            @endif
            </div>
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ ЮНИОР</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    
                </p>
                <p>
                    

                </p>
            </div>
        </div>
    </div>
</section>



@endsection