@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Архив 2015 года')
@else
@section('title', 'Archive 2015')
@endif
@section('content')

</section>
<section class="years__blade_items">
    <div class="container">
        @if(App::isLocale('ru'))
        <h1>Архив 2015 года</h1>
        @else
        <h1>Archive 2015</h1>
        @endif
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/three_red_apples.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2015/telekom_idea_2015">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ 2015 </p>
                            <p>ПАО «МТС», ведущий телекоммуникационный оператор в России и странах СНГ, объявляет о начале V международного конкурса молодежных инновационных проектов </p>
                            @else
                            <p>TELECOM IDEA 2015</p>
                            <p>PJSC "MTS", the leading telecommunications operator in Russia and the CIS countries, announces the start of the V international competition of youth innovative projects</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2015/telekom_idea_2015" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/maxresdefault.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2015/telekom_hit_2015">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ХИТ 2015</p>
                            <p>Ждем инноваций в музыке от сольных исполнителей и творческих коллективов. Присылайте аудио- и видеозаписи. </p>
                            @else
                            <p>TELECOM HIT 2015</p>
                            <p>We are waiting for innovations in music from solo performers and creative teams. Send audio and video recordings.</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2015/telekom_hit_2015" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/search.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2015/telekom_it_2015">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>Я IT-БЛОГЕР</p>
                            <p>Конкурс для школьников 12-17 лет на лучшие блоги и статьи </p>
                            @else
                            <p>I AM IT BLOGGER</p>
                            <p>Competition for students in years 12-17 for the best blogs and articles</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2015/telekom_it_2015" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
                    <a href="/years2015/telekom_legal_2015">
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
                        <a href="/years2015/telekom_legal_2015" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/Coding_CDE_2016-01-29.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2015/telekom_belarus_2015">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ВСЕБЕЛОРУССКИЙ ХАКАТОН</p>
                            <p>Участники поработают с ведущими экспертами отрасли, а победители попадут в полуфинал "Телеком идея 2015" </p>
                            @else
                            <p>ALL-BELARUSIAN HAKATON</p>
                            <p>Participants will work with leading industry experts, and the winners will get to the semi-final "Telecom Idea 2015"</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2015/telekom_belarus_2015" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/Drawing-competition-for-school-kids-by-seeveeaar-1.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2015/telekom_unior_2015">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ ЮНИОР</p>
                            <p>Пришлащаем школьников 12-17 лет. Построим "умный" город будущего! </p>
                            @else
                            <p>TELECOM IDEA JUNIOR</p>
                            <p>We invite schoolchildren 12-17 years old. Let's build a smart city of the future!</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2015/telekom_unior_2015" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/XXXL.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2015/telekom_center_2015">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ ЦЕНТР</p>
                            <p>Победители регионального этапа автоматически попадают в полуфинал "Телеком идеи 2015" </p>
                            @else
                            <p>TELECOM IDEA CENTER</p>
                            <p>The winners of the regional stage automatically go to the semifinals of "Telecom Ideas 2015" </p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2015/telekom_center_2015" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection