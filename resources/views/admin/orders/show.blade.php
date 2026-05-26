@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Order Info & Shipping</h3>
                </div>
                <div class="card-body">
                    <p><strong>Invoice No:</strong> {{ $order->invoice_no }}</p>
                    <p><strong>Customer Name:</strong> {{ $order->name }}</p>
                    <p><strong>Email:</strong> {{ $order->email }}</p>
                    <p><strong>Phone:</strong> {{ $order->phone }}</p>
                    <p><strong>Shipping Address:</strong></p>
                    <div class="p-2 bg-light border rounded">
                        {{ $order->address }}
                    </div>
                    <hr>
                    
                    <form action="{{ route('admin.orders.status', $order->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Update Order Status</label>
                            <select name="status" class="form-control" onchange="this.form.submit()">
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h3 class="card-title">Products in this Order</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Title</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $item)
                            <tr>
                                <td>
                                    @if($item->product && $item->product->image)
                                        <img src="{{ Storage::url($item->product->image) }}" height="50">
                                    @else
                                        <span class="badge badge-secondary">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $item->product->title ?? 'Product Removed' }}</td>
                                <td><span class="badge badge-dark">{{ $item->size ?? 'N/A' }}</span></td>
                                <td>${{ number_format($item->price, 2) }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                            </tr>
                            @endforeach
                            <tr class="bg-light">
                                <td colspan="5" class="text-right"><strong>Grand Total:</strong></td>
                                <td><strong>${{ number_format($order->total_amount, 2) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection