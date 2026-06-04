@extends('front.layouts.master')

@section('content')
<div class="container py-5 my-5">
    
    <div class="text-center mb-5">
        <h2 class="text-uppercase mb-2" style="font-weight: 800; letter-spacing: 2px;">My Wishlist</h2>
        <div class="text-muted text-uppercase" style="font-size: 11px; letter-spacing: 1px;">
            Your personal collection of favorites
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-0 text-uppercase text-center mb-4" style="font-size: 12px; letter-spacing: 1px;">
            {{ session('success') }}
        </div>
    @endif

    @if(count($wishlist) > 0)
        <div class="row">
            @foreach($wishlist as $id => $details)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card border-0 rounded-0 position-relative">
                    
                    <a href="{{ route('wishlist.toggle', $id) }}" class="position-absolute text-dark" style="top: 10px; right: 15px; z-index: 10;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="black" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </a>

                    <div style="height: 300px; background-color: #f4f4f4; display: flex; align-items: center; justify-content: center;">
                        <img src="{{ asset('storage/' . $details['image']) }}" alt="{{ $details['name'] }}" style="width: 100%; height: 300px; object-fit: cover;">
                    </div>
                    
                    <div class="card-body text-center p-3">
                        <h6 class="text-uppercase fw-bold mb-1" style="font-size: 13px; letter-spacing: 1px;">{{ $details['name'] }}</h6>
                        <p class="text-muted mb-3" style="font-size: 13px;">${{ number_format($details['price'], 2) }}</p>
                        
                        <form action="{{ route('cart.add', $id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-dark w-100 text-uppercase rounded-0 py-2" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-5 my-5">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-3">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg>
            <h4 class="text-uppercase mb-3" style="font-weight: 700; letter-spacing: 1px;">No Favorites Yet</h4>
            <a href="{{ route('home') }}" class="btn btn-dark rounded-0 text-uppercase px-5 py-3" style="font-weight: 700; letter-spacing: 2px;">
                Discover Pieces
            </a>
        </div>
    @endif

</div>
@endsection