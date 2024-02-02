@extends('landing.layout.index')

@section('content')
    <main id="main" class="container mt-3">
        <div class="section-header">
            <h2>Berita</h2>
        </div>
        <article class="mtop">
            @forelse ($data as $d)
                <div class="row mb-3">
                    <div class="col-md-5">
                        <img src="{{ asset('asset/img/berita/' . $d->photo) }}" alt=""
                            style="height:200px; width:400px; object-fit:cover">
                    </div>

                    <div class="col-md-7">
                        <h2 class="title">
                            {{ $d->title }}
                        </h2>
                        <p class="post-category">{{ $d->date }}</p>
                        <div class="d-flex align-items-center desc">
                            <div class="post-meta">
                                {{-- {{ $d->isi }} --}}
                                <p style="text-align: justify">
                                    {{ Str::of(substr($d->isi, 0, 260))->toHtmlString() }}
                                </p>
                                <a href="{{ url('/berita/' . $d->id) }}" class="readmore stretched-link">
                                    Read more
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                {{-- <a href="{{ url(Request::url() . '/' . $d->id) }}">detail</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Data tidak ditemukan !</p>
            @endforelse
        </article>
    </main><!-- End #main -->
@endsection
