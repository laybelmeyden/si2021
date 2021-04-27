@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'IT START 2021')
@else
@section('title', 'IT START 2021')
@endif
@section('content')
</section>
<style>
table a{
        color: #E30613;
}
table a:hover{
        color: #E30613;
        opacity: 0.7;
}
</style>
<section id="years__sections">
    <div class="container">
        <div class="years__project_grid">
            <div class="years__project_sticky">
                @if(App::isLocale('ru'))
                <div class="years__project_date">
                <div class="years__project_date_items">
                        <p>Обнинск</p>
                        <p>15-16 мая</p>
                        <p>г. Обнинск – Хакатон, тематика: «Интернет вещей»</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Краснодар</p>
                        <p>17-18 апреля</p>
                        <p>IT-Школа в г. Краснодар, тематика: экология, инклюзия</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Нижний Новгород</p>
                        <p>22-23 мая</p>
                        <p>IT-Школа в г. Нижний Новгород, тематика: экология, инклюзия</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Рязань</p>
                        <p>24-25 апреля</p>
                        <p>IT-Школа в г. Рязань, тематика: экология, инклюзия</p>
                    </div>
                    <div class="years__project_date_items">
                        <p>Санкт-Петербург</p>
                        <p>29-30 мая</p>
                        <p>г. Санкт-Петербург – Хакатон, тематика: «Интернет вещей», исследование Антарктиды</p>
                    </div>
                </div>
                @else

                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">IT START 2021</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">

                </p>
                <p>
                    Участвуй в региональном этапе конкурса «Social Idea» и получи возможность защитить свой проект и попасть в финал.
                    <br><br>
                    Всероссийская программа «IT-Start» существует с 2012 года. За это время было проведено более 60 окружных IT-Школ, более чем для 12 000 участников. В этом году программы будут представлены в 5 Городах страны: Краснодар, Рязань, Нижний Новгород, Обнинск и Санкт-Петербург.
                    <br><br>
                    В числе экспертов – сотрудники МТС, преподаватели местных и московских ВУЗов, а также представители региональных бизнес-сообществ, IT бизнеса и инновационной инфраструктуры.
                </p>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Город</th>
                            <th scope="col">Дата</th>
                            <th scope="col">Регистрация</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <th scope="row">Обнинск</th>
                            <td>15-16 мая</td>
                            <td colspan="2"><a href="https://leader-id.ru/events/197938">Регистрация на мероприятие (необходима регистрация аккаунта)</a></td>
                        </tr>
                        <tr>
                            <th scope="row">Краснодар</th>
                            <td>17-18 апреля</td>
                            <td><a href="https://rusinnovations.timepad.ru/event/1588246/">без проживания</a></td>
                            <td><a href="https://rusinnovations.timepad.ru/event/1588281/">с проживанием</a></td>
                        </tr>
                        <tr>
                            <th scope="row">Нижний Новгород</th>
                            <td>22-23 мая</td>
                            <td colspan="2"><a href="https://rusinnovations.timepad.ru/event/1615459/">Регистрация на мероприятие (необходима регистрация аккаунта)</a></td>
                        </tr>
                        <tr>
                            <th scope="row">Рязань</th>
                            <td>24-25 апреля</td>
                            <td colspan="2"><a href="https://leader-id.ru/events/198703">Регистрация на мероприятие (необходима регистрация аккаунта)</a></td>
                        </tr>
                        <tr>
                            <th scope="row">Санкт-Петербург</th>
                            <td>29-30 мая</td>
                            <td colspan="2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @else

            @endif
        </div>
    </div>
</section>



@endsection