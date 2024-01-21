@extends('dashboard.layout.index')

@section('content')
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

    @if (session()->has('warning'))
        <div class="alert alertwarning alert-dismissible fade show alert-form" role="alert">
            {{ session('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Main row -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-11">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <h4>Edit User</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url(str_replace('/edit', '', Request::url())) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input value="{{ $data->name, old('name') }}" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                placeholder="Nama">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input value="{{ $data->email, old('email') }}" type="email"
                                class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password Baru</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password Baru">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="isAdmin" class="col-sm-2 col-form-label">isAdmin</label>
                        <div class="col-sm-10">
                            <div class="form-check form-switch form-control" style="border: none;">
                                <input style="height: 20px; width: 40px"
                                    class="form-check-input @error('isAdmin') is-invalid @enderror" type="checkbox"
                                    name="isAdmin" id="isAdmin" {{ $data->isAdmin || old('isAdmin') ? 'checked' : '' }}>
                            </div>
                            @error('isAdmin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row" style="float: right">
                        <div class="col">
                            <button class="btn btn-warning" type="reset">Reset</button>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
