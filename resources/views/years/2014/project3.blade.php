@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ЮНИОР 2014')
@else
@section('title', 'TELECOM JUNIOR 2014')
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
                        <p>В ходе 1 этапа члены Экспертного совета Конкурса знакомятся с анкетами, прошедшими на Конкурс и высказывают свое мнение о целесообразности выхода того или иного проекта во 2 этап Конкурса. Окончательное решение о списке проектов, прошедших во 2 тур, принимается на очном заседании Экспертного совета. Результаты отбора публикуются на сайте Конкурса и путем рассылки персональных электронных писем участникам.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p></p>
                        <p>Эксперты оценивают полученные описания проектов и в ходе очного заседания Экспертного Совета выбирают проекты, вышедшие в финал.</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> </p>
                        <p> During the 1st stage, the members of the Expert Council of the Competition get acquainted with the questionnaires that have passed to the Competition and express their opinion on the expediency of a project entering the 2nd stage of the Competition. The final decision on the list of projects that have passed into the 2nd round is made at the in-person meeting of the Expert Council. The selection results are published on the Contest website and by sending personal e-mails to the participants. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> </p>
                        <p> Experts evaluate the received project descriptions and, during the in-person meeting of the Expert Council, select projects that have reached the final. </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ЮНИОР 2014</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    В рамках программы «Лифт в будущее» АФК «Система» по поиску, поддержке и развитию талантливой молодежи компания ОАО «Мобильные ТелеСистемы» запускает конкурс для школьников 7 – 11 классов «Телеком Идея ЮНИОР».
                </p>
                <p>
                    В конкурсе участвуют дети сотрудников Группы МТС в возрасте от 13 до 17 лет.
                    <br><br>
                    Цель конкурса заключается в выявлении одаренных детей, стремящихся всесторонне развиваться и получать новые знания. Наряду с этим проект «Телеком Идея ЮНИОР» призван стать площадкой для обмена интересными идеями среди школьников и изучения восприятия основных тенденций в сфере ИКТ глазами учеников старших классов.
                    <br><br>
                    Темой конкурса «Телеком Идея ЮНИОР» станет «умный город» и возможности использования мобильных и компьютерных технологий для улучшения окружающего нас мира.
                    <br><br>
                    <b>Основные номинации:</b>
                    <br><br>
                <ul>
                    <li>«Супер школа» (придумайте концепцию «умных» технологий, которые можно использовать во благо школьной жизни и учебного процесса);</li>
                    <li>«Уютный дом» (как сделать дом еще уютнее, еще удобнее с помощью мобильных технологий);</li>
                    <li>«Дружелюбный город» (как с помощью мобильных технологий сделать город более доступным и удобным для различных социальных групп: для детей, пожилых людей, инвалидов и т.д.</li>
                    <li>«Мобильные технологии для экологии» (как с помощью мобильных технологий можно внести вклад в охрану окружающей среды);</li>
                    <li>«Технология будущего» - (номинация для фантазеров – придумайте концепцию мобильного решения для любой сферы деятельности).</li>
                </ul>
                <br>
                Проекты принимаются в виде письменных сочинений (не более 2 страниц) либо видеопрезентации (не более 5 минут), размещенной на ресурсе Youtube (ссылка на запись размещается в заявке).
                <br><br>
                Содержание проекта должно представлять собой концепцию технологического решения в той или иной сфере по следующей схеме:
                <br><br>
                <ul>
                    <li>суть проекта</li>
                    <li>возможности и пути реализации проекта</li>
                    <li>описание полезного эффекта для общества</li>
                    <li>описание бизнес эффекта</li>
                </ul>
                <br>
                Поступившие проекты оценивает профессиональное жюри, состоящее из экспертов компаний МТС и АФК «Система».
                <br><br>
                Победители конкурса получают бесплатную путевку в одну из летних научно-образовательных школ «Лифт в будущее» (АФК «Система») и памятные призы.
                <br><br>
                <b>Как принять участие:</b>
                <br>
                Для участия в конкурсе необходимо зарегистрироваться на сайте www.telecomidea.ru. В перечне конкурсов выбрать «Телеком Идея ЮНИОР».
                <br><br>
                Если проект конкурсанта выполнен в виде видеопрезентации, то вместо текста проекта конкурсант размещает ссылку на неё.
                <br><br>
                Прием проектов производится с 31 марта по 23 мая 2014 года.
                <br>
                <br>
                Делитесь светлыми и полезными идеями – это поможет нам сделать мир лучше!

                </p>
            </div>

            @else
            <div>
                <p class="title__years_solo"> TELECOM JUNIOR 2014 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    Within the framework of the Lift to the Future program of AFK Sistema for the search, support and development of talented youth, Mobile TeleSystems OJSC is launching a contest for schoolchildren of 7-11 grades “Telecom Idea YUNIOR”.
                </p>
                <p>
                    Children of MTS Group employees aged 13 to 17 participate in the competition.
                    <br> <br>
                    The purpose of the competition is to identify gifted children striving to develop comprehensively and gain new knowledge. Along with this, the project "Telecom Idea JUNIOR" is intended to become a platform for exchanging interesting ideas among schoolchildren and studying the perception of the main trends in the field of ICT through the eyes of high school students.
                    <br> <br>
                    The theme of the contest "Telecom Idea JUNIOR" will be "smart city" and the possibilities of using mobile and computer technologies to improve the world around us.
                    <br> <br>
                    <b> Main nominations: </b>
                    <br> <br>
                <ul>
                    <li> Super School (come up with a concept of smart technology that can be used to benefit school life and the learning process); </li>
                    <li> "Cozy home" (how to make your home more comfortable, more convenient using mobile technologies); </li>
                    <li> "Friendly city" (how to use mobile technologies to make the city more accessible and convenient for various social groups: for children, elderly people, disabled people, etc. </li>
                    <li> “Mobile technologies for the environment” (how mobile technologies can contribute to environmental protection); </li>
                    <li> "Technology of the future" - (nomination for visionaries - come up with a concept of a mobile solution for any field of activity). </li>
                </ul>
                <br>
                Projects are accepted in the form of written compositions (no more than 2 pages) or video presentation (no more than 5 minutes) posted on the Youtube resource (a link to the recording is placed in the application).
                <br> <br>
                The content of the project should be a concept of a technological solution in a particular area according to the following scheme:
                <br> <br>
                <ul>
                    <li> essence of the project </li>
                    <li> opportunities and ways of project implementation </li>
                    <li> a description of the beneficial effect on society </li>
                    <li> business effect description </li>
                </ul>
                <br>
                Submitted projects are evaluated by a professional jury consisting of experts from MTS and AFK Sistema.
                <br> <br>
                The winners of the competition receive a free ticket to one of the Lift to the Future summer scientific and educational schools (AFK Sistema) and memorable prizes.
                <br> <br>
                <b> How to participate: </b>
                <br>
                To participate in the competition, you must register on the website www.telecomidea.ru. Select "Telecom Idea JUNIOR" from the list of competitions.
                <br> <br>
                If the contestant's project is made in the form of a video presentation, then instead of the text of the project, the contestant places a link to it.
                <br> <br>
                Projects are accepted from March 31 to May 23, 2014.
                <br>
                <br>
                Share bright and useful ideas - this will help us make the world a better place!

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection