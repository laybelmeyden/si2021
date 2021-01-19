@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Архив 2020 года')
@else
@section('title', 'Archive 2020')
@endif
@section('content')

</section>
<section class="years__blade_items">
    <div class="container">
        @if(App::isLocale('ru'))
        <h1>Архив 2020 года</h1>
        @else
        <h1>Archive 2020</h1>
        @endif
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/1444000.png" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2020/telekom_si_2020">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>SOCIAL IDEA 2020</p>
                            <p>Международный конкурс социальных проектов с применением цифровых технологий</p>
                            @else
                            <p>SOCIAL IDEA 2020</p>
                            <p>International competition for social projects using digital technologies</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2020/telekom_si_2020" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/krediidipoliitika-pilt-1-1024x683.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2019/telekom_school_2019">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ШКОЛЫ СОЦИАЛЬНОГО ПРЕДПРИНИМАТЕЛЬСТВА</p>
                            <p>В рамках программы ИТ-старт</p>
                            @else
                            <p>SOCIAL ENTREPRENEURSHIP SCHOOLS</p>
                            <p>Within the framework of the IT start program</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2019/telekom_school_2019" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/partner.png" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/#partners">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ПАРТНЕРЫ КОНКУРСА SOCIAL IDEA 2020</p>
                            <p></p>
                            @else
                            <p>SOCIAL IDEA 2020 COMPETITION PARTNERS</p>
                            <p></p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/#partners" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/online_education.png" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="https://drive.google.com/file/d/1TvZvMe10Apt-mouOB7h5i0nEecseebtD/view">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ПРОГРАММА ОНЛАЙН-ОБУЧЕНИЯ</p>
                            <p></p>
                            @else
                            <p>ONLINE TRAINING PROGRAM</p>
                            <p></p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="https://drive.google.com/file/d/1TvZvMe10Apt-mouOB7h5i0nEecseebtD/view" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection