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
            <h3>Tambah Data Dokter</h3>
            </div>
            <div class="card-body">
            <form action="{{ route('daftardokter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="kd_dok">Kode Dokter</label>
            <input type="text" class="form-control" id="kd_dok" name="kd_dok" >
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" >
                </div>

                <div class="form-group">
                    <label for="department">DEPARTMENT</label>
                    <input type="text" class="form-control" id="department" name="department" >
                    </div>

                    <div class="form-group">
                        <label for="specialty">SPECIALTY</label>
                        <input type="text" class="form-control" id="specialty" name="specialty" >
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
