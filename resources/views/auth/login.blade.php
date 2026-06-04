@extends('front.layouts.master') @section('content')
<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            
            <div class="card border-dark rounded-0 p-4 p-md-5" style="background-color: #fbfbfb;">
                
                <div class="text-center mb-4">
                    <h2 class="text-uppercase mb-2" style="font-weight: 800; letter-spacing: 2px;">Welcome Back</h2>
                    <p class="text-muted" style="font-size: 13px;">Sign in to access your personal collection</p>
                </div>

                <form action="{{ url('/login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Email Address</label>
                        <input type="email" name="email" class="form-control rounded-0 border-dark @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Password</label>
                        <input type="password" name="password" class="form-control rounded-0 border-dark @error('password') is-invalid @enderror" required>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" name="remember" class="form-check-input rounded-0 border-dark" id="remember">
                        <label class="form-check-label text-muted" for="remember" style="font-size: 13px;">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-3 text-uppercase rounded-0" style="font-weight: 700; letter-spacing: 2px;">
                        Sign In
                    </button>
                    <div class="text-center mt-3">
                        <span class="text-muted" style="font-size: 12px;">Don't have an account?</span>
                        <a href="{{ route('register') }}" class="text-dark text-decoration-none" style="font-size: 12px; font-weight: 700; border-bottom: 1px solid #000;">SIGN UP</a>
                    </div>

                </form>
                </div>

        </div>
    </div>
</div>
@endsection