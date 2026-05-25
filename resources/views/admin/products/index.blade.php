@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Products List</h3>
        <div class="card-tools">
            <a href="{{ route('admin.products.create') }}" method="POST" class="btn btn-primary btn-sm">Add Product</a>
        </div>
    </div>
    <div class="card-body">
        <div class="card-body p-0">
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width: 10px">ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Status</th>
                <th>Gender</th> 
                <th style="width: 200px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datalist as $rs)
            <tr>
                <td>{{ $rs->id }}</td>
                
                <td>{{ \App\Models\Category::find($rs->category_id)->title ?? 'Category Not Found' }}</td>
                
                <td>{{ $rs->title }}</td>
                <td>₺{{ $rs->price }}</td>
                <td>{{ $rs->stock }}</td>
                <td>
                    @if($rs->image)
                        <img src="{{ Storage::url($rs->image) }}" height="40" alt="">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    @if($rs->status == 1)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Passive</span>
                    @endif
                </td>
                <td>{{ $rs->gender ?? 'Unisex' }}</td>
                <td>
                    <a href="{{ route('admin.products.show', ['product' => $rs->id]) }}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ route('admin.products.edit', ['product' => $rs->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <form action="{{ route('admin.products.destroy', ['product' => $rs->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bu ürünü silmek istediğinize emin misiniz?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </div>
</div>
@endsection