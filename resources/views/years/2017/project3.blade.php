@extends('layouts.master')
@section('title', 'SOCIAL SPIRIT')
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
                        <p>26 апреля - 29 мая 2017</p>
                        <p>Сбор заявок на участие</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 этап</p>
                        <p>29 мая 2017</p>
                        <p>Объявление 25 команд-участников хакатона</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Хакатон МТС</p>
                        <p>9 - 11 июня 2017</p>
                        <p>Проведение хакатона на площадке Deworkacy</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Stage 1 </p>
                        <p> April 26 - May 29, 2017 </p>
                        <p> Collection of applications for participation </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Stage 2 </p>
                        <p> May 29, 2017 </p>
                        <p> Announcement of 25 teams participating in the hackathon </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> MTS Hackathon </p>
                        <p> June 9 - 11, 2017 </p>
                        <p> Holding a hackathon at the Deworkacy site </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">SOCIAL SPIRIT</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Компания МТС и Deworkacy приглашают авторов программных продуктов в социальных сфере, а также разработчиков, дизайнеров и product-менеджеров на 48-часовой хакатон 9-11 июня 2017 года.
                </p>
                <p>
                    Если вы уже разрабатываете или хотите разработать программные продукты, повышающие общее качество жизни людей, решающие социальные задачи через программный продукт (приложение, сайт и др.) и применимые в бизнесе группы МТС, то мы ждём именно Вас!
                    <br><br>Хакатон — это возможность предложить компании МТС свой продукт и получить предложение о работе или о тестировании разработки на клиентской базе компании!
                    <br><br>Денежные и другие приятные призы, 48-часов кодинга, 100 разработчиков, приятная атмосфера и вкусная еда!

                    <br><br>Программа хакатона
                    <br><br>9 июня — Команды встречаются с экспертами и более детально знакомятся с целями хакатона и стоящими перед ними задачами. Уже вечером команды приступают к работе над своими проектами.
                    <br><br>10 июня — В течение дня команды занимаются разработкой и тестированием прототипов своих продуктов. Эксперты предоставляют консультационную поддержку команд.
                    <br><br>11 июня — Команды завершают работу над продуктами и презентуют результат экспертам. По итогам презентаций жюри определит финалистов и состоится церемония награждения победителей и участников хакатона.


                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> SOCIAL SPIRIT </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    MTS and Deworkacy invite authors of software products in the social sphere, as well as developers, designers and product managers for a 48-hour hackathon on June 9-11, 2017.
                </p>
                <p>
                    If you are already developing or want to develop software products that improve the overall quality of life of people, solve social problems through a software product (application, website, etc.) and are applicable in the business of the MTS group, then we are waiting for you!
                    <br> <br> Hackathon is an opportunity to offer MTS your product and receive a job offer or test development on the company's client base!
                    <br> <br> Cash and other nice prizes, 48 ​​hours of coding, 100 developers, nice atmosphere and delicious food!

                    <br> <br> Hackathon program
                    <br> <br> June 9 - Teams meet with experts and get acquainted in more detail with the goals of the hackathon and the tasks they face. In the evening, teams start working on their projects.
                    <br> <br> June 10 - During the day, teams are engaged in the development and testing of prototypes of their products. Experts provide consulting support for teams.
                    <br> <br> June 11 - Teams complete work on products and present the result to experts. Based on the results of the presentations, the jury will determine the finalists and an award ceremony for the winners and participants of the hackathon will take place.


                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection