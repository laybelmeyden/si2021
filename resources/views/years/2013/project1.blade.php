@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ХИТ 2013')
@else
@section('title', 'TELECOM HIT 2013')
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
                        <p>Прием работ</p>
                        <p>1 апреля – 1 июня 2013 года</p>
                        <p>Прием работ участников конкурса</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Определение победителей</p>
                        <p>1 июня – 8 июня 2013 года</p>
                        <p>Оценка присланных работ и определение финалистов конкурса</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Заключительный концерт</p>
                        <p></p>
                        <p>Заключительный концерт на Церемонии награждения победителей конкурса «Телеком Идея»</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Acceptance of work </p>
                        <p> April 1 - June 1, 2013 </p>
                        <p> Acceptance of entries from the competition participants </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Determining the winners </p>
                        <p> June 1 - June 8, 2013 </p>
                        <p> Evaluation of the submitted works and determination of the finalists of the competition </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Final concert </p>
                        <p> </p>
                        <p> Final concert at the Telecom Idea Awards Ceremony </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ХИТ 2013</p>
                <p class="undotitle__years_solo">МТС объявляет творческий конкурс для молодых исполнителей «Телеком Хит»</p>
                <p class="podundotitle__years_solo">Москва, РФ - ОАО «Мобильные ТелеСистемы» (МТС — NYSE: MBT), ведущий телекоммуникационный оператор в России и странах СНГ, объявляет о запуске III творческого конкурса молодых исполнителей «Телеком Хит», который пройдет в c апреля по июнь 2013 года в рамках международного конкурса молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея».
                </p>
                <p>
                    Конкурс «Телеком Хит» был учрежден МТС в 2011 году с целью выявления прогрессивных тенденций в творческой студенческой среде и поддержки молодых талантливых исполнителей, учащихся высших учебных заведений России и стран присутствия компании в СНГ.
                    <br><br>
                    «Компания МТС уделяет большое внимание работе с молодежью и поддержке талантливых начинаний. Мы заинтересованы в привлечении на площадку «Телеком Идеи» самых креативных представителей студенчества, которые сегодня реализуют свои способности не только в учебе и работе над инновационными проектами, но и в творчестве, создавая уникальные вокальные, инструментальные, танцевальные и сценические номера. В этом году у нас появилась новая номинация – «Звезда МТС» - специально для сотрудников группы компаний МТС. Тем самым мы стремимся создавать комфортные условия для наших сотрудников, которые помогут им не только выполнять непосредственные профессиональные задачи, но и реализовывать творческий потенциал», – отметила Елена Серегина, директор Департамента корпоративной социальной ответственности и внутренних коммуникаций Группы МТС.
                    <br><br>
                    К участию в конкурсе принимаются оригинальные творческие работы сольных исполнителей и музыкальных коллективов, в которых художественными средствами (в том числе с использованием новых музыкальных, визуальных, постановочных технологий) раскрывается тема коммуникаций – связи, общения между людьми, обмена информацией.
                    <br><br>
                    Жюри, состоящее из представителей МТС, экспертного совета конкурса «Телеком Идея» и деятелей искусства, определит победителей конкурса в следующих основных номинациях:
                    <br><br>
                <ul>
                    <li> Оригинальный вокал</li>
                    <li> Оригинальный пластический номер</li>
                    <li> Инновационная аранжировка</li>
                    <li> Инновационная постановка сценического номера</li>
                </ul>
                <br><br>
                Кроме того, в рамках конкурса объявлены специальные номинации:
                <br><br>
                <ul>
                    <li> Сотвори свой рингтон</li>
                    <li> Мелодичное ожидание (мелодия вместо гудков)</li>
                    <li> Телеком о том о сем (песня, посвященная телекоммуникациям)</li>
                    <li> Классика жанра (произведения классической музыки в оригинальной интерпретации и способе подачи) – специальная номинация от радиостанции «Орфей» - информационного партнера конкурса</li>
                    <li> «Звезда МТС» (специальная номинация для сотрудников группы компаний МТС)</li>
                </ul>
                <br><br>
                Финалисты конкурса получат ценные призы, возможность выступить на заключительном гала-концерте и шанс реализовать свои музыкальные идеи при поддержке МТС, а обладатель первой премии – сертификат на запись аудио- или видеоклипа в профессиональной студии.
                <br><br>
                Заявки на конкурс «Телеком Хит» принимаются до 1 июня 2013 года. Подведение итогов и заключительный концерт состоятся в июле на церемонии награждения победителей «Телеком Идеи».
                <br><br>

                Обладательницей Гран При конкурса «Телеком Хит 2012» стала Мария Александрова из Брянского государственного технического университета с вокальной композицией «What else». Клип, снятый при поддержке МТС на композицию «What else».
                <br><br>
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/qWvEAhFVJjA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM HIT 2013 </p>
                <p class="undotitle__years_solo"> MTS announces a creative competition for young performers "Telecom Hit" </p>
                <p class="podundotitle__years_solo"> Moscow, RF - Mobile TeleSystems OJSC (MTS - NYSE: MBT), the leading telecommunications operator in Russia and the CIS, announces the launch of the III Telecom Hit creative contest for young performers, which will be held in from April to June 2013 within the framework of the international competition of youth innovative projects in the field of telecommunications "Telecom Idea".
                </p>
                <p>
                    The Telecom Hit competition was established by MTS in 2011 with the aim of identifying progressive trends in the creative student environment and supporting young talented performers, students of higher educational institutions in Russia and the countries of the company's presence in the CIS.
                    <br> <br>
                    “MTS pays great attention to working with youth and supporting talented undertakings. We are interested in attracting the most creative students to the Telecom Idea platform, who today realize their abilities not only in study and work on innovative projects, but also in creativity, creating unique vocal, instrumental, dance and stage performances. This year we have a new nomination - MTS Star - especially for the employees of the MTS group of companies. Thus, we strive to create comfortable conditions for our employees that will help them not only to fulfill their immediate professional tasks, but also to realize their creative potential, ”said Elena Seregina, Director of the Department of Corporate Social Responsibility and Internal Communications of the MTS Group.
                    <br> <br>
                    Original creative works of solo performers and musical groups are accepted for participation in the competition, in which the topic of communication is revealed by artistic means (including the use of new musical, visual, production technologies) - communication, communication between people, exchange of information.
                    <br> <br>
                    The jury, consisting of representatives of MTS, the Expert Council of the Telecom Idea competition and artists, will determine the winners of the competition in the following main nominations:
                    <br> <br>
                <ul>
                    <li> Original vocals </li>
                    <li> Original plastic number </li>
                    <li> Innovative arrangement </li>
                    <li> An innovative production of a stage performance </li>
                </ul>
                <br> <br>
                In addition, special nominations have been announced within the framework of the competition:
                <br> <br>
                <ul>
                    <li> Create your own ringtone </li>
                    <li> Melodic waiting (melody instead of beeps) </li>
                    <li> Telecom about this and that (song about telecommunications) </li>
                    <li> Classics of the genre (works of classical music in their original interpretation and presentation method) - a special nomination from the radio station "Orpheus" - the information partner of the competition </li>
                    <li> MTS Star (special nomination for employees of the MTS group of companies) </li>
                </ul>
                <br> <br>
                The finalists of the competition will receive valuable prizes, the opportunity to perform at the final gala concert and the chance to realize their musical ideas with the support of MTS, and the winner of the first prize will receive a certificate for recording an audio or video clip in a professional studio.
                <br> <br>
                Applications for the "Telecom Hit" competition are accepted until June 1, 2013. Summing up and the final concert will take place in July at the awards ceremony for the winners of Telecom Idea.
                <br> <br>

                The Grand Prix winner of the Telecom Hit 2012 competition was Maria Alexandrova from the Bryansk State Technical University with the vocal composition What else. Clip, filmed with the support of MTS for the song "What else".
                <br> <br>
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/qWvEAhFVJjA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection