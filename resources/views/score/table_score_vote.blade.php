<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Финальная оценка проектов - добавить проект</title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">

    <meta property="og:image" content="{{asset('assets/img/years/1444000.png')}}">
    <meta property="og:url" content="{{asset('assets/img/years/1444000.png')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @include('layouts.css')
    @include('profile.css')
    <style>
        .accordion-item {
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 150%;
            letter-spacing: 0.2em;
            color: #FFFFFF;
            background: #E30510;
            border: none;
            padding: 15px;
            text-transform: uppercase;
            cursor: pointer;
            flex: 1 1 auto;
            margin: 15px 0px;
        }

        .accordion-button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        table {
            color: white !important;
        }

        #votesr {
            border: 2px solid white;
            padding: 10px;
            margin-bottom: 20px;
        }
        #prod_name{
            text-align: left !important;
            font-size: 20px;
        }
        #average{
            font-size: 20px;
        }
    </style>
</head>

<body>
    @include('layouts.preloader')
    <div class="container news__olds-f">
        <h1>Просмотр всех оценок</h1>
        <div id="forms_update">
            <form action="/updateScore_table" method="POST">
                @csrf
                @method('POST')
                <input type="hidden" id="project_id_other" name="project_id" value="">
                <input type="hidden" id="score_id_other" name="all_score" value="">
                <div class="btns__statuses">
                    <div class="item__admin_btn" style="width: 100%;">
                        <button type="submit" class="btn btn__accepted" id="btn_go" style="width: 100%;">Отсортировать оценки</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <h1>Инклюзия product</h1>
            @foreach($scores1 as $score)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$score -> id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$score -> id}}">
                        <div id="prod_name">{{$score -> name_project}}</div>
                        <input type="hidden" id="all_score" value="{{$score -> id}}" name="all_score">
                        <div id="average">
                            @php
                            $score1 = $score -> votealls->sum('score1');
                            $score5 = $score -> votealls->sum('score5');
                            $score3 = $score -> votealls->sum('score3');
                            $score4 = $score -> votealls->sum('score4');
                            if($score -> votealls->count() > 0) $countExperts = $score -> votealls->count();
                            if($score -> votealls->count() <= 0) $countExperts=1; $result=round(($score1+$score5+$score3+$score4) / $countExperts, $precision=3); echo 'Оценка проекта: ' .'<span>'.$result.'</span>';
                                @endphp
                        </div>
                    </button>
                </h2>
                <div id="flush-collapseOne{{$score -> id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @foreach($score -> votealls as $voteall)
                        <div id="votesr">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Критерий оценки от {{$voteall->full_name }}</th>
                                        <th scope="col">Оценка</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Актуальность проблемы, на решение которой направлен проект</td>
                                        <td id="score">{{$voteall->score1 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Бизнес-потенциал идеи/продукта проекта;</td>
                                        <td id="score">{{$voteall->score5 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Масштабируемость и возможность дальнейшего развития проекта в цифровой
                                            экосистеме;</td>
                                        <td id="score">{{$voteall->score3 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Уровень готовности к реализации идеи/продукта;</td>
                                        <td id="score">{{$voteall->score4 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3>Комментарий к проекту</h3>
                            <p>{{$voteall->comments }}</p>
                        </div>
                        <form method="POST" action="{{ route('tableDelete',$voteall->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                удалить
                            </button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            <h1>Инклюзия idea</h1>
            @foreach($scores2 as $score)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$score -> id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$score -> id}}">
                        <div  id="prod_name">{{$score -> name_project}}</div>
                        <input type="hidden" id="all_score" value="{{$score -> id}}" name="all_score">
                        <div id="average">
                            @php
                            $score1 = $score -> votealls->sum('score1');
                            $score5 = $score -> votealls->sum('score5');
                            $score3 = $score -> votealls->sum('score3');
                            $score4 = $score -> votealls->sum('score4');
                            if($score -> votealls->count() > 0) $countExperts = $score -> votealls->count();
                            if($score -> votealls->count() <= 0) $countExperts=1; $result=round(($score1+$score5+$score3+$score4) / $countExperts, $precision=3); echo 'Оценка проекта: ' .'<span>'.$result.'</span>';
                                @endphp
                        </div>
                    </button>
                </h2>
                <div id="flush-collapseOne{{$score -> id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @foreach($score -> votealls as $voteall)
                        <div id="votesr">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Критерий оценки от {{$voteall->full_name }}</th>
                                        <th scope="col">Оценка</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Актуальность проблемы, на решение которой направлен проект</td>
                                        <td id="score">{{$voteall->score1 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Бизнес-потенциал идеи/продукта проекта;</td>
                                        <td id="score">{{$voteall->score5 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Масштабируемость и возможность дальнейшего развития проекта в цифровой
                                            экосистеме;</td>
                                        <td id="score">{{$voteall->score3 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Уровень готовности к реализации идеи/продукта;</td>
                                        <td id="score">{{$voteall->score4 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3>Комментарий к проекту</h3>
                            <p>{{$voteall->comments }}</p>
                        </div>
                        <form method="POST" action="{{ route('tableDelete',$voteall->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                удалить
                            </button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            <h1>Экология product</h1>
            @foreach($scores3 as $score)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$score -> id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$score -> id}}">
                        <div  id="prod_name">{{$score -> name_project}}</div>
                        <input type="hidden" id="all_score" value="{{$score -> id}}" name="all_score">
                        <div id="average">
                            @php
                            $score1 = $score -> votealls->sum('score1');
                            $score5 = $score -> votealls->sum('score5');
                            $score3 = $score -> votealls->sum('score3');
                            $score4 = $score -> votealls->sum('score4');
                            if($score -> votealls->count() > 0) $countExperts = $score -> votealls->count();
                            if($score -> votealls->count() <= 0) $countExperts=1; $result=round(($score1+$score5+$score3+$score4) / $countExperts, $precision=3); echo 'Оценка проекта: ' .'<span>'.$result.'</span>';
                                @endphp
                        </div>
                    </button>
                </h2>
                <div id="flush-collapseOne{{$score -> id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @foreach($score -> votealls as $voteall)
                        <div id="votesr">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Критерий оценки от {{$voteall->full_name }}</th>
                                        <th scope="col">Оценка</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Актуальность проблемы, на решение которой направлен проект</td>
                                        <td id="score">{{$voteall->score1 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Бизнес-потенциал идеи/продукта проекта;</td>
                                        <td id="score">{{$voteall->score5 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Масштабируемость и возможность дальнейшего развития проекта в цифровой
                                            экосистеме;</td>
                                        <td id="score">{{$voteall->score3 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Уровень готовности к реализации идеи/продукта;</td>
                                        <td id="score">{{$voteall->score4 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3>Комментарий к проекту</h3>
                            <p>{{$voteall->comments }}</p>
                        </div>
                        <form method="POST" action="{{ route('tableDelete',$voteall->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                удалить
                            </button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            <h1>Экология idea</h1>
            @foreach($scores4 as $score)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$score -> id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$score -> id}}">
                        <div  id="prod_name">{{$score -> name_project}}</div>
                        <input type="hidden" id="all_score" value="{{$score -> id}}" name="all_score">
                        <div id="average">
                            @php
                            $score1 = $score -> votealls->sum('score1');
                            $score5 = $score -> votealls->sum('score5');
                            $score3 = $score -> votealls->sum('score3');
                            $score4 = $score -> votealls->sum('score4');
                            if($score -> votealls->count() > 0) $countExperts = $score -> votealls->count();
                            if($score -> votealls->count() <= 0) $countExperts=1; $result=round(($score1+$score5+$score3+$score4) / $countExperts, $precision=3); echo 'Оценка проекта: ' .'<span>'.$result.'</span>';
                                @endphp
                        </div>
                    </button>
                </h2>
                <div id="flush-collapseOne{{$score -> id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @foreach($score -> votealls as $voteall)
                        <div id="votesr">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Критерий оценки от {{$voteall->full_name }}</th>
                                        <th scope="col">Оценка</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Актуальность проблемы, на решение которой направлен проект</td>
                                        <td id="score">{{$voteall->score1 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Бизнес-потенциал идеи/продукта проекта;</td>
                                        <td id="score">{{$voteall->score5 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Масштабируемость и возможность дальнейшего развития проекта в цифровой
                                            экосистеме;</td>
                                        <td id="score">{{$voteall->score3 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Уровень готовности к реализации идеи/продукта;</td>
                                        <td id="score">{{$voteall->score4 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3>Комментарий к проекту</h3>
                            <p>{{$voteall->comments }}</p>
                        </div>
                        <form method="POST" action="{{ route('tableDelete',$voteall->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                удалить
                            </button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            <h1>Регион. финалисты</h1>
            @foreach($scores5 as $score)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$score -> id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$score -> id}}">
                        <div  id="prod_name">{{$score -> name_project}}</div>
                        <input type="hidden" id="all_score" value="{{$score -> id}}" name="all_score">
                        <div id="average">
                            @php
                            $score1 = $score -> votealls->sum('score1');
                            $score5 = $score -> votealls->sum('score5');
                            $score3 = $score -> votealls->sum('score3');
                            $score4 = $score -> votealls->sum('score4');
                            if($score -> votealls->count() > 0) $countExperts = $score -> votealls->count();
                            if($score -> votealls->count() <= 0) $countExperts=1; $result=round(($score1+$score5+$score3+$score4) / $countExperts, $precision=3); echo 'Оценка проекта: ' .'<span>'.$result.'</span>';
                                @endphp
                        </div>
                    </button>
                </h2>
                <div id="flush-collapseOne{{$score -> id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @foreach($score -> votealls as $voteall)
                        <div id="votesr">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Критерий оценки от {{$voteall->full_name }}</th>
                                        <th scope="col">Оценка</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Актуальность проблемы, на решение которой направлен проект</td>
                                        <td id="score">{{$voteall->score1 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Бизнес-потенциал идеи/продукта проекта;</td>
                                        <td id="score">{{$voteall->score5 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Масштабируемость и возможность дальнейшего развития проекта в цифровой
                                            экосистеме;</td>
                                        <td id="score">{{$voteall->score3 }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Уровень готовности к реализации идеи/продукта;</td>
                                        <td id="score">{{$voteall->score4 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3>Комментарий к проекту</h3>
                            <p>{{$voteall->comments }}</p>
                        </div>
                        <form method="POST" action="{{ route('tableDelete',$voteall->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                удалить
                            </button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <script>
            const arrId = [];
            const arrScore = [];
            const all_score_project_id = document.querySelectorAll('#all_score').forEach(e => arrId.push(+e.value));
            const all_score = document.querySelectorAll('#average span').forEach(e => arrScore.push(+e.innerHTML));
            const valueA = document.querySelector('#project_id_other').value = arrId;
            const valueB = document.querySelector('#score_id_other').value = arrScore;
        </script>
       
        @include('layouts.js')
</body>

</html>