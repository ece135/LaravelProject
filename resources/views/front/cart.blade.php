@extends('front.layouts.master')

@section('content')
<div class="container py-5 my-5">
    
    <div class="text-center mb-5">
        <h2 class="text-uppercase mb-2" style="font-weight: 800; letter-spacing: 2px;">Shopping Cart</h2>
        <div class="text-muted text-uppercase" style="font-size: 11px; letter-spacing: 1px;">
            Review your items before proceeding to checkout
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-0 text-uppercase text-center mb-4" style="font-size: 12px; letter-spacing: 1px;">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cart) > 0)
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="table-responsive">
                    <table class="table align-middle border-dark">
                        <thead class="table-dark text-uppercase text-center" style="font-size: 11px; letter-spacing: 1px;">
                            <tr>
                                <th class="py-3 text-start" colspan="2">Product</th>
                                <th class="py-3">Price</th>
                                <th class="py-3">Quantity</th>
                                <th class="py-3">Subtotal</th>
                                <th class="py-3">Remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" style="font-size: 13px;">
                            @foreach($cart as $id => $details)
                                <tr>
                                    <td class="text-start" style="width: 80px;">
                                        <div style="width: 70px; height: 90px; background-color: #f4f4f4; border: 1px solid #ddd; display: flex; align-items: center; justify-content: center;">
                                            <span class="text-muted" style="font-size: 10px;">IMG</span>
                                        </div>
                                    </td>
                                    
                                    <td class="text-start fw-bold text-uppercase" style="letter-spacing: 1px;">
                                        {{ $details['name'] }}
                                    </td>
                                    
                                    <td class="text-muted">${{ number_format($details['price'], 2) }}</td>
                                    
                                    <td class="fw-bold">{{ $details['quantity'] }}</td>
                                    
                                    <td class="fw-bold">${{ number_format($details['price'] * $details['quantity'], 2) }}</td>
                                    
                                    <td>
                                        <a href="{{ route('cart.remove', $id) }}" class="text-danger" style="font-size: 18px;" title="Remove Item">
                                            &times;
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-4">
                    <a href="{{ route('home') }}" class="btn btn-outline-dark rounded-0 text-uppercase px-4 py-2" style="font-size: 12px; font-weight: 700; letter-spacing: 1px;">
                        &larr; Continue Shopping
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-dark rounded-0 p-4" style="background-color: #fbfbfb;">
                    <h5 class="text-uppercase border-bottom border-dark pb-3 mb-4" style="font-weight: 800; font-size: 14px; letter-spacing: 1px;">
                        Order Summary
                    </h5>
                    
                    <div class="d-flex justify-content-between mb-3 text-muted" style="font-size: 13px;">
                        <span class="text-uppercase" style="letter-spacing: 1px;">Subtotal</span>
                        <span>${{ number_format($total, 2) }}</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3 text-muted" style="font-size: 13px;">
                        <span class="text-uppercase" style="letter-spacing: 1px;">Shipping</span>
                        <span>Calculated at checkout</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-4 border-top border-dark pt-3" style="font-size: 16px; font-weight: 800;">
                        <span class="text-uppercase" style="letter-spacing: 1px;">Total</span>
                        <span>${{ number_format($total, 2) }}</span>
                    </div>

                    <a href="#" class="btn btn-dark w-100 py-3 text-uppercase rounded-0" style="font-weight: 700; letter-spacing: 2px;">
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-5 my-5">
            <h4 class="text-uppercase mb-3" style="font-weight: 700; letter-spacing: 1px;">Your cart is empty</h4>
            <p class="text-muted mb-4">Looks like you haven't added anything to your cart yet.</p>
            <a href="{{ route('home') }}" class="btn btn-dark rounded-0 text-uppercase px-5 py-3" style="font-weight: 700; letter-spacing: 2px;">
                Start Shopping
            </a>
        </div>
    @endif

</div>
@endsection