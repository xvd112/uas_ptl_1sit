@extends('landing.layout.index')

@section('content')
    <main id="main" class="main-content">
        <div class="section-header">
            <h2>Kontak</h2>
            <h5>Rumah Sakit Kasih Ibu</h5>
        </div>
        <section id="bedah" class="bedah" data-aos="fade-up">
            <div class="container">
                @forelse ($data as $d)
                    <h5> {{ $d->email }}</h5>
                    <h5> {{ $d->alamat }}</h5>
                    <h5> {{ $d->telepon }}</h5>
                    <h5> {{ $d->twitter }}</h5>
                    <h5> {{ $d->fb }}</h5>
                    <h5> {{ $d->ig }}</h5>
                    <h5> {{ $d->linkin }}</h5>
                @empty
                    <p>Data tidak ditemukan !</p>
                @endforelse
        </section>
    </main>
@endsection
