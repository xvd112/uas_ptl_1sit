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
                        <h4>View Fasilitas: {{ $fasilitas->nm_fasilitas }}</h4>
                    </div>

                    <div class="col-md-3">
                        <form action="{{ route('fasilitas.destroy', $fasilitas->id) }}" method="POST" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Are you sure to delete this data?')"
                                class="btn btn-danger btn-sm float-end">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </form>
                        <a class="btn btn-warning btn-sm float-end mx-2" href="{{ route('fasilitas.edit', $fasilitas->id) }}"
                            role="button">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="nm_fasilitas" class="col-sm-2">Nama Fasilitas</label>
                                <div class="col-sm-10">
                                    : {{ $fasilitas->nm_fasilitas }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="deskripsi" class="col-sm-2">Deskripsi</label>
                                <div class="col-sm-10">
                                    : {{ $fasilitas->deskripsi }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nm_dokter" class="col-sm-2">Nama Dokter</label>
                                <div class="col-sm-10">
                                    : {{ $fasilitas->nm_dokter }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="s_dokter" class="col-sm-2">Spesialis Dokter</label>
                                <div class="col-sm-10">
                                    : {{ $fasilitas->s_dokter }}
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
