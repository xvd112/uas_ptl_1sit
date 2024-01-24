@extends('landing.layout.index')

@section('content')
    <main id="main" class="main-content">
        <div class="section-header">
            <h2>Pendaftaran</h2>
            {{-- @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}
        </div>
        <div class="row mtop">
            <form action="{{ route('daftar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group frm">
                    <label for="nama">Nama</label>
                    <input value="{{ old('nama') }}" type="text"
                        class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="Nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group frm">
                    <label for="nik">NIK</label>
                    <input value="{{ old('nik') }}" type="text"
                        class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                        placeholder="NIK" maxlength="16">
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group frm">
                    <label for="jk">Pilih Jenis Kelamin</label>
                    <div>
                        <input type="radio" name="jk" id="jk" value="Laki-Laki"
                            {{ old('jk') == 'Laki-Laki' ? 'checked' : '' }} checked> Laki-Laki
                        <input type="radio" name="jk" id="jk" value="Perempuan"
                            {{ old('jk') == 'Perempuan' ? 'checked' : '' }}>
                        Perempuan
                    </div>
                    @error('jk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Your form.blade.php or any relevant Blade file -->
                <div class="form-group frm">
                    <label for="datepicker">Tanggal Booking</label>
                    <input value="{{ date('Y-m-d'), old('tgl_book') }}" type="date"
                        class="form-control @error('tgl_book') is-invalid @enderror" id="tgl_book" name="tgl_book"
                        placeholder="Pilih tanggal booking">
                    @error('tgl_book')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group frm">
                    <label for="email">Email</label>
                    <input value="{{ old('email') }}" type="email"
                        class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="Email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group frm">
                    <label for="telpon">No. Telpon</label>
                    <input value="{{ old('telpon') }}" type="text"
                        class="form-control @error('telpon') is-invalid @enderror" id="telpon" name="telpon"
                        placeholder="Nomor  telepon" maxlength="13">
                    @error('telpon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group frm">
                    <label for="layanan">Pilih Layanan</label>
                    <select name="layanan" class="form-control" id="layanan">
                        <option value="Rawat Inap" {{ old('layanan') == 'Rawat Inap' ? 'selected' : '' }} selected>
                            Rawat Inap</option>
                        <option value="BPJS" {{ old('layanan') == 'BPJS' ? 'selected' : '' }}>
                            BPJS</option>
                        <option value="Radiologi" {{ old('layanan') == 'Radiologi' ? 'selected' : '' }}>
                            Radiologi</option>
                        <option value="Umum" {{ old('layanan') == 'Umum' ? 'selected' : '' }}>
                            Umum</option>
                    </select>
                    @error('layanan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group frm">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group frm">
                    <input type="hidden" value="{{ Route::current()->uri() }}" name="url">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </main><!-- End #main -->
@endsection
