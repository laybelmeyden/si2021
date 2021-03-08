@extends('profile.master')
@section('title', 'Редактирование проекта')
@section('content')
@include('profile.alerts')
<section id="create_project">
    <div class="profile__left_navbar">
        @include('profile.left_navbar')
    </div>
    <div id="app">
        <project-edit></project-edit>
    </div>
</section>
@endsection