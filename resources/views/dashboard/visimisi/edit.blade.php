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

                        <h4>Edit Visi Misi</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url(str_replace('/edit', '', Request::url())) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                  
                    
                    <div class="mb-3 row">
                        <label for="visi" class="col-sm-2 col-form-label">Visi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('sejarah') is-invalid @enderror" id="summernote" name="visi"
                                placeholder="visi">{{ $data->visi, old('visi') }}</textarea>
                            @error('visi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                        <div class="mb-3 row">
                            <label for="misi" class="col-sm-2 col-form-label">Misi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('misi') is-invalid @enderror" id="summernote" name="misi"
                                    placeholder="misi">{{ $data->misi, old('misi') }}</textarea>
                                @error('misi')
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
