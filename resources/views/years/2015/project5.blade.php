@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ВСЕБЕЛОРУССКИЙ ХАКАТОН')
@else
@section('title', 'ALL-BELARUSIAN HAKATON')
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
                        <p>2 апреля - 14 мая 2015</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Проведение Хакатона</p>
                        <p>15 - 17 мая</p>
                        <p></p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Acceptance of applications </p>
                        <p> April 2 - May 14, 2015 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Hackathon holding </p>
                        <p> May 15 - 17 </p>
                        <p> </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ВСЕБЕЛОРУССКИЙ ХАКАТОН</p>
                <p class="undotitle__years_solo">Крупнейший международный телекоммуникационный оператор ОАО «Мобильные ТелеСистемы» совместно с Центром коммерциализации инноваций объявляют всебелорусский хакатон</p>
                <p class="podundotitle__years_solo">
                    «ТЕЛЕКОМ ИДЕЯ BY MTS 2015»
                </p>
                <p>
                    Что такое «Телеком Идея BY MTS 2015» – это хакатон, на котором авторы идей и проектов могут улучшить свой стартап: сделать макет или прототип, проработать техническую и бизнес-части проекта вместе в ведущими белорусскими и российскими экспертами, найти новых людей в команду, участвовать в борьбе за призы и победу в международном конкурсе «Телеком Идея» (www.telecomideas.ru)
                    <br><br>

                    <b>Кого мы приглашаем на хакатон:</b>
                    <br><br>
                    • front-end и back-end разработчиков, программистов, ИТ-инженеров, дизайнеров, разработчиков мобильных приложений, инженеров в телеком и радиотехнике, создателей гаджетов, а также их команды – с прорывными проектами и идеями;
                    <br><br>
                    • молодых маркетологов и менеджеров, готовых включиться в работу проектных команд и помочь им с маркетингом и бизнес-концепцией.
                    <br><br>
                    Что будем делать на хакатоне:
                    <br><br>
                    • соберём участников и команды в Минске на удобной модной площадке с кофе и wi-fi;<br><br>
                    • разделимся на 2 площадки – для команд с идеей и уже приблизившихся к бизнесу;<br><br>
                    • будем вместе круглосуточно делать макеты и прототипы, кодить и думать о бизнесе;<br><br>
                    • дадим вам в помощь крутых экспертов, которые помогут разобраться и в технике и в рынке;<br><br>
                    • научим выступать перед придирчивым жюри;<br><br>
                    • выберем и наградим лучших;<br><br>
                    • дадим вашим проектам путёвку в жизнь!
                    <br><br>
                    <b>За что боремся в «Телеком Идея BY MTS 2015»:</b><br><br>
                    • за прямое попадание в полуфинал ежегодного международного конкурса «Телеком Идея», которому в этом году исполняется 5 лет, шанс участвовать в юбилейном финале конкурса и летней акселерационной программе в Москве;
                    <br><br>• за шанс поехать в образовательный «Телеком–тур в одну из зарубежных стран при полной поддержке организаторов. Победители прошлых лет побывали в таких странах как ОАЭ, Швеция, Эстония, Германия, Индия. Интересно, куда отправятся победители пятого юбилейного конкурса? Приходи и участвуй!
                    <br><br>• за возможность усилить команду проекта и поработать с классными экспертами;
                    <br><br>• за шанс встретиться с ведущими ИТ и телеком-специалистами Беларуси и России, получить полезную информацию и установить нужные связи;
                    <br><br>• за возможность «засветить» проект перед потенциальными заказчиками/партнёрами напрямую и через СМИ;
                    <br><br>• за подарки и призы от компаний-партнёров.
                    <br><br>
                    Где и когда – Хакатон «Телеком Идея BY MTS 2015» пройдёт в городе Минске с 15 по 17 мая (с пятницы по воскресенье) в коворкинге IMAGURU - пространстве для совместной работы, где можно обмениваться идеями, делиться знаниями и сосредоточенно работать над своим проектом. Для участия заполняй форму, не забудь написать в свободной форме про себя и свой проект!

                </p>
            </div>

            @else
            <div>
                <p class="title__years_solo"> ALL-BELARUSIAN HAKATON </p>
                <p class="undotitle__years_solo"> The largest international telecommunications operator, Mobile TeleSystems OJSC, together with the Center for the Commercialization of Innovations, announce the All-Belarusian hackathon </p>
                <p class="podundotitle__years_solo">
                    "TELECOM IDEA BY MTS 2015"
                </p>
                <p>
                    What is "Telecom Idea BY MTS 2015" is a hackathon where authors of ideas and projects can improve their startup: make a layout or prototype, work out the technical and business parts of the project together with leading Belarusian and Russian experts, find new people for the team, participate in the fight for prizes and victory in the international competition "Telecom Idea" (www.telecomideas.ru)
                    <br> <br>

                    <b> Who do we invite to the hackathon: </b>
                    <br> <br>
                    • front-end and back-end developers, programmers, IT engineers, designers, developers of mobile applications, engineers in telecom and radio engineering, creators of gadgets, as well as their teams - with breakthrough projects and ideas;
                    <br> <br>
                    • young marketers and managers who are ready to join the work of project teams and help them with marketing and business concept.
                    <br> <br>
                    What we will do at the hackathon:
                    <br> <br>
                    • we will gather participants and teams in Minsk on a convenient fashionable site with coffee and wi-fi; <br> <br>
                    • we will split into 2 sites - for teams with an idea and those already close to business; <br> <br>
                    • together we will make layouts and prototypes around the clock, code and think about business; <br> <br>
                    • we will give you cool experts who will help you understand both technology and the market; <br> <br>
                    • we will teach you how to speak in front of a picky jury; <br> <br>
                    • we will select and award the best; <br> <br>
                    • let's give your projects a start in life!
                    <br> <br>
                    <b> What are we fighting for in "Telecom Idea BY MTS 2015": </b> <br> <br>
                    • for a direct hit in the semifinals of the annual international competition “Telecom Idea”, which turns 5 this year, a chance to participate in the jubilee final of the competition and the summer acceleration program in Moscow;
                    <br> <br> • for a chance to go on an educational Telecom-tour to one of the foreign countries with the full support of the organizers. The winners of the previous years have visited such countries as the UAE, Sweden, Estonia, Germany, India. Wondering where the winners of the fifth anniversary competition will go? Come and participate!
                    <br> <br> • for the opportunity to strengthen the project team and work with class experts;
                    <br> <br> • for a chance to meet with leading IT and telecom specialists of Belarus and Russia, to receive useful information and establish the necessary connections;
                    <br> <br> • for the opportunity to "highlight" the project in front of potential customers / partners directly and through the media;
                    <br> <br> • for gifts and prizes from partner companies.
                    <br> <br>
                    Where and when - The Telecom Idea BY MTS 2015 hackathon will be held in Minsk from 15 to 17 May (Friday to Sunday) in the IMAGURU coworking space - a space for collaboration where you can exchange ideas, share knowledge and work with concentration on your project. To participate, fill out the form, do not forget to write in free form about yourself and your project!

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection