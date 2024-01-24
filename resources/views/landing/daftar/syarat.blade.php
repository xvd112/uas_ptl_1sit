@extends('landing.layout.index')

@section('content')
    <main id="main" class="main-content">
        <div class="section-header">
            <h2>Persyaratan</h2>
        </div>
        <div class="row mtop">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h1>Persyaratan</h1>
            {{ Str::of($data->persyaratan)->toHtmlString() }}
        </div>
    </main><!-- End #main -->
@endsection
