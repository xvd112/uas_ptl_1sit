@extends('auth.index')

@section('form')
    <div class="form-container sign-in-container">
        <form class="form-auth" method="POST" action="{{ url('/login') }}">
            @csrf
            <h1 id="title">Sign in</h1>

            @if (session()->has('success_auth'))
                <div class="alert alert-success alert-dismissible fade show alert-form" role="alert">
                    {{ session('success_auth') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('error_auth'))
                <div class="alert alert-danger alert-dismissible fade show alert-form" role="alert">
                    {{ session('error_auth') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Email --}}
            <div class="frm">
                <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                    id="email" name="email" placeholder="Email" autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- End Email --}}

            {{-- Password --}}
            <div class="frm">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- End Password --}}

            <button class="btn-form" type="submit">Sign In</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1 id="title">Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <a href="/register" class="ghost btn-form" type="button">Sign Up</a>
            </div>
        </div>
    </div>
@endsection
