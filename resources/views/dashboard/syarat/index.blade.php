@extends('dashboard.layout.index')

@section('content')
    <!-- Main row -->
    <div class="container">
        @if (session()->has('success_syarat'))
            <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                {{ session('success_syarat') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('error_syarat'))
            <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
                {{ session('error_syarat') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h4>List Persyaratan</h4>
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
                            <th scope="col">Layanan</th>
                            <th scope="col">Persyaratan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @forelse ($data as $d)
                            <tr>
                                <th id="no">{{ $no }}</th>
                                <td>{{ $d->fasilitas }}</td>
                                <td>{{ Str::of($d->persyaratan)->toHtmlString() }}</td>
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
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
