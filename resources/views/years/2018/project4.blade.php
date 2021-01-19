@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2018')
@else
@section('title', 'TELECOM IDEA 2018')
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
                        <p>15 февраля – 14 мая 2018</p>
                        <p>Старт проекта, прием заявок, организация отборочных мероприятий.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p>15 – 21 мая 2018</p>
                        <p>Многоступенчатая экспертиза заявок. Определение полуфиналистов.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>22 мая – 6 июня 2018</p>
                        <p>Образовательная и менторская часть проекта. Определение финалистов.</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> February 15 - May 14, 2018 </p>
                        <p> Start of the project, acceptance of applications, organization of selection events. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> 15 - 21 May 2018 </p>
                        <p> Multi-stage examination of applications. Definition of semi-finalists. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> May 22 - June 6, 2018 </p>
                        <p> Educational and mentoring part of the project. Definition of finalists. </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2018</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    ПАО «Мобильные ТелеСистемы» (МТС — NYSE: MBT), ведущий телекоммуникационный оператор в России, объявляет о старте VIII Международного конкурса молодежных инновационных проектов в сфере информационных технологий и телекоммуникаций — «Телеком Идея 2018».
                </p>
                <p>
                    К участию в конкурсе приглашаются студенты, молодые ученые, научные коллективы и молодые предприниматели с проектами в области инновационных IT-решений на базе высокоскоростных мобильных и фиксированных сетей передачи данных.
                    <br><br>
                    Заявить об участии в конкурсе можно на странице подачи заявки с 15 февраля – 14 мая 2018г.
                    <br><br>Сбор заявок проходит по шести номинациям:
                    <br><br>• FinTech(финансовые продукты/сервисы)
                    <br><br>• EduTech (образовательные продукты/сервисы)
                    <br><br>• E-Health(продукты/сервисы для здоровья и медицины)
                    <br><br>• Artificial intelligence(искусственный интеллект, машинное обучение, big data)
                    <br><br>• CSRTech (социальные сервисные инновации)
                    <br><br>• loT(Интернет вещей)
                    <br><br>Этапы конкурса:
                    <br><br>• 15 февраля – 14 мая 2018. Старт проекта, прием заявок, организация региональных отборочных мероприятий
                    <br><br>• 15 – 21 мая 2018. Экспертиза заявок. Определение полуфиналистов
                    <br><br>• 22 мая – 6 июня 2018. Менторская часть проекта. Определение финалистов
                    <br><br>Региональные этапы конкурса пройдут в Санкт-Петербурге, Екатеринбурге, Новосибирске, Казани, Москве, Краснодаре, Ульяновске, Ярославле, Тюмени, Калуге в партнерстве с национальной лигой кейсов Changellenge, IT школами Агентства инновационного развития Федерального агентства по делам молодежи и Акселератором социальных инициатив Агентства стратегических инициатив RAISE.
                    <br><br>Главной наградой для победителей конкурса станет приглашение в инновационный образовательный тур, а также шанс представить свои проекты на рассмотрение экспертов и партнеров МТС и пройти стажировку с последующим трудоустройством в компании.
                    <br><br>Традиционно, конкурс «Телеком Идея» поддерживается АФК «Система» в рамках программы «Лифт в будущее», Благотворительным Фондом «Система» и дочерними компаниями корпорации, в том числе «Интеллект-Телеком», «Детский Мир», ЗАО «Группа компаний «Медси», ПАО «МТС-Банк».
                    <br><br>Победители будут определены решением экспертного совета конкурса, в который вошли представители МТС, АФК «Система», ключевых партнеров конкурса, ведущие эксперты в сфере телекоммуникаций, инноваций и венчурного рынка.
                    <br><br>О конкурсе «Телеком Идея»
                    <br><br>«Телеком Идея» проводится компанией МТС с 2011 года в России и странах СНГ. В 2014 году при поддержке Sistema Shyam Teleservices (SSTL, MTS India) успешно реализован в Индии. Конкурс направлен на поддержку талантливой молодежи, поиск перспективных кадров и выявление новейших изобретений современной молодежи с использованием «умных» ИТ-решений, которые способствуют развитию комфортной, экологичной и доступной для всех категорий граждан среды. За время существования конкурса только в России более 500 ВУЗов и start-up сообществ приняли участие в «Телеком Идее». Молодые ученые привнесли в копилку бизнеса более 1500 талантливых проектов, многие из которых успешно реализованы.

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA 2018 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    Mobile TeleSystems PJSC (MTS - NYSE: MBT), the leading telecommunications operator in Russia, announces the launch of the VIII International Competition for Youth Innovative Projects in the Field of Information Technology and Telecommunications - Telecom Idea 2018.
                </p>
                <p>
                    Students, young scientists, research teams and young entrepreneurs with projects in the field of innovative IT solutions based on high-speed mobile and fixed data transmission networks are invited to participate in the competition.
                    <br> <br>
                    You can apply for participation in the competition on the application page from February 15 - May 14, 2018.
                    <br> <br> Applications are collected in six nominations:
                    <br> <br> • FinTech (financial products / services)
                    <br> <br> • EduTech (educational products / services)
                    <br> <br> • E-Health (products / services for health and medicine)
                    <br> <br> • Artificial intelligence (artificial intelligence, machine learning, big data)
                    <br> <br> • CSRTech (social service innovation)
                    <br> <br> • loT (Internet of Things)
                    <br> <br> Stages of the competition:
                    <br> <br> • February 15 - May 14, 2018. Start of the project, acceptance of applications, organization of regional qualifying events
                    <br> <br> • May 15 - 21, 2018. Examination of applications. Definition of semi-finalists
                    <br> <br> • May 22 - June 6, 2018. Mentoring part of the project. Definition of finalists
                    <br> <br> Regional stages of the competition will be held in St. Petersburg, Yekaterinburg, Novosibirsk, Kazan, Moscow, Krasnodar, Ulyanovsk, Yaroslavl, Tyumen, Kaluga in partnership with the national league of cases Changellenge, IT schools of the Agency for Innovative Development of the Federal Agency for Youth Affairs and the Accelerator of Social Initiatives of the Agency for Strategic Initiatives RAISE.
                    <br> <br> The main reward for the winners of the competition will be an invitation to an innovative educational tour, as well as a chance to present their projects for consideration by experts and partners of MTS and undergo an internship with subsequent employment in the company.
                    <br> <br> Traditionally, the Telecom Idea competition is supported by AFK Sistema within the Lift to the Future program, the Sistema Charitable Foundation and subsidiaries of the corporation, including Intellect-Telecom, Detsky Mir , CJSC "Group of companies" Medsi ", PJSC" MTS-Bank ".
                    <br> <br> Winners will be determined by the decision of the expert council of the competition, which included representatives of MTS, AFK Sistema, key partners of the competition, leading experts in the field of telecommunications, innovation and the venture capital market.
                    <br> <br> About the contest "Telecom Idea"
                    <br> <br> Telecom Idea has been held by MTS since 2011 in Russia and the CIS countries. In 2014 with the support of Sistema Shyam Teleservices (SSTL, MTS India) successfully implemented in India. The competition is aimed at supporting talented youth, searching for promising personnel and identifying the latest inventions of modern youth using “smart” IT solutions that contribute to the development of a comfortable, environmentally friendly and accessible environment for all categories of citizens. During the existence of the competition in Russia alone, more than 500 universities and start-up communities took part in the Telecom Idea. Young scientists have brought over 1,500 talented projects to the business treasury, many of which have been successfully implemented.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection