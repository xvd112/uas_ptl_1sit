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
                        <h4>Edit Kontak</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url(str_replace('/edit', '', Request::url())) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="summernote" name="alamat"
                                placeholder="alamat">{{ $data->alamat, old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input value="{{ $data->email, old('email') }}" type="text"
                                class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                placeholder="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input value="{{ $data->telepon, old('telepon') }}" type="text"
                                class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon"
                                placeholder="telepon">
                            @error('telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                        <div class="col-sm-10">
                            <input value="{{ $data->twitter, old('twitter') }}" type="text"
                                class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter"
                                placeholder="twitter">
                            @error('twitter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ig" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                            <input value="{{ $data->ig, old('ig') }}" type="text"
                                class="form-control @error('ig') is-invalid @enderror" id="ig" name="ig"
                                placeholder="ig">
                            @error('ig')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fb" class="col-sm-2 col-form-label">Facabook</label>
                        <div class="col-sm-10">
                            <input value="{{ $data->fb, old('fb') }}" type="text"
                                class="form-control @error('fb') is-invalid @enderror" id="fb" name="fb"
                                placeholder="fb">
                            @error('fb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="linkin" class="col-sm-2 col-form-label">LinkedIn</label>
                        <div class="col-sm-10">
                            <input value="{{ $data->linkin, old('linkin') }}" type="text"
                                class="form-control @error('linkin') is-invalid @enderror" id="linkin" name="linkin"
                                placeholder="linkin">
                            @error('linkin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row" style="float: right">
                        <div class="col">
                            <button class="btn btn-warning" type="reset">Reset</button>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
