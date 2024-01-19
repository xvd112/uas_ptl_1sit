@extends('dashboard.layout.index')

@section('content')



<div class="card mt-2">
    <div class="card-header">
    <div class="row">
        <div class="col-9">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{ session('success') }}
            </div>
            @elseif(session('error'))
            <div class="alert alert-danger" role="alert">
            {{ session('error') }}
            </div>
            @else
            <h4>Visi Misi</h4>
            @endif
            </div>
            {{-- lokasi button tambah --}}
            <div class="col-3">
            <div class="d-grid">
            <a class="btn btn-outline-primary btn-sm" href="{{ 
            route('visimisi.create') }}" role="button"> <i class="fa-solid fa-circle-plus">Tambah</a></i>
            </div>
            </div>
            {{-- end button --}}
            </div>
            </div>
            
            <div class="card-body">
                
            <table class="table">
            <thead>
            <tr>
           
            <th scope="col">Visi</th>
            <th scope="col">Misi</th>
            <th scope="col">Action</th>
            </tr>
            </thead>
            
            <tbody>
            Tampilkan data
            @forelse($visimisis as $visimisi)
            <tr>
           
            <td>{{ $visimisi->visi }}</td>
                <td>{{ $visimisi->misi }}</td>
            <td class="text-center">
            <form action="{{ route('visimisi.destroy', $visimisi->id) }}" method="post" style="display: inline-block">
            <a href="{{ route('visimisi.edit', $visimisi->id) }}" class="btn btn-outline-success btn-sm"><i class="fas fa-edit text-success fa-lg"></i>Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger margin-left" onclick="return confirm('Apakah Anda yakin ingin menghapus Data  VisiMisi ini?')"><i class="fas fa-trash text-danger fa-lg"></i>Hapus</button>
            </form>
            </td>
            </tr>
            @empty
            <tr>
            <td class="text-center text-mute" colspan="4">Data VisiMisi
            tidak tersedia</td>
            </tr>
            @endforelse
            </tbody>
            </table>
            </div>
            </div>
            </div>                
@endsection
