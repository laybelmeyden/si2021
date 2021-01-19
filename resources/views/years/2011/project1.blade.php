@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ХИТ 2011')
@else
@section('title', 'TELECOM HIT 2011')
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
                        <p>14 апреля – 30 апреля 2011 года</p>
                        <p>Прием работ участников конкурса</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Определение победителей</p>
                        <p>30 апреля - 11 мая 2011 года</p>
                        <p>Оценка присланных работ и определение финалистов конкурса</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Подведение итогов</p>
                        <p>12 мая 2011 года</p>
                        <p>Подведение итогов конкурса в рамках Студенческого инновационного саммита МТС</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Acceptance of work </p>
                        <p> April 14 - April 30, 2011 </p>
                        <p> Acceptance of entries from the competition participants </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Determining the winners </p>
                        <p> April 30 - May 11, 2011 </p>
                        <p> Evaluation of the submitted works and determination of the finalists of the competition </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Summary </p>
                        <p> May 12, 2011 </p>
                        <p> Summing up the results of the competition within the framework of the MTS Student Innovation Summit </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ХИТ 2011</p>
                <p class="undotitle__years_solo">МТС проводит творческий конкурс молодых исполнителей «Телеком Хит»</p>
                <p class="podundotitle__years_solo">«Мобильные ТелеСистемы» (ОАО МТС), ведущий телекоммуникационный оператор в России и странах СНГ, объявляет о запуске творческого конкурса молодых исполнителей «Телеком Хит», который пройдет с 14 по 30 апреля 2011 года в рамках Конкурса молодежных инноваций МТС.</p>
                <p>
                    Цель конкурса «Телеком Хит» – выявление инновационных тенденций в музыкальной молодежной среде и поддержка молодых талантливых исполнителей – учащихся высших учебных заведений (ВУЗов) России
                    <br><br>
                    «Мы постепенно начинаем выстраивать коммуникации со студенческими сообществами. С марта 2011 года МТС при поддержке Министерства связи и массовых коммуникаций РФ запустила Конкурс молодежных инноваций, где талантливая молодежь может предлагать инновационные решения для телекоммуникационного бизнеса – от технологических до сервисных и маркетинговых. Теперь мы даем возможность проявить себя в творческом плане, соединить инновации, исполнительское и постановочное мастерство. Думаю, такая деятельность придется по душе нашей креативной молодежи», – сказал вице-президент по корпоративным коммуникациям МТС Андрей Теребенин.
                    <br><br>
                    Основное требование к конкурсным произведениям – их инновационный характер: новизна, оригинальность и креатив. В конкурсе могут принять участие молодые музыканты или музыкальные коллективы, созданные на базе ВУЗов, и являющиеся учащимися ВУЗов в возрасте от 18 до 35 лет. В рамках конкурса введены четыре номинации:
                    <br><br>
                <ul>
                    <li>Оригинальный вокал</li>
                    <li>Оригинальный танец</li>
                    <li>Инновационная аранжировка</li>
                    <li>Использование современных технологий в постановке (например, видео инсталляции, лазерные технологии и т.п.)</li>
                </ul>
                Присланные на конкурс работы оценивает жюри, в состав которого входят представители МТС, экспертного совета конкурса «ТелекомИдея», эстрадные исполнители и деятели искусства. Оценки жюри выставляются по 10 бальной шкале. По результатам просмотра жюри определяет победителей в номинациях и присуждает первую премию.
                <br><br>
                Победители конкурса получат ценные призы. Обладателю первой премии вручается сертификат на запись (аудио- или видео для танца) в профессиональной студии. По итогам голосования интернет-пользователей будет вручен приз зрительских симпатий.
                <br><br>
                Прием заявок на участие в конкурсе «Телеком Хит» будет проходить до 30 апреля 2011 года. Итоги конкурса будут подведены 12 мая 2011 года в рамках Студенческого инновационного саммита МТС.
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM HIT 2011 </p>
                <p class="undotitle__years_solo"> MTS is holding a creative competition for young performers "Telecom Hit" </p>
                <p class="podundotitle__years_solo"> Mobile TeleSystems (OJSC MTS), the leading telecommunications operator in Russia and the CIS, announces the launch of the creative competition for young performers "Telecom Hit", which will be held from April 14 to 30, 2011 as part of the Competition youth innovations MTS. </p>
                <p>
                    The purpose of the "Telecom Hit" competition is to identify innovative trends in the musical youth environment and support young talented performers - students of higher educational institutions (universities) in Russia
                    <br> <br>
                    “We are gradually starting to build communications with student communities. Since March 2011, MTS, with the support of the Ministry of Communications and Mass Media of the Russian Federation, has launched a Youth Innovation Competition, where talented young people can offer innovative solutions for the telecommunications business - from technology to service and marketing. Now we give the opportunity to express ourselves in a creative way, to combine innovation, performing and staging skills. I think this kind of activity will appeal to our creative youth, ”said Andrey Terebenin, Vice President for Corporate Communications of MTS.
                    <br> <br>
                    The main requirement for the competition works is their innovative character: novelty, originality and creativity. Young musicians or musical groups created on the basis of universities and students of universities aged 18 to 35 can take part in the competition. Within the framework of the competition, four nominations were introduced:
                    <br> <br>
                <ul>
                    <li> Original vocals </li>
                    <li> Original dance </li>
                    <li> Innovative arrangement </li>
                    <li> The use of modern technologies in the production (for example, video installations, laser technologies, etc.) </li>
                </ul>
                The works sent to the competition are evaluated by a jury, which includes representatives of MTS, the Expert Council of the TelecomIdea competition, pop performers and artists. The jury's marks are given on a 10-point scale. Based on the results of viewing, the jury determines the winners in the nominations and awards the first prize.
                <br> <br>
                The winners of the competition will receive valuable prizes. The winner of the first prize is awarded a certificate for recording (audio or video for dance) in a professional studio. According to the voting results, Internet users will be awarded the People's Choice Award.
                <br> <br>
                Applications for participation in the Telecom Hit competition will be accepted until April 30, 2011. The results of the competition will be announced on May 12, 2011 within the framework of the MTS Student Innovation Summit.
                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection