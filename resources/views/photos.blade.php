@extends('layouts.master')
@section('title', 'SOCIAL IDEA 2021')
@section('content')
<link rel="stylesheet" href="{{asset('assets/lightsource/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('assets/lightsource/lightgallery-bundle.css')}}">
<link rel="stylesheet" href="{{asset('assets/lightsource/lg-thumbnail.css')}}">
<link rel="stylesheet" href="{{asset('assets/lightsource/lg-zoom.css')}}">
<style>
    .gallery-item {
        width: 200px;
        padding: 5px;
    }

    #lightgallery {
        margin-top: 90px;
    }
</style>
<div class="container">
    <div id="lightgallery">
        @foreach($result as $e)
        <a href="assets/img/light/{{$e}}">
            <img src="assets/img/light/{{$e}}" class="lazyload" data-sizes="auto"/>
        </a>
        @endforeach
    </div>
</div>
<script src="{{asset('assets/lightsource/lightgallery.umd.js')}}"></script>
<script src="{{asset('assets/lightsource/lg-thumbnail.min.js')}}"></script>
<script src="{{asset('assets/lightsource/lg-zoom.min.js')}}"></script>
<script src="{{asset('assets/lightsource/lazy.js')}}"></script>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        speed: 300,
        thumbnail: true,
        zoom: true,
        download:false,
    });
</script>
@endsection