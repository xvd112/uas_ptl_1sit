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
            <h4>Sejarah</h4>
            @endif
            </div>
            {{-- lokasi button tambah --}}
            <div class="col-3">
            <div class="d-grid">
            <a class="btn btn-outline-primary btn-sm" href="{{ 
            route('sejarah.create') }}" role="button"> <i class="fa-solid fa-circle-plus">Tambah</a></i>
            </div>
            </div>
            {{-- end button --}}
            </div>
            </div>
            <div class="card-body">
                <div class="tab1">
            <table class="table">
            <thead>
            <tr>
            
            <th scope="col">Sejarah</th>
            <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            Tampilkan data
           
            @forelse($sejarahs as $sejarah)
           
            <tr>
         
            <td>{{ $sejarah->sejarah }}</td>
         
            <td class="text-center">
            <form action="{{ route('sejarah.destroy', $sejarah->id) }}" method="post" style="display: inline-block">
            <a href="{{ route('sejarah.edit', $sejarah->id) }}" class="btn btn-outline-success btn-sm"><i class="fas fa-edit text-success fa-lg"></i>Edit</a>
            @csrf
            @method('DELETE')
            
            <button  type="submit" class="btn btn-sm btn-outline-danger margin-left" onclick="return confirm('Apakah Anda yakin ingin menghapus Data  kelompok ini?')"><i class="fas fa-trash text-danger fa-lg"></i>Hapus</button>
            
            </form>
            </td>
            </tr>
            @empty
            <tr>
            <td class="text-center text-mute" colspan="4">Data kelompok 
            tidak tersedia</td>
            </tr>
            @endforelse
            </tbody>
            </table>
            </div>
            </div>
            </div>                
@endsection
