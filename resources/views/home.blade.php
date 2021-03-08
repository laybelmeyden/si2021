@extends('profile.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')
@include('profile.alerts')
<section id="peoject__sections">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div class="card__project" id="app">
        <h1>МОЙ ПРОЕКТ</h1>
        @if(
        (Auth::user()->user_name === null) ||
        (Auth::user()->user_phone === null) ||
        (Auth::user()->email === null) ||
        (Auth::user()->user_city === null)
        )
        <div class="no__project">
            <p>Внимание! Заполните <a href="/setting_profile/{{ Auth::user()->id }}">настройки профиля</a> чтобы получить возможность отправлять проекты
            </p>
        </div>
        @else
        @if($projects -> isEmpty() && Auth::user()->email === 'trycollens@gmail.com')
        <a class="btn btn_create_project" href="{{ route('projects.create') }}">
            Создать проект <img loading="lazy" src="/assets/img/right-arrow_si.svg" alt="">
        </a>
        @else
        @foreach ($projects as $project)
        <div class="statuses">
            <div class="item {{ $project->statuses }}">
                @if($project->statuses === 'draft')
                Черновик
                @endif
            </div>
        </div>
        <a href="{{ route('projects.edit',$project->id) }}">
            <div class="card__project_show">
                    <span>Номер проекта {{$project -> id}}</span>
                    @if($project -> project_name === null)
                    <p class="project__title">Нет названия проекта</p>
                    @else
                    <p class="project__title">{{ $project -> project_name }}</p>
                    @endif
                    @if($project -> project_body === null)
                    <p class="project__body">Нет описания проекта</p>
                    @else
                    <p  class="project__body">{{ Str::limit($project -> project_body, 50) }}</p>
                    @endif
            </div>
        </a>
        @endforeach
        @endif
        @endif
    </div>
</section>
@endsection