@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2016 – ЦЕНТР')
@else
@section('title', 'TELECOM IDEA 2016 - CENTER')
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
                        <p>Прием заявок</p>
                        <p>28 марта – 8 апреля</p>
                        <p>Прием заявок, организация отборочных мероприятий.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Финал этапа</p>
                        <p>10 апреля</p>
                        <p></p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Acceptance of applications </p>
                        <p> March 28 - April 8 </p>
                        <p> Acceptance of applications, organization of qualifying events. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Stage finals </p>
                        <p> April 10 </p>
                        <p> </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2016 – ЦЕНТР</p>
                <p class="undotitle__years_solo">Хотите презентовать свой проект топ-менеджменту МТС и получить шанс совместной реализации?</p>
                <p class="podundotitle__years_solo">
                    Если вы не старше 35 лет и у вас есть проект на стыке телекоммуникаций и других сфер, например - виртуальной медицины, экологии, образования, ЖКХ, финансовых и банковских услуг, приглашаем вас принять участие в региональном отборочном этапе Телеком Идея 2016 – Центр. Вы можете подать заявку на сайте, пройти отбор и выйти в финал регионального этапа, который пройдёт, как и в прошлом году, в Калуге. Финал состоится 10 апреля 2016 года в ИТ Центре Астрал по адресу: г. Калуга, ул. Циолковского 4.
                </p>
                <p>
                    Основные номинации:
                    <br><br>
                    • TechTech (Наукоёмкие решения)
                    <br><br>• FinTech (Финансовые продукты/сервисы)
                    <br><br>• EduTech (Образовательные продукты/сервисы)
                    <br><br>• MassTech (Продукты/сервисы для массового рынка
                    <br><br>• RetailTech (Продукты/сервисы для ритейла и электронной коммерции)
                    <br><br>• BusinessTech (Облачные продукты/сервисы для бизнеса)
                    специальная седьмая номинация:
                    <br><br>• Телемедицина (Телемедицина)
                    <br><br>• iHR - Автоматизация HR-процессов
                    <br><br>• iMusem - Проекты в области культуры и искусства
                    <br><br>• NeuroNet - Проекты в области нейронет
                    <br><br>• MarCom - Проекты в области маркетинга и коммуникаций
                    <br><br>• CSRTech - Социальный стартап
                    <br><br>• Seed - Проекты ранней стадии
                    <br><br>Победители регионального этапа получат шанс принять участие в акселерационной программе от МТС, по итогам которой они получат возможность презентовать свои проекты топ-менеджменту для дальнейшей реализации и побороться за главный приз – поездку в зарубежный тур для ознакомления с достижениями ведущих мировых представителей индустрии.
                    <br><br>Программа «Телеком Идея 2016 – Центр»
                    <br><br>12.00 – 15.00 Регистрация участников
                    <br><br>15.00 – 17.30 Защита проектов (5 минут презентация + 5 минут вопросы-ответы)
                    <br><br>17.30 – 18.00 Кофе-брейк
                    <br><br>18.00 – 18.30 Подсчет голосов, определение победителей
                    <br><br>18.30 – 19.00 Награждение победителей

                    <br><br>Заявки принимаются до 24.00 часов 07 апреля 2016 года. К финалу допускаются проекты, прошедшие предварительный экспертный отбор.
                    <br><br>За дополнительной информацией обращайтесь к представителю от организаторов:
                    <br><br>Олег Таран
                    <br><br>+7 (999) 735-00-09 или info@i-cloudy.ru


                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA 2016 - CENTER </p>
                <p class="undotitle__years_solo"> Would you like to present your project to MTS top management and get a chance for joint implementation? </p>
                <p class="podundotitle__years_solo">
                    If you are not older than 35 years old and you have a project at the intersection of telecommunications and other areas, for example - virtual medicine, ecology, education, housing and communal services, financial and banking services, we invite you to take part in the regional qualifying stage of Telecom Idea 2016 - Center. You can apply on the website, pass the selection and reach the final of the regional stage, which will be held, as in the previous year, in Kaluga. The final will take place on April 10, 2016 at the Astral IT Center at the address: Kaluga, st. Tsiolkovsky 4.
                </p>
                <p>
                    Main nominations:
                    <br> <br>
                    • TechTech (Science-intensive solutions)
                    <br> <br> • FinTech (Financial products / services)
                    <br> <br> • EduTech (Educational products / services)
                    <br> <br> • MassTech (Products / services for the mass market
                    <br> <br> • RetailTech (Products / services for retail and e-commerce)
                    <br> <br> • BusinessTech (Cloud products / services for business)
                    special seventh nomination:
                    <br> <br> • Telemedicine (Telemedicine)
                    <br> <br> • iHR - Automation of HR processes
                    <br> <br> • iMusem - Projects in the field of culture and art
                    <br> <br> • NeuroNet - Projects in the field of neuronet
                    <br> <br> • MarCom - Projects in the field of marketing and communications
                    <br> <br> • CSRTech - Social Startup
                    <br> <br> • Seed - Early stage projects
                    <br> <br> Winners of the regional stage will have a chance to take part in the acceleration program from MTS, following which they will have the opportunity to present their projects to top management for further implementation and compete for the main prize - a trip to a foreign tour to get acquainted with the achievements of the world's leading industry representatives.
                    <br> <br> Program "Telecom Idea 2016 - Center"
                    <br> <br> 12.00 - 15.00 Registration of participants
                    <br> <br> 15.00 - 17.30 Project defense (5 minutes presentation + 5 minutes questions and answers)
                    <br> <br> 17.30 - 18.00 Coffee break
                    <br> <br> 18.00 - 18.30 Counting of votes, determination of the winners
                    <br> <br> 18.30 - 19.00 Awarding of the winners

                    <br> <br> Applications are accepted until midnight on April 07, 2016. Projects that have passed the preliminary expert selection are allowed to the final.
                    <br> <br> For more information, please contact the representative from the organizers:
                    <br> <br> Oleg Taran
                    <br> <br> +7 (999) 735-00-09 or info@i-cloudy.ru


                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection