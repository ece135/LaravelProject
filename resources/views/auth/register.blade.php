@extends('front.layouts.master') @section('content')
<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            
            <div class="card border-dark rounded-0 p-4 p-md-5" style="background-color: #fbfbfb;">
                
                <div class="text-center mb-4">
                    <h2 class="text-uppercase mb-2" style="font-weight: 800; letter-spacing: 2px;">Create Account</h2>
                    <p class="text-muted" style="font-size: 13px;">Join us to save your favorite items and track orders</p>
                </div>

                <form action="{{ url('/register') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Full Name</label>
                        <input type="text" name="name" class="form-control rounded-0 border-dark @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Email Address</label>
                        <input type="email" name="email" class="form-control rounded-0 border-dark @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Password</label>
                        <input type="password" name="password" class="form-control rounded-0 border-dark @error('password') is-invalid @enderror" required>
                        @error('password')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control rounded-0 border-dark" required>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-3 text-uppercase rounded-0 mb-3" style="font-weight: 700; letter-spacing: 2px;">
                        Sign Up
                    </button>

                    <div class="text-center">
                        <span class="text-muted" style="font-size: 12px;">Already have an account?</span>
                        <a href="{{ route('login') }}" class="text-dark text-decoration-none" style="font-size: 12px; font-weight: 700; border-bottom: 1px solid #000;">LOG IN</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection