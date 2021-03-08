@extends('profile.master')
@section('title', 'Создание проекта')
@section('content')

<section id="create_project">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div id="app">
        <project-create></project-create>
    </div>
</section>
@endsection