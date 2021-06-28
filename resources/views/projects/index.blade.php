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
            <a href="#forms_update">Отсортировать оценки</a>
        </p>
        @foreach ($projectsAccepted as $project)
        <div class="statuses">
            <div class="item accepted">
                Оценка проекта:
                @php
                $score1 = $projectExpertViews->where('project_id', $project->id)->sum('score1');
                $score2 = $projectExpertViews->where('project_id', $project->id)->sum('score2');
                $score3 = $projectExpertViews->where('project_id', $project->id)->sum('score3');
                $score4 = $projectExpertViews->where('project_id', $project->id)->sum('score4');
                $countExperts = $projectExpertViews->where('project_id', $project->id)->count();
                $fullScore = ($score1 + $score2 + $score3 + $score4);
                if($fullScore > 0 && $countExperts > 0) echo round($fullScore / $countExperts, $precision = 3);
                if($fullScore <= 0) echo 'Нет  оценки' ; @endphp </div>
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
                    <p class="project__body">{{ Str::limit($project -> project_body, 300) }}</p>
                    @endif
                </div>
            </a>
            <span style="display: none;" id="projects__id">{{$project -> id}}</span>
            <span style="display: none;" id="scores__id">@if($fullScore > 0 && $countExperts > 0){{round($fullScore / $countExperts, $precision = 3)}}@endif</span>
            <div class="btns__statuses">
                @if(Auth::user() -> email === 'trycollens@gmail.com')
                <div class="item__admin_btn">
                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$project->id}}" class="btn btn__draft">Черновик</button>
                </div>
                <div class="modal fade" id="staticBackdrop{{$project->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Статус черновик уведомление</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('draftProject',$project->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form__item">
                                        <label for="draft__msg">Проект - {{ $project -> project_name }}</label>
                                        <textarea name="draft__msg" id="draft__msg" rows="10" placeholder="Введите сообщение для отправки пользователю..." required></textarea>
                                    </div>
                                    <div class="item__admin_btn rigth__align">
                                        <button type="submit" class="btn btn__accepted">Отправить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(Auth::user() -> role_id === 1)
                <form action="{{ route('scoreProjectVisible',$project->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="item__admin_btn">
                        <button type="submit" class="btn btn__accepted">Показать оценки</button>
                    </div>
                </form>
                @endif
            </div>
            @endforeach
            <!-- @foreach ($projectsModerate as $project)
            <div class="statuses">
                @if($project->statuses === 'moderate')
                <div class="item {{ $project->statuses }}">
                    На модерации
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
                    <p class="project__body">{{ Str::limit($project -> project_body, 300) }}</p>
                    @endif
                </div>
            </a>
            <div class="btns__statuses">
                @if(Auth::user() -> role_id === 1)
                <div class="item__admin_btn">
                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$project->id}}" class="btn btn__draft">Черновик</button>
                </div>
                <div class="modal fade" id="staticBackdrop{{$project->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Статус черновик уведомление</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('draftProject',$project->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form__item">
                                        <label for="draft__msg">Проект - {{ $project -> project_name }}</label>
                                        <textarea name="draft__msg" id="draft__msg" rows="10" placeholder="Введите сообщение для отправки пользователю..." required></textarea>
                                    </div>
                                    <div class="item__admin_btn rigth__align">
                                        <button type="submit" class="btn btn__accepted">Отправить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
            @endforeach -->
            <!-- @foreach ($projectsDraft as $project)
            <div class="statuses">
                @if($project->statuses === 'draft')
                <div class="item {{ $project->statuses }}">
                    Черновик
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
                    <p class="project__body">{{ Str::limit($project -> project_body, 300) }}</p>
                    @endif
                </div>
            </a>
            <div class="btns__statuses">
                @if(Auth::user() -> role_id === 1)
                <form action="{{ route('acceptedProject',$project->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="item__admin_btn">
                        <button type="submit" class="btn btn__accepted">Принять</button>
                    </div>
                </form>
                <form action="{{ route('notificationProject', $project->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="item__admin_btn">
                        <button type="submit" class="btn btn__notification">Уведомление</button>
                    </div>
                </form>
                @endif
            </div>
            @endforeach -->
        </div>
</section>
            <div id="forms_update">
                <form action="/updateScore" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" id="project_id_other" name="project_id" value="">
                    <input type="hidden" id="score_id_other" name="score_id" value="@if($fullScore > 0 && $countExperts > 0){{round($fullScore / $countExperts, $precision = 3)}}@endif">
                    <div class="btns__statuses">
                        <div class="item__admin_btn" style="width: 100%;">
                            <button type="submit" class="btn btn__accepted" style="
                            width: 100%;
    margin-bottom: 30px;
    margin-top: 30px;">Обновить оценки</button>
                        </div>
                    </div>
                </form>
            </div>
<script>
    const arrId = [];
    const arrScore = [];
    const s = document.querySelectorAll('#projects__id').forEach(e => {
        arrId.push(e.innerHTML)
    });
    const ss = document.querySelectorAll('#scores__id').forEach(e => {
        arrScore.push(e.innerHTML)
    });
    const valueA = document.querySelector('#project_id_other').value = arrId;
    const valueB = document.querySelector('#score_id_other').value = arrScore;
    const valueA1 = document.querySelector('#project_id_other').placeholder = arrId;
    const valueB2 = document.querySelector('#score_id_other').placeholder = arrScore
</script>
@endsection