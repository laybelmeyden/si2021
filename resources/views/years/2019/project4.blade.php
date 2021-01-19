@extends('layouts.master')
@section('title', 'RAISE')
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="years__project_grid">
            <div class="years__project_sticky">
                <div class="years__project_date">
                    @if(App::isLocale('ru'))
                    <div class="years__project_date_items">
                        <p>40 регионов России</p>
                        <p>Сентябрь 2019 – апрель 2020</p>
                        <p></p>
                    </div>
                    @else
                    <div class="years__project_date_items">
                        <p> 40 regions of Russia </p>
                        <p> September 2019 - April 2020 </p>
                        <p> </p>
                    </div>
                    @endif
                </div>
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">RAISE</p>
                <p class="undotitle__years_solo">Что такое всероссийский акселератор социальных инициатив RAISE?</p>
                <p class="podundotitle__years_solo">
                    RAISE - это масштабный образовательный проект с конкурсной составляющей, в рамках которого студенческие команды разрабатывают и реализуют проекты в сфере социального предпринимательства.
                </p>
                <p>
                    Каждый из проектов направлен на решение наиболее острых социальных проблем региона, таких как: социализация детей с ограниченными возможностями, сохранение национальной идентичности, информационная безопасность, занятость различных групп населения и тому подобных.
                    <br><br>Участники Акселератора, развивая предпринимательское мышление, применяют к решению социальных проблем инновационный подход. Продолжительность сезона акселерационной программы составляет 9 месяцев, начиная с формирования команд в сентябре и до проведения конкурса в конце апреля.
                    <br><br>Масштаб
                    <br><br>Акселератор социальных инициатив RAISE проводится в 40 регионах России, на базе 46 ВУЗов. За 7 сезонов в нем приняли участие 3000 студентов, представивших на конкурс 430 проектов.
                    <br><br>Кто проводит
                    <br><br>Организатором Акселератора социальных инициатив является РАНХиГС, Российская Академия народного хозяйства и государственной службы при Президенте Российской Федерации
                    <br><br>Как попасть на конкурс Social Idea
                    <br><br>Победители Всероссийского акселератора социальных инициатив RAISE в спецноминации ПАО МТС будут приглашены в полуфинал.

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> RAISE </p>
                <p class="undotitle__years_solo"> What is the all-Russian accelerator of social initiatives RAISE? </p>
                <p class="podundotitle__years_solo">
                    RAISE is a large-scale educational project with a competitive component, within the framework of which student teams develop and implement projects in the field of social entrepreneurship.
                </p>
                <p>
                    Each of the projects is aimed at solving the most acute social problems of the region, such as: socialization of children with disabilities, preservation of national identity, information security, employment of various population groups and the like.
                    <br> <br> Participants of the Accelerator, developing their entrepreneurial thinking, apply an innovative approach to solving social problems. The duration of the season of the acceleration program is 9 months, starting with the formation of teams in September and until the competition in late April.
                    <br> <br> Scale
                    <br> <br> The RAISE Social Initiatives Accelerator is held in 40 regions of Russia, on the basis of 46 universities. Over 7 seasons, 3000 students took part in it, who submitted 430 projects to the competition.
                    <br> <br> Who conducts
                    <br> <br> The organizer of the Accelerator of Social Initiatives is the RANEPA, the Russian Academy of National Economy and Public Administration under the President of the Russian Federation
                    <br> <br> How to get to the Social Idea competition
                    <br> <br> Winners of the All-Russian accelerator of social initiatives RAISE in the special nomination of MTS PJSC will be invited to the semifinals.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection