@extends('landing.layout.index')

@section('content')
    <main id="main" class="main-content">
        <div class="section-header">
            <h2>Berita</h2>
        </div>
        <section id="bedah" class="bedah" data-aos="fade-up">
            <div class="container">
                <h1> {{ $data->title }}</h1>
                <h4> {{ $data->date }}</h4>
                <h5> {{ $data->isi }}</h5>
                <div class="bedah-content">
                    <img src="{{ asset('asset/img/berita/' . $data->photo) }}" class="img-fluid rounded-start" alt="...">
                    <div style="margin-left: 520px;">

                        <div class="bedah-container">
                        </div>
                    </div>
        </section>
    </main>
@endsection
