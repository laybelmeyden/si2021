@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2012')
@else
@section('title', 'TELECOM IDEA 2012')
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
                        <p>Прием заявок, оценка анкет Экспертами, определение участников 2-го Этапа</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p></p>
                        <p>Участники заполняют подробное описание проектов, Эксперты оценивают описания в ходе очного заседания Экспертного совета и выбирают проекты для участия в 3-м Этапе</p>
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
                        <p> Acceptance of applications, assessment of questionnaires by Experts, identification of participants of the 2nd Stage </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> </p>
                        <p> Participants fill out a detailed description of projects, Experts evaluate descriptions during an in-person meeting of the Expert Council and select projects for participation in Stage 3 </p>
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
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2012</p>
                <p class="undotitle__years_solo">Конкурс «Телеком Идея» направлен на поиск и поддержку перспективных идей научной молодежи в сфере телекоммуникаций.</p>
                <p class="podundotitle__years_solo">
                </p>
                <p>

                    Вы молоды, активны, талантливы, еще только грызете гранит науки или уже начинаете собственный инновационный бизнес? У вас есть идеи о том, как с помощью телекоммуникаций изменить мир, сделать жизнь лучше, насыщеннее, интереснее? Вы хотите рассказать об этом другим и стремитесь воплотить свои замыслы в жизнь? Давайте сделаем это вместе!
                    <br><br>
                    В рамках программы «Система «Лифт в будущее» о поиску, поддержке и развитию талантливой молодежи компания «Мобильные ТелеСистемы» (ОАО МТС), ведущий телекоммуникационный оператор в России и странах СНГ, проводит II конкурс молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея». Конкурс организован Группой МТС при поддержке Министерства связи и телекоммуникаций Российской Федерации и Высшей школы экономики (НИУ ВШЭ).
                    Конкурс «Телеком Идея» был учрежден в 2011 году с целью поиска, поддержки и продвижения на рынок инновационных идей и проектов среди молодежи, имеющих отношение к телекоммуникациям и перспективы применения в бизнесе, социальной и государственной сферах.
                    <br><br>

                    На конкурс принимаются проекты от студентов, молодых ученых, исследователей, разработчиков и предпринимателей, находящиеся на всех стадиях разработки от идеи до опытной модели по следующим основным тематическим номинациям:
                    <br><br>
                <ul>
                    <li>Инновации в сервисе и контенте
                        Новые кросс-платформенные мобильные приложения. Электронная и мобильная коммерция, финансы, платежи. Цифровой контент для молодежного сегмента и полезный контент для детей. Дополнительные услуги на базе технологий дополненной реальности, геолокации и позиционирования (LBS/GPS/ГЛОНАСС), передачи сообщений, интерактивные услуги и web-сервисы. Решения на основе M2M.
                    </li>
                    <li>Инновации в программных продуктах
                        Новые подходы к использованию информационных технологий и программного обеспечения операторами связи. Решения и сервисы на основе облачных вычислений.
                    </li>
                    <li>Инновационные технические решения для систем связи
                        Новые способы повышения эффективности построения и использования сетевых ресурсов, в том числе – мобильных сетей следующего поколения (4G). Конвергенция фиксированных и мобильных сетей связи (FMC). Взаимодействие сетей связи и навигационных систем. Расширение функционала и улучшение пользовательских характеристики абонентских устройств.
                    </li>
                    <li>Маркетинговые и управленческие инновации
                        Новые решения, направленные на совершенствование системы продаж, дистрибуции, обслуживания клиентов и оптимизации бизнес-процессов. Нестандартные подходы к рыночному продвижению и рекламе продуктов и услуг связи.
                    </li>
                </ul>
                <br><br>
                Свои специальные номинации объявили партнеры конкурса «Телеком Идея»:
                <br><br>
                <b>ОАО «Интеллект Телеком»</b>
                <br><br>
                <ul>
                    <li>Разработка новых видов коммуникационных сервисов на базе интегрированных систем сотовой, беспроводной и фиксированной связи.</li>
                    <li>Разработка новых видов коммуникационных сервисов на базе систем спутниковой навигации, телематики и других технологий M2M.</li>
                    <li>Использование информационно-коммуникационных технологий для решения актуальных задач управления транспортом: разработка эффективных способов парковки, построение адаптивных схем регулирования работы перекрестков и др. </li>
                    <li>Использование информационно-коммуникационных технологий для решения задач обеспечения индивидуальной и общественной безопасности.
                    <li>Использование информационно-коммуникационных технологий в телеобучении, медицине, социальной деятельности, работе на дому и других аналогичных проектах.</li>
                    </li>
                </ul>
                <br><br>
                <b>ОАО «РТИ»</b>
                <br><br>
                <ul>
                    <li> Интеллектуальные системы передачи информации.</li>
                    <li> Интеллектуальные системы связи и управления.</li>
                    <li> Интеллектуальные сетевые системы.</li>
                    <li> Саморегулирующиеся сетевые системы.</li>
                    <li> Сетевые системы социального назначения.</li>
                    <li> Искусственный интеллект как основа сетей связи и управления будущего.</li>
                    <li> Сотовая связь как распределенная платформа искусственного интеллекта будущего.</li>
                    <li> Широкополосная связь как основа новой урбанистической культуры. </li>
                </ul>
                <br><br>
                <b>Компания «Детский мир»</b>
                <br><br>
                <ul>
                    <li> «Умный» магазин – интерактивное взаимодействие с покупателями в магазине.</li>
                    <li> Видео контроль – возможности и технологии анализа видео изображений торгового зала.</li>
                    <li> Упаковка и маркировка – технологии упаковки и маркировки для повышения эффективности торговых и логистических процессов.</li>
                    <li> «Аутсорсинг» интернет-аудитории для процессов розничной торговли (внешний видео контроль за выкладкой товаров, персоналом, охрана и безопасность и т.п.).</li>
                    <li> Создание мобильной версии интернет-магазина (на примере www.detmir.ru) и мобильного приложения с использованием новейших технологий навигации, геолокации, QR-кодов, оплаты on-line, участия в акциях и программах лояльности.</li>
                </ul>
                <br><br>
                <b>ЗАО «Группа компаний «Медси»</b>
                <br><br>
                <ul>
                    <li> Разработка медицинской информационной системы будущего.</li>
                </ul>
                <br><br>
                <b>Фонд SoftlineVenturePartners</b>
                <br><br>
                <ul>
                    <li> Readytoinvest – номинация за наиболее проработанную идею, четкое видение рынка и обоснование коммерческого потенциала</li>
                    <li> Ready to seed – номинация за самую оригинальную идею, подкрепленную знанием рынка и приверженностью своему делу</li>
                </ul>
                <br><br>

                Кроме того, в рамках «Телеком Идеи» пройдут конкурс видеопрезентаций и конкурс на лучший startup-блог, участие в которых позволит молодым инноваторам проявить свои творческие способности, креатив и потренироваться в использовании современных методов позиционирования и продвижения своих проектов.
                <br><br>
                <b>Игорь Щеголев,
                    Министр связи и массовых коммуникаций Российской Федерации:
                </b>
                <br><br>
                <i>«Я рад, что наша совместная с компанией инициатива создания в отрасли стартовой площадки для молодых инноваторов получила столь широкий отклик и дальнейшее развитие. Рассчитываю, что в этом году на конкурс поступит еще больше интересных, качественных проектов. Главное, чтобы все решения - и те, которые получат высокие оценки экспертов, и те, которые не победят, но достойны внимания, - нашли свой путь сначала к инвесторам и производителям, а затем и к потребителям. Мы хотим, чтобы новые идеи распространялись по сетевой модели, чтобы талантливые молодые люди не боялись выходить со своими идеями на рынок, чтобы они оставались и работали в России, а продукты их интеллектуального труда служили бы предметом гордости и экспорта, в том числе в страны СНГ».</i>
                <br><br>
                <b>
                    Александр Поповский,
                    вице-президент по операционным вопросам МТС:

                </b>
                <br><br>
                <i>«Рынок телекоммуникаций почти исчерпал возможности роста за счет предоставления базовых услуг и в дальнейшем будет расти на предоставлении дополнительных сервисов и приложений. По мере расширения возможностей сетей и устройств появляются всевозможные сочетания сервисов по передаче данных, коротких сообщений, голосовых сообщений, мультимедиа, в которых сама идеология связи меняется, появляются новые формы общения. Мы заинтересованы в реальном внедрении лучших предложений, полученных в режиме «открытых инноваций». Поэтому преимущество при оценке получат те конкурсные проекты, авторы которых смогут обосновать практическую применимость своих идей в бизнесе операторской компании». </i>
                <br><br>
                Участники конкурса «Телеком Идея» получат профессиональную экспертизу своих проектов от ведущих специалистов отрасли телекоммуникаций и венчурного рынка, необходимые знания и полезные практические навыки по работе над инновационными проектами, их коммерциализацией и продвижением. Победители смогут представить собственные разработки на рассмотрение руководства отрасли, Группы МТС и венчурных инвесторов, а также уникальный шанс сотрудничества с лидерами рынка ИКТ.
                <br><br>
                <b> Как принять участие</b>
                <br><br>
                Принять участие в конкурсе могут совершеннолетние граждане Российской Федерации, Армении, Белоруссии, Узбекистана и Украины в возрасте до 35 лет: студенты, молодые ученые, разработчики, предприниматели – как индивидуально, так и коллективно.
                <br><br>
                Конкурс будет проходить в период с марта по июнь 2012 года, прием заявок – до 5 апреля.
                <br><br>
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/2UF1IpzlMP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA 2012 </p>
                <p class="undotitle__years_solo"> The Telecom Idea competition is aimed at finding and supporting promising ideas of young scientists in the field of telecommunications. </p>
                <p class="podundotitle__years_solo">
                </p>
                <p>

                    Are you young, active, talented, are you just gnawing the granite of science or are you already starting your own innovative business? Do you have any ideas on how to use telecommunications to change the world, make life better, richer, more interesting? Do you want to tell others about this and strive to bring your ideas to life? Let's do it together!
                    <br> <br>
                    Within the framework of the Lift to the Future System program on the search, support and development of talented youth, Mobile TeleSystems (MTS OJSC), the leading telecommunications operator in Russia and the CIS, is holding the II Telecom Idea competition of youth innovation projects in the field of telecommunications ... The competition was organized by the MTS Group with the support of the Ministry of Communications and Telecommunications of the Russian Federation and the Higher School of Economics (NRU HSE).
                    The Telecom Idea competition was established in 2011 with the aim of finding, supporting and promoting innovative ideas and projects among young people on the market related to telecommunications and prospects for application in business, social and government spheres.
                    <br> <br>

                    The competition accepts projects from students, young scientists, researchers, developers and entrepreneurs at all stages of development from an idea to an experimental model in the following main thematic nominations:
                    <br> <br>
                <ul>
                    <li> Innovation in service and content
                        New cross-platform mobile apps. Electronic and mobile commerce, finance, payments. Digital content for the youth segment and useful content for children. Additional services based on augmented reality technologies, geolocation and positioning (LBS / GPS / GLONASS), messaging, interactive services and web services. M2M based solutions.
                    </li>
                    <li> Innovation in software products
                        New approaches to the use of information technologies and software by telecom operators. Cloud computing solutions and services.
                    </li>
                    <li> Innovative technical solutions for communication systems
                        New ways to improve the efficiency of building and using network resources, including next generation mobile networks (4G). Fixed-Mobile Convergence (FMC). Interaction of communication networks and navigation systems. Expansion of functionality and improvement of user characteristics of subscriber devices.
                    </li>
                    <li> Marketing and Management Innovation
                        New solutions aimed at improving the sales system, distribution, customer service and optimizing business processes. Non-standard approaches to market promotion and advertising of communication products and services.
                    </li>
                </ul>
                <br> <br>
                Partners of the Telecom Idea competition announced their special nominations:
                <br> <br>
                <b> OJSC Intellect Telecom </b>
                <br> <br>
                <ul>
                    <li> Development of new types of communication services based on integrated systems of cellular, wireless and fixed communications. </li>
                    <li> Development of new types of communication services based on satellite navigation systems, telematics and other M2M technologies. </li>
                    <li> The use of information and communication technologies to solve urgent problems of transport management: the development of effective parking methods, the construction of adaptive schemes for regulating the operation of intersections, etc. </li>
                    <li> The use of information and communication technologies to solve the problems of ensuring individual and public security.
                    <li> The use of information and communication technologies in tele-education, medicine, social activities, work from home and other similar projects. </li>
                    </li>
                </ul>
                <br> <br>
                <b> RTI JSC </b>
                <br> <br>
                <ul>
                    <li> Intelligent information transmission systems. </li>
                    <li> Intelligent communication and control systems. </li>
                    <li> Intelligent Networked Systems. </li>
                    <li> Self-Regulating Network Systems. </li>
                    <li> Networked social systems. </li>
                    <li> Artificial intelligence as the basis for communication and control networks of the future. </li>
                    <li> Cellular communications as the distributed AI platform of the future. </li>
                    <li> Broadband as the foundation of a new urban culture. </li>
                </ul>
                <br> <br>
                <b> Detsky Mir "Company </b>
                <br> <br>
                <ul>
                    <li> Smart store - interactive interaction with customers in the store. </li>
                    <li> Video control - capabilities and technologies for analyzing video images of a sales area. </li>
                    <li> Packaging and labeling - packaging and labeling technologies to improve the efficiency of trade and logistics processes. </li>
                    <li> Outsourcing of Internet audiences for retail processes (external video control over the display of goods, personnel, security and safety, etc.). </li>
                    <li> Creation of a mobile version of an online store (for example, www.detmir.ru) and a mobile application using the latest navigation technologies, geolocation, QR codes, on-line payment, participation in promotions and loyalty programs. </li>
                </ul>
                <br> <br>
                <b> CJSC Medsi Group of Companies </b>
                <br> <br>
                <ul>
                    <li> Development of the medical information system of the future. </li>
                </ul>
                <br> <br>
                <b> SoftlineVenturePartners Foundation </b>
                <br> <br>
                <ul>
                    <li> Readytoinvest - nomination for the most elaborate idea, clear vision of the market and justification of commercial potential </li>
                    <li> Ready to seed - nomination for the most original idea, backed up by market knowledge and commitment </li>
                </ul>
                <br> <br>

                In addition, within the framework of Telecom Idea, a video presentation competition and a competition for the best startup blog will be held, participation in which will allow young innovators to show their creativity, creativity and practice in using modern methods of positioning and promoting their projects.
                <br> <br>
                <b> Igor Shchegolev,
                    Minister of Communications and Mass Media of the Russian Federation:
                </b>
                <br> <br>
                <i> “I am glad that our joint initiative with the company to create a launching pad for young innovators in the industry has received such a wide response and further development. I hope that this year even more interesting, high-quality projects will be submitted to the competition. The main thing is that all solutions - both those that will receive high marks from experts and those that will not win, but are worthy of attention - find their way first to investors and manufacturers, and then to consumers. We want new ideas to spread along the network model, so that talented young people are not afraid to go out with their ideas to the market, so that they stay and work in Russia, and the products of their intellectual work would serve as a source of pride and export, including to the CIS countries. ". </i>
                <br> <br>
                <b>
                    Alexander Popovsky,
                    Vice President for Operations, MTS:

                </b>
                <br> <br>
                <i> “The telecommunications market has almost exhausted its opportunities for growth through the provision of basic services and will continue to grow through the provision of additional services and applications. As the capabilities of networks and devices expand, all kinds of combinations of services for data transmission, short messages, voice messages, multimedia appear, in which the very ideology of communication is changing, new forms of communication appear. We are interested in the real implementation of the best proposals received in the "open innovation" mode. Therefore, an advantage in the assessment will be given to those competitive projects, the authors of which will be able to substantiate the practical applicability of their ideas in the business of the operator. " </i>
                <br> <br>
                Participants of the Telecom Idea competition will receive professional expertise of their projects from leading experts in the telecommunications and venture capital market, the necessary knowledge and useful practical skills to work on innovative projects, their commercialization and promotion. The winners will be able to submit their own developments for consideration by the industry leadership, MTS Group and venture capitalists, as well as a unique chance of cooperation with the leaders of the ICT market.
                <br> <br>
                <b> How to participate </b>
                <br> <br>
                Adult citizens of the Russian Federation, Armenia, Belarus, Uzbekistan and Ukraine under the age of 35 can take part in the competition: students, young scientists, developers, entrepreneurs - both individually and collectively.
                <br> <br>
                The competition will take place from March to June 2012, applications are accepted until April 5.
                <br> <br>
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/2UF1IpzlMP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection