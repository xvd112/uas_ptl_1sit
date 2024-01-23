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
                    <div class="col-md-10">
                        <h4>Visi Misi</h4>
                    </div>
                    @forelse ($data as $d)
                        <div class="col-md-2">
                            <a class="btn btn-warning btn-sm btn-right" href="{{ url(Request::url() . '/edit') }}"
                                role="button">Edit</a>
                        </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>

                            <th scope="col">Visi</th>
                            <th scope="col">Misi</th>

                        </tr>
                    </thead>
                    <tbody>


                        <tr>

                            <td>{{ $d->visi }}</td>
                            <td>{{ $d->misi }}</td>

                            @csrf

                            </form>
                            </td>
                        </tr>

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
