@extends('front.layouts.master')

@section('content')
<div class="container py-5 my-5">
    
    <div class="text-center mb-5">
        <h2 class="text-uppercase mb-2" style="font-weight: 800; letter-spacing: 2px;">My Account</h2>
        <div class="text-muted text-uppercase" style="font-size: 11px; letter-spacing: 1px;">
            Manage your personal information
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-dark rounded-0 p-3" style="background-color: #fbfbfb;">
                <ul class="list-unstyled mb-0">
                    <li class="mb-3">
                        <a href="{{ route('profile.edit') }}" class="text-dark text-decoration-none text-uppercase fw-bold" style="font-size: 13px; letter-spacing: 1px;">
                            Account Details
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('profile.orders') }}" class="text-muted text-decoration-none text-uppercase" style="font-size: 13px; letter-spacing: 1px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#000';" onmouseout="this.style.color='#6c757d';">
                            My Orders
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-danger text-decoration-none text-uppercase" style="font-size: 13px; letter-spacing: 1px;">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card border-dark rounded-0 p-4" style="background-color: #fff;">
                
                <h5 class="text-uppercase mb-4 pb-2 border-bottom border-dark" style="font-weight: 700; font-size: 14px; letter-spacing: 1px;">
                    Profile Settings
                </h5>

                @if(session('success'))
                    <div class="alert alert-success rounded-0 text-uppercase" style="font-size: 12px; letter-spacing: 1px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Full Name</label>
                            <input type="text" name="name" class="form-control rounded-0 border-dark" value="{{ $user->name }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Email Address</label>
                            <input type="email" name="email" class="form-control rounded-0 border-dark" value="{{ $user->email }}" required>
                        </div>
                    </div>

                    <h6 class="text-uppercase mt-4 mb-3" style="font-size: 12px; font-weight: 700; letter-spacing: 1px;">Change Password</h6>
                   

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">New Password</label>
                            <input type="password" name="password" class="form-control rounded-0 border-dark">
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control rounded-0 border-dark">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark px-5 py-2 text-uppercase rounded-0" style="font-weight: 700; letter-spacing: 1px;">
                        Save Changes
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection