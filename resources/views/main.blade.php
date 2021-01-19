@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')

<div class="container">
    <div class="info__si_items">
        <img class="animation__hearts" src="assets/img/heart_1.png" alt="">
        <div class="si__logo_items">
            <img src="assets/img/si_logo.svg" alt="">
            <img src="assets/img/mts_logo.svg" alt="">
        </div>
        <h1>SOCIAL IDEA 2021</h1>
        <div id="about__tender"></div>
        <h2>@lang('words.title')</h2>
        <a class="btn btn-primary btn__si_banners" href="/social_idea_2021" role="button">
            @lang('words.btn_1')
            <img src="assets/img/right-arrow_si.svg" alt="">
        </a>
    </div>
    <div class="about__tender">
        <p class="ltr">@lang('words.about')</p>
        <div class="grid__tender">
            <div class="grid__tender_about">
                <p>10 @lang('words.years')</p>
                <p class="no__upper">@lang('words.IT')</p>
            </div>
            <div class="grid__tender_main">
                <div class="tender__items">
                    <div>
                        <img src="assets/img/tender1.svg" alt="">
                    </div>
                    <div>
                        <p>@lang('words.more')</p>
                        <p>3000</p>
                        <p>@lang('words.proj')</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img src="assets/img/tender2.svg" alt="">
                    </div>
                    <div class="pdg__no">
                        <p></p>
                        <p>15</p>
                        <p>@lang('words.world')</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img src="assets/img/tender3.svg" alt="">
                    </div>
                    <div>
                        <p>@lang('words.more')</p>
                        <p>400</p>
                        <p>@lang('words.experts')</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img src="assets/img/tender4.svg" alt="">
                    </div>
                    <div class="pdg__no">
                        <p></p>
                        <p>54</p>
                        <p>@lang('words.winners')</p>
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
                        <p>@lang('words.unique')</p>
                        <p>@lang('words.unique_2')</p>
                    </div>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn__modal_tender" data-bs-toggle="modal" data-bs-target="#modal__tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
            @if(App::isLocale('ru'))
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
            @else
            <div class="modal-body">
                <p>Applications are accepted for consideration:</p>
                <div>
                    <img src="assets/img/modal1.svg" alt="">
                    <p>at the “idea” stage - 2nd track</p>
                </div>
                <div>
                    <img src="assets/img/modal2.svg" alt="">
                    <p>underway - 1st track</p>
                </div>
                <p>MTS mentoring: an opportunity to enter
                    in all areas of business within the corporation</p>
            </div>
            @endif
        </div>
    </div>
</div>

<section id="nominations">
    <div class="container">
        <p>@lang('words.nominations_con') 2021</p>
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
        @if(App::isLocale('ru'))
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
        @else
        <div class="start__grid">
            <div>
                <img src="assets/img/ok.svg" alt="">
                <p>Do you have an idea or a finished project?</p>
            </div>
            <div>
                <img src="assets/img/ok.svg" alt="">
                <p>Are you ready to improve and scale it?</p>
            </div>
            <div>
                <img src="assets/img/ok.svg" alt="">
                <p>Do you want to get an expert assessment from the top management of MTS and support in implementation?</p>
            </div>
        </div>
        @endif
        <div class="start__btn">
            @if(App::isLocale('ru'))
            <p>Станьте участником конкурса SOCIAL IDEA 2021</p>
            @else
            <p>Become a SOCIAL IDEA 2021 Competitor</p>
            @endif
            <a class="btn btn-primary" href="/login" role="button">@lang('words.btn_2') <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <g clip-path="url(#clip0)">
                        <path d="M24.4065 11.7577C24.4846 11.5772 24.4411 11.3696 24.2965 11.2318L15.2106 2.54755C15.0101 2.36242 14.6905 2.36776 14.4968 2.5594C14.3079 2.74638 14.3079 3.04277 14.4968 3.22971L22.7216 11.0909H0.720609C0.441832 11.0909 0.21582 11.3069 0.21582 11.5734C0.21582 11.8398 0.441832 12.0559 0.720609 12.0559H22.7216L14.4979 19.916C14.2974 20.1011 14.2918 20.4065 14.4855 20.5982C14.6792 20.7899 14.9987 20.7952 15.1992 20.6101C15.2034 20.6062 15.2076 20.6022 15.2116 20.5982L24.2975 11.914C24.3442 11.8692 24.3813 11.8161 24.4065 11.7577Z" />
                        <path d="M14.8543 20.74C14.5755 20.7405 14.3492 20.5248 14.3486 20.2584C14.3484 20.1299 14.4018 20.0067 14.4969 19.9159L23.2265 11.5733L14.4969 3.23071C14.3033 3.03907 14.3088 2.73363 14.5093 2.54851C14.705 2.36795 15.0151 2.36795 15.2107 2.54851L24.2966 11.2327C24.4936 11.4211 24.4936 11.7265 24.2966 11.9149L15.2107 20.5991C15.1161 20.6893 14.988 20.74 14.8543 20.74Z" />
                        <path d="M23.9401 12.0557H0.720608C0.441832 12.0557 0.21582 11.8397 0.21582 11.5733C0.21582 11.3068 0.441832 11.0908 0.720608 11.0908H23.9402C24.2189 11.0908 24.4449 11.3068 24.4449 11.5733C24.4449 11.8397 24.2189 12.0557 23.9401 12.0557Z" />
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="24.2291" height="23.1579" fill="white" transform="translate(0.21582 -0.000244141)" />
                        </clipPath>
                    </defs>
                </svg></a>
        </div>
    </div>
