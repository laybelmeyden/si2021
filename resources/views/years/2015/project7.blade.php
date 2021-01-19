@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ТЕЛЕКОМ ИДЕЯ ЦЕНТР')
@else
@section('title', 'TELECOM IDEA CENTER')
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
                        <p>17.02 - 21.04.2015</p>
                        <p>Прием заявок на участие в конкурсе «Телеком Идея Центр», голосование экспертов и определение финалистов.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 этап</p>
                        <p>21.04 - 27.04.2015</p>
                        <p>Консультации, экспертиза, рекомендации по доработке проектов.</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Финал</p>
                        <p>28 апреля 2015 года</p>
                        <p>Публичная защита проектов-финалистов</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Stage 1 </p>
                        <p> 17.02 - 21.04.2015 </p>
                        <p> Acceptance of applications for participation in the "Telecom Idea Center" competition, voting of experts and determination of finalists. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Stage 2 </p>
                        <p> 21.04 - 27.04.2015 </p>
                        <p> Consultations, expertise, recommendations for finalizing projects. </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Final </p>
                        <p> April 28, 2015 </p>
                        <p> Public defense of finalist projects </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ТЕЛЕКОМ ИДЕЯ ЦЕНТР</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Воронеж, РФ, — ОАО «Мобильные ТелеСистемы» (МТС — NYSE: MBT), ведущий телекоммуникационный оператор в России и странах СНГ, объявляет о запуске V международного конкурса молодежных инновационных проектов в сфере телекоммуникации «Телеком Идея-2015». В рамках конкурса студенты, молодые ученые, разработчики и предприниматели в области информационно-коммуникационных технологий и услуг смогут представить свои проекты экспертному совету и побороться за право реализовать проекты совместно с МТС.
                </p>
                <p>
                    По итогам конкурса авторы идеи, в наибольшей степени отвечающие бизнес-задачам компании МТС, впервые смогут принять участие в уникальной внутрикорпоративной программе совместно с сотрудниками компании с целью доработки проектов и презентации их ТОП-менеджменту компании для дальнейшей реализации. Главный приз – поездка на зарубежный семинар-тур, в ходе которого произойдет знакомство с передовыми достижениями и инновационными практиками ведущих игроков мировой и ИТ-индустрии.
                    <br><br>«В этом году МТС проводит в ЦФО региональный этап, который позволит победителям без дополнительных утверждений подать заявки на федеральный конкурс «Телеком Идея». За время существования «Телеком Идеи» участники прислали более 600 проектов, среди них те, которые впоследствии авторы смогли реализовать совместно с МТС. В Центральном Федеральном округе очень много талантливой и изобретательной молодежи, которая сможет представить на экспертизу идеи и проекты, которые способны улучшить инновационные решения в различных сферах жизни. Наша задача, как крупной социально-ответственной компании, поддержать развитие инновационных проектов и перспективных разработок, в том числе в области телекоммуникации, а также дать возможность молодым специалистам проявить себя и реализовать свои проекты с ведущими экспертами отрасли», ─ отметил директор компании МТС в Центральном регионе Игорь Егоров.
                    <br><br>Победители регионального этапа конкурса смогут без рассмотрения подать заявки на участие в финальном этапе Международного конкурса «Телеком Идея-2015». Подача заявок для участия в региональном этапе осуществляется до 31 марта. К участию приглашаются проекты, уделяющие внимание следующим направлениям: виртуальная медицина, экологические, образовательные, творческие и рекламные проекты, финансовые и банковские услуги, проекты в сфере ЖКХ, а также будет объявлена специальная номинация компанией МТС, информация о которой будет опубликована позже.
                    <br><br><b>О Конкурсе</b>
                    <br><br>Отраслевой конкурс «Телеком Идея» проходит ежегодно с целью выявления и поддержки перспективных идей в области информационно-коммуникационных технологий и услуг, которые могут быть востребованы в бизнесе, социальной и государственной сферах.
                    <br><br>Конкурс «Телеком Идея» организован Группой МТС, при поддержке Министерства связи и массовых коммуникаций Российской Федерации, Министерства экономического развития Российской Федерации, Высшей школы экономики, Торгово-Промышленной палаты РФ, Федерального агентства по делам молодежи и ОПОРА России. Региональным партнером конкурса выступило ОАО «Агентство инновационного развития – центр кластерного развития Калужской области».



                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> TELECOM IDEA CENTER </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    Voronezh, RF, - Mobile TeleSystems OJSC (MTS - NYSE: MBT), the leading telecommunications operator in Russia and the CIS, announces the launch of the 5th Telecom Idea-2015 international competition for youth innovative projects in the field of telecommunications. Within the framework of the competition, students, young scientists, developers and entrepreneurs in the field of information and communication technologies and services will be able to present their projects to the expert council and compete for the right to implement projects together with MTS.
                </p>
                <p>
                    According to the results of the competition, the authors of the idea that best meet the business objectives of MTS will be able to take part in a unique internal corporate program together with the company's employees for the first time in order to finalize projects and present them to the company's top management for further implementation. The main prize is a trip to a foreign seminar tour, during which you will get acquainted with the advanced achievements and innovative practices of the leading players in the global and IT industry.
                    <br> <br> “This year MTS is holding a regional stage in the Central Federal District, which will allow the winners to submit applications for the Telecom Idea federal competition without additional approval. During the existence of Telecom Idea, the participants submitted more than 600 projects, among them those that the authors were later able to implement together with MTS. There are a lot of talented and inventive youth in the Central Federal District, who will be able to submit ideas and projects for examination that can improve innovative solutions in various areas of life. Our task, as a large socially responsible company, is to support the development of innovative projects and promising developments, including in the field of telecommunications, as well as to enable young specialists to express themselves and implement their projects with leading industry experts, "said the director of MTS in Tsentralny region Igor Egorov.
                    <br> <br> Winners of the regional stage of the competition will be able to submit applications for participation in the final stage of the International Competition "Telecom Idea-2015" without consideration. Applications for participation in the regional stage are submitted until March 31. Projects that pay attention to the following areas are invited to participate: virtual medicine, environmental, educational, creative and advertising projects, financial and banking services, projects in the housing sector, and a special nomination by MTS will be announced, information on which will be published later.
                    <br> <br> <b> About the Competition </b>
                    <br> <br> The industry competition "Telecom Idea" is held annually in order to identify and support promising ideas in the field of information and communication technologies and services that may be in demand in business, social and government spheres.
                    <br> <br> The "Telecom Idea" competition is organized by the MTS Group, with the support of the Ministry of Communications and Mass Media of the Russian Federation, the Ministry of Economic Development of the Russian Federation, the Higher School of Economics, the Chamber of Commerce and Industry of the Russian Federation, the Federal Agency for Youth Affairs and OPORA Russia. The regional partner of the competition was the Agency for Innovative Development - the Center for Cluster Development of the Kaluga Region.



                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection