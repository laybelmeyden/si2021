@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'БЕЛОРУССКИЙ ХАКАТОН')
@else
@section('title', 'BELARUSIAN HAKATON')
@endif
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        @if(App::isLocale('ru'))
        <div class="">
            <div>
                <p class="title__years_solo">БЕЛОРУССКИЙ ХАКАТОН</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Расписание мероприятий хакатона «Телеком Идея BY MTS 2016»
                </p>
                <p>
                    <br><br>27 мая, 15.00-22.00
                    <br><br>15.00-18.00 Сбор и регистрация участников в бизнес-хабе Imaguru (Фабрициуса, 4), организационная часть, краткие презентации проектов и команд, распредление по площадке, кофе-пауза
                    <br><br>18.00-19.30 Выступление Директора по маркетингу МТС Беларусь Дениса Терещенко, ужин
                    <br><br>19.30-22.00 Работа проектов с менторами МТС и компаний-партнёров
                    <br><br>28 мая, 09.00-22.00
                    <br><br>09.00-11.00 Сбор команд, завтрак, выступление спикера компании Wargaming
                    <br><br>11.00-15.00 Работа проектов с менторами, выступление Технического директора МТС Беларусь Алексея Примакова, обед, теннисный турнир
                    <br><br>15.00-19.00 Работа проектов с менторами, кофе-паузы
                    <br><br>19.00-22.00 Работа проектов с менторами, пицца-пати с просмотром фильма
                    <br><br>29 мая, 10.00-22.00
                    <br><br>10.00-11.30 Сбор команд, завтрак, выступление спикера из Фонда развития интернет-инициатив (ФРИИ)
                    <br><br>11.30-16.00 Работа проектов с менторами, кофе-пауза, доработка презентаций, обед, теннисный турнир
                    <br><br>16.00-20.00 Сбор презентаций, выступление проектов перед жюри
                    <br><br>20.00-22.00 Завершение хакатона в Imaguru, фуршет, нетворкинг участников
                    <br><br>30 мая, 14.00-17.00
                    <br><br>14.00-17.00 Объявление и награждение победителей хакатона в офисе МТС (Проспект Независимости, д.95), фуршет участников, общение со СМИ и партнёрами хакатона
                    <br><br>

                    <br><br>«Телеком Идея BY MTS 2016» – это хакатон, который второй год подряд организует и проводит международный телекоммуникационный оператор МТС.
                    <br><br>Цель хакатона – содействие молодым белорусским специалистам и их командам в развитии проектов и поиске инновационных идей для телекоммуникационной отрасли и IT- индустрии.
                    <br><br>С помощью экспертов МТС и компаний-партнеров команды улучшат свой продукт или его прототип, приблизят его к требованиям рынка, а также установят контакты с потенциальными партнёрами, клиентами и инвесторами. Лучшие проекты по итогам хакатона поборются за победу в международном конкурсе «Телеком Идея» (www.telecomideas.com), финал которого пройдет летом в Москве.

                    <br><br>Кого мы приглашаем на хакатон:
                    проектные команды, готовые в течение 3-х дней перевести свой проект из режима сборки в состояние готовности для бизнеса и соответствующие тематическим направлениям хакатона:
                    <br><br>• FinTech (Финансовые продукты/сервисы)
                    <br><br>• EduTech (Образовательные продукты)
                    <br><br>• RetailTech (Продукты/сервисы для ритейла и электронной коммерции)
                    <br><br>• BusinessTech (Облачные продукты/сервисы для бизнеса)
                    <br><br>• iHR (Автоматизация HR-процессов)
                    <br><br>• HealthTech (сервисы для здоровья)

                    <br><br>Что мы сделаем на хакатоне:
                    <br><br>• соберём проектные команды в Минске на удобной площадке Imaguru с кофе, пиццей и wi-fi;
                    <br><br>• разделимся на 5 зон по тематическим направлениям;
                    <br><br>• получим помощь крутых экспертов МТС и компаний-партнёров, вместе с которыми протестируем технологию и «докрутим» ваш проект, убедимся в наличии спроса, сформулируем предложения рынку и инвесторам;
                    <br><br>• будем иногда отвлекаться от работы на интересные активности и «фишки» хакатона;
                    <br><br>• научим выступать перед придирчивым жюри, нравиться и завоёвывать сердца суровых бизнесменов;
                    <br><br>• выберем и наградим лучших;
                    <br><br>• дадим вашим проектам путёвку в жизнь!

                    <br><br>За что боремся в «Телеком Идея BY MTS 2016»:
                    <br><br>• за возможность встретиться с ведущими ИТ- и телеком-специалистами Беларуси, России и Украины, получить полезную информацию, усовершенствовать свой проект и установить нужные связи;
                    <br><br>• за прямое попадание в финальную стадию международного конкурса «Телеком Идея» и шанс при полной поддержке организаторов поехать в образовательный «Телеком–Тур» в одну стран зарубежья (победители прошлых лет побывали в ОАЭ, Швеции, Германии, Индии, Израиле!);
                    <br><br>• за возможность «засветить» проект перед потенциальными заказчиками и партнёрами напрямую и через СМИ;
                    <br><br>• за подарки и призы от компаний-партнёров.

                    <br><br>Где и когда:
                    <br><br>Хакатон «Телеком Идея BY MTS 2016» пройдёт в Минске с 27 по 30 мая. С пятницы по воскресенье – соревновательная часть в удобном и модном коворкинге IMAGURU. В понедельник состоится пресс-конференция с подведением итогов хакатона и торжественное награждение победителей – в офисе компании МТС по адресу: г.Минск, пр-т Независимости, 95.
                    <br><br>Для участия заполняй форму (красная кнопка сверху) или присылай заявку на info@telecomideas.ru, не забудь написать пару интересных строк о своём проекте или приложить презентацию!
                    <br><br>Присоединяйся к группам «Телеком Идея BY MTS 2016» в:
                    <br><br>FB: www.facebook.com/hackatonbymts2016
                    <br><br>VK: vk.com/hackatonbymts2016
                    <br><br>Instagram @hackatonbymts2016

                    <br><br>ЖДЁМ ТЕБЯ И ТВОЮ КОМАНДУ В IMAGURU!
                    <br><br>ХАКАТОН «ТЕЛЕКОМ ИДЕЯ BY MTS 2016» – возможность превратить стартап в бизнес!


                </p>
            </div>
        </div>
        @else
        <div class="">
            <div>
                <p class="title__years_solo"> BELARUSIAN HAKATON </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    Schedule of events of the hackathon "Telecom Idea BY MTS 2016"
                </p>
                <p>
                    <br> <br> May 27, 15.00-22.00
                    <br> <br> 15.00-18.00 Gathering and registration of participants in the Imaguru business hub (Fabritiusa, 4), organizational part, brief presentations of projects and teams, distribution around the site, coffee break
                    <br> <br> 18.00-19.30 Speech by the Marketing Director of MTS Belarus Denis Tereshchenko, dinner
                    <br> <br> 19.30-22.00 Work of projects with mentors of MTS and partner companies
                    <br> <br> May 28, 09.00-22.00
                    <br> <br> 09.00-11.00 Gathering of teams, breakfast, speech by the speaker of Wargaming
                    <br> <br> 11.00-15.00 Work of projects with mentors, presentation by Alexey Primakov, Technical Director of MTS Belarus, lunch, tennis tournament
                    <br> <br> 15.00-19.00 Work of projects with mentors, coffee breaks
                    <br> <br> 19.00-22.00 Work of projects with mentors, pizza-party with watching a film
                    <br> <br> May 29, 10.00-22.00
                    <br> <br> 10.00-11.30 Gathering of teams, breakfast, speech by a speaker from the Internet Initiatives Development Fund (IIDF)
                    <br> <br> 11.30-16.00 Work of projects with mentors, coffee break, finalization of presentations, lunch, tennis tournament
                    <br> <br> 16.00-20.00 Collection of presentations, presentation of projects before the jury
                    <br> <br> 20.00-22.00 Completion of the hackathon at Imaguru, buffet reception, networking of participants
                    <br> <br> May 30, 14.00-17.00
                    <br> <br> 14.00-17.00 Announcement and rewarding of the hackathon winners in the MTS office (Prospect Nezalezhnosti, 95), buffet for participants, communication with the media and partners of the hackathon
                    <br> <br>

                    <br> <br> "Telecom Idea BY MTS 2016" is a hackathon, which is organized and conducted for the second year in a row by the international telecommunications operator MTS.
                    <br> <br> The goal of the hackathon is to assist young Belarusian specialists and their teams in the development of projects and the search for innovative ideas for the telecommunications industry and the IT industry.
                    <br> <br> With the help of MTS experts and partner companies, the teams will improve their product or its prototype, bring it closer to market requirements, as well as establish contacts with potential partners, clients and investors. The best projects based on the results of the hackathon will compete for the victory in the international competition Telecom Idea (www.telecomideas.com), the final of which will take place in Moscow this summer.

                    <br> <br> Whom do we invite to the hackathon:
                    project teams ready to transfer their project from build mode to business readiness state within 3 days and corresponding to the thematic areas of the hackathon:
                    <br> <br> • FinTech (Financial products / services)
                    <br> <br> • EduTech (Educational Products)
                    <br> <br> • RetailTech (Products / services for retail and e-commerce)
                    <br> <br> • BusinessTech (Cloud products / services for business)
                    <br> <br> • iHR (HR-process automation)
                    <br> <br> • HealthTech (health services)

                    <br> <br> What we will do at the hackathon:
                    <br> <br> • we will gather project teams in Minsk on a convenient site Imaguru with coffee, pizza and wi-fi;
                    <br> <br> • we will divide into 5 zones according to thematic areas;
                    <br> <br> • we will get the help of cool experts from MTS and partner companies, together with whom we will test the technology and "tweak" your project, make sure there is demand, formulate proposals for the market and investors;
                    <br> <br> • we will sometimes be distracted from work by interesting activities and hackathon features;
                    <br> <br> • We will teach you to speak before a picky jury, to like and win the hearts of harsh businessmen;
                    <br> <br> • select and award the best;
                    <br> <br> • Let's give your projects a start in life!

                    <br> <br> What we are fighting for in "Telecom Idea BY MTS 2016":
                    <br> <br> • for the opportunity to meet with leading IT and telecom specialists of Belarus, Russia and Ukraine, to receive useful information, improve your project and establish the necessary connections;
                    <br> <br> • for a direct hit in the final stage of the international competition "Telecom Idea" and a chance, with the full support of the organizers, to go to the educational "Telecom-Tour" to one foreign country (the winners of the previous years have visited the UAE, Sweden, Germany, India , Israel!);
                    <br> <br> • for the opportunity to "light up" the project in front of potential customers and

                    sponsors directly and through the media;
                    <br> <br> • for gifts and prizes from partner companies.

                    <br> <br> Where and when:
                    <br> <br> Hackathon "Telecom Idea BY MTS 2016" will be held in Minsk from 27 to 30 May. From Friday to Sunday - the competitive part in the comfortable and fashionable IMAGURU coworking space. On Monday, a press conference summing up the results of the hackathon and a solemn rewarding of the winners will be held in the MTS office at the address: Minsk, Independence Avenue, 95.
                    <br> <br> To participate, fill out the form (red button on top) or send an application to info@telecomideas.ru, do not forget to write a couple of interesting lines about your project or attach a presentation!
                    <br> <br> Join the groups "Telecom Idea BY MTS 2016" in:
                    <br> <br> FB: www.facebook.com/hackatonbymts2016
                    <br> <br> VK: vk.com/hackatonbymts2016
                    <br> <br> Instagram @ hackatonbymts2016

                    <br> <br> WE ARE WAITING FOR YOU AND YOUR TEAM IN IMAGURU!
                    <br> <br> HAKATON "TELECOM IDEA BY MTS 2016" - an opportunity to turn a startup into a business!


                </p>
            </div>
        </div>
        @endif
    </div>
</section>



@endsection