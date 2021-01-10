@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')

<div class="container">
    <div class="info__si_items">
        <div class="si__logo_items">
            <img src="assets/img/si_logo.svg" alt="">
            <img src="assets/img/mts_logo.svg" alt="">
            </div>
            <h1>SOCIAL IDEA 2021</h1>
            <div id="about__tender"></div>
            <h2>Международный конкурс социальных <br> проектов с применением цифровых технологий</h2>
        <a class="btn btn-primary btn__si_banners" href="#" role="button">
            СТАНЬ ПЕРВЫМ
            <img src="assets/img/right-arrow_si.svg" alt="">
        </a>
    </div>
    <div class="about__tender">
        <p class="ltr">О конкурсе</p>
        <div class="grid__tender">
            <div class="grid__tender_about">
                <p>10 лет</p>
                <p class="no__upper">мы поддерживаем <br> социальные проекты <br> с <span>IT</span> составляющей</p>
            </div>
            <div class="grid__tender_main">
                <div class="tender__items">
                    <div>
                        <img src="assets/img/tender1.svg" alt="">
                    </div>
                    <div>
                        <p>Более</p>
                        <p>3000</p>
                        <p>проектов</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img src="assets/img/tender2.svg" alt="">
                    </div>
                    <div class="pdg__no">
                        <p></p>
                        <p>15</p>
                        <p>стран мира</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img src="assets/img/tender3.svg" alt="">
                    </div>
                    <div>
                        <p>Более</p>
                        <p>400</p>
                        <p>экспертов</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img src="assets/img/tender4.svg" alt="">
                    </div>
                    <div class="pdg__no">
                        <p></p>
                        <p>54</p>
                        <p>победителя</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
    <div class="container">
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/stock-photo-team-meeting-presentation-hand-businessman-working-with-new-start-up-project-in-modern-office-432344563 1.png" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <div>
                        <p>УНИКАЛЬНОСТЬ <br> КОНКУРСА </p>
                        <p>обучение проектных команд и<br> возможность принять участие для<br> проектов на стадии идеи</p>
                    </div>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn__modal_tender" data-bs-toggle="modal" data-bs-target="#modal__tender">ПОДРОБНЕЕ <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg></button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modal__tender" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content modal__tender">
            <div class="modal-header">
                <a data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </a>
            </div>
            <div class="modal-body">
                <p>К рассмотрению принимаются заявки:</p>
                <div>
                    <img src="assets/img/modal1.svg" alt="">
                    <p>на стадии “идеи”- 2-ой трек</p>
                </div>
                <div>
                    <img src="assets/img/modal2.svg" alt="">
                    <p>на стадии реализации - 1-ый трек</p>
                </div>
                <p>Менторство МТС: возможность войти
                    во все направления бизнеса внутри корпорации</p>
            </div>
        </div>
    </div>
</div>

<section id="nominations">
    <div class="container">
        <p>НОМИНАЦИИ КОНКУРСА 2021</p>
        <div class="grid__nominations">
            <div class="grid__nominations_1">
                <img src="assets/img/SOCIALMOB.svg" alt="">
                <p>Social Mobile</p>
            </div>
            <div class="grid__nominations_2">
                <img src="assets/img/SOCIALSMARTCITY.svg" alt="">
                <p>Social Smart City</p>
            </div>
        </div>
    </div>
</section>
<section id="start">
    <div class="container">
        <div class="start__grid">
            <div>
                <img src="assets/img/ok.svg" alt="">
                <p>У вас есть идея или готовый проект ?</p>
            </div>
            <div>
                <img src="assets/img/ok.svg" alt="">
                <p>Вы готовы улучшить и масштабировать его?</p>
            </div>
            <div>
                <img src="assets/img/ok.svg" alt="">
                <p>Вы хотите получить экспертную оценку от топ-менеджмента МТС и поддержку в реализации?</p>
            </div>
        </div>
        <div class="start__btn">
            <p>Станьте участником конкурса SOCIAL IDEA 2021 </p>
            <a class="btn btn-primary" href="#" role="button">ПОДАТЬ ЗАЯВКУ <img src="assets/img/right-arrow_si.svg" alt=""></a>
        </div>
    </div>
</section>

