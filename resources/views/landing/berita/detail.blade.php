@extends('landing.layout.index')

@section('content')
    <main id="main" class="container mt-3">
        <div class="section-header">
            <h2>Berita</h2>
        </div>
        <div class="d-flex justify-content-center mtop">
            <img src="{{ asset('asset/img/berita/' . $data->photo) }}" style="width:10%" class="img-fluid rounded-start"
                alt="...">
        </div>
        <div>
            <h1 style="text-align: center"> {{ $data->title }}</h1>
            <p style="text-align: center"> {{ $data->date }}</p>
            <p style="text-align: justify"> {{ $data->isi }}</p style="text-align: justify">
        </div>
    </main>
@endsection
