@extends('layouts.master')
@section('title', $id -> title_ru)
@section('content')
</section>
<section id="years__sections">
<div class="container">
        <div class="solo__news">
            <p class="title__years_solo">{{$id -> title_ru}}</p>
            <p>
                {!! $id -> body_ru !!}
            </p>
        </div>
</div>
</section>



@endsection