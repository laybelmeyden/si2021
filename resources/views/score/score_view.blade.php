<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Финальная оценка проектов - просмотр проекта </title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">

    <meta property="og:image" content="{{asset('assets/img/years/1444000.png')}}">
    <meta property="og:url" content="{{asset('assets/img/years/1444000.png')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @include('layouts.css')
    @include('profile.css')
    <style>
        input[type=number] {
            width: 160px;
        }

        #forms__name {
            width: 100%;
            margin-top: 20px;
            text-align: left !important;
            text-indent: 30px;
            height: 40px;
        }
    </style>
</head>

<body>
    @include('layouts.preloader')
    @include('profile.alerts')
    <div class="container news__olds-f">
        <section id="years__sections" style="margin-top: 90px; margin-bottom: 30px;">
            <div class="container">
                <div class="solo__news">
                    <p class="title__years_solo">Оценка проекта - {{$id -> name_project}}</p>

                </div>
            </div>
        </section>
        <form action="{{ route('create_votes_experts') }}" method="post" id="score__table">
            @csrf
            @method('post')
            <input type="hidden" value="{{ $id -> id}}" name="scorevote_id">
            <a href="/assets/img/Polozhenie_SI_2.pdf">Положение
                о проведении XI Международного конкурса социальных проектов с
                применением цифровых технологий «Social Idea»</a>
            <label for=""></label>
            <input type="text" value="" name="full_name" id="forms__name" placeholder="Введите ваше имя">
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
                        <td><input type="number" name="score1" id="" placeholder="0-5" value="" step="0.1" min="0" max="5" pattern="[0-9]{0,5}" required></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Бизнес-потенциал идеи/продукта проекта;</td>
                        <td><input type="number" name="score5" id="" placeholder="0-5" value="" step="0.1" min="0" max="5" pattern="[0-9]{0,5}" required></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Масштабируемость и возможность дальнейшего развития проекта в цифровой
                            экосистеме;</td>
                        <td><input type="number" name="score3" id="" placeholder="0-5" value="" step="0.1" min="0" max="5" pattern="[0-9]{0,5}" required></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Уровень готовности к реализации идеи/продукта;</td>
                        <td><input type="number" name="score4" id="" placeholder="0-5" value="" step="0.1" min="0" max="5" pattern="[0-9]{0,5}" required></td>
                    </tr>
                </tbody>
            </table>
            <h3>Комментарий к проекту</h3>
            <textarea type="text" id="msg__text" name="comments" placeholder="Если у вас есть комментарии к проекту, то введите его в это поле"></textarea>
            <div class="main__btns__scores">
                <button id="btn__scoress" type="submit">Оценить</button>
            </div>
        </form>
        <script>
            const btn__scoress = document.querySelector('#btn__scoress');
            const full_name = document.querySelector('#forms__name');
            full_name.addEventListener('change', ()=>{
                localStorage.setItem('full_name', full_name.value); 
            })
            full_name.value = localStorage.full_name;
        </script>
        @include('layouts.js')
</body>

</html>