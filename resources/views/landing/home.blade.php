@extends('landing.layout.index')

@section('content')

@section('home')
    @include('landing.layout.home')
@show

<main id="main">
    @section('about')
        @include('landing.layout.about')
    @show

    @section('client')
        @include('landing.layout.client')
    @show

    @section('counter')
        @include('landing.layout.counter')
    @show

    @section('action')
        @include('landing.layout.action')
    @show

    @section('services')
        @include('landing.layout.services')
    @show

    @section('testimoni')
        @include('landing.layout.testimoni')
    @show

    @section('portofolio')
        @include('landing.layout.portofolio')
    @show

    @section('team')
        @include('landing.layout.team')
    @show

    @section('pricing')
        @include('landing.layout.pricing')
    @show

    @section('faq')
        @include('landing.layout.faq')
    @show

    @section('blog')
        @include('landing.layout.blog')
    @show

    @section('contact')
        @include('landing.layout.contact')
    @show
</main><!-- End #main -->

@endsection
