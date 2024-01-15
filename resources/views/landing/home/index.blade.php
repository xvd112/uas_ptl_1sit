@extends('landing.layout.index')

@section('content')

@section('cover')
    @include('landing.home.cover')
@show

<main id="main">
    @section('about')
        @include('landing.home.about')
    @show

    @section('facility')
        @include('landing.home.facility')
    @show

    @section('berita')
        @include('landing.home.berita')
    @show

    @section('team')
        @include('landing.home.team')
    @show
</main><!-- End #main -->

@endsection
