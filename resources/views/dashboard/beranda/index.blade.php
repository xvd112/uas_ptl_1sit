@extends('dashboard.layout.index')

@section('content')

@section('statview')
    @include('dashboard.beranda.statview')
@show

<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
        {{-- @section('sales')
            @include('dashboard.layout.sales')
        @show

        @section('chat')
            @include('dashboard.layout.chat')
        @show

        @section('todo')
            @include('dashboard.layout.todo')
        @show --}}
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">

        {{-- @section('map')
            @include('dashboard.layout.map')
        @show

        @section('graph')
            @include('dashboard.layout.graph')
        @show

        @section('calendar')
            @include('dashboard.layout.calendar')
        @show --}}
    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->
@endsection
