@extends('layouts.master')
@section('title', 'HAHATHON AMURDIGITALHACK')
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="years__project_grid">
            <div class="years__project_sticky">
                @if(App::isLocale('ru'))
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p>1 ЭТАП</p>
                        <p>12 октября</p>
                        <p>Регистрация участников, выступление организаторов и партнеров, презентация, формирование и рассадка команд, промежуточная проверка №1, ночной режим работы над проектами.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p>13 октября</p>
                        <p>Промежуточная проверка №2, работа с экспертами, промежуточная проверка №3, ночной режим работы над проектами.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>14 октября</p>
                        <p>Приветственное слово, выступление организаторов и партнеров, презентация проектов, подведение итогов, награждение, завершение хакатона.</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> October 12 </p>
                        <p> Registration of participants, presentation of organizers and partners, presentation, formation and seating of teams, midterm check No. 1, night work on projects. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> October 13 </p>
                        <p> Interim check # 2, working with experts, intermediate check # 3, night work on projects. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> October 14 </p>
                        <p> Welcome speech, speeches by organizers and partners, presentation of projects, summing up, rewarding, completion of the hackathon. </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">HAHATHON AMURDIGITALHACK</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    12-14 октября 2018 года в Благовещенске, в Амурской государственном университете, пройдет форум разработчиков HACKATHON AmurDigitalHack, организованный компанией «МТС».
                </p>
                <p>
                    Принять участие может любой житель России старше 14 лет. Если вы интересуетесь стартапами, техническим предпринимательством и программированием, регистрируйтесь прямо сейчас!
                    <br><br>
                    Приглашаются программисты, разработчики, дизайнеры, маркетологи, менеджеры и все те, кому интересны сфера технологического предпринимательства и стартап-сообщества. Приглашаем всех желающих – как с идеями проектов, так и без них.
                    <br><br>Номинации:
                    <br><br>• Smart City - город для всех. Призовой фонд – 100 000 рублей
                    <br><br>• Campus Activities – открытый университет. Призовой фонд – 75 000 рублей
                    <br><br>• Создание сервиса для туризма и досуга. Призовой фонд – 75 000 рублей
                    <br><br>• Свободная номинация. Призовой фонд – 50 000 рублей
                    <br><br>Наиболее перспективные проекты, презентованные на HACKATHON AmurDigitalHack, попадут в бизнес-акселератор МТС.

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> HAHATHON AMURDIGITALHACK </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    On October 12-14, 2018, in Blagoveshchensk, at the Amur State University, the HACKATHON AmurDigitalHack developers forum will be held, organized by MTS.
                </p>
                <p>
                    Any resident of Russia over 14 years old can take part. If you are interested in startups, tech entrepreneurship, and coding, sign up now!
                    <br> <br>
                    Programmers, developers, designers, marketers, managers and all those who are interested in the field of technology entrepreneurship and startup communities are invited. We invite everyone, both with project ideas and without them.
                    <br> <br> Nominations:
                    <br> <br> • Smart City is a city for everyone. Prize fund - 100,000 rubles
                    <br> <br> • Campus Activities - open university. Prize fund - 75,000 rubles
                    <br> <br> • Creation of services for tourism and leisure. Prize fund - 75,000 rubles
                    <br> <br> • Free nomination. Prize fund - 50,000 rubles
                    <br> <br> The most promising projects presented at HACKATHON AmurDigitalHack will be included in the MTS business accelerator.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection