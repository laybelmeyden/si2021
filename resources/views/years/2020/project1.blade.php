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
                <br> <br>
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



@endsection