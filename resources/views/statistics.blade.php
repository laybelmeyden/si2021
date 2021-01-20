@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021 - Статистика конкурса')
@section('content')
</section>
<section class="statiscticks">
    <div class="container">
        <div class="card-list">
            <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card blue">
                            <div class="title">Всего пользователей</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                            <div class="value">1239</div>
                            <div class="stat">На<b>8</b>% больше</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card red">
                            <div class="title">Всего проектов</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                            </svg>
                            <div class="value">894</div>
                            <div class="stat">На<b>12</b>% больше</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card orange">
                            <div class="title">Проектов на модерации</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                            </svg>
                            <div class="value">765</div>
                            <div class="stat">На<b>22</b>% больше</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card green">
                            <div class="title">Проектов принятых на конкурс</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                            </svg>
                            <div class="value">493</div>
                            <div class="stat">На<b>23</b>% больше</div>
                        </div>
                    </div>
            </div>

        </div>
        <div id="charts">
            <div class="first_stats">
                <canvas id="myChart"></canvas>
            </div>
            <div class="second_stats">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d'),
        ctx2 = document.getElementById('myChart2').getContext('2d');
    const chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [''],
            datasets: [{
                label: 'До 18 лет',
                backgroundColor: '#3a3a84',
                data: ['155'],
            }, {
                label: '19-25 лет',
                backgroundColor: '#E30613',
                data: ['67']
            }, {
                label: '26-34 лет',
                backgroundColor: '#0d462c',
                data: ['98']
            }, {
                label: ['35 - 44 лет'],
                backgroundColor: '#ffc107',
                data: ['132']
            }, {
                label: '45 - 54 лет',
                backgroundColor: '#bd5769',
                data: ['90']
            }, {
                label: '55 лет и старше',
                backgroundColor: '#bf5bbf',
                data: ['124']
            }]
        },

        // Configuration options go here
        options: {}
    });
    const chart2 = new Chart(ctx2, {
        type: 'doughnut',

        data: {
            datasets: [{
                data: [50, 20],
                backgroundColor: ['#3a3a84', '#E30613'],
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'Мужчин',
                'Женщин'
            ]
        }
    });
</script>
@endsection