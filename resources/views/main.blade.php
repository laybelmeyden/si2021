@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')

<div class="container">
    <div class="info__si_items">
        <img loading="lazy" class="animation__hearts" src="assets/img/heart_1.png" alt="">
        <div class="si__logo_items">
            <img loading="lazy" src="assets/img/si_logo.svg" alt="">
            <img loading="lazy" src="assets/img/mts_logo.svg" alt="">
        </div>
        <section class="timer">
            <p class="main_p3">до приема заявок осталось</p>
            <div id="clockdiv">
                <div id="countdown" class="countdown">
                    <div class="countdown-number">
                        <span class="days countdown-time"></span><br>
                        <span class="countdown-text">Дней</span>
                    </div>
                </div>
            </div>
        </section>
        <h1>SOCIAL IDEA 2021</h1>
        <div id="about__tender"></div>
        <h2>@lang('words.title')</h2>
        <a class="btn btn-primary btn__si_banners" href="/social_idea_2021" role="button">
            @lang('words.participate')
            <img loading="lazy" src="assets/img/right-arrow_si.svg" alt="">
        </a>
    </div>
    <div class="about__tender">
        <p class="ltr">@lang('words.about')</p>
        <div class="grid__tender">
            <div class="grid__tender_about">
                <p>11 @lang('words.years')</p>
                <p class="no__upper">@lang('words.IT')</p>
            </div>
            <div class="grid__tender_main">
                <div class="tender__items">
                    <div>
                        <img loading="lazy" src="assets/img/tender1.svg" alt="">
                    </div>
                    <div>
                        <p>@lang('words.more')</p>
                        <p>3500</p>
                        <p>@lang('words.proj')</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img loading="lazy" src="assets/img/tender2.svg" alt="">
                    </div>
                    <div class="pdg__no">
                        <p></p>
                        <p>15</p>
                        <p>@lang('words.world')</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img loading="lazy" src="assets/img/tender3.svg" alt="">
                    </div>
                    <div>
                        <p>@lang('words.more')</p>
                        <p>400</p>
                        <p>@lang('words.experts')</p>
                    </div>
                </div>
                <div class="tender__items">
                    <div>
                        <img loading="lazy" src="assets/img/tender4.svg" alt="">
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

<section id="nominations">
    <div class="container">
        <p>@lang('words.nominations_con') 2021</p>
        <div class="grid__nominations">
            <div class="grid__nominations_1">
                <div>
                    <img loading="lazy" src="assets/img/incl.svg" alt="">
                </div>
                <p>ЭКОЛОГИЯ</p>
                <span>Синергия цифровых проектов в сфере экологии. Эта номинация для разработчиков экологических решений: каждый регион и каждый уголок планеты должны стать лучше</span>
            </div>
            <div class="grid__nominations_2">
                <div>
                    <img loading="lazy" src="assets/img/ecol.svg" alt="">
                </div>
                <p>ИНКЛЮЗИЯ</p>
                <span>Экосистема цифровых решений по обеспечению социальной поддержки населения. Эта номинация для разработчиков мобильных приложений и систем в сфере инклюзивных технологий</span>
            </div>
        </div>
    </div>
</section>
<section id="start">
    <div class="container">
        @if(App::isLocale('ru'))
        <div class="start__grid">
            <div>
                <img loading="lazy" src="assets/img/ok.svg" alt="">
                <p>У вас есть идея или готовый проект ?</p>
            </div>
            <div>
                <img loading="lazy" src="assets/img/ok.svg" alt="">
                <p><b>Вы хотите получить Грант на пилот проекта до 1 500 000 рублей?</b></p>
            </div>
            <div>
                <img loading="lazy" src="assets/img/ok.svg" alt="">
                <p>Вы хотите получить экспертную оценку от топ-менеджмента и поддержку в реализации?</p>
            </div>
            <div>
                <img loading="lazy" src="assets/img/ok.svg" alt="">
                <p>Вы хотите пилотировать свой продукт совместно с МТС Гараж, инкубатором и акселератором MTS StartUp Hub и другими программами социальных инноваций МТС ?</p>
            </div>
        </div>
        @else
        <div class="start__grid">
            <div>
                <img loading="lazy" src="assets / img / ok.svg" alt="">
                <p> Do you have an idea or a finished project? </p>
            </div>
            <div>
                <img loading="lazy" src="assets / img / ok.svg" alt="">
                <p> <b> Do you want to receive a Grant for the pilot of the project up to 1,500,000 rubles? </b> </p>
            </div>
            <div>
                <img loading="lazy" src="assets / img / ok.svg" alt="">
                <p> Would you like to receive expert advice from top management and support in implementation? </p>
            </div>
            <div>
                <img loading="lazy" src="assets / img / ok.svg" alt="">
                <p> Do you want to pilot your product together with MTS Garage, the MTS StartUp Hub incubator and accelerator and other MTS social innovation programs? </p>
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
<section id="tenders">
    <div class="container">
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img loading="lazy" src="assets/img/shutterstock_1209641593.jpg" alt="">
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
            <div class="modal-body tenders__modal">
                <p>На конкурс 2021 принимаются заявки:</p>
                <div class="modal-body__infotender_1">
                    <div class="modal-body__infotender_1_div">
                        <img loading="lazy" src="assets/img/modal1.svg" alt="">
                        <p>на стадии «ИДЕИ»</p>
                    </div>
                    <span>У команды есть отличная идея! Выбрав данную стадию, участники будут заполнять проект, который находится на стартовом этапе, без готового прототипа / продукта. Ваша идея – это способ решить проблему, пока еще без расчетов, прояснений и четких формулировок. В идее заложена энергия проекта. С неё все начинается!</span>
                </div>
                <div class="modal-body__infotender_2">
                    <div class="modal-body__infotender_2_div">
                        <img loading="lazy" src="assets/img/modal2.svg" alt="">
                        <p>на стадии «ПРОДУКТ»</p>
                    </div>
                    <span>Продукт готов! Выбрав данную стадию, участники будут заполнять проект, который находится на продвинутом уровне: стадия пилота или уже готовый бизнес-продукт / прототип.</span>
                </div>
                <p>Менторство МТС: возможность войти
                    во все направления бизнеса внутри корпорации</p>
            </div>
            @else
            <div class="modal-body tenders__modal">
                <p> Applications for the 2021 competition are accepted: </p>
                <div class="modal-body__infotender_1">
                    <div class="modal-body__infotender_1_div">
                        <img loading="lazy" src="assets / img / modal1.svg" alt="">
                        <p> at the stage "IDEAS" </p>
                    </div>
                    <span> The team has a great idea! By choosing this stage, participants will fill out a project that is at the start-up stage, without a ready-made prototype / product. Your idea is a way to solve a problem, without calculations, clarifications and clear formulations yet. The idea is the energy of the project. It all starts with her! </span>
                </div>
                <div class="modal-body__infotender_2">
                    <div class="modal-body__infotender_2_div">
                        <img loading="lazy" src="assets / img / modal2.svg" alt="">
                        <p> at the "PRODUCT" stage </p>
                    </div>
                    <span> The product is ready! By choosing this stage, participants will fill out a project that is at an advanced level: the pilot stage or a ready-made business product / prototype. </span>
                </div>
                <p> MTS mentoring: the ability to enter
                    in all areas of business within the corporation </p>
            </div>
            @endif
        </div>
    </div>
</div>
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
                            <img loading="lazy" src="assets/img/timeline_1.svg" alt="">
                        </div>
                        <div>
                            @if(App::isLocale('ru'))
                            <p>10 марта – 31 мая</p>
                            <p>Прием заявок</p>
                            @else
                            <p>March 10 - May 31</p>
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
                            <p>Апрель</p>
                            <p>Обучающий онлайн-курс для участников конкурса</p>
                            @else
                            <p>April</p>
                            <p>Online training course for contest participants</p>
                            @endif
                        </div>
                        <div>
                            <img loading="lazy" src="assets/img/timeline_2.svg" alt="">
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                    </div>
                    <div class="timeline-content right">
                        <div>
                            <img loading="lazy" src="assets/img/timeline_3.svg" alt="">
                        </div>
                        <div>
                            @if(App::isLocale('ru'))
                            <p>Апрель/Май</p>
                            <p>региональная программа Social Idea 2021</p>
                            @else
                            <p>April / May</p>
                            <p>regional program Social Idea 2021</p>
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
                            <p>Май/Июнь</p>
                            <p>многоступенчатая экспертиза и отбор финалистов</p>
                            @else
                            <p>May / June</p>
                            <p>multistage examination and selection of finalists</p>
                            @endif
                        </div>
                        <div>
                            <img loading="lazy" src="assets/img/timelime_4.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">
                    </div>
                    <div class="timeline-content right">
                        <div>
                            <img loading="lazy" src="assets/img/timeline_5.svg" alt="">
                        </div>
                        <div>
                            @if(App::isLocale('ru'))
                            <p>20 июня</p>
                            <p>объявление списка финалистов</p>
                            @else
                            <p>June 20</p>
                            <p>announcement of the list of finalists</p>
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
                            <p>25 июня – 6 июля</p>
                            <p>менторинг финалистов / подготовка к финальным питчам</p>
                            @else
                            <p>June 25 - July 6</p>
                            <p>mentoring of finalists / preparation for final pitches</p>
                            @endif
                        </div>
                        <div>
                            <img loading="lazy" src="assets/img/timeline_6.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon big">
                    </div>
                    <div class="timeline-content right">
                        <div>
                            <img loading="lazy" src="assets/img/timeline_7.svg" alt="">
                        </div>
                        <div>
                            @if(App::isLocale('ru'))
                            <p>7 июля</p>
                            <p>ФИНАЛ КОНКУРСА</p>
                            @else
                            <p>7 july</p>
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
                        <img loading="lazy" src="assets/img/Intersect.png" alt="">
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
                        <img loading="lazy" src="assets/img/Dama1.svg" alt="Moskvina_photo.png">
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
                        <img loading="lazy" src="assets/img/Dama2.png" alt="">
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
                        <img loading="lazy" src="assets/img/Dama3.png" alt="">
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
                        <img loading="lazy" src="assets/img/Dama4.png" alt="">
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
                        <img loading="lazy" src="assets/img/Dama5.png" alt="">
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
        <div class="experts__all_btn">
            <a href="/allspeakers" class="btn btn-primary btn__si_experts">Все эксперты<img loading="lazy" src="assets/img/right-arrow_si.svg" alt=""></a>
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
                    <img loading="lazy" src="/storage/{{ $new -> img}}" alt="">
                </div>
                <div class="text__news">
                    <p class="news__date_items">{{$new -> date}}</p>
                    @if(App::isLocale('ru'))
                    <p class="news__title_items">{{Str::limit($new -> title_ru, 50)}}</p>
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
                    <a href="https://www.mtsbank.ru/"><img loading="lazy" src="assets/img/article23123.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://sistema.ru/domashyaya-stranica/"><img loading="lazy" src="assets/img/article (4).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://medsi.ru/"><img loading="lazy" src="assets/img/article (9).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://startup.mts.ru/"><img loading="lazy" src="assets/img/article (12).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://bf.sistema.ru/"><img loading="lazy" src="assets/img/article (8).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://impacthubmoscow.net/"><img loading="lazy" src="assets/img/article (7).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://fundsp.ru/"><img loading="lazy" src="assets/img/article (1).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.soc-invest.ru/"><img loading="lazy" src="assets/img/FSII.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://fasie.ru/"><img loading="lazy" src="assets/img/head_logo_fasie.png" class="img_partners"></a>
                </div>

                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://reo.ru/"><img loading="lazy" src="assets/img/Logo-reo-color.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://rb.ru/"><img loading="lazy" src="assets/img/article (5).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://www.nb-fund.ru/"><img loading="lazy" src="assets/img/article (6).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://changellenge.com/"><img loading="lazy" src="assets/img/article (10).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://rusinnovations.com/"><img loading="lazy" src="assets/img/article (11).png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://msbinfo.ru/"><img loading="lazy" src="assets/img/article.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://gotech.vc/"><img loading="lazy" src="assets/img/fda.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://asi.ru/"><img loading="lazy" src="assets/img/das1.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.sberbank-ast.ru/Content.aspx?tid=1"><img loading="lazy" src="assets/img/fda1.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://apply.innopolis.ru/"><img loading="lazy" src="assets/img/_Ciu0Sy-0PA.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://opora.ru/"><img loading="lazy" src="assets/img/Logo_with_Text_300dpi.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href=""><img loading="lazy" src="assets/img/1.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href=""><img loading="lazy" src="assets/img/hse_inc_main.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://dobrofiz.ru/"><img loading="lazy" src="assets/img/Доброфиз_лого-цвет-синий.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://dobrofiz.ru/dobropoezd"><img loading="lazy" src="assets/img/Logo-11.jpg" class="img_partners"></a>
                </div>

                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.facebook.com/youngroupsocial/"><img loading="lazy" src="assets/img/123123.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://cpp-group.ru/"><img loading="lazy" src="assets/img/6634634634.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://te-st.ru/"><img loading="lazy" src="assets/img/Teplitsa_mainLogo_rus.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://fondgarant.ru/evaluation"><img loading="lazy" src="assets/img/Garant_ЂЃ£Ѓ_ж•≠ва_бЃж®†Ђм≠ле_в•е≠ЃЂЃ£®©-1.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://kislorod.io/"><img loading="lazy" src="assets/img/kislorod_logo-landscape-1.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://netology.ru/"><img loading="lazy" src="assets/img/logo-full-color-black.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://probusinesstv.ru"><img loading="lazy" src="assets/img/PRObusiness-logo-002-CMYK(1)-01.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://bizdrom.com/"><img loading="lazy" src="assets/img/logo_new2222.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://www.trinet.ru/"><img loading="lazy" src="assets/img/image_5.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://s-ol.ru/ru/"><img loading="lazy" src="assets/img/CZSIO-SOL.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://socialweekend.by/"><img loading="lazy" src="assets/img/000022_1546256336_331246_big.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://startupheart.by/"><img loading="lazy" src="assets/img/74887114_112304683523635_118921824745553920_o.jpg" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="http://social.d-group.ru/"><img loading="lazy" src="assets/img/D-group.social_logo-01.png" class="img_partners"></a>
                </div>
                <div class="col-lg-2 col-md-3 col-3 particul_part">
                    <a href="https://rgsu.net/"><img loading="lazy" src="assets/img/Gorizontal'naya sokraschennaya komponovka.png" class="img_partners"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection