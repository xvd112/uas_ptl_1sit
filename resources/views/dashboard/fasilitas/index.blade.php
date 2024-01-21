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
                        <a class="btn btn-primary btn-sm btn-right" href="{{ url(Request::url() . '/create') }}"
                            role="button">Tambah</a>
            </div>
            {{-- End button --}}
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Status Dokter</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- Tampilkan data --}}
                @forelse($data as $key => $d)
                    <tr>
                        <th id="no">{{ $key + 1 }}</th>
                        <td>{{ $d->nm_fasilitas }}</td>
                        <td>{{ $d->nm_dokter }}</td>
                        <td>{{ $d->s_dokter }}</td>
                        <td class="text-center">
                            <a href="{{ url(Request::url() . '/' . $d->id . '/edit') }}"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{ url(Request::url() . '/' . $d->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <form class="d-inline" action="{{ url(Request::url() . '/' . $d->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button onclick="return confirm('Are you sure to delete this data?')" class="btn-logout">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
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
