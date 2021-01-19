@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ХИТ 2015')
@else
@section('title', 'TELECOM HIT 2015')
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
                        <p>27 апреля - 23 июня 2015 года</p>
                        <p>Прием работ участников конкурса</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Определение победителей</p>
                        <p></p>
                        <p>Оценка присланных работ и определение финалистов конкурса</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Заключительный концерт</p>
                        <p></p>
                        <p>Заключительный концерт на Церемонии награждения победителей конкурса «Телеком Идея 2015»</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Acceptance of applications </p>
                        <p> April 27 - June 23, 2015 </p>
                        <p> Acceptance of entries from the competition participants </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Determining the winners </p>
                        <p> </p>
                        <p> Evaluation of the submitted works and determination of the finalists of the competition </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Final concert </p>
                        <p> </p>
                        <p> Final concert at the awards ceremony for the winners of the "Telecom Idea 2015" competition </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ХИТ</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    МТС объявляет о запуске V международного творческого конкурса для молодых исполнителей «Телеком Хит», который пройдет c 27 апреля по 1 июня 2015 года в рамках международного конкурса молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея».
                </p>
                <p>
                    Конкурс «Телеком Хит» был учрежден МТС в 2011 году с целью выявления прогрессивных тенденций в творческой студенческой среде и поддержки молодых талантливых исполнителей, учащихся высших учебных заведений России и стран присутствия компании в СНГ. Конкурс проходит при поддержке радиостанции «Орфей».
                    <br><br>
                    «Компания МТС уделяет большое внимание поддержке талантливой молодежи. Мы стремимся развиваться и идти в ногу со временем, а это невозможно без свежих идей. Создавая вокруг себя молодежное инновационное сообщество, мы не только получаем доступ к источнику прогрессивных идей, но и вносим вклад в культурно-экономическое будущее нашей страны, помогая этим идеям претвориться в жизнь. Мы заинтересованы в привлечении на площадку «Телеком Идеи» самых креативных представителей студенчества и ждем от них не только амбициозных, прорывных телеком-проектов, но инновационных идей в искусстве», – отметил Член Правления – Вице-президент по управлению персоналом МТС Михаил Архипов.
                    <br><br>
                    К участию в конкурсе принимаются оригинальные творческие работы сольных исполнителей, музыкальных коллективов, молодых композиторов и аранжировщиков, а также тех, кто использует инновационные идеи в творчестве.
                    <br><br>
                    Жюри, в составе которого представители МТС, экспертного совета конкурса «Телеком Идея» и деятели искусства, определит победителей конкурса в следующих основных номинациях:
                    <br><br>
                <ul>
                    <li>Оригинальный вокал (индивидуальные исполнители)</li>
                    <li>Наша команда (музыкальные группы, коллективы)</li>
                    <li>Я – композитор (музыкальные произведения, аранжировки, рингтоны, мелодии ожидания и тд)</li>
                    <li>Инновационный подход (использование гаджетов, мобильных приложений в творчестве)</li>
                </ul>
                <br>
                <b>Кроме того, в рамках конкурса объявлены специальные номинации:</b>
                <br><br>
                <ul>
                    <li>Классика жанра (произведения классической музыки в оригинальной интерпретации и способе подачи) – специальная номинация от радиостанции «Орфей» - информационного партнера конкурса</li>
                    <li>«Звезда МТС» (специальная номинация для сотрудников группы компаний МТС)</li>
                </ul>
                <br>
                Финалисты конкурса получат ценные призы, возможность выступить на заключительном гала-концерте и шанс реализовать свои музыкальные идеи при поддержке МТС, а обладатель первой премии – сертификат на запись аудио- или видеоклипа в профессиональной студии.
                <br><br>

                Обладательницей Гран-при конкурса «Телеком Хит 2014» стала Марина СО – сотрудница МТС. Она работает старшим специалистом Отдела по работе с корпоративными клиентами МР «Дальний Восток». Клип, снятый при поддержке МТС в исполнении обладательницы Гран При конкурса 2014, можно посмотреть здесь.
                Гран-при конкурса «Телеком Хит 2013» завоевала выпускница Самарской государственной академии культуры и искусств Василина Курнос (Vasilina Kee). Клип можно посмотреть здесь.

                <br><br>
                <b>Как принять участие</b>
                <br><br>
                Для участия в конкурсе нужно зарегистрироваться на сайте Telecomideas.com выбрать соответствующий раздел в Личном кабинете, заполнить анкету участника и добавить видео- или аудиоролик со своим выступлением. Заявки на конкурс «Телеком Хит» принимаются до 23 июня 2015 года. Подведение итогов и заключительный концерт состоятся на церемонии награждения победителей «Телеком Идеи 2015».

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM HIT </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    MTS announces the launch of the 5th Telecom Hit international creative competition for young performers, which will be held from April 27 to June 1, 2015 as part of the Telecom Idea international competition for youth innovative projects in the field of telecommunications.
                </p>
                <p>
                    The Telecom Hit competition was established by MTS in 2011 with the aim of identifying progressive trends in the creative student environment and supporting young talented performers, students of higher educational institutions in Russia and the countries of the company's presence in the CIS. The competition is supported by the Orpheus radio station.
                    <br> <br>
                    “MTS Company pays great attention to supporting talented youth. We strive to develop and keep up with the times, and this is impossible without fresh ideas. By creating a youth innovation community around us, we not only gain access to a source of progressive ideas, but also contribute to the cultural and economic future of our country, helping these ideas to become reality. We are interested in attracting the most creative student representatives to the Telecom Idea platform and expect from them not only ambitious, breakthrough telecom projects, but innovative ideas in art, ”said Mikhail Arkhipov, Member of the Management Board, Vice President for Human Resources of MTS.
                    <br> <br>
                    Original creative works of solo performers, musical groups, young composers and arrangers, as well as those who use innovative ideas in their work are accepted for participation in the competition.
                    <br> <br>
                    The jury, which includes representatives of MTS, the expert council of the Telecom Idea competition and artists, will determine the winners of the competition in the following main nominations:
                    <br> <br>
                <ul>
                    <li> Original vocals (individual performers) </li>
                    <li> Our team (musical groups, collectives) </li>
                    <li> I am a composer (pieces of music, arrangements, ringtones, melodies, etc.) </li>
                    <li> An innovative approach (using gadgets, mobile applications in creativity) </li>
                </ul>
                <br>
                <b> In addition, special nominations have been announced within the framework of the competition: </b>
                <br> <br>
                <ul>
                    <li> Classics of the genre (works of classical music in their original interpretation and presentation method) - a special nomination from the radio station "Orpheus" - the information partner of the competition </li>
                    <li> MTS Star (special nomination for employees of the MTS group of companies) </li>
                </ul>
                <br>
                The finalists of the competition will receive valuable prizes, the opportunity to perform at the final gala concert and the chance to realize their musical ideas with the support of MTS, and the winner of the first prize will receive a certificate for recording an audio or video clip in a professional studio.
                <br> <br>

                Marina SO, an employee of MTS, became the owner of the Grand Prix of the Telecom Hit 2014 competition. She works as a senior specialist in the Corporate Clients Department of the Dalniy Vostok MR. The clip, filmed with the support of MTS and performed by the winner of the Grand Prix of the 2014 competition, can be viewed here.
                The Grand Prix of the Telecom Hit 2013 competition was won by a graduate of the Samara State Academy of Culture and Arts Vasilina Kee. The clip can be viewed here.

                <br> <br>
                <b> How to participate </b>
                <br> <br>
                To participate in the competition, you need to register on the Telecomideas.com website, select the appropriate section in your Personal Account, fill out the participant's questionnaire and add a video or audio clip with your performance. Applications for the Telecom Hit contest are accepted until June 23, 2015. Summing up and the final concert will take place at the awards ceremony for the winners of Telecom Idea 2015.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection