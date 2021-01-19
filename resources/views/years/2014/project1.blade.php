@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ХИТ 2014')
@else
@section('title', 'TELECOM HIT 2014')
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
                        <p>1 апреля – 1 июня 2014 года</p>
                        <p>Прием работ участников конкурса</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Определение победителей</p>
                        <p>1 июня – 8 июня 2014 года</p>
                        <p>Оценка присланных работ и определение финалистов конкурса</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Заключительный концерт</p>
                        <p>10 июля 2014 года</p>
                        <p>Заключительный концерт на Церемонии награждения победителей конкурса «Телеком Идея 2014»</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Acceptance of work </p>
                        <p> April 1 - June 1, 2014 </p>
                        <p> Acceptance of entries from the competition participants </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Determining the winners </p>
                        <p> June 1 - June 8, 2014 </p>
                        <p> Evaluation of the submitted works and determination of the finalists of the competition </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Final concert </p>
                        <p> July 10, 2014 </p>
                        <p> Final concert at the awards ceremony for the winners of the "Telecom Idea 2014" competition </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ХИТ 2014</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Москва, РФ - ОАО «Мобильные ТелеСистемы» (МТС — NYSE: MBT), ведущий телекоммуникационный оператор в России и странах СНГ, объявляет о запуске IV международного творческого конкурса для молодых исполнителей «Телеком Хит», который пройдет c 1 апреля по 1 июня 2014 года в рамках международного конкурса молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея».
                </p>
                <p>
                    Конкурс «Телеком Хит» был учрежден МТС в 2011 году с целью выявления прогрессивных тенденций в творческой студенческой среде и поддержки молодых талантливых исполнителей, учащихся высших учебных заведений России и стран присутствия компании в СНГ.
                    <br><br>
                    «Компания МТС уделяет большое внимание поддержке талантливой молодежи. Мы стремимся развиваться и идти в ногу со временем, а это не возможно без свежих идей. Создавая вокруг себя молодежное инновационное сообщество, мы не только получаем доступ к источнику прогрессивных идей, но и вносим вклад в культурно-экономическое будущее нашей страны, помогая этим идеям претвориться в жизнь. Мы заинтересованы в привлечении на площадку «Телеком Идеи» самых креативных представителей студенчества и ждем от них не только амбициозных, прорывных телеком-проектов, но и новаторских идей в искусстве», – отметила директор Департамента корпоративной социальной ответственности МТС Елена Серегина.
                    <br><br>
                    К участию в конкурсе принимаются оригинальные творческие работы сольных исполнителей и музыкальных коллективов, в которых художественными средствами (в том числе с использованием новых музыкальных, визуальных, постановочных технологий) раскрывается тема коммуникаций – связи, общения между людьми, обмена информацией.
                    <br><br>
                    Жюри, в составе которого представители МТС, экспертного совета конкурса «Телеком Идея» и деятели искусства, определит победителей конкурса в следующих основных номинациях:
                    <br>
                <ul>
                    <li>Оригинальный вокал</li>
                    <li>Оригинальный пластический номер</li>
                    <li>Инновационная аранжировка</li>
                    <li>Инновационная постановка сценического номера</li>
                </ul>
                <br>
                Кроме того, в рамках конкурса объявлены специальные номинации:
                <br>
                <ul>
                    <li>Сотвори свой рингтон</li>
                    <li>Мелодичное ожидание (мелодия вместо гудков)</li>
                    <li>Телеком о том о сем (песня, посвященная телекоммуникациям)</li>
                    <li>Классика жанра (произведения классической музыки в оригинальной интерпретации и способе подачи) – специальная номинация от радиостанции «Орфей» - информационного партнера конкурса</li>
                    <li>«Звезда МТС» (специальная номинация для сотрудников Группы компаний МТС)</li>
                </ul>
                <br>
                Финалисты конкурса получат ценные призы, возможность выступить на заключительном гала-концерте и шанс реализовать свои музыкальные идеи при поддержке МТС, а обладатель первой премии – сертификат на запись аудио- или видеоклипа в профессиональной студии.
                <br><br>
                Обладательницей Гран-при конкурса «Телеком Хит 2013» стала выпускница Самарской государственной академии культуры и искусств Василина Курнос (Vasilina Kee). Клип, снятый при поддержке МТС на композицию «Твой день» в исполнении обладательницы Гран При конкурса.
                <br><br>
                Как принять участие
                Для участия в конкурсе нужно зарегистрироваться на сайте www.telecomideas.ru, выбрать соответствующий раздел в Личном кабинете, заполнить анкету участника и добавить видео- или аудиоролик со своим выступлением. Заявки на конкурс «Телеком Хит» принимаются до 1 июня 2014 года. Подведение итогов и заключительный концерт состоятся в июле на церемонии награждения победителей «Телеком Идеи».

                </p>
            </div>

            @else
            <div>
                <p class="title__years_solo"> TELECOM HIT 2014 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    Moscow, RF - Mobile TeleSystems OJSC (MTS - NYSE: MBT), the leading telecommunications operator in Russia and the CIS, announces the launch of the IV Telecom Hit International Creative Competition for Young Performers, which will be held from April 1 to June 1, 2014 year in the framework of the international competition of youth innovative projects in the field of telecommunications "Telecom Idea".
                </p>
                <p>
                    The Telecom Hit competition was established by MTS in 2011 with the aim of identifying progressive trends in the creative student environment and supporting young talented performers, students of higher educational institutions in Russia and the countries of the company's presence in the CIS.
                    <br> <br>
                    “MTS Company pays great attention to supporting talented youth. We strive to develop and keep up with the times, and this is not possible without fresh ideas. By creating a youth innovation community around us, we not only gain access to a source of progressive ideas, but also contribute to the cultural and economic future of our country, helping these ideas to become reality. We are interested in attracting the most creative student representatives to the Telecom Idea platform and expect from them not only ambitious breakthrough telecom projects, but also innovative ideas in art, ”said Elena Seregina, Director of the MTS Corporate Social Responsibility Department.
                    <br> <br>
                    Original creative works of solo performers and musical groups are accepted for participation in the competition, in which the topic of communication is revealed by artistic means (including the use of new musical, visual, production technologies) - communication, communication between people, exchange of information.
                    <br> <br>
                    The jury, which includes representatives of MTS, the expert council of the Telecom Idea competition and artists, will determine the winners of the competition in the following main nominations:
                    <br>
                <ul>
                    <li> Original vocals </li>
                    <li> Original plastic number </li>
                    <li> Innovative arrangement </li>
                    <li> An innovative production of a stage performance </li>
                </ul>
                <br>
                In addition, special nominations have been announced within the framework of the competition:
                <br>
                <ul>
                    <li> Create your own ringtone </li>
                    <li> Melodic waiting (melody instead of beeps) </li>
                    <li> Telecom about this and that (song dedicated to telecommunications) </li>
                    <li> Classics of the genre (works of classical music in their original interpretation and presentation method) - a special nomination from the radio station "Orpheus" - the information partner of the competition </li>
                    <li> MTS Star (special nomination for employees of the MTS Group) </li>
                </ul>
                <br>
                The finalists of the competition will receive valuable prizes, the opportunity to perform at the final gala concert and the chance to realize their musical ideas with the support of MTS, and the winner of the first prize will receive a certificate for recording an audio or video clip in a professional studio.
                <br> <br>
                The winner of the Grand Prix of the Telecom Hit 2013 competition was a graduate of the Samara State Academy of Culture and Arts Vasilina Kee. A clip filmed with the support of MTS for the song "Your Day" performed by the winner of the Grand Prix of the competition.
                <br> <br>
                How to participate
                To participate in the competition, you need to register on the website www.telecomideas.ru, select the appropriate section in your Personal Account, fill out the participant's questionnaire and add a video or audio clip with your performance. Applications for the Telecom Hit competition are accepted until June 1, 2014. Summing up and the final concert will take place in July at the awards ceremony for the winners of Telecom Idea.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection