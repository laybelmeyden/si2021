@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'Архив 2011 года')
@else
@section('title', 'Archive 2011')
@endif
@section('content')

</section>
<section class="years__blade_items">
    <div class="container">
        @if(App::isLocale('ru'))
        <h1>Архив 2011 года</h1>
        @else
        <h1>Archive 2011</h1>
        @endif
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/41d67c8d822266ab5ea8c2ddc8e91380.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2011/telekom_hit">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ХИТ 2011 </p>
                            <p>МТС проводит творческий конкурс молодых исполнителей «Телеком Хит»</p>
                            @else
                            <p>TELECOM HIT 2011 </p>
                            <p>MTS holds a creative competition for young performers "Telecom Hit"</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2011/telekom_hit" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__tender_modal_container">
            <div class="about__tender_modal_items">
                <div class="about__tender_modal_items_1">
                    <img src="assets/img/years/606089.jpg" alt="">
                </div>
                <div class="about__tender_modal_items_2">
                    <a href="/years2011/telekom_idea">
                        <div>
                            @if(App::isLocale('ru'))
                            <p>ТЕЛЕКОМ ИДЕЯ 2011 </p>
                            <p>Конкурс «Телеком Идея» направлен на поиск и поддержку перспективных идей научной молодежи в сфере телекоммуникаций. </p>
                            @else
                            <p>TELECOM IDEA 2011 </p>
                            <p>The Telecom Idea competition is aimed at finding and supporting promising ideas of young scientists in the field of telecommunications.</p>
                            @endif
                        </div>
                    </a>
                    <div class="btn__modal_tender">
                        <!-- Button trigger modal -->
                        <a href="/years2011/telekom_idea" class="btn btn__modal_tender">@lang('words.more_info') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection