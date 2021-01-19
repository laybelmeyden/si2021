@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Архив 2014 года')
@else
@section('title', 'Archive 2014')
@endif
@section('content')

</section>
<section class="years__blade_items">
    <div class="container">
        @if(App::isLocale('ru'))
        <h1>Архив 2014 года</h1>
        @else
        <h1>Archive 2014</h1>
        @endif
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/01-1440x960.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2014/telekom_hit">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ХИТ 2014 </p>
                            <p>IV международный творческий конкурс для молодых исполнителей </p>
                            @else
                            <p>TELECOM HIT 2014</p>
                            <p>IV international creative competition for young performers</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2014/telekom_hit" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
                    <a href="/years2014/telekom_idea">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ 2014</p>
                            <p>IV конкурс молодежных инновационных проектов в сфере телекоммуникаций </p>
                            @else
                            <p>TELECOM IDEA 2014</p>
                            <p>IV competition of youth innovative projects in the field of telecommunications</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2014/telekom_idea" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/il-futuro-dei-nostri-bebe-orig.jpeg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2014/telekom_unior">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ЮНИОР 2014</p>
                            <p>Конкурс для школьников 7-11 классов </p>
                            @else
                            <p>TELECOM JUNIOR 2014</p>
                            <p>Competition for schoolchildren of grades 7-11</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2014/telekom_unior" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection