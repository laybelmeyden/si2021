@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')

<div class="container news__olds-f">
    <h1>Новости</h1>
    <div class="cards__body">
        @foreach($news as $new)
            <div class="card" style="--cards: 5">
                <div class="child">
                    <div>
                    <a href="/oldnews_in_{{$new->id}}" class="a__white">
                    <h2>{!! Str::limit($new->description, '230') !!}</h2>
                    <p class="date">{{ Str::before($new->createdate, ' ') }}</p>
                    <p>{!! Str::limit($new->content, '90') !!}</p>
                    </a>
                    </div>
                    <div>
                    <a href="/oldnews_in_{{$new->id}}" class="btn btn__modal_news_item">
                        <span>Побробнее</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                    </a>
                    </div>
                </div>
                <div class="child"></div>
                <div class="child"></div>
                <div class="child"></div>
                <div class="child"></div>
                @if(Auth::user() && Auth::user()-> role_id === 1)
                <form method="POST" action="{{ route('oldnews_in_delete',$new->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        удалить
                    </button>
                </form>
                @endif
            </div>
        @endforeach
    </div>
    <div class="users__links">
        {{ $news->links() }}
    </div>
</div>
<script>
    const a = document.querySelectorAll('#news__title').forEach(e => e.innerHTML.replace('</Tit', 'dasdasdasdasd'));
</script>
@endsection