@extends('layouts.master')
@section('title', 'Changellenge >> Cup ')
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="">
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">Changellenge >> Cup </p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Как прошел финал главного кейс-чемпионата России Changellenge >> Cup Russia 2017
                </p>
                <p>

                    26 апреля в отеле «Hilton» в Москве состоялся финал соревнований по решению задач из реальной практики крупных компаний Changellenge >> Cup Russia 2017. Из 5 000 участников до финала дошли только 50 лучших. МТС и федеральный конкурс Телеком Идея традиционно выступили в качестве партнёра чемпионата и представили задачу по монетизации виртуальной реальности.
                    <br><br>Три недели соревнований по объему полученных знаний и опыта сопоставимы с полноценной стажировкой: участие в Changellenge >> Cup Russia позволяет студентам погрузиться в реальные бизнес-процессы, получить практический опыт в дополнение к теоретическому вузовскому образованию, а также учит работать в команде, анализировать информацию и презентовать свои идеи топ-менеджерам потенциальных работодателей.
                    <br><br>В финале боролись сильнейшие студенты, победители региональных этапов Changellenge. Судьям было нужно выбрать лучших среди самых сильных. И такой командой стала «Chase Your Case» из Санкт-Петербурга.
                    <br><br>Вот что участники рассказали о чемпионате: «Наша команда познакомилась в обсуждениях в группе Changellenge >>. У нас есть экономист, hr-специалист и два финансиста, но еще на первой нашей встрече мы разделили между собой функционал, что очень помогло нам в дальнейшем. Считаем, что самое важное – найти правильную команду, людей, у которых горят глаза, верить в себя и свое решение».
                    <br><br>Поздравляем победителей и ждём их в полуфинале «Телеком Идеи»!

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> Changellenge >> Cup </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    How was the final of the main case championship of Russia Changellenge >> Cup Russia 2017
                </p>
                <p>

                    On April 26, at the Hilton hotel in Moscow, the final of the competition for solving problems from the real practice of large companies Changellenge >> Cup Russia 2017 took place. Out of 5,000 participants, only 50 of the best reached the final. MTS and the federal competition Telecom Idea traditionally acted as a partner of the championship and presented the task of monetizing virtual reality.
                    <br> <br> Three weeks of competition in terms of the amount of knowledge and experience gained is comparable to a full-fledged internship: participation in Changellenge >> Cup Russia allows students to immerse themselves in real business processes, gain practical experience in addition to theoretical university education, and also teaches how to work in a team, analyze information and present your ideas to top managers of potential employers.
                    <br> <br> The strongest students, the winners of the regional stages of Changellenge, fought in the final. The judges had to choose the best among the strongest. And such a team was "Chase Your Case" from St. Petersburg.
                    <br> <br> This is what the participants told about the championship: “Our team met in the discussions in the Changellenge group >>. We have an economist, an hr-specialist and two financiers, but even at our first meeting we divided the functionality among ourselves, which helped us a lot in the future. We believe that the most important thing is to find the right team, people with bright eyes, to believe in yourself and your decision. "
                    <br> <br> Congratulations to the winners and we are waiting for them in the semi-final of Telecom Idea!

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection