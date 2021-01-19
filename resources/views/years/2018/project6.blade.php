@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ОКРУЖНЫЕ IT-ШКОЛЫ: ВСЕ ВОЗМОЖНОСТИ НА ОДНОЙ ПЛОЩАДКЕ!')
@else
@section('title', 'DISTRICT IT SCHOOLS: ALL OPPORTUNITIES ON ONE SITE!')
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
                        <p>30.03 — 01.04</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Ульяновск</p>
                        <p>20-22.04</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Ярославль</p>
                        <p>27-29.04</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Тюмень</p>
                        <p>11-13.05</p>
                        <p></p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Krasnodar </p>
                        <p> 30.03 - 01.04 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Ulyanovsk </p>
                        <p> 20-22.04 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Yaroslavl </p>
                        <p> 27-29.04 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Tyumen </p>
                        <p> 11-13.05 </p>
                        <p> </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ОКРУЖНЫЕ IT-ШКОЛЫ: ВСЕ ВОЗМОЖНОСТИ НА ОДНОЙ ПЛОЩАДКЕ!</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Если ты интересуешься IT-технологиями, у тебя есть идея или проект, если ты мечтаешь о работе в крупной международной компании или хочешь попасть в полуфинал международного конкурса «Телеком Идея»
                </p>
                <p>
                    Выбирай ближайший к тебе город на сайте www.rusinnovations.com и регистрируйся на IT-школу.
                    <br><br>
                    Что тебя ждет на IT-школе?:
                    <br><br>• мастер классы и тренинги только от практиков IT-отрасли,
                    <br><br>• общение с лидерами рынка,
                    <br><br>• поддержка и сопровождение перспективных IT-проектов,
                    <br><br>• кейсы от нашего партнера ПАО «МТС», решив которые, ты можешь пройти профессиональную стажировку с последующим трудоустройством,
                    <br><br>• возможность выиграть ценные призы и подарки от партнеров, пройти в полуфинал конкурса «Телеком Идея», стать обладателем тревел-гранта!

                    <br><br>Иногородние участники на время проведения мероприятия обеспечиваются проживанием. Ты еще сомневаешься? Тогда посмотри это видео:
                    <br><br>Наши города:
                    <br><br>• 30.03 — 01.04 — Краснодар;
                    <br><br>• 20-22.04 — Ульяновск;
                    <br><br>• 27-29.04 — Ярославль;
                    <br><br>• 11-13.05 — Тюмень
                    <br><br>Организатор IT-школ — Агентство инновационного развития, при поддержке Фонда президентских грантов, Федерального агентства по делам молодежи и компании ПАО «МТС»
                    <br><br>
                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/npGw9RBnwg8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> DISTRICT IT SCHOOLS: ALL OPPORTUNITIES ON ONE SITE! </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    If you are interested in IT technologies, you have an idea or project, if you dream of working for a large international company or want to get to the semifinals of the international competition "Telecom Idea"
                </p>
                <p>
                    Choose the city closest to you on the website www.rusinnovations.com and register for the IT school.
                    <br> <br>
                    What awaits you at the IT school ?:
                    <br> <br> • master classes and trainings only from IT industry practitioners,
                    <br> <br> • communication with market leaders,
                    <br> <br> • support and maintenance of promising IT projects,
                    <br> <br> • cases from our partner MTS PJSC, having solved which, you can undergo a professional internship with subsequent employment,
                    <br> <br> • an opportunity to win valuable prizes and gifts from partners, to qualify for the semi-finals of the Telecom Idea contest, and become the owner of a travel grant!

                    <br> <br> Nonresident participants are provided with accommodation during the event. Are you still in doubt? Then watch this video:
                    <br> <br> Our cities:
                    <br> Exhibition • 30.03 - 01.04 - Krasnodar;
                    <br> Exhibition • 20-22.04 - Ulyanovsk;
                    <br> Exhibition • 27-29.04 - Yaroslavl;
                    <br> Exhibition • 11-13.05 - Tyumen
                    <br> <br> The organizer of IT schools is the Agency for Innovative Development, with the support of the Presidential Grants Fund, the Federal Agency for Youth Affairs and the company PJSC "MTS"
                    <br> <br>
                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/npGw9RBnwg8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection