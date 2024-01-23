@extends('dashboard.layout.index')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">
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

                    <h4>Edit Fasilitas</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('fasilitas.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nm_fasilitas">Nama Fasilitas </label>
                    <input type="text" name="nm_fasilitas" id="nm_fasilitas" class="form-control" maxlength="255" value="{{ $data->nm_fasilitas }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-14">
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="summernote"
                            name="deskripsi" placeholder="Deskripsi">{{ $data->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="nm_dokter">Nama Dokter </label>
                    <input type="text" name="nm_dokter" id="nm_dokter" class="form-control" value="{{ $data->nm_dokter }}">
                </div>
                <div class="form-group">
                    <label for="s_dokter">Status Dokter </label>
                    <input type="text" name="s_dokter" id="s_dokter" class="form-control" value="{{ $data->s_dokter }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@push('scripts')
<script>
    // Set Summernote content with the existing data
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>
@endpush

@endsection
