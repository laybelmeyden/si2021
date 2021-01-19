@extends('layouts.master')
@section('title', 'CUP RUSSIA')
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="years__project_grid">
            <div class="years__project_sticky">
                <div class="years__project_date">
                    @if(App::isLocale('ru'))
                    <div class="years__project_date_items">
                        <p>Москва</p>
                        <p>22 апреля 2019</p>
                        <p></p>
                    </div>
                    @else
                    <div class="years__project_date_items">
                        <p> Moscow </p>
                        <p> 22 April 2019 </p>
                        <p> </p>
                    </div>
                    @endif
                </div>
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">CUP RUSSIA</p>
                <p class="undotitle__years_solo">Что такое Changellenge >> Cup Russia</p>
                <p class="podundotitle__years_solo">
                    Кейс-чемпионат – это командное состязание по решению бизнес-задач (кейсов) из практики крупных мировых компаний, а Changellenge >> Cup Russia – одно из самых масштабных соревнований в России и СНГ. Так, в 2018 году в чемпионате приняли участие более 5000 студентов и недавних выпускников со всей страны.
                </p>
                <p>
                    В этом году в России проходит четыре региональных кейс-чемпионата Лиги кейсов Changellenge: в Санкт-Петербурге, Новосибирске, Екатеринбурге и Казани. Changellenge >> Cup Russia состоится в Москве 22 апреля. Самые талантливые участники продемонстрируют свои решения бизнес-кейса экспертному жюри.
                    <br><br>Подайте заявку на участие в Changellenge >> Cup Russia
                    <br><br>Как попасть на конкурс Social Idea
                    <br><br>Победители Changellenge >> Cup Russia будут приглашены в полуфинал.

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> CUP RUSSIA </p>
                <p class="undotitle__years_solo"> What is Changellenge >> Cup Russia </p>
                <p class="podundotitle__years_solo">
                    The case championship is a team competition for solving business problems (cases) from the practice of large world companies, and Changellenge >> Cup Russia is one of the largest competitions in Russia and the CIS. So, in 2018 more than 5,000 students and recent graduates from all over the country took part in the championship.
                </p>
                <p>
                    This year, Russia is hosting four regional case championships of the Changellenge Case League: in St. Petersburg, Novosibirsk, Yekaterinburg and Kazan. Changellenge >> Cup Russia will be held in Moscow on April 22. The most talented participants will demonstrate their solutions to the business case to an expert jury.
                    <br> <br> Apply to participate in Changellenge >> Cup Russia
                    <br> <br> How to get to the Social Idea competition
                    <br> <br> Winners of Changellenge >> Cup Russia will be invited to the semifinals.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection