@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'СТАРТАП-ХАКАТОН ЮФО В РОСТОВЕ-НА-ДОНУ')
@else
@section('title', 'STARTUP-HAKATON SOFD IN ROSTOV-ON-DON')
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
                        <p>29 мая 2017</p>
                        <p>Регистрация участников, вводная часть, образовательная часть, формирование команд.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 этап</p>
                        <p>30 мая 2017</p>
                        <p>Образовательная часть, создание прототипов и их презентация.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>31 мая 2017</p>
                        <p>Завершение работы, экспертное мнение, итоговая презентация, награждение.</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Stage 1 </p>
                        <p> May 29, 2017 </p>
                        <p> Registration of participants, introductory part, educational part, team formation. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Stage 2 </p>
                        <p> May 30, 2017 </p>
                        <p> Educational part, prototyping and presentation. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> May 31, 2017 </p>
                        <p> Completion of work, expert opinion, final presentation, rewarding. </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">СТАРТАП-ХАКАТОН ЮФО В РОСТОВЕ-НА-ДОНУ</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    С 29 по 31 мая 2017 года в Ростове-на-Дону пройдет Окружной стартап-хакатон Южного федерального округа. Это этап Всероссийской программы «IT-START», которая реализуется с 2012 Агентством инновационного развития совместно с Южным ит-парком.
                </p>
                <p>

                    Подать заявку на участие может любой житель ЮФО от 16 до 35 лет. Если вы интересуетесь стратапами, техническим предпринимательством и программированием, регистрируйтесь прямо сейчас!
                    <br><br>
                    Участие в хакатоне – это возможность проработать бизнес-модель проекта или идеи и оценить ее перспективность за 72 часа! На протяжении всех трех дней участники прослушают бизнес-ориентированную образовательную программу, а в рамках конкурсной части сразятся в навыках решения технологического кейса, проработке бизнес-модели проекта и разработке прототипа.
                    <br><br>
                    Лекторами программы выступят:
                    <br><br>
                    - Андрей Батрименко, руководитель Акселератора Южного IT-парка;
                    <br><br>
                    - Артем Попов, организатор множества хакатонов и технологических конкурсов;
                    <br><br>
                    - Вера Ковалева, основатель презентационной медиа-группы «Преспортал», консультант и тренер по презентациям в государственных и корпоративных структурах, а также в МГУ, МФТИ, бизнес-инкубаторе ВШЭ;
                    <br><br>
                    - Шариф Кармо, основатель сервиса интерактивной рекламы GetShopTV, серийный предприниматель;
                    <br><br>
                    - ПАО Сбербанк. В рамках Sbertalks на тему «Запуск электронной услуги: реактивный подход. Sbergile» представители Сбербанка расскажут, почему бизнесу важны скорость и инновационность, а также как разрабатываются и запускаются банковские приложения.
                    <br><br>
                    Наиболее перспективные проекты, презентованные в рамках «IT-Start HACKATHON», смогут претендовать на призы от партнеров, а также интерес со стороны государственных и частных фондов.
                    <br><br>
                    Организаторы:
                    <br><br>
                    «Агентство инновационного развития» и Южный IT-парк при поддержке ПАО «МТС» и Юго-Западный банк ПАО Сбербанк.
                    <br><br>
                    Южный IT-парк
                    <br><br>
                    Это рабочее пространство с государственной поддержкой для стартапов в области webи mobile-приложений. Здесь регулярно проходят обучающие мероприятия и конкурсы. Так, за 2 года более 15 проектов получили инвестиции от бизнес-ангелов и Фонда содействия инновациям на сумму свыше 20 млн рублей. Среди резидентов Южного IT-парка: «Биржа кухонь», «АгроNet», «Нейроинтерфейс» и другие стартапы, уже вышедшие на межрегиональный рынок.

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> STARTUP-HAKATON SOUTH AFRICA IN ROSTOV-ON-DON </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    From May 29 to May 31, 2017, the Regional Startup Hackathon of the Southern Federal District will be held in Rostov-on-Don. This is a stage of the All-Russian program "IT-START", which has been implemented since 2012 by the Agency for Innovative Development together with the South IT Park.
                </p>
                <p>

                    Any resident of the Southern Federal District from 16 to 35 years old can apply for participation. If you are interested in startups, tech entrepreneurship and coding, sign up now!
                    <br> <br>
                    Participation in a hackathon is an opportunity to work out a business model of a project or idea and assess its prospects in 72 hours! During all three days, the participants will listen to a business-oriented educational program, and within the framework of the competitive part they will compete in the skills of solving a technological case, working out a project's business model and developing a prototype.
                    <br> <br>
                    The lecturers of the program will be:
                    <br> <br>
                    - Andrey Batrimenko, Head of the Accelerator of the South IT Park;
                    <br> <br>
                    - Artem Popov, organizer of many hackathons and technology competitions;
                    <br> <br>
                    - Vera Kovaleva, founder of the presentation media group "Presportal", consultant and trainer for presentations in government and corporate structures, as well as at Moscow State University, MIPT, HSE business incubator;
                    <br> <br>
                    - Sharif Karmo, founder of the GetShopTV interactive advertising service, serial entrepreneur;
                    <br> <br>
                    - PJSC Sberbank. Within the framework of Sbertalks on the theme “Launching an e-service: a reactive approach. Sbergile ”, representatives of Sberbank will tell you why speed and innovation are important to business, as well as how banking applications are developed and launched.
                    <br> <br>
                    The most promising projects presented within the framework of IT-Start HACKATHON will be able to claim prizes from partners, as well as interest from public and private foundations.
                    <br> <br>
                    Organizers:
                    <br> <br>
                    The Agency for Innovative Development and the South IT-Park with the support of MTS PJSC and the South-West Bank of Sberbank PJSC.
                    <br> <br>
                    South IT Park
                    <br> <br>
                    This is a government-supported workspace for startups in the field of web and mobile applications. Training events and competitions are regularly held here. Thus, over 2 years more than 15 projects received investments from business angels and the Innovation Promotion Fund in the amount of over 20 million rubles. Among the residents of the South IT Park: "Kitchen Exchange", "AgroNet", "Neurointerface" and other startups that have already entered the interregional market.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection