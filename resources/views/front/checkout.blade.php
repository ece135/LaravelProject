@extends('front.layouts.master')

@section('content')
<div class="container py-5 my-5">
    
    <div class="text-center mb-5">
        <h2 class="text-uppercase mb-2" style="font-weight: 800; letter-spacing: 2px;">Checkout</h2>
        <div class="text-muted text-uppercase" style="font-size: 11px; letter-spacing: 1px;">
            Secure Payment & Delivery
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger rounded-0 mb-4" style="font-size: 13px; font-weight: 600; letter-spacing: 1px;">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <div class="row">
            
            <div class="col-lg-7 mb-4">
                <div class="card border-dark rounded-0 p-4 p-md-5" style="background-color: #fff;">
                    <h5 class="text-uppercase border-bottom border-dark pb-3 mb-4" style="font-weight: 800; font-size: 14px; letter-spacing: 1px;">
                        Shipping Details
                    </h5>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Full Name</label>
                            <input type="text" name="name" class="form-control rounded-0 border-dark" value="{{ auth()->user()->name }}" required readonly class="form-control">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Phone Number</label>
                            <input type="text" name="phone" class="form-control rounded-0 border-dark"  required>
                        </div>
                        
                        <div class="col-12 mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">City</label>
                            <input type="text" name="city" class="form-control rounded-0 border-dark" required>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 11px; font-weight: 700; letter-spacing: 1px;">Full Address</label>
                            <textarea name="address" class="form-control rounded-0 border-dark" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card border-dark rounded-0 p-4" style="background-color: #fbfbfb;">
                    <h5 class="text-uppercase border-bottom border-dark pb-3 mb-4" style="font-weight: 800; font-size: 14px; letter-spacing: 1px;">
                        Your Order
                    </h5>
                    
                    <div class="mb-4" style="max-height: 250px; overflow-y: auto;">
                        @foreach($cart as $details)
                            <div class="d-flex justify-content-between mb-3 border-bottom pb-2">
                                <div style="font-size: 13px;">
                                    <span class="fw-bold text-uppercase">{{ $details['name'] }}</span>
                                    <span class="text-muted ms-2">x {{ $details['quantity'] }}</span>
                                </div>
                                <div class="fw-bold" style="font-size: 13px;">
                                    ${{ number_format($details['price'] * $details['quantity'], 2) }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3 text-muted" style="font-size: 13px;">
                        <span class="text-uppercase" style="letter-spacing: 1px;">Subtotal</span>
                        <span>${{ number_format($total, 2) }}</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-3 text-muted" style="font-size: 13px;">
                        <span class="text-uppercase" style="letter-spacing: 1px;">Shipping</span>
                        <span class="text-success">Free</span>
                    </div>
                    
                    <div class="d-flex justify-content-between mb-4 border-top border-dark pt-3" style="font-size: 16px; font-weight: 800;">
                        <span class="text-uppercase" style="letter-spacing: 1px;">Total</span>
                        <span>${{ number_format($total, 2) }}</span>
                    </div>

                    <div class="border border-dark p-3 mb-4" style="background-color: #fff;">
                        <h6 class="text-uppercase mb-3" style="font-weight: 700; font-size: 12px; letter-spacing: 1px;">
                            Credit / Debit Card
                        </h6>

                        <div class="mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 10px; font-weight: 700; letter-spacing: 1px;">Cardholder Name</label>
                            <input type="text" name="card_name" class="form-control rounded-0 border-dark" style="font-size: 12px;">
                        </div>

                        <div class="mb-3">
                            <label class="text-uppercase mb-1" style="font-size: 10px; font-weight: 700; letter-spacing: 1px;">Card Number</label>
                            <input type="text" name="card_number" class="form-control rounded-0 border-dark" maxlength="19" style="font-size: 12px;">
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label class="text-uppercase mb-1" style="font-size: 10px; font-weight: 700; letter-spacing: 1px;">Expiry Date</label>
                                <input type="text" name="card_expiry" class="form-control rounded-0 border-dark" placeholder="MM/YY" maxlength="5" style="font-size: 12px;">
                            </div>
                            
                            <div class="col-6 mb-2">
                                <label class="text-uppercase mb-1" style="font-size: 10px; font-weight: 700; letter-spacing: 1px;">CVV</label>
                                <input type="text" name="card_cvv" class="form-control rounded-0 border-dark" maxlength="3" style="font-size: 12px;">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-3 text-uppercase rounded-0 mt-2" style="font-weight: 800; letter-spacing: 2px;">
                        Place Order
                    </button>
                </div>
            </div>

        </div>
    </form>

</div>
@endsection