</section>
<section id="timeline__sections">
    <div class="container">
        <p class="timlime__title">@lang('words.stages') 2021</p>
        <div class="time__line__w">
            <div id="timeline">
                <div class="timeline-item first_86">
                    <div class="timeline-icon big">

                    </div>
                    <div class="timeline-content right">
                        <div>
                            <img src="assets/img/timeline_1.svg" alt="">
                        </div>
                        <div>
                            @if(App::isLocale('ru'))
                            <p>1 марта – 20 июня</p>
                            <p>Прием заявок</p>
                            @else
                            <p>March 1 - June 20</p>
                            <p>Acceptance of applications</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                    </div>
                    <div class="timeline-content">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>1 — 31 июля</p>
                            <p>Обучающий онлайн-курс для участников конкурса</p>
                            @else
                            <p>July 1 - 31</p>
                            <p>Online training course for contest participants</p>
                            @endif
                        </div>
                        <div>
                            <img src="assets/img/timeline_2.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                    </div>
                    <div class="timeline-content right">
                        <div>
                            <img src="assets/img/timeline_3.svg" alt="">
                        </div>
                        <div>
                            @if(App::isLocale('ru'))
                            <p>1 – 15 августа</p>
                            <p>Экспертная оценка и выбор полуфиналистов</p>
                            @else
                            <p>1 - 15 August</p>
                            <p>Expert judgment and selection of semi-finalists</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                    </div>
                    <div class="timeline-content">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>15 августа — 30 сентября</p>
                            <p>Акселерация проектов (менторинг)</p>
                            @else
                            <p>August 15 - September 30</p>
                            <p>Acceleration of projects (mentoring)</p>
                            @endif
                        </div>
                        <div>
                            <img src="assets/img/timelime_4.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                    </div>
                    <div class="timeline-content right">
                        <div>
                            <img src="assets/img/timeline_5.svg" alt="">
                        </div>
                        <div>
                            @if(App::isLocale('ru'))
                            <p>1 – 15 октября</p>
                            <p>Экспертная оценка и выбор финалистов</p>
                            @else
                            <p>October 1 - 15</p>
                            <p>Expert judgment and selection of finalists</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                    </div>
                    <div class="timeline-content">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>20 — 30 октября</p>
                            <p>Подготовка финалистов к финальным питчам</p>
                            @else
                            <p>October 20 - 30</p>
                            <p>Preparing finalists for final pitches</p>
                            @endif
                        </div>
                        <div>
                            <img src="assets/img/timeline_6.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon big">
                    </div>
                    <div class="timeline-content right">
                        <div>
                            <img src="assets/img/timeline_7.svg" alt="">
                        </div>
                        <div>
                            @if(App::isLocale('ru'))
                            <p>1 ноября</p>
                            <p>ФИНАЛ КОНКУРСА</p>
                            @else
                            <p>November 1st</p>
                            <p>FINAL OF THE COMPETITION</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="history">
    <div class="container">
        <p class="history__title">@lang('words.history')</p>
        <div class="swiper-container swiper-container-history">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="history__slide">
                        <img src="assets/img/Intersect.png" alt="">
                        <div class="history__items">
                            @if(App::isLocale('ru'))
                            <div>
                                <p class="history__items_title">Проект Familypass</p>
                                <p class="history__items_untitle">Победитель конкурса «Телеком Идея-2018» в номинации CSR Tech.</p>
                                <p class="history__items_body">Familypass – это социальный сервис и платформа-агрегатор для родителей и поставщиков услуг для детей (развивающие кружки и занятия, спортивные секции, развлекательные мероприятия, музеи, лагеря и т.д.), иными словами – единая платформа для поиска лучших детских занятий в городе.

                                    Сервис единого абонемента появился в США в 2012 году. Он позволяет клиенту получать безлимитный доступ в клубы, студии и секции, которые входят в партнерскую сеть.</p>

                            </div>
                            @else
                            <div>
                                <p class="history__items_title">Project Familypass</p>
                                <p class="history__items_untitle">Winner of the Telecom Idea-2018 competition in the CSR Tech nomination.</p>
                                <p class="history__items_body">Familypass is a social service and aggregator platform for parents and providers of services for children (educational circles and activities, sports clubs, entertainment events, museums, camps, etc.), in other words, a single platform for finding the best children's activities in the city The one-stop service was launched in the United States in 2012. It allows the client to get unlimited access to clubs, studios and sections that are part of the partner network.</p>
                            </div>
                            @endif
                            <div class="btn__modal_history">
                                <!-- <button type="button" class="btn btn__modal_history_item">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg></button> -->

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
        <p class="experts__title">@lang('words.sovet') <br>МТС "SOCIAL IDEA 2021"</p>
        <div class="swiper-container swiper-container-experts">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="experts__slide_items">
                        <img src="assets/img/Dama1.svg" alt="Moskvina_photo.png">
                        @if(App::isLocale('ru'))
                        <p class="experts__slide_items_title">Анастасия Москвина</p>
                        <p class="experts__slide_items_body">Эксперт Центра социального предпринимательства и социальных инноваций НИУ ВШЭ, тренер-консультант Центра развития некоммерческих организаций.</p>
                        @else
                        <p class="experts__slide_items_title">Anastasia Moskvina</p>
                        <p class="experts__slide_items_body">Expert at the Center for Social Entrepreneurship and Social Innovation at the Higher School of Economics, trainer and consultant at the Center for the Development of Non-Profit Organizations.</p>
                        @endif
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="experts__slide_items">
                        <img src="assets/img/Dama2.png" alt="">
                        @if(App::isLocale('ru'))
                        <p class="experts__slide_items_title">Марина Кузнецова</p>
                        <p class="experts__slide_items_body">Управляющий директор агентства по фандрайзингу Social Projects Group</p>
                        @else
                        <p class="experts__slide_items_title">Marina Kuznetsova</p>
                        <p class="experts__slide_items_body">Managing Director of the Social Projects Group fundraising agency</p>
                        @endif
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="experts__slide_items">
                        <img src="assets/img/Dama3.png" alt="">
                        @if(App::isLocale('ru'))
                        <p class="experts__slide_items_title">Инга Моисеева</p>
                        <p class="experts__slide_items_body">Исполнительный директор D-Group.Social</p>
                        @else
                        <p class="experts__slide_items_title">Inga Moiseeva</p>
                        <p class="experts__slide_items_body">Executive Director of D-Group.Social</p>
                        @endif
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="experts__slide_items">
                        <img src="assets/img/Dama4.png" alt="">
                        @if(App::isLocale('ru'))
                        <p class="experts__slide_items_title">Анастасия Попова</p>
                        <p class="experts__slide_items_body">Генеральный директор ООО «Один за всех»</p>
                        @else
                        <p class="experts__slide_items_title">Anastasia Popova</p>
                        <p class="experts__slide_items_body">General Director of One for All LLC</p>
                        @endif
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="experts__slide_items">
                        <img src="assets/img/Dama5.png" alt="">
                        @if(App::isLocale('ru'))
                        <p class="experts__slide_items_title">Михаил Перевозов</p>
                        <p class="experts__slide_items_body">Независимый консультант по Impact & Sustainability</p>
                        @else
                        <p class="experts__slide_items_title">Mikhail Perevozov</p>
                        <p class="experts__slide_items_body">Independent Impact & Sustainability Consultant</p>
                        @endif
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
        <p class="news__title">@lang('words.news')</p>
        @foreach ($news as $new)
        @if($new['values_op'] === 'option1')
        <div class="news__main_items">
            <a href="/news{{ $new->id }}">
                <div class="news__main_items_img">
                    <img src="/storage/{{ $new -> img}}" alt="">
                </div>
                <div class="text__news">
                    <p class="news__date_items">{{$new -> date}}</p>
                @if(App::isLocale('ru'))
                    <p class="news__title_items">{{$new -> title_ru}}</p>
                @else
                <p class="news__title_items">{{$new -> title_en}}</p>
                @endif
                    <div class="btn__modal_news">
                        <!-- Button trigger modal -->
                        <a href="/news{{ $new->id }}" class="btn btn__modal_news_item">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
                <p>@lang('words.parts')</p>
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