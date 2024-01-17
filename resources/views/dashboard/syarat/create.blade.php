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
                        <h4>Insert Syarat Baru</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url(str_replace('/create', '', Request::url())) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="fasilitas" class="col-sm-2 col-form-label">Layanan</label>
                        <div class="col-sm-10">
                            <select name="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror"
                                id="fasilitas">
                                <option value="Rawat Inap" {{ old('fasilitas') == 'Rawat Inap' ? 'selected' : '' }}
                                    selected>
                                    Rawat Inap</option>
                                <option value="Rawat Jalan" {{ old('fasilitas') == 'Rawat Jalan' ? 'selected' : '' }}>
                                    Rawat Jalan</option>
                                <option value="Radiologi" {{ old('fasilitas') == 'Radiologi' ? 'selected' : '' }}>
                                    Radiologi</option>
                                <option value="Endoskopi" {{ old('fasilitas') == 'Endoskopi' ? 'selected' : '' }}>
                                    Endoskopi</option>
                            </select>
                            @error('fasilitas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="persyaratan" class="col-sm-2 col-form-label">Persyaratan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('persyaratan') is-invalid @enderror" id="summernote" name="persyaratan"
                                placeholder="Persyaratan">{{ old('persyaratan') }}</textarea>
                            @error('persyaratan')
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
