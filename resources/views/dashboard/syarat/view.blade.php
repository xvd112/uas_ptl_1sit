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
                        <h4>View Persyaratan untuk {{ $data->fasilitas }}</h4>
                    </div>

                    <div class="col-md-3">
                        <form class="d-inline" action="{{ url(Request::url()) }}" method="POST">
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
                <div class="row g-0">
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="mb-3 row">
                                {{ Str::of($data->persyaratan)->toHtmlString() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
