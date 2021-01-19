@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2015')
@else
@section('title', 'TELECOM IDEA 2015')
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
                        <p>1 ЭТАП</p>
                        <p>25 марта – 30 июня</p>
                        <p>Прием заявок, организация отборочных мероприятий. Определение полуфиналистов.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p>1 июля – 28 июля</p>
                        <p>Образовательная и менторская часть проекта. Определение финалистов.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>29 июля</p>
                        <p>Определение победителей Федерального Конкурса.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>4 ЭТАП</p>
                        <p>1 июля – 30 июля</p>
                        <p>Федеральная программа предакселерации в рамках Generation S.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>5 ЭТАП</p>
                        <p>1 сентября – 15 ноября</p>
                        <p>Акселерационная программа для лучших проектов финалистов Telecom-трека.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>6 ЭТАП</p>
                        <p>До 15 ноября</p>
                        <p>Demo-Day Telecom-трека в рамках Generation S.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>7 ЭТАП</p>
                        <p>20 ноября</p>
                        <p>Федеральный финал конкурса Generation S.</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> March 25 - June 30 </p>
                        <p> Acceptance of applications, organization of qualifying events. Definition of semi-finalists. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> July 1 - July 28 </p>
                        <p> Educational and mentoring part of the project. Determination of the finalists. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> July 29 </p>
                        <p> Determination of the winners of the Federal Competition. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 4 </p>
                        <p> July 1 - July 30 </p>
                        <p> Federal pre-acceleration program within Generation S. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STEP 5 </p>
                        <p> September 1 - November 15 </p>
                        <p> Acceleration program for the best projects of the Telecom track finalists. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 6 </p>
                        <p> Until November 15 </p>
                        <p> Demo-Day Telecom track within Generation S. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> 7 STAGE </p>
                        <p> November 20 </p>
                        <p> Federal Final of the Generation S. Competition </p>
                    </div>
                </div>

                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2015</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Москва, РФ — Публичное акционерное общество «Мобильные ТелеСистемы», ПАО «МТС» (МТС — NYSE: MBT), ведущий телекоммуникационный оператор в России и странах СНГ, объявляет о начале V международного конкурса молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея». Основной темой конкурса в 2015 году стали «зеленые» и «умные» решения для развития бизнеса, городского хозяйства и повышения качества жизни населения.
                </p>
                <p>
                    К участию в конкурсе «Телеком Идея 2015» приглашаются проекты, способствующие формированию экологичной, комфортной и доступной для всех категорий граждан (в том числе детей, людей зрелого возраста и лиц с ограниченными возможностями) городской среды с использованием инновационных ИТ-решений на базе высокоскоростных мобильных и фиксированных сетей передачи данных. Основная тематика конкурса посвящена разработке и применение инновационных решений, победители будут определены в семи номинациях, связанных с виртуальной медициной, наукоемкими решениями, HR-проектами, ЖКХ, финансовыми сервисами, эко-проектами.
                    <br><br>
                    Конкурс «Телеком Идея» в 2015 году пройдет в три этапа:
                    <br><br>
                <ul>
                    <li>Отборочный тур — сбор электронных заявок на сайте конкурса www.telecomideas.com и голосование экспертов.</li>
                    <li>Образовательная программа — победители отборочного тура примут участие в мастер-классах и вебинарах экспертов по инновационному предпринимательству.</li>
                    <li>Менторская программа — менторы из Высшей школы маркетинга и развития бизнеса НИУ ВШЭ помогут полуфиналистам развить и адаптировать конкурсные проекты под запросы рынка.</li>
                </ul>
                <br>
                Региональные этапы юбилейного конкурса стартуют на площадках в Поволжье, Сибири, Центральном и Северо-Западном регионах, а также на территории Республики Беларусь. В финале конкурсанты представят на суд жюри обновленные проекты и продемонстрируют знания и навыки, полученные во время участия в конкурсе «Телеком Идея». Лучшие проекты будут вынесены на рассмотрение руководства ПАО «МТС» и венчурными инвесторами и смогут выйти на программу акселерации и возможного внедрения в различные направления бизнеса компании. Главным призом станет образовательный тур с ознакомлением с передовыми достижениями и инновационными практиками ведущих игроков мировой ИТ-индустрии. Команда, чей проект окажется лучшим по версии экспертов Высшей школы маркетинга и развития бизнеса НИУ ВШЭ, получит специальный приз — пожизненную менторскую поддержку проекта.
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA 2015 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    Moscow, RF - Public Joint Stock Company Mobile TeleSystems, PJSC MTS (MTS - NYSE: MBT), the leading telecommunications operator in Russia and the CIS countries, announces the start of the 5th Telecom Idea international competition for youth innovation projects in the field of telecommunications. The main theme of the competition in 2015 was "green" and "smart" solutions for the development of business, urban economy and improving the quality of life of the population.
                </p>
                <p>
                    To participate in the "Telecom Idea 2015" competition are invited projects that contribute to the formation of an environmentally friendly, comfortable and accessible for all categories of citizens (including children, people of mature age and persons with disabilities) urban environment using innovative IT solutions based on high-speed mobile and fixed data networks. The main theme of the competition is devoted to the development and application of innovative solutions, the winners will be determined in seven nominations related to virtual medicine, science-intensive solutions, HR projects, housing and communal services, financial services, eco-projects.
                    <br> <br>
                    The Telecom Idea contest in 2015 will be held in three stages:
                    <br> <br>
                <ul>
                    <li> Selection round - collection of electronic applications on the website of the competition www.telecomideas.com and voting by experts. </li>
                    <li> Educational program - the winners of the qualifying round will take part in master classes and webinars of experts on innovative entrepreneurship. </li>
                    <li> Mentoring program - mentors from the Higher School of Marketing and Business Development of the Higher School of Economics will help the semifinalists develop and adapt competition projects to market demands. </li>
                </ul>
                <br>
                The regional stages of the anniversary competition will start at sites in the Volga region, Siberia, the Central and North-Western regions, as well as on the territory of the Republic of Belarus. In the final, the contestants will present updated projects to the jury and demonstrate the knowledge and skills acquired during their participation in the Telecom Idea competition. The best projects will be submitted for consideration by the management of MTS PJSC and venture investors and will be able to enter the acceleration program and possible implementation in various areas of the company's business. The main prize will be an educational tour familiarizing with the advanced achievements and innovative practices of the leading players in the global IT industry. The team whose project turns out to be the best according to the experts of the Higher School of Marketing and Business Development of the Higher School of Economics will receive a special prize - lifetime mentoring support for the project.
                </p>
            </div>

            @endif
        </div>
    </div>
</section>



@endsection