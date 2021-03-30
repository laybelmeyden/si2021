@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2019')
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
                        <p>19 апреля – 30 июня 2019</p>
                        <p>Старт проекта, прием заявок, организация региональных отборочных мероприятий</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p>Июль 2019</p>
                        <p>Экспертиза заявок. Определение полуфиналистов</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p>Август – сентябрь 2019</p>
                        <p>Менторская часть проекта. Определение финалистов. Финал конкурса</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> April 19 - June 30, 2019 </p>
                        <p> Project start, applications acceptance, organization of regional qualifying events </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> July 2019 </p>
                        <p> Examination of applications. Definition of semi-finalists </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> August - September 2019 </p>
                        <p> Mentoring part of the project. Determination of the finalists. Final of the competition </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">SOCIAL IDEA 2019</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                </p>
                <a href="/assets/img/books2019.pdf" target="_blank" class="btn btn__collapse">Книга о финалистах</a>
                <p>
                    Для кого этот конкурс?
                    <br><br>Если вам уже исполнилось 18 лет, вы изобретатель или программист, у вас есть идея проекта в сфере цифровых технологий и вы хотите спасти мир или, как минимум, внести вклад в решение важных социальных проблем общества – ждем вас на конкурсе «Social Idea»!
                    <br><br>Основные номинации
                    <br><br>Сбор заявок проходит по трем номинациям:
                    <br><br>• Social Mobile(Мобильные технологии в социальной сфере)
                    <br><br>• Social Big Data(Большие данные в социальной сфере)
                    <br><br>• Social Smart Сity(Умный город в социальной сфере)
                    <br><br>Выбирайте для себя подходящую номинацию и участвуйте!
                    <br><br>Подача заявки
                    <br><br>Подайте заявку на участие в конкурсе в период с 19 апреля по 30 июня 2019 г.
                    <br><br>На странице подачи заявки вы найдете подробные видео-инструкции, как ее правильно заполнить.
                    <br><br>Основные этапы конкурса:
                    <br><br>• 19 апреля – 30 июня 2019 Старт проекта, прием заявок, организация региональных отборочных мероприятий
                    <br><br>• июль 2019 г. Экспертиза заявок. Определение полуфиналистов
                    <br><br>• август – сентябрь 2019 Менторская часть проекта. Определение финалистов. Финал конкурса
                    <br><br>Региональные этапы конкурса пройдут в Москве, Краснодаре, Тольятти, Челябинске, Обнинске и Рязани в партнерстве с национальной лигой кейсов Changellenge и Агентством инновационного развития.
                    <br><br>Награда победителям
                    <br><br>Победители будут определены решением экспертного совета конкурса, в который вошли представители МТС, АФК «Система», ключевых партнеров конкурса, ведущие эксперты в сфере телекоммуникаций, инноваций и социального предпринимательства.
                    <br><br>• Авторы лучших проектов получат экспертизу, менторскую и технологическую поддержку «МТС» и партнеров конкурса.
                    <br><br>• У проектов увеличится шанс на продвижение и развитие.
                    <br><br>• Победители конкурса отправятся в зарубежный образовательный Social тур
                    <br><br>• У наиболее эффективных команд будет возможность пройти стажировку с последующим трудоустройством в ПАО «МТС» и компаниях-партнерах конкурса.
                    <br><br>Партнеры конкурса
                    <br><br>Конкурс проводится при поддержке АФК «Система», Благотворительного Фонда «Система» и дочерних компаний корпорации, в том числе «Детский Мир», ЗАО «Группа компаний «Медси», ПАО «МТС-Банк».
                    <br><br>Организатор конкурса
                    <br><br>Международный конкурс «Social idea» проводится компанией МТС. Публичное акционерное общество «Мобильные ТелеСистемы» (ПАО «МТС») – ведущая компания в России и странах СНГ по предоставлению услуг мобильной и фиксированной связи, доступа в интернет, кабельного и спутникового ТВ-вещания, цифровых сервисов и мобильных приложений, финансовых услуг и сервисов электронной коммерции, а также конвергентных ИТ-решений в сфере системной интеграции, интернета вещей, мониторинга, обработки данных и облачных вычислений. Предоставляя инновационные услуги и решения, МТС вносит значимый вклад в экономический рост и улучшение качества жизни десятков миллионов людей в странах присутствия.

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> SOCIAL IDEA 2019 </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                </p>
                <a href="https://socialidea.ru//storage/%D0%BA%D0%BD%D0%B8%D0%B3%D0%B0_%D0%BE_%D1%84%D0%B8%D0%BD%D0%B0%D0%BB%D0%B8%D1%81%D1%82%D0%B0%D1%853009.pdf" target="_blank" class="btn btn__collapse">Book about the finalists</a>
                <p>
                    Who is this competition for?
                    <br> <br> If you are over 18 years old, you are an inventor or programmer, you have an idea for a project in the field of digital technologies and you want to save the world or at least contribute to solving important social problems of society - we are waiting for you at the competition "Social Idea"!
                    <br> <br> Main nominations
                    <br> <br> The collection of applications is held in three nominations:
                    <br> <br> • Social Mobile (Mobile technologies in the social sphere)
                    <br> <br> • Social Big Data (Big data in the social sphere)
                    <br> <br> • Social Smart City (Smart city in the social sphere)
                    <br> <br> Choose a suitable nomination for yourself and participate!
                    <br> <br> Submitting an application
                    <br> <br> Submit your application for participation in the competition from April 19 to June 30, 2019.
                    <br> <br> On the application page you will find detailed video instructions on how to fill it out correctly.
                    <br> <br> The main stages of the competition:
                    <br> <br> • April 19 - June 30, 2019 Start of the project, accepting applications, organizing regional qualifying events
                    <br> <br> • July 2019 Examination of applications. Definition of semi-finalists
                    <br> <br> • August - September 2019 Mentoring part of the project. Determination of the finalists. Final of the competition
                    <br> <br> Regional stages of the competition will be held in Moscow, Krasnodar, Tolyatti, Chelyabinsk, Obninsk and Ryazan in partnership with the national league of cases Changellenge and the Agency for Innovative Development.
                    <br> <br> Award to winners
                    <br> <br> Winners will be determined by the decision of the expert council of the competition, which included representatives of MTS, AFK Sistema, key partners of the competition, leading experts in the field of telecommunications, innovation and social entrepreneurship.
                    <br> <br> • Authors of the best projects will receive expertise, mentoring and technological support from MTS and the competition partners.
                    <br> <br> • Projects will have an increased chance of promotion and development.
                    <br> <br> • The winners of the competition will go to the foreign educational Social tour
                    <br> <br> • The most effective teams will have the opportunity to undergo an internship with subsequent employment in MTS PJSC and the competition partner companies.
                    <br> <br> Competition partners
                    <br> <br> The competition is held with the support of Sistema, the Sistema Charitable Foundation and subsidiaries of the corporation, including Detsky Mir, Medsi Group of Companies, MTS-Bank PJSC.
                    <br> <br> Competition organizer
                    <br> <br> International competition "Social idea" is held by MTS. Public Joint Stock Company "Mobile TeleSystems" (PJSC "MTS") is a leading company in Russia and the CIS in the provision of services of mobile and fixed communications, Internet access, cable and satellite TV broadcasting, digital services and mobile applications, financial services and services e-commerce, as well as converged IT solutions in the field of system integration, the Internet of things, monitoring, data processing and cloud computing. By providing innovative services and solutions, MTS makes a significant contribution to economic growth and improving the quality of life of tens of millions of people in the countries of operation.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>
<section class="statiscticks">
    <div class="container">
        <h1>Анонимная статистика конкурса SOCIAL IDEA 2019</h1>
        <div class="card-list">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card blue">
                        <div class="title">Всего пользователей</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                        <div class="value">922</div>
                        <div class="stat"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card red">
                        <div class="title">Всего проектов</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                        </svg>
                        <div class="value">418</div>
                        <div class="stat"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card orange">
                        <div class="title">Проектов отправленных на модерацию</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                        </svg>
                        <div class="value">364</div>
                        <div class="stat"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card green">
                        <div class="title">Проектов принятых на конкурс</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                        </svg>
                        <div class="value">307</div>
                        <div class="stat"></div>
                    </div>
                </div>
            </div>

        </div>
        <div id="charts">
            <h1 class="yaers">статистика по возрастам</h1>
            <div class="first_stats">
                <canvas id="myChart"></canvas>
            </div>
            <h1>статистика по полу/городу</h1>
            <div class="charts__pole__city">
                <div class="second_stats">
                    <canvas id="myChart2"></canvas>
                </div>
                <div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название города</th>
                                <th scope="col">Кол-во участников</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Москва</td>
                                <td>187</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Санкт-Петербург</td>
                                <td>113</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Калининград</td>
                                <td>98</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Архангельск</td>
                                <td>72</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Нижний Новгород</td>
                                <td>61</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Пермь</td>
                                <td>59</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Урай</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Тюмень</td>
                                <td>41</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Томск</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Новосибирск</td>
                                <td>19</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Кемерово</td>
                                <td>17</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Улан-Удэ</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Хабаровск</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Челябинск</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Уфа</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Саратов</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <th scope="row">17</th>
                                <td>Краснодар</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <th scope="row">18</th>
                                <td>Новороссийск</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <th scope="row">19</th>
                                <td>Белгород</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">20</th>
                                <td>Другие</td>
                                <td>116</td>
                            </tr>
                        </tbody>
                    </table>

                    <button id="tr__btn_show" type="empty" class="btn btn__tr">показать все</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const tableItems = document.querySelectorAll('tbody tr'),
        tr__btn_show = document.querySelector('#tr__btn_show');

    tableItems.forEach((e, i) => {
        i > 10 ?  e.classList.add('no__vision') : e.classList.add('vision')
        
        tr__btn_show.addEventListener('click', () => {
            e.className === 'no__vision' ? true : e.toggleAttribute("hidden")
            e.toggleAttribute("hidden") ? tr__btn_show.textContent = 'Скрыть' : tr__btn_show.textContent = 'показать все'
        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d'),
        ctx2 = document.getElementById('myChart2').getContext('2d');
    const chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [''],
            datasets: [{
                label: 'До 18 лет',
                backgroundColor: '#3a3a84',
                data: ['104'],
            }, {
                label: '19-25 лет',
                backgroundColor: '#E30613',
                data: ['374']
            }, {
                label: '26-34 лет',
                backgroundColor: '#0d462c',
                data: ['326']
            }, {
                label: ['35 - 44 лет'],
                backgroundColor: '#ffc107',
                data: ['43']
            }, {
                label: '45 - 54 лет',
                backgroundColor: '#bd5769',
                data: ['32']
            }, {
                label: '55 лет и старше',
                backgroundColor: '#bf5bbf',
                data: ['43']
            }]
        },

        // Configuration options go here
        options: {}
    });
    const chart2 = new Chart(ctx2, {
        type: 'doughnut',

        data: {
            datasets: [{
                data: [568, 354],
                backgroundColor: ['#3a3a84', '#E30613'],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'Мужчин',
                'Женщин'
            ]
        }
    });
</script>


@endsection