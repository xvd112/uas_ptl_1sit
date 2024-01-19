@extends('dashboard.layout.index')
@section('content')
<!-- Main row -->
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
<h3>Tambah Data Fasilitas</h3>
</div>
<div class="card-body">
<form action="{{ route('fasilitas.store') }}" method="POST"
enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="nm_fasilitas">Nama Fasilitas </label>
<input type="text" name="nm_fasilitas" id="nm_fasilitas" class="form-control"
maxlength="255">
</div>
<div class="form-group">
<label for="deskripsi">Deskripsi </label>
<input type="text" name="deskripsi" id="deskripsi" class="formcontrol">
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
{{-- --}}
</div>
</div>
</div>
@endsection