<section id="history">
    <div class="container">
        <p class="history__title">ИСТОРИИ УСПЕХА</p>
        <div class="swiper-container swiper-container-history">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="history__slide">
                        <img src="assets/img/Intersect.png" alt="">
                        <div class="history__items">
                            <div>
                                <p class="history__items_title">Проект Familypass</p>
                                <p class="history__items_untitle">Победитель конкурса «Телеком Идея-2018» в номинации CSR Tech.</p>
                                <p class="history__items_body">Familypass – это социальный сервис и платформа-агрегатор для родителей и поставщиков услуг для детей (развивающие кружки и занятия, спортивные секции, развлекательные мероприятия, музеи, лагеря и т.д.), иными словами – единая платформа для поиска лучших детских занятий в городе.

                                    Сервис единого абонемента появился в США в 2012 году. Он позволяет клиенту получать безлимитный доступ в клубы, студии и секции, которые входят в партнерскую сеть.</p>

                            </div>
                            <div class="btn__modal_history">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn__modal_history_item">ПОДРОБНЕЕ <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="history__slide">
                        <img src="assets/img/Intersect.png" alt="">
                        <div class="history__items">
                            <div>
                                <p class="history__items_title">Проект Familypass</p>
                                <p class="history__items_untitle">Победитель конкурса «Телеком Идея-2018» в номинации CSR Tech.</p>
                                <p class="history__items_body">Familypass – это социальный сервис и платформа-агрегатор для родителей и поставщиков услуг для детей (развивающие кружки и занятия, спортивные секции, развлекательные мероприятия, музеи, лагеря и т.д.), иными словами – единая платформа для поиска лучших детских занятий в городе.

                                    Сервис единого абонемента появился в США в 2012 году. Он позволяет клиенту получать безлимитный доступ в клубы, студии и секции, которые входят в партнерскую сеть.</p>

                            </div>
                            <div class="btn__modal_history">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn__modal_history_item">ПОДРОБНЕЕ <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="history__slide">
                        <img src="assets/img/Intersect.png" alt="">
                        <div class="history__items">
                            <div>
                                <p class="history__items_title">Проект Familypass</p>
                                <p class="history__items_untitle">Победитель конкурса «Телеком Идея-2018» в номинации CSR Tech.</p>
                                <p class="history__items_body">Familypass – это социальный сервис и платформа-агрегатор для родителей и поставщиков услуг для детей (развивающие кружки и занятия, спортивные секции, развлекательные мероприятия, музеи, лагеря и т.д.), иными словами – единая платформа для поиска лучших детских занятий в городе.

                                    Сервис единого абонемента появился в США в 2012 году. Он позволяет клиенту получать безлимитный доступ в клубы, студии и секции, которые входят в партнерскую сеть.</p>

                            </div>
                            <div class="btn__modal_history">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn__modal_history_item">ПОДРОБНЕЕ <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="history__slide">
                        <img src="assets/img/Intersect.png" alt="">
                        <div class="history__items">
                            <div>
                                <p class="history__items_title">Проект Familypass</p>
                                <p class="history__items_untitle">Победитель конкурса «Телеком Идея-2018» в номинации CSR Tech.</p>
                                <p class="history__items_body">Familypass – это социальный сервис и платформа-агрегатор для родителей и поставщиков услуг для детей (развивающие кружки и занятия, спортивные секции, развлекательные мероприятия, музеи, лагеря и т.д.), иными словами – единая платформа для поиска лучших детских занятий в городе.

                                    Сервис единого абонемента появился в США в 2012 году. Он позволяет клиенту получать безлимитный доступ в клубы, студии и секции, которые входят в партнерскую сеть.</p>

                            </div>
                            <div class="btn__modal_history">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn__modal_history_item">ПОДРОБНЕЕ <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev history-prev"></div>
            <div class="swiper-button-next history-next"></div>
        </div>
    </div>
</section>
<section id="experts">
    <div class="container">
        <p class="experts__title">ЭКСПЕРТНЫЙ СОВЕТ КОНКУРСА <br>МТС "SOCIAL IDEA 2021"</p>
        <div class="swiper-container swiper-container-experts">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="experts__slide_items">
                        <img src="assets/img/Moskvina_photo.png" alt="Moskvina_photo.png">
                        <p class="experts__slide_items_title">Анастасия Москвина</p>
                        <p class="experts__slide_items_body">Эксперт Центра социального предпринимательства и социальных инноваций НИУ ВШЭ, тренер-консультант Центра развития некоммерческих организаций.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="experts__slide_items">
                        <img src="assets/img/19113823_1914991125443351_5968746490866631655_n.png" alt="">
                        <p class="experts__slide_items_title">Марина Кузнецова</p>
                        <p class="experts__slide_items_body">Управляющий директор агентства по фандрайзингу Social Projects Group.
                            В течение двух лет руководила Социальным акселератором Центра развития некоммерческих организаций.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="experts__slide_items">
                        <img src="assets/img/moiseeva_inga_nikolaevna.png" alt="">
                        <p class="experts__slide_items_title">Анастасия Москвина</p>
                        <p class="experts__slide_items_body">Исполнительный директор D-Group.Social.
                            Волонтёр с более чем 20-летним стажем. Последние 10 лет Инга активно занимается наставничеством для волонтёров, консультирует по вопросам творческой...</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next experts-next"></div>
            <div class="swiper-button-prev experts-prev"></div>
        </div>
    </div>
</section>

<section id="news">
    <div id="app" class="container">
        <p class="news__title">Новости</p>
        @foreach ($news as $new)
        @if($new['values_op'] === 'option1')
        <div class="news__main_items">
            <a href="/news{{ $new->id }}">
                <div class="news__main_items_img">
                    <img src="/storage/{{ $new -> img}}" alt="">
                </div>
                <div class="text__news">
                    <p class="news__date_items">{{$new -> date}}</p>
                    <p class="news__title_items">{{$new -> title_ru}}</p>
                    <div class="btn__modal_news">
                        <!-- Button trigger modal -->
                        <a href="/news{{ $new->id }}" class="btn btn__modal_news_item">ПОДРОБНЕЕ <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </a>
        </div>
        @endif
        @endforeach
        <news_component></news_component>
    </div>
</section>
<section id="partners">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <p>ПАРТНЕРЫ</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.mtsbank.ru/"><img src="assets/img/article23123.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://sistema.ru/domashyaya-stranica/"><img src="assets/img/article (4).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://medsi.ru/"><img src="assets/img/article (9).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://startup.mts.ru/"><img src="assets/img/article (12).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://bf.sistema.ru/"><img src="assets/img/article (8).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://impacthubmoscow.net/"><img src="assets/img/article (7).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://fundsp.ru/"><img src="assets/img/article (1).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.soc-invest.ru/"><img src="assets/img/FSII.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://fasie.ru/"><img src="assets/img/head_logo_fasie.png" class="img_partners"></a>
                </div>

                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://reo.ru/"><img src="assets/img/Logo-reo-color.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://rb.ru/"><img src="assets/img/article (5).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://www.nb-fund.ru/"><img src="assets/img/article (6).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://changellenge.com/"><img src="assets/img/article (10).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://rusinnovations.com/"><img src="assets/img/article (11).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://msbinfo.ru/"><img src="assets/img/article.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://gotech.vc/"><img src="assets/img/fda.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://asi.ru/"><img src="assets/img/das1.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.sberbank-ast.ru/Content.aspx?tid=1"><img src="assets/img/fda1.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://apply.innopolis.ru/"><img src="assets/img/_Ciu0Sy-0PA.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://opora.ru/"><img src="assets/img/Logo_with_Text_300dpi.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href=""><img src="assets/img/1.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href=""><img src="assets/img/hse_inc_main.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://dobrofiz.ru/"><img src="assets/img/Доброфиз_лого-цвет-синий.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://dobrofiz.ru/dobropoezd"><img src="assets/img/Logo-11.jpg" class="img_partners"></a>
                </div>

                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.facebook.com/youngroupsocial/"><img src="assets/img/123123.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://cpp-group.ru/"><img src="assets/img/6634634634.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://te-st.ru/"><img src="assets/img/Teplitsa_mainLogo_rus.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://fondgarant.ru/evaluation"><img src="assets/img/Garant_ЂЃ£Ѓ_ж•≠ва_бЃж®†Ђм≠ле_в•е≠ЃЂЃ£®©-1.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://kislorod.io/"><img src="assets/img/kislorod_logo-landscape-1.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://netology.ru/"><img src="assets/img/logo-full-color-black.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://probusinesstv.ru"><img src="assets/img/PRObusiness-logo-002-CMYK(1)-01.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://bizdrom.com/"><img src="assets/img/logo_new2222.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.trinet.ru/"><img src="assets/img/image_5.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://s-ol.ru/ru/"><img src="assets/img/CZSIO-SOL.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://socialweekend.by/"><img src="assets/img/000022_1546256336_331246_big.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://startupheart.by/"><img src="assets/img/74887114_112304683523635_118921824745553920_o.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://social.d-group.ru/"><img src="assets/img/D-group.social_logo-01.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://rgsu.net/"><img src="assets/img/Gorizontal'naya sokraschennaya komponovka.png" class="img_partners"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection