@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2013')
@else
@section('title', 'TELECOM IDEA 2013')
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
                        <p>11 марта – 14 мая 2013 года</p>
                        <p>Сбор анкет участников, оценка анкет экспертами, подведение итогов Экспертного голосования</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p>15 мая – 17 июня 2013 года</p>
                        <p>Сбор расширенных описаний и видеопрезентаций участников 2 этапа, дистанционная образовательная программа Высшей школы маркетинга и развития бизнеса НИУ ВШЭ, выбор финалистов</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>18 июня – 4 июля</p>
                        <p>Подготовка и публичная защита презентаций, определение победителей</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> March 11 - May 14, 2013 </p>
                        <p> Collecting participant questionnaires, evaluating questionnaires by experts, summing up the results of the Expert voting </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> May 15 - June 17, 2013 </p>
                        <p> Collection of extended descriptions and video presentations of stage 2 participants, distance learning program of the Higher School of Marketing and Business Development of the Higher School of Economics, selection of finalists </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> June 18 - July 4 </p>
                        <p> Preparation and public defense of presentations, determination of winners </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2013</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                </p>
                <p>
                    В рамках программы «Лифт в будущее» АФК «Система» по поиску, поддержке и развитию талантливой молодежи с марта по июнь 2013 года пройдет III конкурс молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея».
                    Конкурс «Телеком Идея» организован компанией «Мобильные ТелеСистемы» (ОАО МТС), ведущим телекоммуникационным оператором в России и странах СНГ, при поддержке Министерства связи и массовых коммуникаций Российской Федерации, Министерства экономического развития Российской Федерации, Департамента науки, промышленной политики и предпринимательства города Москвы, Высшей школы экономики (НИУ ВШЭ) и Торгово-промышленной палаты РФ.
                    Конкурс направлен на поиск, поддержку и продвижение на рынок инновационных проектов молодежи, предполагающих применение информационно-коммуникационных технологий в коммерческой, социальной и государственной сферах и способствуют улучшению качества жизни общества.
                    <br><br>
                    Основная тема конкурса в этом году связана с использованием возможностей широкополосного мобильного и фиксированного Интернета и монетизацией передачи данных.
                    <br><br>
                    Будущее рынка телекоммуникаций определяется развитием широкополосных и мобильных сетей передачи данных, появлением новых многофункциональных устройств доступа в Сеть и услуг, предоставляемых на этой базе. По мере расширения возможностей сетей и устройств появляются разные сочетания сервисов по передаче информации, текстовых и голосовых сообщений, мультимедийного контента, меняется сама идеология связи, возникают новые формы коммуникаций и новые формы бизнеса – так называемые ОТТ-сервисы (от англ. over the top), предоставляемые «поверх» телекоммуникационных сетей и активно использующих операторскую инфраструктуру и абонентскую базу (мобильные приложения, IM-клиенты, контентные сервисы и т.п.). При этом рост проникновения высокоскоростного Интернета дает мощный импульс развитию самых разных сфер экономики, бизнеса, государственного управления.
                    <br><br>
                    В этой ситуации перед операторами связи, инвестирующими в строительство и модернизацию сетей, встает вопрос оптимального управления растущими объемами трафика и его монетизации в интересах развития бизнеса и удовлетворения потребностей разных категорий пользователей – частых лиц, предприятий и организаций. Пути привлечения дополнительной прибыли для оператора лежат в нескольких областях, среди которых: М2М-коммуникации, системы мобильного доступа, разработка ПО для управления трафиком и биллингом, мобильная реклама, финансы коммерция и облачные технологии.
                    <br><br>
                    <b>Александр Поповский,
                        вице-президент по операционным вопросам Группы МТС:
                    </b>
                    <br><br>
                    <i>«В России и в мире происходит лавинообразный рост использования мобильного интернета. При этом очевидно, что предел этого роста еще далеко не достигнут даже в существующих сетях 3G. Стремительные изменения рынка бросают операторам новые вызовы, и лидерство остается за тем, кто наиболее эффективно управляет трафиком, учитывая растущие потребности клиентов и технические возможности компании. Мы рассматриваем «Телеком Идею» как открытую платформу для поиска инновационных решений, и в этом году в центре нашего внимания – идеи в области развития интернет-сервисов. Молодые инноваторы, в свою очередь, благодаря участию в конкурсе получают реальную возможность реализации своих проектов».</i>
                    <br><br>
                    <b>Владимир Рудашевский,
                        заместитель Председателя Комитета ТПП России по техническим инновациям и высоким технологиям, советник председателя Совета директоров ОАО АФК "Система"
                    </b>
                    <br><br>
                    <i>«Инновации никто не ждет, они везде – незваные и ужасно беспокойные гости, которые норовят подорвать безмятежную жизнь хозяев. И только в ИКТ без них невозможно обойтись, ибо сама отрасль – сплошная инновация. И все же практическое использование любых новшеств (за исключением модной одежды) у нас называется двусмысленным словом "внедрение", как проникновение зловредного вируса. Уровень новизны ИКТ таков, что требует качественно новой подготовки, непрерывного обновления знаний, умений и опыта. Всё это органично присуще молодым специалистам, сумевшим вовремя включиться в инновационную гонку. Покажите, как Вы это делаете на площадке конкурса!».</i>
                    <br><br>
                    <b>Как принять участие</b>
                    <br><br>
                    Принять участие в конкурсе могут совершеннолетние граждане Российской Федерации, Армении, Белоруссии и Украины в возрасте до 35 лет: студенты, молодые ученые, исследователи, разработчики, предприниматели – как индивидуально, так и коллективно.
                    На конкурс принимаются инновационные проекты на всех стадиях разработки (от идеи до опытной модели) с обоснованной экономической эффективностью, способные повысить доходы операторов от передачи данных и принести ощутимую пользу обществу и государству, в том числе в области телемедицины, дистанционного образования, безопасности, управления производственными процессами, городскими, жилищно-коммунальными и дорожно-транспортными системами, мобильного банкинга и т.д.
                    <br><br>
                    Победители определяются по следующим основным номинациям:
                    <br><br>
                <ul>
                    <li>Инновации в сервисе и контенте
                        Новые кросс-платформенные мобильные приложения. Электронная и мобильная коммерция, финансы, платежи. Цифровой мультимедийный контент. Дополнительные услуги на базе технологий дополненной реальности, геолокации и позиционирования (LBS/GPS/ГЛОНАСС), передачи сообщений, интерактивные услуги и web-сервисы. Решения на основе M2M и NFC.
                    </li>
                    <li>
                        Инновации в программных продуктах
                        Новые подходы к использованию информационных технологий и программного обеспечения операторами связи для управления трафиком и анализа больших массивов данных (Big Data). Решения и сервисы на основе облачных вычислений.

                    </li>
                    <li>
                        Инновационные технические решения для систем связи
                        Новые способы повышения эффективности планирования, построения и использования сетевых ресурсов, в том числе – мобильных сетей следующего поколения (4G). Конвергенция фиксированных и мобильных сетей связи (FMC). Взаимодействие сетей связи и навигационных систем. Расширение функционала и улучшение пользовательских характеристики абонентских устройств.

                    </li>
                    <li>
                        Маркетинговые и управленческие инновации
                        Новые решения по совершенствованию бизнес-процессов, системы продаж, дистрибуции и продвижения на рынок услуг доступа в Интернет и смартфонов, управления взаимоотношениями с клиентами (CRM). Мобильный маркетинг и реклама.

                    </li>
                </ul>
                <br><br>
                В дополнение к основным номинациях свои задачи по использованию информационно-коммуникационных технологий предложили для участников «Телеком Идеи» партнеры конкурса – Группа компаний «Детский мир» и ОАО «Башнефть».
                Кроме того, в рамках «Телеком Идеи» пройдут конкурс видеопрезентаций и конкурс на лучший startup-блог, участие в которых позволит молодым инноваторам проявить себя в использовании современных методов позиционирования и продвижения своих проектов.

                <br><br>
                Участники конкурса «Телеком Идея» получат профессиональную экспертизу своих проектов от ведущих специалистов отрасли телекоммуникаций и венчурного рынка, необходимые знания и полезные практические навыки по работе над инновационными проектами, их коммерциализацией и продвижением. Победители смогут представить собственные разработки на рассмотрение руководства отрасли, Группы МТС и венчурных инвесторов.
                <br><br>
                Главным призом для победителей конкурса является зарубежный семинар-тур, в ходе которого они познакомятся с передовыми достижениями и инновационными практиками ведущих игроков мировой телеком- и ИТ-индустрии.
                По итогам конкурса также будет определен проект с наибольшим рыночным потенциалом с наилучшей проработкой маркетинговой составляющей, автор которого получит право на менторскую поддержку специалистов Высшей школы маркетинга и развития бизнеса НИУ ВШЭ.

                <br><br>
                Если вы молоды, активны, талантливы, еще только грызете гранит науки или уже начинаете собственный инновационный бизнес и у вас есть идеи о том, как можно успешно монетизировать мобильный интернет, ждем ваши проекты на конкурс «Телеком Идея». И, возможно, именно ваша идея получит уникальный шанс на реализацию в партнерстве с лидерами рынка ИКТ.
                <br><br>
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/C4kjAnl6Wfw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA 2013 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                </p>
                <p>
                    Within the framework of the "Lift to the Future" program of AFK "Sistema" for the search, support and development of talented youth from March to June 2013, the III competition of youth innovative projects in the field of telecommunications "Telecom Idea" will be held.
                    The Telecom Idea competition was organized by Mobile TeleSystems (MTS OJSC), a leading telecommunications operator in Russia and the CIS countries, with the support of the Ministry of Communications and Mass Media of the Russian Federation, the Ministry of Economic Development of the Russian Federation, the Department of Science, Industrial Policy and Entrepreneurship of the city of Moscow , The Higher School of Economics (NRU HSE) and the RF Chamber of Commerce and Industry.
                    The competition is aimed at finding, supporting and promoting innovative youth projects on the market, involving the use of information and communication technologies in commercial, social and state spheres and contributing to the improvement of the quality of life of society.
                    <br> <br>
                    The main theme of this year's competition is related to the use of the possibilities of broadband mobile and fixed Internet and the monetization of data transmission.
                    <br> <br>
                    The future of the telecommunications market is determined by the development of broadband and mobile data transmission networks, the emergence of new multifunctional network access devices and services provided on this basis. As the capabilities of networks and devices expand, various combinations of services for the transfer of information, text and voice messages, multimedia content appear, the communication ideology itself is changing, new forms of communication and new forms of business are emerging - the so-called OTT services (from the English over the top) provided “on top” of telecommunication networks and actively using the operator's infrastructure and subscriber base (mobile applications, IM clients, content services, etc.). At the same time, the growth of high-speed Internet penetration gives a powerful impetus to the development of various areas of the economy, business, and government.
                    <br> <br>
                    In this situation, telecom operators investing in the construction and modernization of networks are faced with the question of optimal management of growing traffic volumes and its monetization in the interests of business development and meeting the needs of different categories of users - individuals, enterprises and organizations. The ways to attract additional profit for the operator lie in several areas, including: М2М-communications, mobile access systems, software development for traffic management and billing, mobile advertising, finance, commerce and cloud technologies.
                    <br> <br>
                    <b> Alexander Popovsky,
                        Vice President for Operations, MTS Group:
                    </b>
                    <br> <br>
                    <i> “In Russia and in the world there is an avalanche growth in the use of mobile Internet. At the same time, it is obvious that the limit of this growth has not yet been reached even in the existing 3G networks. Rapid changes in the market place new challenges for operators, and the leadership remains with the one who manages traffic most efficiently, taking into account the growing needs of customers and the technical capabilities of the company. We regard Telecom Idea as an open platform for finding innovative solutions, and this year our focus is on ideas in the field of Internet services development. Young innovators, in turn, thanks to their participation in the competition, get a real opportunity to implement their projects. ”</i>
                    <br> <br>
                    <b> Vladimir Rudashevsky,
                        Deputy Chairman of the Committee of the Chamber of Commerce and Industry of Russia for Technical Innovations and High Technologies, Advisor to the Chairman of the Board of Directors of JSFC Sistema
                    </b>
                    <br> <br>
                    <i> “Nobody expects innovations, they are everywhere - uninvited and terribly restless guests who strive to undermine the serene life of the owners. And only in ICT, it is impossible to do without them, because the industry itself is a continuous innovation. And yet the practical use of any innovations (with the exception of fashionable clothes) is called by us the ambiguous word "introduction", like the penetration of a malicious virus. The level of ICT novelty is such that it requires a qualitatively new training, continuous updating of knowledge, skills and experience. All this is organically inherent in young specialists who managed to join the innovation race in time. Show how you do it on the competition site! ". </i>
                    <br> <br>
                    <b> How to participate </b>
                    <br> <br>
                    Adult citizens of the Russian Federation, Armenia, Belarus and Ukraine under the age of 35 can take part in the competition: students, young scientists, researchers, developers, entrepreneurs - both individually and collectively.
                    The competition accepts innovative projects at all stages of development (from an idea to a pilot model) with reasonable economic efficiency that can increase operators' revenues from data transmission and bring tangible benefits to society and the state, including in the field of telemedicine, distance education, security, production management. processes, urban, housing and communal and road transport systems, mobile banking, etc.
                    <br> <br>
                    The winners are determined in the following main nominations:
                    <br> <br>
                <ul>
                    <li> Innovation in service and content
                        New cross-platform mobile apps. Electronic and mobile commerce, finance, payments. Digital multimedia content. Additional services based on augmented reality technologies, geolocation and positioning (LBS / GPS / GLONASS), messaging, interactive services and web services. M2M and NFC based solutions.
                    </li>
                    <li>
                        Innovation in software products
                        New approaches to the use of information technologies and software by telecom operators for traffic management and analysis of large data arrays (Big Data). Cloud computing solutions and services.

                    </li>
                    <li>
                        Innovative technical solutions for communication systems
                        New ways to improve the efficiency of planning, building and using network resources, including next generation mobile networks (4G). Fixed-Mobile Convergence (FMC). Interaction of communication networks and navigation systems. Expansion of functionality and improvement of user characteristics of subscriber devices.

                    </li>
                    <li>
                        Marketing and management innovation
                        New solutions to improve business processes, sales systems, distribution and market promotion of Internet access services and smartphones, customer relationship management (CRM). Mobile marketing and advertising.

                    </li>
                </ul>
                <br> <br>
                In addition to the main nominations, the partners of the competition - the Detsky Mir Group of Companies and OJSC Bashneft - proposed their tasks for the use of information and communication technologies for the participants of Telecom Idea.
                In addition, within the framework of Telecom Idea, a video presentation competition and a competition for the best startup blog will be held, participation in which will allow young innovators to prove themselves in using modern methods of positioning and promoting their projects.

                <br> <br>
                Participants of the Telecom Idea competition will receive professional expertise of their projects from leading experts in the telecommunications and venture capital market, the necessary knowledge and useful practical skills to work on innovative projects, their commercialization and promotion. The winners will be able to submit their own developments for consideration by the industry management, MTS Group and venture investors.
                <br> <br>
                The main prize for the winners of the competition is a foreign seminar tour, during which they will get acquainted with the advanced achievements and innovative practices of the leading players in the global telecom and IT industry.
                Based on the results of the competition, the project with the greatest market potential with the best study of the marketing component will also be determined, the author
                which will receive the right to mentor support from the Graduate School of Marketing and Business Development of the Higher School of Economics.

                <br> <br>
                If you are young, active, talented, just gnawing the granite of science or are already starting your own innovative business and you have ideas on how to successfully monetize the mobile Internet, we are waiting for your projects for the Telecom Idea competition. And, perhaps, it is your idea that will get a unique chance to be implemented in partnership with the leaders of the ICT market.
                <br> <br>
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/C4kjAnl6Wfw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection