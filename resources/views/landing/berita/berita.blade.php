@extends('landing.layout.index')

@section('content')
    <main id="main" class="main-content">
        <div class="section-header">
            <h2>Berita</h2>
        </div>
        <div class="row mtop">
            @forelse ($data as $d)
                <article>
                    <div class="">
                        <img src="{{ asset('asset/img/berita/' . $d->photo) }}" alt=""
                            style="height:200px; width:400px; object-fit:cover">
                    </div>

                    <p class="post-category">{{ $d->date }}</p>

                    <h2 class="title">
                        {{ $d->title }}
                    </h2>

                    <div class="d-flex align-items-center desc">
                        <div class="post-meta">
                            {{-- {{ $d->isi }} --}}
                            <p>{{ Str::of(substr($d->isi, 0, 260))->toHtmlString() }}</p>
                            <a href="{{ '/berita/' . $d->id }}" class="readmore stretched-link">Read more
                                <i class="bi bi-arrow-right"></i></a>
                            {{-- <a href="{{ url(Request::url() . '/' . $d->id) }}">detail</a> --}}
                        </div>
                    </div>
                </article>
                {{-- <tr>
                    <th id="no">{{ $no }}</th>
                    <td>{{ $d->title }}</td>
                    <td>{{ $d->date }}</td>
                    <td class="d-flex justify-content-center"><img src="{{ asset('asset/img/' . $d->photo) }}"
                            alt="">
                    </td>
                    <td>{{ $d->isi }}</td>
                    <td id="no">
                        <a href="{{ url(Request::url() . '/' . $d->id . '/edit') }}"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{ url(Request::url() . '/' . $d->id) }}">
                            <i class="fa-solid fa-eye"></i></a>
                        <form class="d-inline" action="{{ url(Request::url() . '/' . $d->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure to delete this data?')" class="btn-logout"><i
                                    class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp --}}
            @empty
                <p>Data tidak ditemukan !</p>
            @endforelse
            {{-- {{ $data->title }}
            {{ Str::of($data->isi)->toHtmlString() }} --}}
        </div>
    </main><!-- End #main -->
@endsection
