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
            <h3>Koreksi Data Sejarah</h3>
            </div>
            <div class="card-body">
            <form action="{{ route('sejarah.update', $sejarah->id) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="sejarah"> Sejarah </label>
            <textarea type="text" name="sejarah" id="sejarah" rows="10"
            class="form-control"> {{ $sejarah->sejarah }}</textarea>

           

            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            
        @endsection