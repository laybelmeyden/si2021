@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2017')
@else
@section('title', 'TELECOM IDEA 2017')
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
                        <p>13 февраля – 28 августа</p>
                        <p>Старт проекта, прием заявок, организация отборочных мероприятий.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 этап</p>
                        <p>14 августа – 15 сентября</p>
                        <p>Многоступенчатая экспертиза заявок. Определение полуфиналистов.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>18 сентября – 29 сентября</p>
                        <p>Образовательная и менторская часть проекта. Определение финалистов.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>4 ЭТАП</p>
                        <p>9 октября - 24 октября</p>
                        <p>Акселерационная программа финалистов конкурса. Определение победителей.</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Stage 1 </p>
                        <p> February 13 - August 28 </p>
                        <p> Start of the project, acceptance of applications, organization of selection events. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Stage 2 </p>
                        <p> August 14 - September 15 </p>
                        <p> Multi-stage examination of applications. Definition of semi-finalists. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> September 18 - September 29 </p>
                        <p> Educational and mentoring part of the project. Definition of finalists. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 4 </p>
                        <p> October 9 - October 24 </p>
                        <p> Acceleration program for the finalists of the competition. Determination of winners. </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2017</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    К участию в конкурсе «Телеком Идея 2017» приглашаются проекты с использованием инновационных ИТ-решений на базе высокоскоростных мобильных и фиксированных сетей передачи данных. Победители будут определены в двенадцати номинациях, связанных с облачными продуктами и сервисами для бизнеса, финансовыми и банковскими услугами, образовательными проектами, проектами, посвященными ритейлу и электронной коммерции, а также масштабируемыми веб-сервисами и мобильным приложениями, рассчитанными для широкого круга пользователей.
                </p>
                <p>
                    Заявки на участие в конкурсе можно подать с 13 февраля по 28 августа 2017 г. на странице http://telecomideas.com/2017/telecomidea/anketa
                    <br><br>Сбор заявок проходит по двенадцати номинациям:
                    <br><br>• RetailTech(повышение эффективности розничных точек)
                    <br><br>• TechTech(наукоемкие решения и микроэлектроника)
                    <br><br>• FinTech(финансовые продукты/сервисы)
                    <br><br>• EduTech (образовательные продукты/сервисы)
                    <br><br>• MassTech(продукты/сервисы для массового рынка)
                    <br><br>• BusinessTech(облачные продукты/сервисы для бизнеса)
                    <br><br>• iHR(автоматизация HR-процессов)
                    <br><br>• E-Health(продукты/сервисы для здоровья и медицины)
                    <br><br>• Supply chainЛогистические сервисы и управление закупками
                    <br><br>• VR/AR(виртуальная/дополненная реальность)
                    <br><br>• loT(Интернет вещей)
                    <br><br>• CSRTech (социальные сервисные инновации)
                    <br><br>Конкурс организован МТС при поддержке проекта АФК «Система» по поиску, поддержке и развитию талантливой молодежи «Лифт в будущее», Министерства связи и массовых коммуникаций РФ, Департамента науки, промышленной политики и предпринимательства г. Москвы, Торгово-промышленной палаты РФ и Национального исследовательского университета «Высшая школы экономики» (НИУ ВШЭ).
                    <br><br>Конкурс «Телеком Идея» проходит в IV этапа.
                    <br><br>13.02.2017 – 28.08.2017 гг. Старт проекта, прием заявок, организация отборочных мероприятий.
                    <br><br>14.08.2017 – 8.09.2017 гг. Многоступенчатая экспертиза заявок. Определение полуфиналистов.
                    <br><br>11.09.2017 – 29.09.2017 гг. Образовательная и менторская часть проекта. Определение финалистов.
                    <br><br>9.10.2017 – 24.10.2017гг. Акселерационная программа финалистов конкурса. Определение победителей.
                    <br><br>Региональные этапы конкурса пройдут при поддержке IT Start, ФРИИ и Changellenge на площадках в Санкт-Петербурге, Казани, Нижнем Новгороде, Ульяновске, Калининграде, Ярославле, Новосибирске, Томске и Екатеринбурге.
                    <br><br>Опытные эксперты из МТС, МГТС, Розничной сети МТС, Медси, Стрим, МТС-Банка и Интеллект Телекома выберут лучших из лучших в двенадцати номинациях.


                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA 2017 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    Projects using innovative IT solutions based on high-speed mobile and fixed data transmission networks are invited to participate in the "Telecom Idea 2017" competition. Winners will be determined in twelve nominations related to cloud products and services for business, financial and banking services, educational projects, projects dedicated to retail and e-commerce, as well as scalable web services and mobile applications designed for a wide range of users.
                </p>
                <p>
                    Applications for participation in the competition can be submitted from February 13 to August 28, 2017 at http://telecomideas.com/2017/telecomidea/anketa
                    <br> <br> Applications are collected in twelve nominations:
                    <br> <br> • RetailTech (increasing the efficiency of retail outlets)
                    <br> <br> • TechTech (high technology solutions and microelectronics)
                    <br> <br> • FinTech (financial products / services)
                    <br> <br> • EduTech (educational products / services)
                    <br> <br> • MassTech (products / services for the mass market)
                    <br> <br> • BusinessTech (cloud products / services for business)
                    <br> <br> • iHR (HR-processes automation)
                    <br> <br> • E-Health (products / services for health and medicine)
                    <br> <br> • Supply chainLogistics services and procurement management
                    <br> <br> • VR / AR (virtual / augmented reality)
                    <br> <br> • loT (Internet of Things)
                    <br> <br> • CSRTech (social service innovation)
                    <br> <br> The competition is organized by MTS with the support of the AFK Sistema project for the search, support and development of talented youth "Elevator to the Future", the Ministry of Communications and Mass Media of the Russian Federation, the Department of Science, Industrial Policy and Entrepreneurship of Moscow, the Chamber of Commerce of the Russian Federation and the National Research University Higher School of Economics (NRU HSE).
                    <br> <br> The "Telecom Idea" competition is held in the IV stage.
                    Newsletter 13.02.2017 - 28.08.2017 Start of the project, acceptance of applications, organization of selection events.
                    Newsletter 08/14/2017 - 09/08/2017 Multi-stage examination of applications. Definition of semi-finalists.
                    Newsletter 09/11/2017 - 09/29/2017 Educational and mentoring part of the project. Determination of the finalists.
                    Newsletter 9.10.2017 - 24.10.2017 Acceleration program for the finalists of the competition. Determination of the winners.
                    <br> <br> Regional stages of the competition will be held with the support of IT Start, IIDF and Changellenge at venues in St. Petersburg, Kazan, Nizhny Novgorod, Ulyanovsk, Kaliningrad, Yaroslavl, Novosibirsk, Tomsk and Yekaterinburg.
                    <br> <br> Experienced experts from MTS, MGTS, MTS Retail Network, Medsi, Stream, MTS-Bank and Intellect Telecom will choose the best of the best in twelve nominations.


                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection