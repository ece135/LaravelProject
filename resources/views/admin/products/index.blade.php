@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Products List</h3>
        <div class="card-tools">
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">Add Product</a>
        </div>
    </div>
    <div class="card-body">
        <p>Products list will be displayed here.</p>
    </div>
</div>
@endsection