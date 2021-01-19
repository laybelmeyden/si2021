@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ХИТ 2012')
@else
@section('title', 'TELECOM HIT 2012')
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
                        <p></p>
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
                        <p>Заключительный концерт на Церемонии награждения победителей конкурса «Телеком Идея»</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Acceptance of work </p>
                        <p> </p>
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
                        <p> Final concert at the Telecom Idea Awards Ceremony </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ХИТ 2012</p>
                <p class="undotitle__years_solo">Приглашаем вас принять участие в творческом конкурсе «Телеком Хит»!</p>
                <p class="podundotitle__years_solo">Дорогие друзья!
                    Приглашаем вас принять участие в творческом конкурсе «Телеком Хит»!
                </p>
                <p>
                    ОАО «Мобильные ТелеСистемы», ведущий телекоммуникационный оператор в России и странах СНГ, объявляет о запуске очередного творческого конкурса молодых исполнителей «Телеком Хит», который пройдет с апреля по июль 2012 года в рамках конкурса молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея».
                    <br><br>
                    Компания МТС активно поддерживает молодые дарования и стремится создавать условия, способствующие самореализации и раскрытию талантов молодого поколения как в России, так и в странах СНГ.
                    <br><br>
                    Конкурс «Телеком Хит» является творческой составляющей конкурса «Телеком Идея» и предоставляет возможность творческим личностям в возрасте от 18 до 35 лет – сольным исполнителям-студентам и музыкальным коллективам высших учебных заведений – проявить себя и продемонстрировать свои инновационные достижения в музыкальной области.
                    К участию в конкурсе принимаются креативные работы, в которых художественными средствами (в том числе с использованием инновационных музыкальных, визуальных, звуковых и постановочных технологий) раскрывается тема коммуникаций – связи, общения между людьми, обмена информацией.
                    <br><br>
                    Конкурс проводится по следующим номинациям:
                    <br><br>
                    Основные номинации:
                    <br><br>
                <ul>
                    <li>Оригинальный вокал</li>
                    <li>Оригинальный пластический номер</li>
                    <li>Инновационная аранжировка</li>
                    <li>Инновационная постановка сценического номера</li>
                </ul>
                <br><br>
                Специальные номинации:
                <br><br>
                <ul>
                    <li>Классика жанра (произведения классической музыки в оригинальной интерпретации и способе подачи) – номинация от радиостанции «Орфей»</li>
                    <li>Сотвори свой рингтон</li>
                    <li>Мелодичное ожидание (мелодия вместо гудков)</li>
                    <li>Телеком о том о сем (песня, посвященная телекоммуникациям)</li>
                </ul>
                <br><br>
                Музыкальные проекты оценивает жюри, в состав которого входят представители МТС, экспертного совета конкурса «Телеком Идея», деятели искусства. По результатам оценки конкурсных работ жюри определит победителей в каждой из номинаций и абсолютного победителя. По итогам голосования интернет-пользователей будет также вручен приз зрительских симпатий.
                <br><br>
                Победители конкурса награждаются ценными призами, а обладатель первой премии – сертификатом на запись в профессиональной студии. Победители в специальных номинациях получат шанс реализовать свои музыкальные проекты при поддержке компании МТС.
                <br><br>
                Подведение итогов конкурса «Телеком Хит» состоится в июле 2012 года в рамках торжественной церемонии награждения победителей конкурса «Телеком Идея».

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM HIT 2012 </p>
                <p class="undotitle__years_solo"> We invite you to take part in the creative contest "Telecom Hit"! </p>
                <p class="podundotitle__years_solo"> Dear friends!
                    We invite you to take part in the Telecom Hit creative contest!
                </p>
                <p>
                    OJSC Mobile TeleSystems, the leading telecommunications operator in Russia and the CIS countries, announces the launch of the next creative contest for young performers Telecom Hit, which will be held from April to July 2012 as part of the Telecom Idea contest of youth innovative projects in the field of telecommunications.
                    <br> <br>
                    MTS actively supports young talents and strives to create conditions conducive to self-realization and disclosure of talents of the young generation both in Russia and in the CIS countries.
                    <br> <br>
                    The Telecom Hit competition is the creative component of the Telecom Idea competition and provides an opportunity for creative individuals aged 18 to 35 - solo performers-students and musical groups of higher educational institutions - to express themselves and demonstrate their innovative achievements in the music field.
                    Creative works are accepted for participation in the competition, in which the topic of communication - communication, communication between people, exchange of information - is revealed by artistic means (including the use of innovative musical, visual, sound and staging technologies).
                    <br> <br>
                    The competition is held in the following nominations:
                    <br> <br>
                    Main nominations:
                    <br> <br>
                <ul>
                    <li> Original vocals </li>
                    <li> Original plastic number </li>
                    <li> Innovative arrangement </li>
                    <li> An innovative production of a stage performance </li>
                </ul>
                <br> <br>
                Special nominations:
                <br> <br>
                <ul>
                    <li> Classics of the genre (works of classical music in their original interpretation and presentation method) - nomination from the radio station "Orpheus" </li>
                    <li> Create your own ringtone </li>
                    <li> Melodic waiting (melody instead of beeps) </li>
                    <li> Telecom about this and that (song dedicated to telecommunications) </li>
                </ul>
                <br> <br>
                Musical projects are evaluated by a jury, which includes representatives of MTS, the expert council of the Telecom Idea competition, and art workers. Based on the results of the evaluation of the competitive works, the jury will determine the winners in each of the nominations and the absolute winner. According to the results of voting, Internet users will also be awarded the People's Choice Award.
                <br> <br>
                The winners of the competition are awarded valuable prizes, and the winner of the first prize is awarded a certificate for recording in a professional studio. Winners in special nominations will have a chance to realize their musical projects with the support of MTS.
                <br> <br>
                Summing up the results of the "Telecom Hit" competition will take place in July 2012 within the framework of the solemn ceremony of awarding the winners of the "Telecom Idea" competition.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection