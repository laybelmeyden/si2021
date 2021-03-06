@extends('profile.master')
@section('title', 'Просмотр проекта')
@section('content')
@include('profile.alerts')
<section id="peoject__sections">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div class="card__project" id="app">
        <h1>Просмотр проекта - {{ $project->project_name }}</h1>
        <section id="projects__shows">
            <div>
                <label for="about_source">Откуда вы узнали о конкурсе Social Idea?</label>
                <p id="about_source">
                    {{ $project->about_source}}
                    @if($project->about_source === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="nominations">Номинация</label>
                <p id="nominations">
                    {{ $project->nominations}}
                    @if($project->nominations === null)
                    Нет информации
                    @endif
                </p>
            </div>
            @if($project->project_ready === 'idea')
            <div>
                <label for="project_ready_idea">Готовность проекта</label>
                <p id="project_ready_idea">
                    {{ $project->project_ready}}
                    @if($project->project_ready === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_name">Название проекта</label>
                <p id="project_name">
                    {{ $project->project_name}}
                    @if($project->project_name === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_body">Краткое описание проекта</label>
                <p id="project_body">
                    {{ $project->project_body}}
                    @if($project->project_body === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_social">Социальная значимость проекта</label>
                <p id="project_social">
                    {{ $project->project_social}}
                    @if($project->project_social === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_target">Цели проекта</label>
                <p id="project_target">
                    {{ $project->project_target}}
                    @if($project->project_target === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_presentations">Презентация проекта</label>
                @if($project->project_presentations === null)
                Нет информации
                @else
                <a href="{{ asset('storage/'.Str::after($project->project_presentations, 'public/'))}}" id="project_presentations">
                    Файл
                </a>
                @endif
            </div>
            <div>
                <label for="project_video">Видео о проекте</label>
                @if($project->project_video === null)
                Нет информации
                @else
                <a href="{{ asset('storage/'.Str::after($project->project_video, 'public/'))}}" id="project_video">
                    Файл
                </a>
                @endif
            </div>
            <div>
                <label for="project_logo">Логотип проекта</label>
                @if($project->project_logo === null)
                Нет информации
                @else
                <a href="{{ asset('storage/'.Str::after($project->project_logo, 'public/'))}}" id="project_logo">
                    Файл
                </a>
                @endif
            </div>
            <div>
                <label for="project_mts">Проект соответствует бизнес-стратегии и стратегии корпоративной социальной ответственности Компании МТС</label>
                <p id="project_mts">
                    {{ $project->project_mts}}
                    @if($project->project_mts === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_fio">Руководитель проекта</label>
                <p id="project_main_fio">
                    {{ $project->project_main_fio}}
                    @if($project->project_main_fio === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_info">Информация о руководителе проекта</label>
                <p id="project_main_info">
                    {{ $project->project_main_info}}
                    @if($project->project_main_info === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_phone">Мобильный телефон руководителя проекта</label>
                <p id="project_main_phone">
                    {{ $project->project_main_phone}}
                    @if($project->project_main_phone === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_years">Возраст руководителя проекта</label>
                <p id="project_main_years">
                    {{ $project->project_main_years}}
                    @if($project->project_main_years === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_social_links_1">Ссылки на социальные сети</label>
                <p id="project_main_social_links_1">
                    {{ $project->project_main_social_links_1}}
                    @if($project->project_main_social_links_1 === null)
                    Нет информации
                    @endif
                </p>
                <p id="project_main_social_links_2">
                    {{ $project->project_main_social_links_2}}
                    @if($project->project_main_social_links_2 === null)
                    Нет информации
                    @endif
                </p>
                <p id="project_main_social_links_3">
                    {{ $project->project_main_social_links_3}}
                    @if($project->project_main_social_links_3 === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_teams">Участники команды</label>
                <p id="project_main_teams">
                    {{ $project->project_main_teams}}
                    @if($project->project_main_teams === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_security">Я даю свое согласие на обработку персональных данных</label>
                <p id="project_main_security">
                    {{ $project->project_main_security}}
                    @if($project->project_main_security === null)
                    Нет информации
                    @endif
                </p>
            </div>
            @endif
            @if($project->project_ready === 'product')
            <div>
                <label for="project_ready_idea">Готовность проекта</label>
                <p id="project_ready_idea">
                    {{ $project->project_ready}}
                    @if($project->project_ready === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_name">Название проекта</label>
                <p id="project_name">
                    {{ $project->project_name}}
                    @if($project->project_name === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_body">Краткое описание проекта</label>
                <p id="project_body">
                    {{ $project->project_body}}
                    @if($project->project_body === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_social">Социальная значимость проекта</label>
                <p id="project_social">
                    {{ $project->project_social}}
                    @if($project->project_social === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_target">Цели проекта</label>
                <p id="project_target">
                    {{ $project->project_target}}
                    @if($project->project_target === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_presentations">Презентация проекта</label>
                @if($project->project_presentations === null)
                Нет информации
                @else
                <a href="{{ asset('storage/'.Str::after($project->project_presentations, 'public/'))}}" id="project_presentations">
                    Файл
                </a>
                @endif
            </div>
            <div>
                <label for="project_files_1">Дополнительные материалы</label>
                @if($project->project_files_1 === null)
                Нет информации
                @else
                <a href="{{ asset('storage/'.Str::after($project->project_files_1, 'public/'))}}" id="project_files_1">
                    Файл
                </a>
                @endif
            </div>
            <div>
                <label for="project_logo">Логотип проекта</label>
                @if($project->project_logo === null)
                Нет информации
                @else
                <a href="{{ asset('storage/'.Str::after($project->project_logo, 'public/'))}}" id="project_logo">
                    Файл
                </a>
                @endif
            </div>
            <div>
                <label for="project_mts">Проект соответствует бизнес-стратегии и стратегии корпоративной
                    социальной ответственности Компании МТС</label>
                <p id="project_mts">
                    {{ $project->project_mts}}
                    @if($project->project_mts === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_video">Видео о проекте</label>
                <p id="project_video">
                    {{ $project->project_video}}
                    @if($project->project_video === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_fio">ФИО руководителя проекта</label>
                <p id="project_main_fio">
                    {{ $project->project_main_fio}}
                    @if($project->project_main_fio === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_info">Информация о руководителе проекта</label>
                <p id="project_main_info">
                    {{ $project->project_main_info}}
                    @if($project->project_main_info === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_phone">Мобильный телефон руководителя проекта</label>
                <p id="project_main_phone">
                    {{ $project->project_main_phone}}
                    @if($project->project_main_phone === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_years">Возраст руководителя проекта</label>
                <p id="project_main_years">
                    {{ $project->project_main_years}}
                    @if($project->project_main_years === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_social_links_1">Ссылки на социальные сети</label>
                <p id="project_main_social_links_1">
                    {{ $project->project_main_social_links_1}}
                    @if($project->project_main_social_links_1 === null)
                    Нет информации
                    @endif
                </p>
                <p id="project_main_social_links_2">
                    {{ $project->project_main_social_links_2}}
                    @if($project->project_main_social_links_2 === null)
                    Нет информации
                    @endif
                </p>
                <p id="project_main_social_links_3">
                    {{ $project->project_main_social_links_3}}
                    @if($project->project_main_social_links_3 === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_teams">Участники команды</label>
                <p id="project_main_teams">
                    {{ $project->project_main_teams}}
                    @if($project->project_main_teams === null)
                    Нет информации
                    @endif
                </p>
            </div>
            <div>
                <label for="project_main_security">Я даю свое согласие на обработку персональных данных</label>
                <p id="project_main_security">
                    {{ $project->project_main_security}}
                    @if($project->project_main_security === null)
                    Нет информации
                    @endif
                </p>
            </div>
            @endif
        </section>
        @if( Auth::user()->role_id === 3)
        @foreach($projectExpertViews as $projectExpertView)
        <h3>Форма оценок для проекта</h3>
        <form action="{{ route('expertRatings',$projectExpertView->id) }}" method="post" id="score__table">
            @csrf
            @method('PUT')
            <a href="/assets/img/Polozhenie_SI_2.pdf">Положение
                о проведении XI Международного конкурса социальных проектов с
                применением цифровых технологий «Social Idea»</a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Критерий оценки</th>
                        <th scope="col">Оценка</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Актуальность проблемы, на решение которой направлен проект</td>
                        <td><input type="number" name="score1" id="" placeholder="Оценка" value="{{$projectExpertView->score1}}"></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Бизнес-потенциал идеи/продукта проекта;</td>
                        <td><input type="number" name="score2" id="" placeholder="Оценка" value="{{$projectExpertView->score2}}"></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Масштабируемость и возможность дальнейшего развития проекта в цифровой
                            экосистеме;</td>
                        <td><input type="number" name="score3" id="" placeholder="Оценка" value="{{$projectExpertView->score3}}"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Уровень готовности к реализации идеи/продукта;</td>
                        <td><input type="number" name="score4" id="" placeholder="Оценка" value="{{$projectExpertView->score4}}"></td>
                    </tr>
                </tbody>
            </table>
            <h3>Комментарий к проекту</h3>
            <textarea type="text" id="msg__text" name="msg1" placeholder="Если у вас есть комментарии к проекту, то введите его в это поле">
            {{$projectExpertView->msg1}}
            </textarea>
            <div>
                <button type="submit">Оценить</button>
            </div>
        </form>
        @endforeach
        @endif
        @if($project->score__statuses === 'visible' && Auth::user()->role_id !== 3)
        <h3>Общая оценка проекта: <span id="projects__score__visible"></span></h3>
        @foreach($projectExpertViewsAll as $projectExpertView)
        <div class="score__view">
        <h3>Оценка от: {{ $allUsers->find($projectExpertView->user_id)->user_name}}</h3>
        <p>Актуальность проблемы, на решение которой направлен проект - <span>{{$projectExpertView->score1}}</span></p>
        <p>Бизнес-потенциал идеи/продукта проекта; - <span>{{$projectExpertView->score2}}</span></p>
        <p>Масштабируемость и возможность дальнейшего развития проекта в цифровой экосистеме; - <span>{{$projectExpertView->score3}}</span></p>
        <p>Уровень готовности к реализации идеи/продукта; - <span>{{$projectExpertView->score4}}</span></p>
        <h3>Комментарий к проекту</h3>
        <p>
        @if(!$projectExpertView->msg1)
        Эксперт не дал комментариев
        @else
        {{$projectExpertView->msg1}}
        @endif</p>
        </div>
        @endforeach
        @endif

        @if( Auth::user()->role_id === 1)
        Видно только администратору, чтобы чистить оценки
        @foreach($projectExpertViewsAll as $projectExpertView)
        <div class="score__view">
        <h3>Оценка от: {{ $allUsers->find($projectExpertView->user_id)->user_name}}</h3>
        <p>Актуальность проблемы, на решение которой направлен проект - <span>{{$projectExpertView->score1}}</span></p>
        <p>Бизнес-потенциал идеи/продукта проекта; - <span>{{$projectExpertView->score2}}</span></p>
        <p>Масштабируемость и возможность дальнейшего развития проекта в цифровой экосистеме; - <span>{{$projectExpertView->score3}}</span></p>
        <p>Уровень готовности к реализации идеи/продукта; - <span>{{$projectExpertView->score4}}</span></p>
        <h3>Комментарий к проекту</h3>
        <p>
        @if(!$projectExpertView->msg1)
        Эксперт не дал комментариев
        @else
        {{$projectExpertView->msg1}}
        @endif</p>
        </div>
        @endforeach
        @endif
        <!-- <div class="btns__statuses">
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
        </div> -->

    </div>
</section>
<script>
const arr = [];
const projects__score__visible = document.querySelector('#projects__score__visible');
const score__all = document.querySelectorAll('.score__view');
const score__length = score__all.length;
const score__childs = document.querySelectorAll('.score__view p span').forEach(e => arr.push(+e.innerHTML));
projects__score__visible.innerHTML = (arr.reduce((acc,e) => acc + e)/score__length).toFixed(2);
</script>
@endsection