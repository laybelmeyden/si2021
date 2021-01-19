@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2016')
@else
@section('title', 'TELECOM IDEA 2016')
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
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2016</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    К участию в конкурсе «Телеком Идея 2016» приглашаются проекты с использованием инновационных ИТ-решений на базе высокоскоростных мобильных и фиксированных сетей передачи данных. Победители будут определены в семи номинациях, связанных с облачными продуктами и сервисами для бизнеса, финансовыми и банковскими услугами, образовательными проектами, проектами, посвященными ритейлу и электронной коммерции, а также масштабируемыми веб-сервисами и мобильным приложениями, рассчитанными для широкого круга пользователей.
                </p>
                <p>
                    Заявки на участие в конкурсе можно подать с 03 марта по 10 июня 2016 г. на сайте www.telecomideas.com.
                    <br><br>Сбор заявок проходит по шести основным номинациям:
                    <br><br>• TechTech (Наукоёмкие решения)
                    <br><br>• FinTech (Финансовые продукты/сервисы)
                    <br><br>• EduTech (Образовательные продукты/сервисы)
                    <br><br>• MassTech (Продукты/сервисы для массового рынка
                    <br><br>• RetailTech (Продукты/сервисы для ритейла и электронной коммерции)
                    <br><br>• BusinessTech (Облачные продукты/сервисы для бизнеса)
                    и специальной седьмой номинации по семи направлениям:
                    <br><br>• Телемедицина (Телемедицина)
                    <br><br>• iHR - Автоматизация HR-процессов
                    <br><br>• iMusem - Проекты в области культуры и искусства
                    <br><br>• NeuroNet - Проекты в области нейронет
                    <br><br>• MarCom - Проекты в области маркетинга и коммуникаций
                    <br><br>• CSRTech - Социальный стартап
                    <br><br>• Seed - Проекты ранней стадии
                    <br><br>Конкурс организован МТС при поддержке проекта АФК «Система» по поиску, поддержке и развитию талантливой молодежи «Лифт в будущее», Министерства связи и массовых коммуникаций РФ, Министерства экономического развития РФ, Департамента науки, промышленной политики и предпринимательства г. Москвы, Торгово-промышленной палаты РФ и Национального исследовательского университета «Высшая школы экономики» (НИУ ВШЭ).
                    <br><br>Конкурс «Телеком Идея» проходит в III этапа.
                    <br><br>03.03.2016 – 10.06.2016 гг. Отборочный тур. Сбор электронных заявок, голосование экспертов и определение полуфиналистов.
                    <br><br>10.06.2016 – 06.07.2016 гг. Образовательная программа. Определение финалистов.
                    <br><br>06.07.2016 – 08.07.2016 гг. Определение победителей. Торжественная церемония награждения.
                    <br><br>Региональные этапы конкурса пройдут при поддержке HackDay, IT Start, ФРИИ и Changellenge на площадках в Санкт-Петербурге, Казани, Нижнем Новгороде, Ульяновске, Вологде, Калининграде, Калуге, Ярославле, Новосибирске, Томске, Екатеринбурге, Краснодаре и Астрахани, а также на территории Республики Беларусь.
                    <br><br>Опытные эксперты из МТС, МГТС, Розничной сети МТС, Медси, Стрим, МТС-Банка и Интеллект Телекома выберут лучших из лучших в семи номинациях.


                </p>
            </div>
            @else
            <div>
                <p class = "title__years_solo"> TELECOM IDEA 2016 </p>
                <p class = "undotitle__years_solo"> </p>
                <p class = "podundotitle__years_solo">
                    Projects using innovative IT solutions based on high-speed mobile and fixed data transmission networks are invited to participate in the "Telecom Idea 2016" competition. Winners will be selected in seven nominations related to cloud products and services for business, financial and banking services, educational projects, projects dedicated to retail and e-commerce, as well as scalable web services and mobile applications designed for a wide range of users.
                </p>
                <p>
                    Applications for participation in the competition can be submitted from 03 March to 10 June 2016 on the website www.telecomideas.com.
                    <br> <br> Applications are collected in six main nominations:
                    <br> <br> • TechTech (High-tech solutions)
                    <br> <br> • FinTech (Financial products / services)
                    <br> <br> • EduTech (Educational products / services)
                    <br> <br> • MassTech (Products / services for the mass market
                    <br> <br> • RetailTech (Products / services for retail and e-commerce)
                    <br> <br> • BusinessTech (Cloud products / services for business)
                    and a special seventh nomination in seven areas:
                    <br> <br> • Telemedicine (Telemedicine)
                    <br> <br> • iHR - Automation of HR processes
                    <br> <br> • iMusem - Projects in the field of culture and art
                    <br> <br> • NeuroNet - Projects in the field of neuronet
                    <br> <br> • MarCom - Projects in the field of marketing and communications
                    <br> <br> • CSRTech - Social Startup
                    <br> <br> • Seed - Early stage projects
                    <br> <br> The competition is organized by MTS with the support of the AFK Sistema project for the search, support and development of talented youth "Elevator to the Future", the Ministry of Telecom and Mass Communications of the Russian Federation, the Ministry of Economic Development of the Russian Federation, the Department of Science, Industrial Policy and Entrepreneurship Moscow, the Chamber of Commerce and Industry of the Russian Federation and the National Research University Higher School of Economics (NRU HSE).
                    <br> <br> The "Telecom Idea" competition is held in the III stage.
                    Newsletter 03.03.2016 - 10.06.2016 Qualifying round. Collection of electronic applications, voting of experts and determination of semi-finalists.
                    Newsletter June 10, 2016 - July 6, 2016 Educational program. Determination of the finalists.
                    Newsletter 07/06/2016 - 07/08/2016 Determination of the winners. Solemn award ceremony.
                    <br> <br> Regional stages of the competition will be held with the support of HackDay, IT Start, IIDF and Changellenge at sites in St. Petersburg, Kazan, Nizhny Novgorod, Ulyanovsk, Vologda, Kaliningrad, Kaluga, Yaroslavl, Novosibirsk, Tomsk, Yekaterinburg, Krasnodar and Astrakhan, as well as on the territory of the Republic of Belarus.
                    <br> <br> Experienced experts from MTS, MGTS, MTS Retail Network, Medsi, Stream, MTS-Bank and Intellect Telecom will choose the best of the best in seven nominations.


                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection