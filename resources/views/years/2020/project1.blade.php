@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2020')
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="years__project_grid">
            <div class="years__project_sticky">
                @if(App::isLocale('ru'))
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p>Сбор проектных заявок</p>
                        <p>01.03 - 01.07</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Многоступенчатая экспертиза приема заявок</p>
                        <p>01.03 - 31.07</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Онлайн курс и итоговое задание для полуфиналистов</p>
                        <p>01.08 - 10.11</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Финал конкурса</p>
                        <p>10 ноября</p>
                        <p></p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> Collection of project applications </p>
                        <p> 01.03 - 01.07 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Multi-stage examination of applications acceptance </p>
                        <p> 01.03 - 31.07 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Online course and final assignment for semi-finalists </p>
                        <p> 01.08 - 10.11 </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> Final of the competition </p>
                        <p> November 10 </p>
                        <p> </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">SOCIAL IDEA 2020</p>
                <p class="undotitle__years_solo">Social Idea - это международный конкурс социальных проектов с применением цифровых технологий.</p>
                <p class="podundotitle__years_solo">
                </p>
                
                <p>
                <p class="main_text_item">
                    <a href="https://drive.google.com/file/d/1COO5BTJJYJAibVaZ7tu8v9TG_GlBVAhA/view?usp=sharing" target="_blank" class="href_item_project">Положение о конкурсе</a><br><br>
                    <a href="https://drive.google.com/file/d/1dKDMkY_UnUdjVtDasL0AaxRoRdG_rVAr/view?usp=sharing" target="_blank" class="href_item_project">Методические рекомендации по заполнению заявки</a><br><br>
                    <a href="https://drive.google.com/file/d/1K4JhZXwGEo-uUJ1_8bPbOfPkg2C36x6K/view?usp=sharing" target="_blank" class="href_item_project">Критерии оценки социального проекта</a><br><br>
                    <a href="https://drive.google.com/file/d/1XDHsN3tFSOJ_KkDejk9MK2CzUDFR_eI-/view?usp=sharing" target="_blank" class="href_item_project">Шаблон презентации проекта МТС SI</a><br><br>
                    <a href="https://drive.google.com/file/d/1fMyHUFTbYKGH3QC0ZiIfdRpKHmowz9Ad/view?usp=sharing" target="_blank" class="href_item_project">Критерии оценки социального проекта проекта в финале</a>
                </p>
                <br><br>
                <a href="https://socialidea.ru//storage/%D0%9A%D0%BD%D0%B8%D0%B3%D0%B0%20%D0%A4%D0%B8%D0%BD%D0%B0%D0%BB%D0%B8%D1%81%D1%82%D0%BE%D0%B2%20%D0%9C%D0%A2%D0%A12910.pdf" target="_blank" class="btn btn__collapse">Книга о финалистах</a>
                <a href="https://socialidea.ru//storage/%D0%9C%D0%A2%D0%A1%20SI_%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA%20%D1%84%D0%B8%D0%BD%D0%B0%D0%BB%D0%B8%D1%81%D1%82%D0%BE%D0%B2%202020%20(1).pdf" target="_blank" class="btn btn__collapse">Список финалистов</a>
                <a href="https://final2020.usersocialidea.ru/" target="_blank" class="btn btn__collapse">Трансляция финала</a>
                
                <p class="main_text_item"><b>Миссия конкурса -</b> <span class="main_text_span"> поиск, отбор и поддержка социальных проектов с применением цифровых технологий, которые влияют на позитивные изменения в обществе.</span></p>
                <br><br>
                <p class="main_text_item"><b>Задачи конкурса:</b></p>
                <br>
                <ul class="project_ul">
                    <li class="project_main_li_item"><span class="li_item">Вовлечение талантливой молодежи в социально-ориентированную деятельность c применением цифровых технологий</span>
                    </li>
                    <li class="project_main_li_item"><span class="li_item">Поиск и поддержка проектов, создающих свои продукты и решения, направленные на решение социальных проблем в сфере применения цифровых технологий
                        </span>
                    </li>
                    <li class="project_main_li_item"><span class="li_item">
                            Поощрение разработчиков инновационных социальных проектов
                        </span>
                    </li>
                    <li class="project_main_li_item"><span class="li_item">Повышение престижа социального предпринимательства, популяризация социально ориентированной деятельности
                        </span>
                    </li>
                    <li class="project_main_li_item"><span class="li_item">Повышение качества и инвестиционной привлекательности отобранных в рамках конкурса проектов, а также формирование индивидуальных траекторий развития лучших проектов
                        </span>
                    </li>
                </ul>
                <br>
                <p class="main_text_item"><b>Участниками конкурса могут быть</b> совершеннолетние граждане – авторы социальных проектов с применением цифровых технологий: </p>
                <br>
                <ul class="project_ul">
                    <li class="project_main_li_item"><span class="li_item">учащиеся и сотрудники высших учебных заведений</span>
                    </li>
                    <li class="project_main_li_item"><span class="li_item">сотрудники научно-исследовательских учреждений и малых инновационных предприятий</span>
                    </li>
                    <li class="project_main_li_item"><span class="li_item">социальные предприниматели</span>
                    </li>
                    <li class="project_main_li_item"><span class="li_item">проектные команды</span>
                    </li>
                </ul>
                <br>
                <p class="main_text_item"><b>Проекты к участию принимаются в трех номинациях:</b></p>
                <br>
                <ul class="project_ul">
                    <li class="project_main_li_item">
                        <span class="li_item_proj">Social Mobile (Мобильные технологии в социальной сфере)</span>
                        <span class="main_text_span"> - разработка мобильных приложений и систем по обеспечению социальной поддержки населения</span>
                    </li>
                </ul>
                <ul class="project_ul">
                    <li class="project_main_li_item">
                        <span class="li_item_proj">Social Region Project (Лучший региональный отраслевой проект)</span>
                        <span class="main_text_span"> - разработка решений в области экологии и инклюзии</span>
                    </li>
                </ul>
                <ul class="project_ul">
                    <li class="project_main_li_item">
                        <span class="li_item_proj">Social Smart City (Умный город в социальной сфере)</span>
                        <span class="main_text_span">- концепция интеграции информационных и коммуникационных технологий для управления городским имуществом с целью решения или смягчения существующих социальных проблем в обществе и улучшения качества жизни населения в целом</span>
                    </li>
                </ul>
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> SOCIAL IDEA 2020 </p>
                <p class="undotitle__years_solo"> Social Idea is an international competition for social projects using digital technologies. </p>
                <p class="podundotitle__years_solo">
                </p>
                <p>
                <p class="main_text_item">
                    <a href="https://drive.google.com/file/d/1COO5BTJJYJAibVaZ7tu8v9TG_GlBVAhA/view?usp=sharing" target="_blank" class="href_item_project"> Competition statement </a> <br> <br>
                    <a href="https://drive.google.com/file/d/1dKDMkY_UnUdjVtDasL0AaxRoRdG_rVAr/view?usp=sharing" target="_blank" class="href_item_project"> Application guidelines </a> <br> <br>
                    <a href="https://drive.google.com/file/d/1K4JhZXwGEo-uUJ1_8bPbOfPkg2C36x6K/view?usp=sharing" target="_blank" class="href_item_project"> Social project evaluation criteria </a> <br> <br>
                    <a href="https://drive.google.com/file/d/1XDHsN3tFSOJ_KkDejk9MK2CzUDFR_eI-/view?usp=sharing" target="_blank" class="href_item_project"> MTS SI project presentation template </a> <br> <br>
                    <a href="https://drive.google.com/file/d/1fMyHUFTbYKGH3QC0ZiIfdRpKHmowz9Ad/view?usp=sharing" target="_blank" class="href_item_project"> Criteria for evaluating a social project in the final </a>
                </p>
                <br>
                <a href="https://socialidea.ru//storage/%D0%9A%D0%BD%D0%B8%D0%B3%D0%B0%20%D0%A4%D0%B8%D0%BD%D0%B0%D0%BB%D0%B8%D1%81%D1%82%D0%BE%D0%B2%20%D0%9C%D0%A2%D0%A12910.pdf" target="_blank" class="btn btn__collapse">A book about the finalists</a>
                <a href="https://socialidea.ru//storage/%D0%9C%D0%A2%D0%A1%20SI_%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA%20%D1%84%D0%B8%D0%BD%D0%B0%D0%BB%D0%B8%D1%81%D1%82%D0%BE%D0%B2%202020%20(1).pdf" target="_blank" class="btn btn__collapse">List of finalists</a>
                <a href="https://final2020.usersocialidea.ru/" target="_blank" class="btn btn__collapse">Broadcast of the final</a>
                <p class="main_text_item"> <b> Mission of the competition - </b> <span class="main_text_span"> search, selection and support of social projects using digital technologies that affect positive changes in society. </span> </p>
                <br> <br>
                <p class="main_text_item"> <b> Objectives of the competition: </b> </p>
                <br>
                <ul class="project_ul">
                    <li class="project_main_li_item"> <span class="li_item"> Engaging talented youth in socially oriented activities using digital technologies </span>
                    </li>
                    <li class="project_main_li_item"> <span class="li_item"> Search and support projects that create their own products and solutions aimed at solving social problems in the field of digital technologies
                        </span>
                    </li>
                    <li class="project_main_li_item"> <span class="li_item">
                            Encouragement of developers of innovative social projects
                        </span>
                    </li>
                    <li class="project_main_li_item"> <span class="li_item"> Enhancing the prestige of social entrepreneurship, popularizing socially oriented activities
                        </span>
                    </li>
                    <li class="project_main_li_item"> <span class="li_item"> Improving the quality and investment attractiveness of projects selected within the competition, as well as the formation of individual trajectories for the best projects
                        </span>
                    </li>
                </ul>
                <br>
                <p class="main_text_item"> <b> Contestants can be </b> adult citizens - authors of social projects using digital technologies: </p>
                <br>
                <ul class="project_ul">
                    <li class="project_main_li_item"> <span class="li_item"> students and higher education staff </span>
                    </li>
                    <li class="project_main_li_item"> <span class="li_item"> employees of research institutions and small innovative enterprises </span>
                    </li>
                    <li class="project_main_li_item"> <span class="li_item"> social entrepreneurs </span>
                    </li>
                    <li class="project_main_li_item"> <span class="li_item"> project teams </span>
                    </li>
                </ul>
                <br>
                <p class="main_text_item"> <b> Projects for participation are accepted in three nominations: </b> </p>
                <br>
                <ul class="project_ul">
                    <li class="project_main_li_item">
                        <span class="li_item_proj"> Social Mobile </span>
                        <span class="main_text_span"> - development of mobile applications and systems for providing social support to the population </span>
                    </li>
                </ul>
                <ul class="project_ul">
                    <li class="project_main_li_item">
                        <span class="li_item_proj"> Social Region Project (Best Regional Industry Project) </span>
                        <span class="main_text_span"> - development of solutions in the field of ecology and inclusion </span>
                    </li>
                </ul>
                <ul class="project_ul">
                    <li class="project_main_li_item">
                        <span class="li_item_proj"> Social Smart City </span>
                        <span class="main_text_span"> - the concept of integrating information and communication technologies for urban property management in order to solve or mitigate existing social problems in society and improve the quality of life of the population as a whole </span>
                    </li>
                </ul>
                </p>
            </div>
            @endif
        </div>
    </div>
</section>
<section class="statiscticks">
    <div class="container">
        <h1>Анонимная статистика конкурса SOCIAL IDEA 2020</h1>
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
                        <div class="value">1532</div>
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
                        <div class="value">632</div>
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
                        <div class="value">563</div>
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
                        <div class="value">450</div>
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
                                <td>234</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Санкт-Петербург</td>
                                <td>127</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Калининград</td>
                                <td>113</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Архангельск</td>
                                <td>86</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Нижний Новгород</td>
                                <td>78</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Пермь</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Урай</td>
                                <td>58</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Тюмень</td>
                                <td>52</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Томск</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Новосибирск</td>
                                <td>37</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Кемерово</td>
                                <td>32</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Улан-Удэ</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Хабаровск</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Челябинск</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Уфа</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Саратов</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <th scope="row">17</th>
                                <td>Краснодар</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <th scope="row">18</th>
                                <td>Новороссийск</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">19</th>
                                <td>Белгород</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">20</th>
                                <td>Другие</td>
                                <td>216</td>
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
                data: ['205'],
            }, {
                label: '19-25 лет',
                backgroundColor: '#E30613',
                data: ['486']
            }, {
                label: '26-34 лет',
                backgroundColor: '#0d462c',
                data: ['513']
            }, {
                label: ['35 - 44 лет'],
                backgroundColor: '#ffc107',
                data: ['142']
            }, {
                label: '45 - 54 лет',
                backgroundColor: '#bd5769',
                data: ['96']
            }, {
                label: '55 лет и старше',
                backgroundColor: '#bf5bbf',
                data: ['90']
            }]
        },

        // Configuration options go here
        options: {}
    });
    const chart2 = new Chart(ctx2, {
        type: 'doughnut',

        data: {
            datasets: [{
                data: [987, 545],
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