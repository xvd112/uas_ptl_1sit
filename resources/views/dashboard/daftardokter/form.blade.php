@extends('dashboard.layout.index')
@section('content')
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

    @if (session()->has('warning'))
        <div class="alert alertwarning alert-dismissible fade show alert-form" role="alert">
            {{ session('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Main row -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-11">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <h4>Insert Data Dokter Baru</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url(str_replace('/create', '', Request::url())) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="kd_dok" class="col-sm-2 col-form-label">Kode Dokter</label>
                        <div class="col-sm-10">
                            <input value="{{ old('kd_dok') }}" type="text"
                                class="form-control @error('kd_dok') is-invalid @enderror" id="kd_dok" name="kd_dok"
                                placeholder="Kode Dokter">
                            @error('kd_dok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input value="{{ old('nama') }}" type="text"
                                class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                                placeholder="Nama">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tempat" class="col-sm-2 col-form-label">Tempat/Tgl Lahir</label>

                        <div class="col-sm-6">

                            <input value="{{ old('tempat') }}" type="text"
                                class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat"
                                placeholder="Tempat Lahir">
                        </div>
                        <div class="col-sm-4">
                            <input value="{{ date('Y-m-d'), old('tgl_book') }}" type="date"
                                class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir"
                                name="tgl_lahir" placeholder="Tempat Lahir">
                            @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input value="{{ old('alamat') }}" type="text"
                                class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                                placeholder="Alamat">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bagian" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-10">
                            <select name="bagian" class="form-control @error('layanan') is-invalid @enderror"
                                id="bagian">
                                <option value="Bedah" {{ old('bagian') == 'Bedah' ? 'selected' : '' }} selected>
                                    Bedah</option>
                                <option value="Endoskopi" {{ old('bagian') == 'Endoskopi' ? 'selected' : '' }}>
                                    Endoskopi</option>
                                <option value="Radiologi" {{ old('bagian') == 'Radiologi' ? 'selected' : '' }}>
                                    Radiology</option>
                            </select>
                            @error('bagian')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="specialty" class="col-sm-2 col-form-label">specialty</label>
                        <div class="col-sm-10">
                            <input value="{{ old('specialty') }}" type="text"
                                class="form-control @error('specialty') is-invalid @enderror" id="specialty"
                                name="specialty" placeholder="specialty">
                            @error('specialty')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <input type="file" name="photo" class="form-control">
                            @error('photo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row" style="float: right">
                        <div class="col">
                            <button class="btn btn-warning" type="reset">Reset</button>
                            <button class="btn btn-primary" type="submit">Insert</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
