@extends('dashboard.layout.index')

@section('content')
    <!-- Main row -->
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <h4>View Fasilitas: {{ $data->nm_fasilitas }}</h4>
                    </div>

                    <div class="col-md-3">
                        <form class="d-inline" action="{{ url(Request::url() . '/' . $data->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure to delete this data?')"
                                class="btn btn-danger btn-sm btn-logout btn-right"><i
                                    class="fa-solid fa-trash"></i></button>
                        </form>
                        <a class="btn btn-warning btn-sm float-end mx-2" href="{{ route('fasilitas.edit', $data->id) }}"
                            role="button">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="nm_fasilitas" class="col-sm-2">Nama Fasilitas</label>
                                <div class="col-sm-8">
                                :    {{ $data->nm_fasilitas }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="deskripsi" class="col-sm-2">Deskripsi</label>
                                <div class="col-sm-8">
                                    : {{ Str::of($data->deskripsi)->toHtmlString() }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nm_dokter" class="col-sm-2">Nama Dokter</label>
                                <div class="col-sm-8">
                                    : {{ $data->nm_dokter }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="s_dokter" class="col-sm-2">Spesialis Dokter</label>
                                <div class="col-sm-8">
                                    : {{ $data->s_dokter }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
