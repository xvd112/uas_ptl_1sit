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
                        <h4>View Dokter : {{ $data->title }}</h4>
                    </div>

                    <div class="col-md-3">
                        <form class="d-inline" action="{{ url(Request::url() . '/' . $data->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure to delete this data?')"
                                class="btn btn-danger btn-sm btn-logout btn-right"><i
                                    class="fa-solid fa-trash"></i></button>
                        </form>
                        <a class="btn btn-warning btn-sm btn-right" href="{{ url(Request::url() . '/edit') }}"
                            role="button">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ asset('asset/dokter/' . $data->photo) }}" height="350px" width="250px" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="kd_dok" class="col-sm-3">Kode Dokter</label>
                                <div class="col-sm-9">
                                    : {{ $data->kd_dok }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-3">Nama</label>
                                <div class="col-sm-9">
                                    : {{ $data->nama }}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tempat" class="col-sm-3">Tempat/Tgl Lahir</label>
                                <div class="col-sm-9">
                                    : {{ Str::of($data->tempat)->toHtmlString() }}
                                </div>
                            </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-3">Alamat</label>
                                    <div class="col-sm-9">
                                        : {{ Str::of($data->alamat)->toHtmlString() }}
                                    </div>
                                </div>
                                    <div class="mb-3 row">
                                        <label for="bagian" class="col-sm-3">Bagian</label>
                                        <div class="col-sm-9">
                                            : {{ Str::of($data->bagian)->toHtmlString() }}
                                        </div>
                                    </div>
                                        <div class="mb-3 row">
                                            <label for="specialty" class="col-sm-3">Specialty</label>
                                            <div class="col-sm-9">
                                                : {{ Str::of($data->specialty)->toHtmlString() }}
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
