@extends('dashboard.layout.index')

@section('content')

@section('statview')
    @include('dashboard.beranda.statview')
@show

<div class="row">
    <section class="col-lg-6 connectedSortable">
        @section('pieDok')
            @include('dashboard.beranda.pieDok')
        @show
    </section>
    <section class="col-lg-6 connectedSortable">
        @section('lineDaftar')
            @include('dashboard.beranda.lineDaftar')
        @show
    </section>
</div>

@section('chart')
    @include('dashboard.beranda.chart')
@show
@endsection
