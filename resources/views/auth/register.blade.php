@extends('auth.index')

@section('form')
    <div class="form-container sign-in-container">
        <form class="form-auth" method="POST" action="{{ url('/register') }}">
            @csrf
            <h1 id="title">Create Account</h1>

            {{-- Name --}}
            <div class="frm">
                <input value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror"
                    id="name" name="name" placeholder="Name" autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- End Name --}}

            {{-- Email --}}
            <div class="frm">
                <input value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" name="email" placeholder="Email">
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

            <button class="btn-form" type="submit">Sign Up</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1 id="title">Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <a href="/login" class="ghost btn-form" type="button">Sign In</a>
            </div>
        </div>
    </div>
@endsection
