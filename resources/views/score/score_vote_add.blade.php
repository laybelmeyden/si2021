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
</head>

<body>
    @include('layouts.preloader')
    <div class="container news__olds-f">
        <h1>Добавить проект</h1>
        <form action="/create_votes" method="post" id="score__table">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="title_text1">Наименование и № проекта</label>
                <input type="text" class="form-control" id="title_text1" name="name_project">
            </div>
            <div class="form-group">
                <label for="title_text2">Краткое содержание</label>
                <input type="text" class="form-control" id="title_text2" name="body_project">
            </div>
            <div class="form-group">
                <label for="title_text3">Средний балл</label>
                <input type="number" class="form-control" id="title_text3" name="score_ball" step="any">
            </div>
            <div class="form-group">
                <label for="title_text4">Категория</label>
                <input type="number" class="form-control" id="title_text4" name="category" step="1">
            </div>
            <button type="submit" class="btn btn-primary">отправить</button>
        </form>
        @include('layouts.js')
</body>

</html>