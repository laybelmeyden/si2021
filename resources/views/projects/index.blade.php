@extends('profile.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')
@include('profile.alerts')
<section id="peoject__sections">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div class="card__project" id='app'>
        <h1>ВСЕ ПРОЕКТЫ - {{ $projects -> count() }}</h1>
        <p class="projects__info_statuses">
        Проектов на модерации - {{$projectsModerateCount}}<br>
        Проектов черновиков - {{$projectsDraftCount}}<br>
        Проектов принятых на конкурс - {{$projectsAcceptedCount}}
        </p>
        @foreach ($projectsAccepted as $project)
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
        <a href="{{ route('projects.show',$project->id) }}">
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
            <div class="btns__statuses">
            @if(Auth::user() -> role_id === 1)
            <form action="{{ route('draftProject',$project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="item__admin_btn">
                <button type="submit" class="btn btn__draft">Черновик</button>
                </div>
            </form>
            @endif
            @if(Auth::user() -> role_id === 1)
            <form action="{{ route('acceptedProject',$project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="item__admin_btn">
                <button type="submit" class="btn btn__accepted">Принять</button>
                </div>
            </form>
            @endif
            </div>
        </a>
        @endforeach
        @foreach ($projectsModerate as $project)
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
        <a href="{{ route('projects.show',$project->id) }}">
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
            <div class="btns__statuses">
            @if(Auth::user() -> role_id === 1)
            <form action="{{ route('draftProject',$project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="item__admin_btn">
                <button type="submit" class="btn btn__draft">Черновик</button>
                </div>
            </form>
            @endif
            @if(Auth::user() -> role_id === 1)
            <form action="{{ route('acceptedProject',$project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="item__admin_btn">
                <button type="submit" class="btn btn__accepted">Принять</button>
                </div>
            </form>
            @endif
            </div>
        </a>
        @endforeach
        @foreach ($projectsDraft as $project)
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
        <a href="{{ route('projects.show',$project->id) }}">
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
            <div class="btns__statuses">
            @if(Auth::user() -> role_id === 1)
            <form action="{{ route('draftProject',$project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="item__admin_btn">
                <button type="submit" class="btn btn__draft">Черновик</button>
                </div>
            </form>
            @endif
            @if(Auth::user() -> role_id === 1)
            <form action="{{ route('acceptedProject',$project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="item__admin_btn">
                <button type="submit" class="btn btn__accepted">Принять</button>
                </div>
            </form>
            @endif
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection
 