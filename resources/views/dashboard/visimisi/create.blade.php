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
            <h3>Tambah Data Visi Misi</h3>
            </div>
            <div class="card-body">
            <form action="{{ route('visimisi.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="visi">Visi </label>
            <textarea class="form-control" id="visi" name="visi" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="misi">Misi</label>
                <textarea class="form-control" id="misi" name="misi" rows="10"></textarea>
                </div>
           
          <button type="submit" class="btn btn-primary" >Simpan</button>
            </form>
            </div>
            </div>
            {{-- --}}
            </div>
            </div>
            </div>
           
@endsection
