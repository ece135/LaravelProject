<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Product Details: <strong>{{ $product->title }}</strong></h3>
    </div>
    
    <div class="card-body p-0">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th style="width: 200px">ID</th>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $product->category->title ?? 'Unknown' }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $product->title }}</td>
                </tr>
                <tr>
                    <th>Keywords</th>
                    <td>{{ $product->keywords }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>${{ number_format($product->price, 2) }}</td>
                </tr>
                <tr>
                    <th>Stock</th>
                    <td>{{ $product->stock }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $product->gender }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if($product->status == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Passive</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        @if($product->image)
                            <img src="{{ Storage::url($product->image) }}" style="height: 150px; border-radius: 8px;">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="card-footer">
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back to List</a>
        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit Product</a>
    </div>
</div>