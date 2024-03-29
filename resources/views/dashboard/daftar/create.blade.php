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
                        <h4>Insert Pendaftaran Baru</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url(str_replace('/create', '', Request::url())) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
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
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input value="{{ old('nik') }}" type="text"
                                class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                                placeholder="NIK" maxlength="16">
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="jk"
                                    value="Laki - Laki" {{ old('jk') == 'Laki-Laki' ? 'checked' : '' }} checked>
                                <label class="form-check-label" for="jk">
                                    Laki - Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="jk"
                                    value="Perempuan" {{ old('jk') == 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="jk">
                                    Perempuan
                                </label>
                            </div>
                            @error('jk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tgl_book" class="col-sm-2 col-form-label">Tanggal Booking</label>
                        <div class="col-sm-10">
                            <input value="{{ date('Y-m-d'), old('tgl_book') }}" type="date"
                                class="form-control @error('tgl_book') is-invalid @enderror" id="tgl_book" name="tgl_book"
                                placeholder="Pilih tanggal booking">
                            @error('tgl_book')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input value="{{ old('email') }}" type="email"
                                class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telpon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input value="{{ old('telpon') }}" type="text"
                                class="form-control @error('telpon') is-invalid @enderror" id="telpon" name="telpon"
                                placeholder="Nomor  telepon" maxlength="13">
                            @error('telpon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="layanan" class="col-sm-2 col-form-label">Layanan</label>
                        <div class="col-sm-10">
                            <select name="layanan" class="form-control @error('layanan') is-invalid @enderror"
                                id="layanan">
                                <option value="Rawat Inap" {{ old('layanan') == 'Rawat Inap' ? 'selected' : '' }}
                                    selected>
                                    Rawat Inap</option>
                                <option value="Rawat Jalan" {{ old('layanan') == 'Rawat Jalan' ? 'selected' : '' }}>
                                    Rawat Jalan</option>
                                <option value="Radiologi" {{ old('layanan') == 'Radiologi' ? 'selected' : '' }}>
                                    Radiologi</option>
                                <option value="Endoskopi" {{ old('layanan') == 'Endoskopi' ? 'selected' : '' }}>
                                    Endoskopi</option>
                            </select>
                            @error('layanan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                                placeholder="Alamat">{{ old('alamat') }}</textarea>
                            @error('alamat')
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
