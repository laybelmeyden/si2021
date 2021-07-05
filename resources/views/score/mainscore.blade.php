<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Финальная оценка проектов</title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">

    <meta property="og:image" content="{{asset('assets/img/years/1444000.png')}}">
    <meta property="og:url" content="{{asset('assets/img/years/1444000.png')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @include('layouts.css')
    @include('profile.css')
</head>

<body style="overflow-x: unset;">
    @include('layouts.preloader')
    @include('profile.alerts')
    <div class="container news__olds-f" id="app">
        <h1>Оценка проектов</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#inc" type="button" role="tab" aria-controls="inc" aria-selected="true">1.Инклюзия (product)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#inc2" type="button" role="tab" aria-controls="inc2" aria-selected="false">2.Инклюзия (idea)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#inc3" type="button" role="tab" aria-controls="inc3" aria-selected="false">3.Экология (product и idea)</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#inc4" type="button" role="tab" aria-controls="inc4" aria-selected="false">4.Экология idea</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#inc5" type="button" role="tab" aria-controls="inc5" aria-selected="false">5.Регион. финалисты</button>
            </li> -->
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="inc" role="tabpanel" aria-labelledby="home-tab">
                <div class="cards__body" style="margin-top: 30px;">
                    @foreach($scores1 as $score)
                    <div class="card" style="--cards: 5">
                        <div class="child">
                            <div>
                                <a href="/score_view_{{$score->id}}" class="a__white">
                                    <h2>{{ Str::limit($score->name_project, 35, '...') }}</h2>
                                    <!-- <p class="date">Средний балл {{ $score->score_ball }}</p> -->
                                    <p>{{ Str::limit($score->body_project, 230, '...') }}</p>
                                </a>
                            </div>
                            <div>
                                <a href="/score_view_{{$score->id}}" class="btn btn__modal_news_item">
                                    <span>Оценить</span>
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
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="inc2" role="tabpanel" aria-labelledby="profile-tab">
            <div class="cards__body" style="margin-top: 30px;">
                    @foreach($scores2 as $score)
                    <div class="card" style="--cards: 5">
                        <div class="child">
                            <div>
                                <a href="/score_view_{{$score->id}}" class="a__white">
                                    <h2>{{ Str::limit($score->name_project, 35, '...') }}</h2>
                                    <!-- <p class="date">Средний балл {{ $score->score_ball }}</p> -->
                                    <p>{{ Str::limit($score->body_project, 230, '...') }}</p>
                                </a>
                            </div>
                            <div>
                                <a href="/score_view_{{$score->id}}" class="btn btn__modal_news_item">
                                    <span>Оценить</span>
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
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="inc3" role="tabpanel" aria-labelledby="contact-tab">
            <div class="cards__body" style="margin-top: 30px;">
                    @foreach($scores3 as $score)
                    <div class="card" style="--cards: 5">
                        <div class="child">
                            <div>
                                <a href="/score_view_{{$score->id}}" class="a__white">
                                    <h2>{{ Str::limit($score->name_project, 35, '...') }}</h2>
                                    <!-- <p class="date">Средний балл {{ $score->score_ball }}</p> -->
                                    <p>{{ Str::limit($score->body_project, 230, '...') }}</p>
                                </a>
                            </div>
                            <div>
                                <a href="/score_view_{{$score->id}}" class="btn btn__modal_news_item">
                                    <span>Оценить</span>
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
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- <div class="tab-pane fade" id="inc4" role="tabpanel" aria-labelledby="contact-tab">
            <div class="cards__body" style="margin-top: 30px;">
                    @foreach($scores4 as $score)
                    <div class="card" style="--cards: 5">
                        <div class="child">
                            <div>
                                <a href="/score_view_{{$score->id}}" class="a__white">
                                    <h2>{{ Str::limit($score->name_project, 20, '...') }}</h2>
                                    <p class="date">Средний балл {{ $score->score_ball }}</p>
                                    <p>{{ Str::limit($score->body_project, 230, '...') }}</p>
                                </a>
                            </div>
                            <div>
                                <a href="/score_view_{{$score->id}}" class="btn btn__modal_news_item">
                                    <span>Оценить</span>
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
                    </div>
                    @endforeach
                </div>
            </div> -->
            <!-- <div class="tab-pane fade" id="inc5" role="tabpanel" aria-labelledby="contact-tab">
            <div class="cards__body" style="margin-top: 30px;">
                    @foreach($scores5 as $score)
                    <div class="card" style="--cards: 5">
                        <div class="child">
                            <div>
                                <a href="/score_view_{{$score->id}}" class="a__white">
                                    <h2>{{ Str::limit($score->name_project, 20, '...') }}</h2>
                                    <p class="date">Средний балл {{ $score->score_ball }}</p>
                                    <p>{{ Str::limit($score->body_project, 230, '...') }}</p>
                                </a>
                            </div>
                            <div>
                                <a href="/score_view_{{$score->id}}" class="btn btn__modal_news_item">
                                    <span>Оценить</span>
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
                    </div>
                    @endforeach
                </div>
            </div> -->
        </div>
    </div>
    @include('layouts.js')
</body>

</html>