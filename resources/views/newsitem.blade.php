@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', $id -> title_ru)
@else
@section('title', $id -> title_en)
@endif
@section('content')
</section>
<section id="years__sections">
<div class="container">
        @if(App::isLocale('ru'))
        <div class="solo__news">
            <p class="title__years_solo">{{$id -> title_ru}}</p>
            <p>
                {!! $id -> body_ru !!}
            </p>
        </div>
        @else
        <div class="solo__news">
            <p class="title__years_solo">{{$id -> title_en}}</p>
            <p>
                {!! $id -> body_en !!}
            </p>
        </div>
        @endif
</div>
</section>



@endsection