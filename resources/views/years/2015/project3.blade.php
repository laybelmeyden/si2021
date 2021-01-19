@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Я IT-БЛОГЕР')
@else
@section('title', 'I AM IT BLOGGER')
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
                        <p>Запуск</p>
                        <p>16 октября</p>
                        <p>Начало приема конкурсных заявок</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Launch </p>
                        <p> October 16 </p>
                        <p> Start accepting bids </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">Я IT-БЛОГЕР</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                </p>
                <p>
                    <b>1. Название компании – описание компании.</b>
                    <br><br>
                    ПАО «Мобильные ТелеСистемы» (МТС) является ведущим телекоммуникационным оператором в России и странах СНГ. Вместе со своими дочерними предприятиями компания обслуживает более 100 миллионов абонентов. Население всех регионов России, а также Армении, Беларуси, Украины, Узбекистана, где МТС и ее дочерние предприятия имеют лицензии на оказание услуг в стандарте GSM, составляет более 230 миллионов человек. С июня 2000 года акции МТС котируются на Нью-йоркской фондовой бирже под кодом MBT. В 2011 году бренд МТС четвертый год подряд признан самым дорогим российским брендом в числе ста лидирующих мировых брендов по рейтингу BRANDZ™, опубликованному Financial Times и международным исследовательским агентством Millward Brown.
                    <br><br>
                    <b>2. Проблема.</b>
                    <br><br>
                    Современные дети уже живут в Интернете. В среднем от 1 до 3 часов каждый день. А некоторые и по 5 часов. Мы решили попробовать направить вашу творческую энергию в созидательное русло:)
                    <br><br>
                    Различные блоги, форумы, сервисы типа вКонтакте, Твиттер и другие являются мощным и практически неуправляемым механизмом формирования контента. По статистике всего 14% пользователей социальных сетей доверяют рекламе. Зато 74% пользователей социальных медиа доверяют рекомендациям, непосредственно, таких же, как они, пользователей интернета.
                    <br><br>
                    Преимущества интернета перед печатными СМИ неоспоримы:
                    <br><br>
                <ul>
                    <li>доступность, оперативность;</li>
                    <li>удобство поиска;</li>
                    <li>интерактивность;</li>
                    <li>долгосрочность хранения информации.</li>
                </ul>
                <br>
                Но с другой стороны, именно эти достоинства могут превратиться в недостатки и обернуться настоящими неприятностями. Положительную репутацию завоевать непросто. Но еще сложнее сохранить ее в современном киберпространстве. К сожалению, не все пользователи интернета являют собой интеллектуальных, образованных и воспитанных индивидов.
                <br><br>
                Таким образом, весьма актуальной является задача создания в Интернете позитивного и интеллектуального контента, интересных и познавательных материалов, а также формирования культуры общения в сети.
                <br><br>
                <b>3. Задание</b>
                <br><br>
                <ul>
                    <li>В своей школе и дома на основе опросов учеников, учителей, родителей, друзей, а также используя свой опыт, выяви наиболее интересные и актуальные вопросы по использованию современных ИТ технологий в жизни (гаджеты, сервисы, мобильные приложения и тд).</li>
                    <li>Напиши интересный текст (в свободной форме) на эту тему и опубликуй в Интернете на своей странице в любой социальной сети с хештегом #телекомидеяюниор</li>
                    <li>Подбери и опубликуй иллюстрации к тексту (свои рисунки, фото, схемы и тд)</li>
                    <li>Работай с комментариями к тексту в сети, инициируй и поддерживай дискуссию</li>
                </ul>
                <br>
                <b>Ожидаемый результат работы:</b>
                <br><br>
                1. Интересные и содержательные блоги (рассказы, заметки, наблюдения, рекомендации) на тему современных ИТ технологий в Интернете;
                <br><br>
                2. Комментарии и дискуссии на тему ИТ Технологий в сети.
                <br><br>
                <b>4. Как решить задание</b>
                <br><br>
                Этап 1. – теоретическая подготовка и предварительные исследования.
                <br><br>
                1. Проанализировать актуальные вопросы ИТ технологий в современной жизни.
                <br><br>
                2. Изучить основные тренды в области ИТ (новые гаджеты, сервисы, мобильные приложения) – все, что вам интересно в этой сфере.
                <br><br>
                3. Собрать данные по использованию ИТ технологий разными людьми, а также использовать свой опыт (что полезно, что интересно, как улучшить).
                <br><br>
                Этап 2. – написание блога на своей странице в любой социальной сети.
                <br><br>
                1. Написание текстового материала в свободной форме.
                <br><br>
                2. Подборка иллюстративного материала.
                <br><br>
                3. Публикация в сети.
                <br><br>
                Этап 3. – Продвижение своего блога (поста).
                <br><br>
                1. Работа с комментариями, ведение дискуссии
                <br><br>
                2. Инициирование перепостов.
                <br><br>
                <b>5. Ориентировочный состав команды</b>
                <br><br>
                Как правило Автором блога является один человек, но может работать и команда.
                <br><br>
                Возможны команды от 3 до 5 человек.
                <br>
                <br>
                <b>6. Требования к решению</b>
                <br><br>
                Блог ведется на личной странице участника в любой социальной сети.
                <br><br>
                1. Необходимо делать публикацию с хештегом #телекомидеяюниор
                <br><br>
                2. Необходимо прислать ссылку на публикации
                <br><br>
                3. Оценка работы будет состоять из:
                <br><br>
                <ul>
                    <li>Качества командной работы</li>
                    <li>Умения видеть проблему, сформулировать цель и достичь результата, отвечающего цели</li>
                    <li>Владения понятийным аппаратом</li>
                    <li>Изучения истории вопроса и опыта решения данной проблемы со ссылками на источники</li>
                    <li>Уместного использования теоретических знаний для достижения поставленной цели</li>
                    <li>Описания в блоге практической апробации (например, проведение эксперимента, пробного действия и т.д.)</li>
                    <li>Значимости для практики</li>
                    <li>Умения структурировать материал, логично и последовательно его излагать</li>
                    <li>Умения объяснить и защитить свои идеи в комментариях и дискуссиях к блогу</li>
                    <li>Количество перепостов и лайков</li>
                    <li>Оригинальности решения и стиля</li>
                </ul>
                <br>
                <b>7. Как будут использоваться результаты исследования</b>
                <br><br>
                Лучшие блоги будут размещены в сети Интернет на ресурсах подконтрольных МТС с указание автора блога.



                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> I AM IT BLOGER </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                </p>
                <p>
                    <b> 1. Company name - description of the company. </b>
                    <br> <br>
                    PJSC Mobile TeleSystems (MTS) is a leading telecommunications operator in Russia and the CIS countries. Together with its subsidiaries, the company serves over 100 million subscribers. The population of all regions of Russia, as well as Armenia, Belarus, Ukraine, Uzbekistan, where MTS and its subsidiaries are licensed to provide services in the GSM standard, is over 230 million people. Since June 2000, MTS shares have been listed on the New York Stock Exchange under the MBT code. In 2011, the MTS brand for the fourth year in a row was recognized as the most expensive Russian brand among the hundred leading global brands according to the BRANDZ ™ rating published by the Financial Times and the international research agency Millward Brown.
                    <br> <br>
                    <b> 2. Problem. </b>
                    <br> <br>
                    Today's children already live on the Internet. On average 1 to 3 hours every day. And some for 5 hours. We decided to try to channel your creative energy into a creative channel :)
                    <br> <br>
                    Various blogs, forums, services such as vKontakte, Twitter and others are a powerful and almost uncontrollable mechanism for generating content. According to statistics, only 14% of social media users trust advertising. But 74% of social media users trust recommendations, directly, the same as they are, Internet users.
                    <br> <br>
                    The advantages of the Internet over print media are undeniable:
                    <br> <br>
                <ul>
                    <li> availability, efficiency; </li>
                    <li> ease of search; </li>
                    <li> interactivity; </li>
                    <li> long-term storage of information. </li>
                </ul>
                <br>
                But on the other hand, it is these advantages that can turn into disadvantages and turn into real troubles. It's not easy to build a positive reputation. But it is even more difficult to preserve it in today's cyberspace. Unfortunately, not all Internet users are intelligent, educated and well-mannered individuals.
                <br> <br>
                Thus, the task of creating positive and intellectual content on the Internet, interesting and informative materials, as well as the formation of a culture of communication on the Internet is very urgent.
                <br> <br>
                <b> 3. Task </b>
                <br> <br>
                <ul>
                    <li> At your school and at home, based on surveys of students, teachers, parents, friends, as well as using your experience, identify the most interesting and topical issues on the use of modern IT technologies in life (gadgets, services, mobile applications, etc.). </li>
                    <li> Write an interesting text (in free form) on this topic and publish it on the Internet on your page in any social network with the hashtag #telecomideyunior </li>
                    <li> Select and publish illustrations for the text (your drawings, photos, diagrams, etc.) </li>
                    <li> Work with comments on the text online, initiate and maintain a discussion </li>
                </ul>
                <br>
                <b> Expected result of work: </b>
                <br> <br>
                1. Interesting and informative blogs (stories, notes, observations, recommendations) on the topic of modern IT technologies on the Internet;
                <br> <br>
                2. Comments and discussions on the topic of IT Technologies on the web.
                <br> <br>
                <b> 4. How to solve the task </b>
                <br> <br>
                Stage 1. - theoretical preparation and preliminary research.
                <br> <br>
                1. Analyze topical issues of IT technologies in modern life.
                <br> <br>
                2. Study the main trends in the IT field (new gadgets, services, mobile applications) - everything that interests you in this area.
                <br> <br>
                3. Collect data on the use of IT technologies by different people, as well as use your experience (which is useful, interesting, how to improve).
                <br> <br>
                Stage 2. - writing a blog on your page in any social network.
                <br> <br>
                1. Writing text material in free form.
                <br> <br>
                2. A selection of illustrative material.
                <br> <br>
                3. Publishing on the web.
                <br> <br>
                Stage 3. - Promotion of your blog (post).
                <br> <br>
                1. Working with comments, conducting discussion
                <br> <br>
                2. Initiation of reposts.
                <br> <br>
                <b> 5. Estimated team composition </b>
                <br> <br>
                As a rule, the author of the blog is one person, but a team can also work.
                <br> <br>
                Teams from 3 to 5 people are possible.
                <br>
                <br>
                <b> 6. Solution requirements </b>
                <br> <br>
                The blog is maintained on the member's personal page in any social network.
                <br> <br>
                1. It is necessary to make a publication with the hashtag #telecomideyunior
                <br> <br>
                2. You must send a link to publications
                <br> <br>
                3. The evaluation of the work will consist of:
                <br> <br>
                <ul>
                    <li> Teamwork qualities </li>
                    <li> Ability to see the problem, formulate a goal and achieve a result that meets the goal </li>
                    <li> Knowledge of the conceptual apparatus </li>
                    <li> Studying the history of the issue and experience in solving this problem with links to sources </li>
                    <li> Appropriate use of theoretical knowledge to achieve the goal </li>
                    <li> Blog descriptions of practical approbation (e.g., running an experiment, trial action, etc.) </li>
                    <li> Implications for practice </li>
                    <li> Ability to structure material, present it logically and consistently </li>
                    <li> Ability to explain and defend your ideas in blog comments and discussions </li>
                    <li> Number of shares and likes </li>
                    <li> Originality of solution and style </li>
                </ul>
                <br>
                <b> 7. How the research results will be used </b>
                <br> <br>
                The best blogs will be posted on the Internet on the resources controlled by MTS, indicating the author of the blog.



                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection