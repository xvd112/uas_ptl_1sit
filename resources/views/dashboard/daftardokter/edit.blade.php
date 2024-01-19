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
            <h3>Koreksi Data Dokter</h3>
            </div>
            <div class="card-body">
            <form action="{{ route('daftardokter.update', $daftardokter->id ) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="kd_dok">Kode Dokter </label>
            <input type="text" name="kd_dok"  id="kd_dok" 
            class="form-control" value="{{ $daftardokter->kd_dok }}">

            <label for="nama">Nama </label>
            <input type="text" name="nama"  id="nama" 
            class="form-control" value="{{ $daftardokter->nama }}">

             <label for="department">Department </label>
            <input type="text" name="department"  id="department" 
            class="form-control" value="{{ $daftardokter->department }}">

            <label for="specialty">Specialty </label>
            <input type="text" name="specialty"  id="specialty" 
            class="form-control" value="{{ $daftardokter->specialty }}">

            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            
        @endsection