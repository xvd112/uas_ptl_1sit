@extends('dashboard.layout.index')
@section('content')
<div class="card mt-5">
<div class="card-header">
<div class="row">
<div class="col-9">
@if ($errors->any())
<div class="alert alert-danger">
<div class="alert-title"><h4>Pesan</h4></div>
Ada kesalahan input
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
</div>
<div class="card border-0 shadow rounded">
<div class="card-header">
<h3>Koreksi Data Fasilitas</h3>
</div>
<div class="card-body">
<form action="{{ route('fasilitas.update', $data->id) }}"
method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
<label for="nm_fasilitas">Nama Fasilitas </label>
<input type="text" name="nm_fasilitas" id="nm_fasilitas" class="form-control"
maxlength="255">
</div>
<div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="summernote" name="deskripsi"
                                placeholder="Deskripsi">{{ $data->deskripsi, old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
<div class="form-group">
<label for="nm_dokter">Nama Dokter </label>
<input type="text" name="nm_dokter" id="nm_dokter" class="form-control">
</div>
<div class="form-group">
<label for="s_dokter">Status Dokter </label>
<input type="text" name="s_dokter" id="s_dokter" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
