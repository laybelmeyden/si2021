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
                        <p>Приём заявок</p>
                        <p>15 марта - 25 мая 2016 года</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Подведение итогов</p>
                        <p>1 июня</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Награждение победителей</p>
                        <p></p>
                        <p>На торжественной церемонии конкурса «Телеком Идея» в Москве</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Acceptance of applications </p>
                        <p> March 15 - May 25, 2016 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Summary </p>
                        <p> June 1 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Awarding the winners </p>
                        <p> </p>
                        <p> At the solemn ceremony of the Telecom Idea competition in Moscow </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ ЮНИОР</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Компания МТС при поддержке программы «Лифт в будущее» АФК «Система» по развитию талантливой молодежи объявляет о старте международного конкурса для школьников 14 - 17 лет «Телеком Идея ЮНИОР 2016».
                </p>
                <p>
                    Конкурс проводится с 15 марта по 25 мая 2016 года. Итоги будут подведены к 1 июня, а награждение победителей состоится на торжественной церемонии конкурса «Телеком Идея» в начале июля в Москве.
                    <br><br>В этом году участникам конкурса «Телеком Идея ЮНИОР 2016» предлагается поучаствовать сразу в двух номинациях:
                    <br><br>1. «Нейронет – проектируем будущее». Описание собственного сценария применения Нейронета - новой технологии, которая станет следующим поколением Интернета, по мнению многих ученых.
                    <br><br>2. «Я - IT Блогер». Создание интересных и актуальных блогов в сети интернет (социальных сетях) по вопросам использования современных ИТ технологий в жизни человека.
                    <br><br>Правила конкурса размещены на http://telecomideas.com/.
                    <br><br>«Мы уделяем особое внимание работе с молодыми специалистами – каждый год несколько тысяч талантливых выпускников становятся частью компании МТС. Многие из них демонстрируют выдающиеся результаты и уже через несколько лет становятся признанными профессионалами и развивают проекты, определяющие развитие телекоммуникационной отрасли в стране. Наши дети должны получить все возможности, чтобы проявить и развить свой потенциал, а компания МТС готова в этом помочь, – отметил Вице-президент по управлению персоналом Михаил Архипов. - Нам очень приятно, если мечты детей будут связаны с телекомом».
                    <br><br>В этом году в жюри конкурса вошли авторитетные представители интернет-индустрии:
                    <br><br>Серегина Елена Ильинична - Директор Департамента корпоративно-социальной ответственности группы МТС
                    <br><br>Терехов Денис Эдуардович - Генеральный директор Агентства «Социальные Сети».
                    <br><br>Клепикова Елена Михайловна - Руководитель департамента образовательных программ НП "Лифт в будущее"
                    <br><br>Победители конкурса получат бесценный опыт и памятные призы от МТС, а также им будет предложена бесплатная путевка в научно-образовательную школу "Лифт в будущее".
                    <br><br><b>«Ваши идеи меняют окружающий мир к лучшему!»</b>



                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA JUNIOR </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    MTS, with the support of the "Lift to the Future" program of AFK "Sistema" for the development of talented youth, announces the start of the international competition for schoolchildren aged 14-17 "Telecom Idea JUNIOR 2016".
                </p>
                <p>
                    The competition is held from March 15 to May 25, 2016. The results will be announced by June 1, and the winners will be awarded at the solemn ceremony of the Telecom Idea competition in early July in Moscow.
                    <br> <br> This year the participants of the contest "Telecom Idea JUNIOR 2016" are invited to participate in two nominations at once:
                    <br> <br> 1. "Neuronet - Designing the Future". Description of our own scenario for using Neuronet - a new technology that will become the next generation of the Internet, according to many scientists.
                    <br> <br> 2. "I am an IT Blogger." Creation of interesting and relevant blogs on the Internet (social networks) on the use of modern IT technologies in human life.
                    <br> <br> Competition rules are posted at http://telecomideas.com/.
                    <br> <br> “We pay special attention to working with young specialists - every year several thousand talented graduates become part of the MTS company. Many of them demonstrate outstanding results and within a few years become recognized professionals and develop projects that determine the development of the telecommunications industry in the country. Our children should get all the opportunities to show and develop their potential, and MTS is ready to help with this, - said Mikhail Arkhipov, Vice President for Human Resources. "We are very pleased if the dreams of children are connected with telecom."
                    <br> <br> This year the jury of the competition included authoritative representatives of the Internet industry:
                    <br> <br> Seregina Elena Ilinichna - Director of the Department of corporate and social responsibility of the MTS group
                    <br> <br> Terekhov Denis Eduardovich - General Director of the Agency "Social Networks".
                    <br> <br> Klepikova Elena Mikhailovna - Head of the department of educational programs of NP "Lift to the Future"
                    <br> <br> The winners of the competition will receive invaluable experience and memorable prizes from MTS, as well as they will be offered a free ticket to the Lift to the Future scientific and educational school.
                    <br> <br> <b> "Your ideas change the world around you for the better!" </b>



                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection