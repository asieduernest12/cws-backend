@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="text-center">
        <h4>Sign In</h4>
        <p>Sign In to your account</p>
    </div>
    <form class="form-body row g-3" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" required autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12 col-lg-6">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
        </div>
        <div class="col-12 col-lg-6 text-end">
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
        <div class="col-12 col-lg-12">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="position-relative border-bottom my-3">
                <div class="position-absolute seperator translate-middle-y">or continue with</div>
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                <a href="javascript:;" class=""><img src="{{ asset('assets/images/icons/facebook.png') }}"
                        alt=""></a>
                <a href="javascript:;" class=""><img src="{{ asset('assets/images/icons/apple-black-logo.png') }}"
                        alt=""></a>
                <a href="javascript:;" class=""><img src="{{ asset('assets/images/icons/google.png') }}"
                        alt=""></a>
            </div>
        </div>
        <div class="col-12 col-lg-12 text-center">
            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
        </div>
    </form>
@endsection
{{-- 
@section('cover-content')
    <!-- You can add any content for the right side cover image here -->
@endsection --}}
