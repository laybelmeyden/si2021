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
                        <p>О старте проекта, приеме заявок и организации отборочных мероприятий будет объявлено дополнительно</p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> The launch of the project, the acceptance of applications and the organization of selection events will be announced later </p>
                        <p> </p>
                        <p> </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ ЮНИОР</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    В конкурсе принимают участие одаренные дети в возрасте от 13 до 17 лет по всей территории РФ.
                </p>
                <p>
                    Цели и задачи конкурса:
                    <br><br>
                    • выявление одаренных детей, стремящихся всесторонне получать и развивать новые знания в сфере информационных технологий;
                    <br><br>• позиционирование ПАО «МТС» как компании активно поддерживающей талантливых детей;
                    <br><br>• создание площадки для обмена интересными идеями среди школьников и изучения восприятия основных тенденций в сфере ИКТ глазами учеников старших классов;
                    <br><br>• профориентация детей в сфере информационных технологий;
                    <br><br>• всероссийский охват проекта.
                    <br><br>Призеры окружных этапов получают путевку в финал, который традиционно проходит в г. Анапа на площадке ВДЦ «Смена» продолжительностью 14 дней с возможностью получить наставника по своему проекту из числа финалистов конкурса «Телеком Идея 2018».
                    <br><br>Формат мероприятия включает в себя конкурсы, мастер-классы, работу с проектами участников и финальную презентационную сессию.
                    <br><br>Общее количество участников – свыше 2500 человек по всей стране!

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA JUNIOR </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    The competition is attended by gifted children aged 13 to 17 years across the entire territory of the Russian Federation.
                </p>
                <p>
                    Goals and objectives of the competition:
                    <br> <br>
                    • identification of gifted children striving to comprehensively receive and develop new knowledge in the field of information technology;
                    <br> <br> • positioning of MTS PJSC as a company actively supporting talented children;
                    <br> <br> • Creation of a platform for the exchange of interesting ideas among schoolchildren and for studying the perception of the main trends in the field of ICT through the eyes of senior students;
                    <br> <br> • vocational guidance of children in the field of information technology;
                    <br> <br> • All-Russian coverage of the project.
                    <br> <br> Winners of the district stages receive a ticket to the finals, which traditionally takes place in Anapa at the Smena VDC site for 14 days with the opportunity to get a mentor for their project from among the finalists of the Telecom Idea 2018 competition.
                    <br> <br> The format of the event includes contests, master classes, work with participants' projects and the final presentation session.
                    <br> <br> The total number of participants is over 2500 people all over the country!

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection