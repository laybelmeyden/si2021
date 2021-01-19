@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Архив 2016 года')
@else
@section('title', 'Archive 2016')
@endif
@section('content')

</section>
<section class="years__blade_items">
    <div class="container">
        @if(App::isLocale('ru'))
        <h1>Архив 2016 года</h1>
        @else
        <h1>Archive 2016</h1>
        @endif
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/f4f5e564-5eca-4666-b1db-6633c2007a09.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2016/telekom_idea_2016">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ 2016</p>
                            <p>Конкурс инновационных проектов молодежи в сфере информационно-коммуникационных технологий и услуг для решения коммерческих, социальных и государчтвенных задач </p>
                            @else
                            <p>TELECOM IDEA 2016</p>
                            <p>Competition for innovative projects of youth in the field of information and communication technologies and services for solving commercial, social and state problems</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2016/telekom_idea_2016" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/wonkhe-wp.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2016/telekom_ideaunior_2016">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ ЮНИОР</p>
                            <p>Приглашаем школьников 12-17 лет. Построим "умный" город будущего! </p>
                            @else
                            <p>TELECOM IDEA JUNIOR</p>
                            <p>We invite schoolchildren 12-17 years old. Let's build a smart city of the future!</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2016/telekom_ideaunior_2016" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/262602,918646.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2016/telekom_ideacenter_2016">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ 2016 - ЦЕНТР</p>
                            <p>Региональные тематические хакатоны </p>
                            @else
                            <p>TELECOM IDEA 2016 - CENTER</p>
                            <p>Regional themed hackathons</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2016/telekom_ideacenter_2016" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/EVKAeGIUMAAJatT.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2016/telekom_hackaton_2016">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>БЕЛОРУССКИЙ ХАКАТОН</p>
                            <p>Участники поработают с ведущими экспертами отрасли, а победители попадут в полуфинал "Телеком идея 2016" </p>
                            @else
                            <p>BELARUSIAN HAKATON</p>
                            <p>Participants will work with leading industry experts, and the winners will get to the semifinals "Telecom Idea 2016"</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2016/telekom_hackaton_2016" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/shutterstock_276701579.0.0.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2016/telekom_legal_2016">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ЗА ЛЕГАЛЬНЫЙ КОНТЕНТ</p>
                            <p>Конкурс видеороликов "За легальный контент" </p>
                            @else
                            <p>FOR LEGAL CONTENT</p>
                            <p>Video Contest "For Legal Content"</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2016/telekom_legal_2016" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection