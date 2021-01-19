@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ 2014')
@else
@section('title', 'TELECOM IDEA 2014')
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
                        <p>Сбор анкет участников, голосование Экспертного совета, определение полуфиналистов</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p></p>
                        <p>Сбор расширенных описаний и видеопрезентаций, образовательная программа Высшей школы маркетинга и развития бизнеса НИУ ВШЭ, определение финалистов.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p></p>
                        <p>Подготовка участниками презентации с помощью менторов, публичная защита проектов перед Экспертным советом, определение победителей</p>
                    </div>
                </div>
            @else
            <div class = "years__project_date">
                    <div class = "years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> </p>
                        <p> Collection of participant questionnaires, voting of the Expert Council, determination of semi-finalists </p>
                    </div>
                    <div class = "years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> </p>
                        <p> Collection of extended descriptions and video presentations, educational program of the Higher School of Marketing and Business Development of the Higher School of Economics, determination of the finalists. </p>
                    </div>
                    <div class = "years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> </p>
                        <p> Preparation of presentation by participants with the help of mentors, public defense of projects before the Expert Council, determination of winners </p>
                    </div>
                </div>
            @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ 2014</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    В рамках программы «Лифт в будущее» АФК «Система» по поиску, поддержке и развитию талантливой молодежи с марта по июнь 2014 года пройдет IV конкурс молодежных инновационных проектов в сфере телекоммуникаций «Телеком Идея».
                    Конкурс «Телеком Идея» организован компанией «Мобильные ТелеСистемы» (ОАО МТС), ведущим телекоммуникационным оператором в России и странах СНГ, при поддержке Министерства связи и массовых коммуникаций Российской Федерации, Министерства экономического развития Российской Федерации, Высшей школы экономики (НИУ ВШЭ), Торгово-промышленной палаты РФ, Федерального агентства по делам молодежи и ОПОРА России.
                </p>
                <p>
                    Конкурс направлен на поиск, поддержку и продвижение на рынок инновационных проектов молодёжи, предполагающих применение информационно-коммуникационных технологий в коммерческой, социальной и государственной сферах и способствуют улучшению качества жизни общества.
                    <br><br>
                    В очередном конкурсе «Телеком Идея 2014» решено уделить особое внимание проектам, способствующим развитию комфортной, экологичной и доступной для всех категорий граждан (в том числе детей, людей зрелого возраста и лиц с ограниченными возможностями) городской среды с использованием «умных» ИТ-решений на базе высокоскоростных мобильных сетей передачи данных, что приобретает особую актуальность в связи с развертыванием в России инфраструктуры связи 4G. Основной тематикой конкурса станет разработка и применение «умных» и «зеленых» информационно-коммуникационной технологий (ИКТ) для создания благоприятных условий развития городского хозяйства и управления, повышения качества и удобства жизни населения и развития бизнеса.
                    <br><br>
                    К 2050 году 80% населения Земли будет проживать в городах. Росту городов сопутствует появление множества проблем: рост преступности, транспортный коллапс, экологические аварии и катастрофы, отчуждение людей, территориальная дифференциация по социальному признаку, удорожание и плохая доступность жизненно важных ресурсов.
                    Одним из самых эффективных направлений решения городских проблем в XXI веке становится развитие ИКТ. Какие актуальные проблемы городской среды могут быть решены с помощью этих технологий?

                    <br>
                    <br>
                    Подробнее о сферах применения технологических решений «умного города».
                    1. Транспортная проблема.
                    Возникают Интеллектуальные транспортные системы, в которых применяются ИКТ в сфере инфраструктуры транспортных средств и дорожно-транспортного регулирования, а также позволяющие взаимодействовать транспортным средствам между собой, с другими видами транспорта и с непосредственными пользователями. Благодаря этому появляется возможность повысить пропускную способность дорог минимум на 10-15%, снизить аварийность на 20-40%, количество нарушений ПДД в 1,5-2 раза.

                    <br><br>
                    2. Проблема безопасности.
                    Применение ИКТ позволяет добиться снижения уровня криминала в городах, благодаря использованию систем видеонаблюдения, геопозиционирования, автоматической идентификации по изображению и особенностям поведения, введению электронных паспортов. Происходит минимизация последствий стихийных бедствий, экологических и техногенных катастроф вследствие применения систем непрерывного мониторинга зданий, конструкций и окружающей среды, систем прогнозирования и оповещения. Вместе с тем, массовое внедрение ИКТ в городскую среду требует внимания к вопросам борьбы с киберпреступностью и защиты от вирусов, а соответствующие решения становятся составной частью «умного города».
                    <br><br>
                    3. Проблемы ЖКХ.
                    Внедрение разнообразных электронных датчиков и счетчиков и объединение их в систему Smart Grid («интеллектуальную» энергораспределительную сеть) позволит уменьшить потери электроэнергии на 20-30%, сэкономить 34-35 млрд кВт/ч в год. Ежегодная экономия составит более 50 млрд. рублей. Особенно эффективно сочетание Smart Grid систем с системами автоматизированного управления энергопотребляющими приборами (например, с частотно регулируемыми электродвигателями).

                    <br><br>
                    4. Доступ к госуслугам.
                    ИКТ освобождают наших граждан от хождения по разным госорганам за справками, позволяют быть в курсе деятельности администраций, получать информацию об имеющихся штрафах, задолженностях, предстоящих платежах. Предприниматели получают возможность ускорить документооборот и прохождение платежей. На территории России ежегодно циркулирует около 45 млрд. бумажных документов: договоров, актов, накладных и т.д. По данным международных исследований, внедрение электронного документооборота позволяет сократить время обработки документов на 70%, а общая экономия от использования бухгалтерских и финансовых документов в электронном виде составляет 2-3% валового оборота компании.
                    <br><br>
                    5. Повышение качества жизни.
                    В нашу жизнь вошел «интернет вещей», когда все больше окружающих нас вещей снабжаются идентификаторами и системами связи. В результате они могут распознаваться, управляться и взаимодействовать друг с другом через Интернет или другую сеть. Вот только несколько примеров уже реализованных возможностей «интернета вещей». Появилось такая услуга как общественно-частные автомобили, расположение ближайшего из которых можно узнать в интернете и, пользуясь смарт-картой, открыть машину, совершить поездку и оставить его там, где он уже не нужен. Парковку для себя автомобиль также уже может найти сам, благодаря датчикам, встроенным в асфальт. В процессе поездки автомобили могут «узнавать» друг друга и элементы дорожной инфраструктуры и обмениваться информацией, чтобы избегать аварий и прокладывать оптимальные маршруты в объезд пробок. Согласно прогнозам, к 2015 году к интернету будет подключено 25 млрд устройств, а к 2020 году – 50 млрд.
                    <br><br>
                    6. Социализация горожан.
                    ИКТ позволяют преодолеть отчужденность между жителями больших городов и изолированность различных социальных групп. Социальные сети позволяют их пользователям формировать группы по интересам и организовывать их для совместных действий, в том числе направленных на улучшение городской среды. Устройства дополненной реальности позволяют горожанам лучше ориентироваться в городе, находить интересные для них места и мероприятия, выделять близких по интересам людей. Люди с ограниченными возможностями и пожилые люди не чувствуют себя покинутыми, одинокими и беспомощными благодаря различным датчикам, определяющим их самочувствие и поддерживающими связь с медиками, а также благодаря сервисам, позволяющим общаться с окружающим миром. Человек не чувствует себя потерянным в незнакомом городе, благодаря геолокационным сервисам, электронным путеводителям и переводчикам.
                    <br>
                    <br>
                    Все инновационные решения этих и других городских проблем могут быть предложены в ходе конкурса «Телеком Идея 2014». Предлагаемые проекты могут находиться на любой стадии реализации: от поисковых разработок до уже присутствующих на рынке продуктов. Квалифицированный экспертный совет оценит эти предложения и в ходе трехэтапной экспертизы определит победителей конкурса.
                    <br><br>
                    <b>Елена Нечай, Директор МТС по маркетингу и продуктам бизнес-рынка</b>
                    <br><br>
                    <i>«Запуск к России высокоскоростных мобильных сетей 4G, развитие оптоволоконной инфраструктуры передачи данных GPON в Москве создает необходимую платформу для создания и внедрения широкого спектра инновационных решений, которые в ближайшей перспективе могут кардинально изменить многие сферы городского быта, такие как ЖКХ, транспорт, медицина, образование, розничная торговля, банкинг, госуслуги и многие другие. У нас в арсенале уже сейчас есть разнообразные услуги, формирующие «умную» среду для жизни и ведения бизнеса, основанные на мобильной и фиксированной передаче данных, технологиях M2M и NFC. Мы приветствуем свежие инновационные идеи и рассчитываем привлечь партнеров из среды ВУЗов, научных коллективов и технологических стартапов для развития новых востребованных и полезных сервисов, в том числе социальной направленности, для горожан».</i>
                    <br><br>
                    <b>Владимир Рудашевский,
                        заместитель Председателя Комитета ТПП России по техническим инновациям и высоким технологиям, советник председателя Совета директоров ОАО АФК "Система"
                    </b>
                    <br><br>
                    <i>«Умный город - для умных людей! Кто же себя не посчитает за умного? Тот, кто не умеет считать затраты. К сожалению, наша щедрая душа никогда не задумывалась, чего стоят все блага цивилизации - наконец, это время пришло. И хотя мы приходим не на пустое поле - оно засеяно и даёт хороший урожай как многие западные технологии. Но это означает только одно - нам не надо повторять "зады", а смело идти вперёд, только вперёд, не догоняя, но оглядываясь. Уверен, что наши инновации способны существенно дополнить общую картину умного города, сделав если не все, то многие наши города умными».</i>
                    <br><br>
                    Как принять участие<br>
                    Принять участие в конкурсе могут совершеннолетние граждане Российской Федерации, Армении, Белоруссии и Украины в возрасте до 35 лет: студенты, молодые ученые, исследователи, разработчики, предприниматели – как индивидуально, так и коллективно.
                    На конкурс принимаются инновационные проекты на всех стадиях разработки (от идеи до опытной модели) с обоснованной экономической эффективностью, способные повысить доходы операторов от передачи данных и принести ощутимую пользу обществу и государству, в том числе в области телемедицины, дистанционного образования, безопасности, управления производственными процессами, городскими, жилищно-коммунальными и дорожно-транспортными системами, мобильного банкинга и т.д.
                    <br><br>
                    Победители определяются по следующим основным номинациям:
                    <br>
                <ul>
                    <li>Инновации в сервисе и контенте
                        Новые кросс-платформенные мобильные приложения. Электронная и мобильная коммерция, финансы, платежи. Цифровой мультимедийный контент. Дополнительные услуги на базе технологий дополненной реальности, геолокации и позиционирования (LBS/GPS/ГЛОНАСС), передачи сообщений, интерактивные услуги и web-сервисы. Решения на основе M2M и NFC.
                    </li>
                    <li>Инновации в программных продуктах
                        Новые подходы к использованию информационных технологий и программного обеспечения операторами связи для управления трафиком и анализа больших массивов данных (Big Data). Решения и сервисы на основе облачных вычислений.
                    </li>
                    <li>Инновационные технические решения для систем связи
                        Новые способы повышения эффективности планирования, построения и использования сетевых ресурсов, в том числе – мобильных сетей следующего поколения (4G). Конвергенция фиксированных и мобильных сетей связи (FMC). Взаимодействие сетей связи и навигационных систем. Расширение функционала и улучшение пользовательских характеристики абонентских устройств.
                    </li>
                    <li>Маркетинговые и управленческие инновации Новые решения по совершенствованию бизнес-процессов, системы продаж, дистрибуции и продвижения на рынок услуг доступа в Интернет и смартфонов, управления взаимоотношениями с клиентами (CRM). Мобильный маркетинг и реклама. </li>
                </ul>
                <br>
                В дополнение к основным номинациям свои тематические задачи предложили партнеры конкурса:
                <br>
                <ul>
                    <li>«Лучшие социально-ориентированные проекты в сфере телекоммуникаций», ОПОРА России;</li>
                    <li>«Инновации в области городских мобильных сервисов», Департамент информационных технологий города Москвы;</li>
                    <li>«Доступный город для глухих», Автономная некоммерческая организация Социальной поддержки семьи «Малыш и семья».</li>
                </ul>
                <br>
                В рамках «Телеком Идеи» пройдут также конкурс видеопрезентаций и конкурс на лучший startup-блог, участие в которых позволит молодым инноваторам проявить себя в использовании современных методов позиционирования и продвижения своих проектов.
                <br><br>
                Конкурсные работы оценивает Экспертный совет, состоящий из представителей МТС, ключевых партнеров конкурса, ведущих экспертов в сфере телекоммуникаций, инноваций и венчурного рынка. Организатором сбора и экспертизы проектов выступает Институт менеджмента инноваций Национального исследовательского университета ВШЭ.
                <br><br>
                Для участников конкурса, прошедших отборочный тур, предусмотрена специальная образовательная онлайн-программа (вебинары) по рыночной «упаковке» инновационных проектов от Высшей школы маркетинга и развития бизнеса НИУ ВШЭ, а финалисты получат квалифицированную консультационную поддержку менторов, что позволит выявить маркетинговые достоинства проектов с позиций их инновационной составляющей, применения передовых технологий, наличия конкурентных преимуществ, потенциала проникновения на рынок.
                <br><br>
                Кроме того, с выходом во второй тур конкурса «Телеком Идея» проекты-участники получают дополнительную возможность обратить на себя внимание потенциальных инвесторов и бизнес-ангелов – смогут пройти процедуру присвоения рейтинга инвестиционной привлекательности Russian Startup Rating, составляемого компаниями «Центр коммерциализации инноваций», GreenfieldProjec и Future Biotech при поддержке ОАО «Российская венчурная компания».
                Финалисты «Телеком Идеи» получат право подать заявку на получение статуса резидентов Бизнес-инкубатора МГУ, предоставляющего возможности для развития инновационных бизнес-идей на базе крупнейшего университета России: прошедшие дополнительный отбор участники смогут получить собственный офис и первые инвестиции на развитие своего проекта в рамках Бизнес-инкубатора МГУ.
                <br><br>
                По итогам конкурса авторы идей, в наибольшей степени отвечающих бизнес-задачам МТС, впервые смогут принять участие в уникальной внутрикорпоративной акселерационной программе совместно с сотрудниками компании с целью доработки проектов и презентации их топ-менеджменту МТС для дальнейшей реализации. Главным призом для победителей «Телеком Идеи» станет тревел-грант на участие в зарубежном образовательном семинар-туре, в ходе которого молодые инноваторы познакомятся с передовыми достижениями мировой телекоммуникационной и ИТ-индустрии, обменяются опытом работы над инновационными проектами с зарубежными коллегами и смогут представить свои идеи на международном уровне.
                <br><br>
                Наряду с этим будет определен проект с наибольшим рыночным потенциалом с наилучшей проработкой маркетинговой составляющей, автор которого получит право на менторскую поддержку специалистов Высшей школы маркетинга и развития бизнеса НИУ ВШЭ.
                Главным призом для победителей конкурса является зарубежный семинар-тур, в ходе которого они познакомятся с передовыми достижениями и инновационными практиками ведущих игроков мировой телеком- и ИТ-индустрии.
                <br><br>
                Если вы молоды, активны, талантливы, еще только грызете гранит науки или уже начинаете собственный инновационный бизнес и у вас есть идеи о том, как можно успешно монетизировать мобильный интернет, ждем ваши проекты на конкурс «Телеком Идея». И, возможно, именно ваша идея получит уникальный шанс на реализацию в партнерстве с лидерами рынка ИКТ.
                <br><br>
                <b>Для участия в конкурсе необходимо зарегистрироваться и заполнить анкету.</b>
                </p>
            </div>
            @else
            <div>
                <p class = "title__years_solo"> TELECOM IDEA 2014 </p>
                <p class = "undotitle__years_solo"> </p>
                <p class = "podundotitle__years_solo">
                    Within the framework of the Lift to the Future program of AFK Sistema for the search, support and development of talented youth from March to June 2014, the IV competition of youth innovative projects in the field of telecommunications "Telecom Idea" will be held.
                    The Telecom Idea competition was organized by Mobile TeleSystems (MTS OJSC), a leading telecommunications operator in Russia and the CIS countries, with the support of the Ministry of Communications and Mass Media of the Russian Federation, the Ministry of Economic Development of the Russian Federation, the Higher School of Economics (NRU HSE), Torgovo - the Industrial Chamber of the Russian Federation, the Federal Agency for Youth Affairs and OPORA Russia.
                </p>
                <p>
                    The competition is aimed at finding, supporting and promoting innovative youth projects on the market, involving the use of information and communication technologies in commercial, social and state spheres and contributing to the improvement of the quality of life of society.
                    <br> <br>
                    In the next Telecom Idea 2014 competition, it was decided to pay special attention to projects that contribute to the development of a comfortable, environmentally friendly and accessible to all categories of citizens (including children, people of mature age and persons with disabilities) urban environment using smart IT solutions based on high-speed mobile data transmission networks, which is of particular relevance in connection with the deployment of 4G communication infrastructure in Russia. The main theme of the competition will be the development and application of "smart" and "green" information and communication technologies (ICT) to create favorable conditions for the development of urban economy and management, improve the quality and convenience of life of the population and business development.
                    <br> <br>
                    By 2050, 80% of the world's population will live in cities. The growth of cities is accompanied by the emergence of many problems: an increase in crime, traffic collapse, environmental accidents and disasters, alienation of people, territorial differentiation along social lines, higher prices and poor availability of vital resources.
                    One of the most effective ways of solving urban problems in the 21st century is the development of ICT. What topical problems of the urban environment can be solved using these technologies?

                    <br>
                    <br>
                    More about the areas of application of technological solutions of the "smart city"
                    1. Transport problem.
                    Intelligent transport systems are emerging, which use ICT in the field of vehicle infrastructure and road transport regulation, as well as allow vehicles to interact with each other, with other modes of transport and with direct users. Thanks to this, it becomes possible to increase the throughput of roads by at least 10-15%, reduce accidents by 20-40%, the number of traffic violations by 1.5-2 times.

                    <br> <br>
                    2. Security problem.
                    The use of ICT makes it possible to achieve a reduction in the level of crime in cities, thanks to the use of video surveillance systems, geolocation, automatic identification by image and behavior, and the introduction of electronic passports. The consequences of natural disasters, environmental and man-made disasters are minimized due to the use of continuous monitoring systems for buildings, structures and the environment, forecasting and warning systems. At the same time, the massive introduction of ICT into the urban environment requires attention to the issues of combating cybercrime and protecting against viruses, and the corresponding solutions are becoming an integral part of the "smart city".
                    <br> <br>
                    3. Problems of housing and communal services.
                    The introduction of various electronic sensors and meters and their integration into the Smart Grid system ("intelligent" energy distribution network) will reduce electricity losses by 20-30%, save 34-35 billion kWh per year. The annual savings will amount to over 50 billion rubles. The combination of Smart Grid systems with automated control systems for energy-consuming devices (for example, with variable frequency motors) is especially effective.

                    <br> <br>
                    4. Access to public services.
                    ICT frees our citizens from going to various government agencies for certificates, allows them to keep abreast of the activities of administrations, to receive information about existing fines, debts, and upcoming payments. Entrepreneurs get the opportunity to speed up the workflow and the passage of payments. On the territory of Russia, about 45 billion paper documents circulate annually: contracts, acts,
                    bottom, etc. According to international studies, the introduction of electronic document management can reduce the processing time of documents by 70%, and the total savings from the use of accounting and financial documents in electronic form is 2-3% of the company's gross turnover.
                    <br> <br>
                    5. Improving the quality of life.
                    The "Internet of things" has entered our life, when more and more things around us are supplied with identifiers and communication systems. As a result, they can be recognized, controlled and communicated with each other over the Internet or another network. Here are just a few examples of already implemented IoT capabilities. A service has appeared such as public-private cars, the location of the nearest of which can be found on the Internet and, using a smart card, open the car, make a trip and leave it where it is no longer needed. The car can also find parking for itself, thanks to the sensors built into the asphalt. During the journey, cars can “recognize” each other and elements of road infrastructure and exchange information to avoid accidents and make optimal routes to avoid traffic jams. According to forecasts, 25 billion devices will be connected to the Internet by 2015, and 50 billion by 2020.
                    <br> <br>
                    6. Socialization of citizens.
                    ICT makes it possible to overcome the alienation between the inhabitants of large cities and the isolation of various social groups. Social networks allow their users to form interest groups and organize them for joint activities, including those aimed at improving the urban environment. Augmented reality devices allow citizens to better navigate the city, find places and events of interest to them, and highlight people close to them. People with disabilities and the elderly do not feel abandoned, lonely and helpless thanks to various sensors that determine their well-being and keep in touch with doctors, as well as thanks to services that allow them to communicate with the world around them. A person does not feel lost in an unfamiliar city thanks to geolocation services, electronic guides and translators.
                    <br>
                    <br>
                    All innovative solutions to these and other urban problems can be proposed during the "Telecom Idea 2014" competition. The proposed projects can be at any stage of implementation: from exploratory developments to products already on the market. A qualified expert council will evaluate these proposals and, in the course of a three-stage examination, will determine the winners of the competition.
                    <br> <br>
                    <b> Elena Nechay, MTS Director for Marketing and Business Market Products </b>
                    <br> <br>
                    <i> “The launch of high-speed mobile 4G networks in Russia, the development of the GPON fiber-optic data transmission infrastructure in Moscow creates the necessary platform for the creation and implementation of a wide range of innovative solutions that in the near future can radically change many areas of urban life, such as housing and communal services, transport, medicine, education, retail, banking, government services and many others. We already have in our arsenal a variety of services that form a "smart" environment for life and business, based on mobile and fixed data transmission, M2M and NFC technologies. We welcome fresh innovative ideas and expect to attract partners from universities, research teams and technology startups to develop new and useful services, including social ones, for the townspeople. ”</i>
                    <br> <br>
                    <b> Vladimir Rudashevsky,
                        Deputy Chairman of the Committee of the Chamber of Commerce and Industry of Russia for Technical Innovations and High Technologies, Advisor to the Chairman of the Board of Directors of JSFC Sistema
                    </b>
                    <br> <br>
                    <i> “Smart city is for smart people! Who would not consider himself smart? Someone who does not know how to calculate costs. Unfortunately, our generous soul has never thought about what all the benefits of civilization are worth - finally, this time has come. And although we do not come to an empty field - it is sown and gives a good harvest like many Western technologies. But this means only one thing - we do not need to repeat "backs", but boldly go forward, only forward, not catching up, but looking back. I am confident that our innovations can significantly complement the overall picture of a smart city, making, if not all, then many of our cities smart. ”</i>
                    <br> <br>
                    How to participate <br>
                    Adult citizens of the Russian Federation, Armenia, Belarus and Ukraine under the age of 35 can take part in the competition: students, young scientists, researchers, developers, entrepreneurs - both individually and collectively.
                    The competition accepts innovative projects at all stages of development (from an idea to a pilot model) with reasonable economic efficiency that can increase operators' revenues from data transmission and bring tangible benefits to society and the state, including in the field of telemedicine, distance education, security, production management. processes, urban, housing and communal and road transport systems, mobile banking, etc.
                    <br> <br>
                    The winners are determined in the following main nominations:
                    <br>
                <ul>
                    <li> Innovation in service and content
                        New cross-platform mobile apps. Electronic and mobile commerce, finance, payments. Digital multimedia content. Additional services based on augmented reality technologies, geolocation and positioning (LBS / GPS / GLONASS), messaging, interactive services and web services. M2M and NFC based solutions.
                    </li>
                    <li> Innovation in software products
                        New approaches to the use of information technologies and software by telecom operators for traffic management and analysis of large data arrays (Big Data). Cloud computing solutions and services.
                    </li>
                    <li> Innovative technical solutions for communication systems
                        New ways to improve the efficiency of planning, building and using network resources, including next generation mobile networks (4G). Fixed-Mobile Convergence (FMC). Interaction of communication networks and navigation systems. Expansion of functionality and improvement of user characteristics of subscriber devices.
                    </li>
                    <li> Marketing and management innovations New solutions to improve business processes, sales systems, distribution and market promotion of Internet access services and smartphones, customer relationship management (CRM). Mobile marketing and advertising. </li>
                </ul>
                <br>
                In addition to the main nominations, the competition partners proposed their thematic tasks:
                <br>
                <ul>
                    <li> "The best socially-oriented projects in the field of telecommunications", OPORA Russia; </li>
                    <li> “Innovations in the field of urban mobile services”, Moscow Department of Information Technologies; </li>
                    <li> “Accessible city for the deaf”, Autonomous non-profit organization of Social support of the family “Kid and family”. </li>
                </ul>
                <br>
                Within the framework of Telecom Idea, there will also be a video presentation competition and a competition for the best startup blog, participation in which will allow young innovators to prove themselves in using modern methods of positioning and promoting their projects.
                <br> <br>
                Competition entries are evaluated by an Expert Council consisting of representatives of MTS, key partners of the competition, leading experts in the field of telecommunications, innovation and the venture capital market. The collection and examination of projects is organized by the Institute of Innovation Management of the National Research University of the Higher School of Economics.
                <br> <br>
                For the participants of the competition who have passed the qualifying round, there is a special educational online program (webinars) on the market "packaging" of innovative projects from the Higher School of Marketing and Business Development of the Higher School of Economics, and the finalists will receive qualified consulting support from mentors, which will reveal the marketing advantages of projects from the standpoint their innovative component, the use of advanced technologies, the availability of competitive advantages, the potential for market penetration.
                <br> <br>
                In addition, with the entry into the second round of the Telecom Idea competition, participating projects have an additional opportunity to attract the attention of potential investors and business angels - they will be able to pass the procedure for assigning an investment attractiveness rating to the Russian Startup Rating, compiled by the Innovation Commercialization Center, GreenfieldProjec and Future Biotech with the support of Russian Venture Company OJSC.
                The finalists of Telecom Idea will have the right to apply for the status of residents of the Moscow State University Business Incubator, which provides opportunities for the development of innovative business ideas on the basis of the largest university in Russia: the participants who passed the additional selection will be able to get their own office and the first investments for the development of their project within the Business -incubator of Moscow State University.
                <br> <br>
                As a result of the competition, the authors of ideas that best meet the business objectives of MTS will be able to take part in a unique internal corporate agreement for the first time
                lecture program together with the company's employees in order to finalize projects and present them to the top management of MTS for further implementation. The main prize for the winners of Telecom Idea will be a travel grant for participation in a foreign educational seminar-tour, during which young innovators will get acquainted with the advanced achievements of the global telecommunications and IT industry, exchange their experience of working on innovative projects with foreign colleagues and be able to present their ideas internationally.
                <br> <br>
                Along with this, a project with the greatest market potential with the best study of the marketing component will be determined, the author of which will receive the right to mentor support from specialists from the Higher School of Marketing and Business Development of the Higher School of Economics.
                The main prize for the winners of the competition is a foreign seminar tour, during which they will get acquainted with the advanced achievements and innovative practices of the leading players in the global telecom and IT industry.
                <br> <br>
                If you are young, active, talented, just gnawing the granite of science or are already starting your own innovative business and you have ideas on how to successfully monetize the mobile Internet, we are waiting for your projects for the Telecom Idea competition. And, perhaps, it is your idea that will get a unique chance to be implemented in partnership with the leaders of the ICT market.
                <br> <br>
                <b> To participate in the competition, you must register and fill out a form. </b>
                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection