@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="">
            
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">SOCIAL IDEA 2021</p>
                <p class="undotitle__years_solo" style="color:#E30613;">Конкурс готовится к запуску</p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> SOCIAL IDEA 2021 </p>
                <p class="undotitle__years_solo" style="color:#E30613;">The contest is being prepared for launch</p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection