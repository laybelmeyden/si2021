@extends('layouts.master')

@section('content')

<div class="container">
    <div class="info__si_items">
        <div class="si__logo_items">
            <img src="assets/img/si_logo.svg" alt="">
            <img src="assets/img/mts_logo.svg" alt="">
        </div>
        <h1>SOCIAL IDEA 2021</h1>
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
            <div  class="grid__nominations_2">
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
            <p>Станьте участником конкурса SOCIAL IDEA  2021 </p>
            <a class="btn btn-primary" href="#" role="button">ПОДАТЬ ЗАЯВКУ <img src="assets/img/right-arrow_si.svg" alt=""></a>
        </div>
    </div>
</section>

<section id="history">
    <div class="container">
        <p>ИСТОРИИ УСПЕХА</p>
    </div>
</section>
@endsection