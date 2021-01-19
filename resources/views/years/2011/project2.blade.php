@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2011')
@else
@section('title', 'TELECOM IDEA 2011')
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
                        <p></p>
                        <p>Прием заявок, ознакомление Экспертов с анкетами, определение участников 2-го Этапа</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p></p>
                        <p>Заполнение подробного описания проектов, оценка описаний Экспертами в ходе очного заседания Совета, определение участников 3-го этапа</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p></p>
                        <p>Личная презентация проектов Экспертному совету, определение победителей</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> </p>
                        <p> Acceptance of applications, familiarization of the Experts with the questionnaires, determination of the participants of the 2nd Stage </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> </p>
                        <p> Filling out a detailed description of projects, evaluating the descriptions by Experts during an in-person meeting of the Council, identifying the participants of the 3rd stage </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> </p>
                        <p> Personal presentation of projects to the Expert Council, determination of winners </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2011</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">«Мобильные ТелеСистемы» (ОАО МТС), ведущий телекоммуникационный оператор в России и странах СНГ, объявляет о старте первого конкурса молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея». Конкурс организован Группой МТС при поддержке Министерства связи и телекоммуникаций РФ и Высшей школы экономики (НИУ ВШЭ).</p>
                <p>
                    Конкурс «Телеком Идея» направлен на поиск и поддержку перспективных идей научной молодежи в сфере телекоммуникаций. К участию принимаются инновационные проекты, имеющие отношение к телекоммуникационной отрасли, находящиеся на любой стадии разработки – от идеи до ее внедрения и эксплуатации.
                    <br><br>
                    «В России много умных, талантливых молодых людей, которые могут внести значимый вклад в инновационное развитие экономики и общества. Поэтому мы считаем необходимым поддержать студентов, молодых ученых и научные коллективы ВУЗов, дать им возможность творить и внедрять результаты своих научных изысканий и разработок в родной стране. Этот конкурс – один из элементов системы открытых инноваций, которая позволит нам, помимо стимулирования научно-исследовательского поиска и повышения интеллектуального потенциала российской отрасли инфокоммуникаций, привлечь внешние источники новых идей для бизнеса», – сказал президент МТС Андрей Дубовсков.
                    <br><br>
                    Для проведения экспертизы представленных на конкурс проектов формируется Экспертный совет, в состав которого входят представители МТС, Минкомсвязи, ученые и эксперты в сфере телекоммуникаций, а также специалисты в области экономической экспертизы и организации финансирования инновационных проектов. Организатором экспертизы является Институт менеджмента инноваций НИУ ВШЭ.
                    <br><br>
                    Отбор победителей будет проходить по следующим номинациям: <br><br>
                <ul>
                    <li>Инновации в программных продуктах;</li>
                    <li>Инновационные технические решения для систем связи;</li>
                    <li>Инновации в сервисе и контенте;</li>
                    <li>Маркетинговые и управленческие инновации.</li>
                </ul>
                <br><br>
                Финалисты конкурса будут отобраны из числа участников, продемонстрировавших наилучшие показатели своего проекта по совокупности трех групп критериев: <br>
                <br>
                <ul>
                    <li>научно-техническая новизна проекта и готовность его к реализации;</li>
                    <li>величина и динамика рынка;</li>
                    <li>организационный потенциал и квалификация команды проекта.</li>
                </ul>
                <br><br>Победители конкурса будут награждены ценными призами и смогут представить инновационные идеи на рассмотрение руководства Группы МТС.
                <br><br>
                <b>Как принять участие</b>
                <br>
                <br>
                Принять участие в конкурсе могут молодые граждане Российской Федерации в возрасте до 30 лет и молодые ученые в возрасте до 35 лет – студенты, аспиранты и сотрудники высших учебных заведений и научно-исследовательских организаций. Авторами проектов могут выступать не только индивидуальные разработчики, но и творческие коллективы, а также организации.
                <br>
                <br>
                Конкурс будет проходить в период с марта по июнь 2011 года, прием заявок – до 31 марта 2011 года.

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA 2011 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo"> Mobile TeleSystems (OJSC MTS), the leading telecommunications operator in Russia and the CIS, announces the start of the first competition of youth innovative projects in the field of telecommunications "Telecom Idea". The competition was organized by the MTS Group with the support of the Ministry of Communications and Telecommunications of the Russian Federation and the Higher School of Economics (NRU HSE). </p>
                <p>
                    The Telecom Idea competition is aimed at finding and supporting promising ideas of young scientists in the field of telecommunications. Innovative projects related to the telecommunications industry that are at any stage of development, from idea to its implementation and operation, are accepted for participation.
                    <br> <br>
                    “There are many smart, talented young people in Russia who can make a significant contribution to the innovative development of the economy and society. Therefore, we consider it necessary to support students, young scientists and research teams of universities, to give them the opportunity to create and implement the results of their scientific research and development in their native country. This competition is one of the elements of the open innovation system, which will allow us, in addition to stimulating research and development and increasing the intellectual potential of the Russian infocommunication industry, to attract external sources of new ideas for business, ”said MTS President Andrei Dubovskov.
                    <br> <br>
                    To conduct an examination of the projects submitted for the competition, an Expert Council is formed, which includes representatives of MTS, the Ministry of Telecom and Mass Communications, scientists and experts in the field of telecommunications, as well as specialists in the field of economic examination and organization of financing of innovative projects. The organizer of the expertise is the Institute of Innovation Management of the National Research University Higher School of Economics.
                    <br> <br>
                    The selection of winners will be held in the following nominations: <br> <br>
                <ul>
                    <li> Innovation in software products; </li>
                    <li> Innovative technical solutions for communication systems; </li>
                    <li> Innovation in service and content; </li>
                    <li> Marketing and management innovation. </li>
                </ul>
                <br> <br>
                The finalists of the competition will be selected from among the participants who demonstrated the best performance in their project in terms of the combination of three groups of criteria: <br>
                <br>
                <ul>
                    <li> scientific and technical novelty of the project and its readiness for implementation; </li>
                    <li> market size and dynamics; </li>
                    <li> organizational capacity and qualifications of the project team. </li>
                </ul>
                <br> <br> The winners of the competition will be awarded valuable prizes and will be able to submit innovative ideas for consideration by the management of the MTS Group.
                <br> <br>
                <b> How to participate </b>
                <br>
                <br>
                Young citizens of the Russian Federation under the age of 30 and young scientists under the age of 35 - students, postgraduates and employees of higher educational institutions and research organizations - can take part in the competition. The authors of projects can be not only individual developers, but also creative teams, as well as organizations.
                <br>
                <br>
                The competition will be held from March to June 2011, applications are accepted until March 31, 2011.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection