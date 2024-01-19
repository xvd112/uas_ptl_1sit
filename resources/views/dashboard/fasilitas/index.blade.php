@extends('dashboard.layout.index')

@section('content')
<div class="card mt-2">
    <div class="card-header">
        <div class="row">
            <div class="col-9">
                {{-- Tampilkan pesan sukses/error --}}
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @else
                    <h4 class="text-dark">Daftar Fasilitas</h4>
                @endif
            </div>
            {{-- Lokasi button tambah --}}
            <div class="col-3">
                <div class="d-grid">
                    <a class="btn btn-outline-primary btn-sm text-white" href="{{ route('fasilitas.create') }}" role="button" style="background-color: blue;">Tambah</a>
                </div>
            </div>
            {{-- End button --}}
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Status Dokter</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- Tampilkan data --}}
                @forelse($fasilitas as $fasilitas)
                    <tr>
                        <td>{{ $fasilitas->nm_fasilitas }}</td>
                        <td>{{ $fasilitas->nm_dokter }}</td>
                        <td>{{ $fasilitas->s_dokter }}</td>
                        <td class="text-center">
                            <form action="{{ route('fasilitas.destroy', $fasilitas->id) }}" method="post" style="display: inline-block">
                                <a href="{{ route('fasilitas.edit', $fasilitas->id) }}" class="btn btn-outline-success btn-sm"><i class="fas fa-edit text-success fa-lg"></i>Edit</a>
                                <a href="{{ route('fasilitas.view', $fasilitas->id) }}" class="btn btn-outline-info btn-sm"><i class="fas fa-eye text-info fa-lg"></i>Lihat</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Data fasilitas ini?')"><i class="fas fa-trash text-danger fa-lg"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center text-muted" colspan="5">Data fasilitas tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
