@extends('dashboard.layout.index')

@section('content')
    <!-- Main row -->
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <h4>View Pendaftaran : {{ $data->nama }}</h4>
                    </div>

                    <div class="col-md-3">

                        <form class="d-inline" action="{{ url(Request::url() . '/' . $data->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure to delete this data?')"
                                class="btn btn-danger btn-sm btn-logout btn-right"><i
                                    class="fa-solid fa-trash"></i></button>
                        </form>

                        <a class="btn btn-warning btn-sm btn-right" href="{{ url(Request::url() . '/edit') }}"
                            role="button">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2">Nama</label>
                    <div class="col-sm-10">
                        : {{ $data->nama }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nik" class="col-sm-2">NIK</label>
                    <div class="col-sm-10">
                        : {{ $data->nik }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl_book" class="col-sm-2">Tanggal Booking</label>
                    <div class="col-sm-10">
                        : {{ $data->tgl_book }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2">Email</label>
                    <div class="col-sm-10">
                        : <a href="mailto:{{ $data->email }}">{{ $data->email }}</a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="telpon" class="col-sm-2">Telepon</label>
                    <div class="col-sm-10">
                        : <a href="tel:{{ $data->telpon }}">{{ $data->telpon }}</a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="layanan" class="col-sm-2">Layanan</label>
                    <div class="col-sm-10">
                        : {{ $data->layanan }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                        : {{ $data->alamat }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="createdAt" class="col-sm-2">Created At</label>
                    <div class="col-sm-10">
                        : {{ $data->created_at }}
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="updatedAt" class="col-sm-2">Updated At</label>
                    <div class="col-sm-10">
                        : @if ($data->updated_by === null || $data->updated_by === '')
                            {{ '-' }}
                        @else
                            {{ $data->updated_by }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
