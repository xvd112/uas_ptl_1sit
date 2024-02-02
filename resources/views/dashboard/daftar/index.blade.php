@extends('dashboard.layout.index')

@section('content')
    <!-- Main row -->
    <div class="container">
        @if (session()->has('success_daftar'))
            <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                {{ session('success_daftar') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('error_daftar'))
            <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
                {{ session('error_daftar') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h4>List Pendaftaran</h4>
                    </div>

                    <div class="col-md-2">
                        <a class="btn btn-primary btn-sm btn-right" href="{{ url(Request::url() . '/create') }}"
                            role="button">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url(Request::url() . '/') }}">
                    <div class="input-group mb-3 btn-right col-md-5">
                        <input type="text" class="form-control" placeholder="Search..." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-secondary" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Booking</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Layanan</th>
                            <th scope="col">Create</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @forelse ($daftars as $d)
                            <tr>
                                <th id="no">{{ $no }}</th>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->tgl_book }}</td>
                                <td>{{ $d->telpon }}</td>
                                <td>{{ $d->layanan }}</td>
                                <td>{{ $d->created_at }}</td>
                                <td id="no">
                                    <a href="{{ url(Request::url() . '/' . $d->id . '/edit') }}"><i
                                            class="fa-solid fa-pen"></i></a>
                                    <a href="{{ url(Request::url() . '/' . $d->id) }}">
                                        <i class="fa-solid fa-eye"></i></a>
                                    <form class="d-inline" action="{{ url(Request::url() . '/' . $d->id) }}"
                                        method="POST">
                                        @method('delete')
                                        @csrf
                                        <button onclick="return confirm('Are you sure to delete this data?')"
                                            class="btn-logout"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $no++;
                            @endphp
                        @empty
                            <p>Data tidak ditemukan !</p>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-3 d-flex justify-content-center">
                    {{ $daftars->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
