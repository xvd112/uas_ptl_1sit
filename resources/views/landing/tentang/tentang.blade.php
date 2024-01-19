@extends('landing.layout.index')

@section('content')
<br>
<main id="main">
    @section('sejarah')
    @include('landing.tentang.layout.sejarah')
@show

    @section('visimisi')
        @include('landing.tentang.layout.visimisi')
    @show

    @section('dokter')
        @include('landing.tentang.layout.dokter')
    @show

</main>


@endsection