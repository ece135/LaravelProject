@extends('front.layouts.master')

@section('content')
<div class="container py-5 my-5">
    
    <div class="text-center mb-5">
        <h2 class="text-uppercase mb-2" style="font-weight: 800; letter-spacing: 2px;">My Orders</h2>
        <div class="text-muted text-uppercase" style="font-size: 11px; letter-spacing: 1px;">
            Track your purchases and shipping status
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-dark rounded-0 p-3" style="background-color: #fbfbfb;">
                <ul class="list-unstyled mb-0">
                    <li class="mb-3">
                        <a href="{{ route('profile.edit') }}" class="text-muted text-decoration-none text-uppercase" style="font-size: 13px; letter-spacing: 1px; font-weight: 600;">
                            Account Details
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('profile.orders') }}" class="text-dark text-decoration-none text-uppercase fw-bold" style="font-size: 13px; letter-spacing: 1px;">
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
                    Order History
                </h5>

                @if($orders->isEmpty())
                    <div class="text-center py-5">
                        <p class="text-muted mb-4" style="font-style: italic;">You haven't placed any orders yet.</p>
                        <a href="{{ route('shop') }}" class="btn btn-dark rounded-0 text-uppercase px-4 py-2" style="font-size: 12px; font-weight: 700; letter-spacing: 1px;">
                            Start Shopping
                        </a>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark align-middle text-center" style="font-size: 13px;">
                            <thead class="table-dark text-uppercase" style="font-size: 11px; letter-spacing: 1px;">
                                <tr>
                                    <th class="py-3">Order No</th>
                                    <th class="py-3">Date</th>
                                    <th class="py-3">Total</th>
                                    <th class="py-3">Status</th>
                                    <th class="py-3">Tracking</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td class="fw-bold py-3">{{ $order->invoice_no }}</td>
                                    
                                    <td class="text-muted">{{ $order->created_at->format('d.m.Y') }}</td>
                                    
                                    <td class="fw-bold">${{ number_format($order->total_amount, 2) }}</td>
                                    
                                    <td>
                                        @if($order->status == 'pending')
                                            <span class="badge bg-warning text-dark text-uppercase rounded-0 px-2 py-1" style="font-size: 10px;">Pending</span>
                                        @elseif($order->status == 'processing')
                                            <span class="badge bg-info text-dark text-uppercase rounded-0 px-2 py-1" style="font-size: 10px;">Processing</span>
                                        @elseif($order->status == 'shipped')
                                            <span class="badge bg-primary text-white text-uppercase rounded-0 px-2 py-1" style="font-size: 10px;">Shipped</span>
                                        @elseif($order->status == 'delivered')
                                            <span class="badge bg-success text-white text-uppercase rounded-0 px-2 py-1" style="font-size: 10px;">Delivered</span>
                                        @else
                                            <span class="badge bg-danger text-white text-uppercase rounded-0 px-2 py-1" style="font-size: 10px;">Cancelled</span>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        @if($order->tracking_number)
                                            <div class="small fw-bold text-uppercase text-muted" style="font-size: 10px;">{{ $order->shipping_provider }}</div>
                                            <span class="text-dark fw-bold" style="letter-spacing: 0.5px;">{{ $order->tracking_number }}</span>
                                        @else
                                            <span class="text-muted" style="font-style: italic; font-size: 11px;">Not Shipped Yet</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection