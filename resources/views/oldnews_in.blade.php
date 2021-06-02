@extends('layouts.master')
@section('title', 'Новости')
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="solo__news">
            <p class="title__years_solo">{!! $id -> description !!}</p>
            <div id="tags">
                {!! Str::before($id -> content, ']]>')  !!}
            </div>
        </div>
    </div>
</section>
<script>
    const a = document.querySelectorAll('img').forEach(e => e.style.display = 'none');
</script>


@endsection