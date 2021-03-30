@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')

@foreach($news as $new)

<div class="container">
<div class="news__components">
    <div class="news__components__items_clone">
        <div class="news__components_items"><a href="/oldnews_in_{{$new->id}}">
                <div class="news__swiper_item">
                    <div class="news__card_title">
                        <p class="news__swiper_title">
                            {{ $new -> title}}
                        </p>
                        <div class="btn__modal_news"><a href="/oldnews_in_{{$new->id}}" class="btn btn__modal_news_item"><span>
                                    Побробнее
                                </span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                </svg></a></div>
                    </div>
                </div>
            </a></div>
    </div>
</div>
</div>

@endforeach
@endsection