@extends('dashboard.layout.index')

@section('content')
    <!-- Main row -->
    <div class="container">
        @if (session()->has('success_kontak'))
            <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                {{ session('success_kontak') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('error_kontak'))
            <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
                {{ session('error_kontak') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-9">
                        <h4>Kontak</h4>
                    </div>
                    @forelse ($kontaks as $d)
                        <div class="col-md-3">
                            {{-- <form class="d-inline" action="{{ url(Request::url() . '/' . $data->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure to delete this data?')"
                                class="btn btn-danger btn-sm btn-logout btn-right"><i
                                    class="fa-solid fa-trash"></i></button>
                        </form> --}}
                            <a class="btn btn-warning btn-sm btn-right"
                                href="{{ url(Request::url() . '/' . $d->id . '/edit') }}" role="button">Edit</a>
                        </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2">Email</label>
                                <div class="col-sm-10">
                                    : {{ $d->email }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-2">Alamat</label>
                                <div class="col-sm-10">
                                    : {{ Str::of($d->alamat)->toHtmlString() }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telepon" class="col-sm-2">Telepon</label>
                                <div class="col-sm-10">
                                    : {{ $d->telepon }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="twitter" class="col-sm-2">Twitter</label>
                                <div class="col-sm-10">
                                    : {{ $d->twitter }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="ig" class="col-sm-2">Instagram</label>
                                <div class="col-sm-10">
                                    : {{ $d->ig }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fb" class="col-sm-2">Facebook</label>
                                <div class="col-sm-10">
                                    : {{ $d->fb }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="linkin" class="col-sm-2">LinkedIn</label>
                                <div class="col-sm-10">
                                    : {{ $d->linkin }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="updated_at" class="col-sm-2">Tanggal diperbarui</label>
                                <div class="col-sm-10">
                                    : {{ $d->updated_at }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
    <p>Data tidak ditemukan !</p>
    @endforelse
    <!-- /.row (main row) -->
@endsection
