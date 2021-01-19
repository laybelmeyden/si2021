@extends('layouts.master')
@section('title', 'HAHATHON МТС 2018')
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
                        <p>7 апреля 2018</p>
                        <p>Регистрация участников, вводная часть, генерация идей, формирование команд, работа с экспертами, кодинг.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p>8 апреля 2018</p>
                        <p>Образовательная часть, создание прототипов и их презентация, питчи, экспертное мнение, награждение.</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> April 7, 2018 </p>
                        <p> Registration of participants, introductory part, generation of ideas, team building, working with experts, coding. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> 8 April 2018 </p>
                        <p> Educational part, prototyping and presentation, pitches, expert opinion, rewarding. </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">HAHATHON МТС 2018</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    7-8 апреля 2018 года в Казани, в Иннополисе, пройдет форум разработчиков HAHATHON, организованный компанией «МТС».
                </p>
                <p>
                    Подать заявку на участие может любой житель России. Если вы интересуетесь стратапами, техническим предпринимательством и программированием, регистрируйтесь прямо сейчас!
                    <br><br>
                    Приглашаются программисты, разработчики, маркетологи, менеджеры и все те, кому интересны сфера технологического предпринимательства и стартап-сообщества. Участниками могут стать все желающие – как с идеями проектов, так и без них.
                    <br><br>
                    Номинации:
                    <br><br>• Smart City – IoT и цифровая экономика для города будущего
                    <br><br>• Data Science – помоги машинам поднять восстание
                    <br><br>• Reckless Geeks – то, что изменит мир после апокалипсиса

                    <br><br>Наиболее перспективные проекты, презентованные в рамках HAHATHON МТС 2018, смогут претендовать на призы и гранты от организаторов и партнеров.

                    <br><br>Все победители HAHATHON МТС 2018 попадают в полуфинал VIII Международного конкурса молодежных инновационных проектов в сфере информационных технологий и телекоммуникаций — «Телеком Идея 2018».

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> HAHATHON МТС 2018 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    On April 7-8, 2018 in Kazan, in Innopolis, the HAHATHON developers forum, organized by MTS, will be held.
                </p>
                <p>
                    Any resident of Russia can apply for participation. If you are interested in startups, tech entrepreneurship and coding, sign up now!
                    <br> <br>
                    Programmers, developers, marketers, managers and all those who are interested in the field of technology entrepreneurship and startup communities are invited. Anyone can become participants - both with project ideas and without them.
                    <br> <br>
                    Nominations:
                    <br> <br> • Smart City - IoT and digital economy for the city of the future
                    <br> <br> • Data Science - Help Machines Raise Rebellion
                    <br> <br> • Reckless Geeks - what will change the world after the apocalypse

                    <br> <br> The most promising projects presented in the framework of HAHATHON MTS 2018 will be able to apply for prizes and grants from organizers and partners.

                    <br> <br> All winners of HAHATHON MTS 2018 get to the semifinals of the VIII International competition of youth innovative projects in the field of information technology and telecommunications - "Telecom Idea 2018".

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection