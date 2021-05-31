@extends('profile.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')
@include('profile.alerts')
<section id="peoject__sections">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    @if( Auth::user()->role_id === 3 )
    <div class="card__project" id="app">
        <h1>ПРОЕКТЫ ДЛЯ ОЦЕНКИ</h1>
        @foreach($projectsExperts as $projectsExpert)
        <div class="statuses__score">
            @if($projectsExpert->score1 != null 
            && $projectsExpert->score2 != null
            && $projectsExpert->score3 != null
            && $projectsExpert->score4 != null)
            <div class="item accepted">
                Вы оценили этот проект
            </div>
            @else
            <div class="item danger">
                Вы не оценили этот проект
            </div>
            @endif
        </div>
        <a href="/projects/{{$projectsExpert->project_id}}">
        <div class="card__project_show">
                    <span>Номер проекта {{$projectsExpert -> project_id}}</span>
                    <p class="project__title">{{$projectsNames[0]->find($projectsExpert -> project_id)->project_name}}</p>
                    <p  class="project__body">{{ Str::limit($projectsNames[0]->find($projectsExpert -> project_id)->project_body, 300) }}</p>
            </div>
        </a>
        <br><br>
        @endforeach
    </div>
    @else
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
        @if($projects -> isEmpty())
        <!-- <a class="btn btn_create_project" href="{{ route('projects.create') }}">
            Создать проект <img loading="lazy" src="/assets/img/right-arrow_si.svg" alt="">
        </a> -->
        <p class="danger__ends">
        Прием заявок завершён
        </p>
        @else
        @foreach ($projects as $project)
        <div class="statuses">
            @if($project->statuses === 'draft')
            <div class="item {{ $project->statuses }}">
                Черновик
            </div>
            @endif
            @if($project->statuses === 'moderate')
            <div class="item {{ $project->statuses }}">
                На модерации
            </div>
            @endif
            @if($project->statuses === 'accepted')
            <div class="item {{ $project->statuses }}">
                Принят на конкурс
            </div>
            @endif
        </div>
        <a href="
        @if($project->statuses === 'draft')
        {{ route('projects.edit',$project->id) }}
        @endif
        @if($project->statuses === 'moderate')
        {{ route('projects.show',$project->id) }}
        @endif
        @if($project->statuses === 'accepted')
        {{ route('projects.show',$project->id) }}
        @endif
        ">
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
                    <p  class="project__body">{{ Str::limit($project -> project_body, 300) }}</p>
                    @endif
            </div>
        </a>
        @endforeach
        @endif
        @endif
    </div>
    @endif
</section>
@endsection