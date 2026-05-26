@extends('layouts.admin')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Product</h3>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') 
        
        <div class="card-body">
            
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $rs)
                        <option value="{{ $rs->id }}" {{ $rs->id == $product->category_id ? 'selected' : '' }}>
                            {{ $rs->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ $product->title }}" required>
            </div>
            
            <div class="form-group">
                <label>Keywords</label>
                <input type="text" class="form-control" name="keywords" value="{{ $product->keywords }}">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="6">{{ $product->description }}</textarea>
            </div>
           
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender" value="{{ $product->gender }}" required>
                    <option value="">Select Gender</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Unisex">Unisex</option>
                </select>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" required>
                        <option value="1">Active</option>
                        <option value="0">Passive</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}" required>
                </div>

                <div class="col-md-3">
                    <label>Stock</label>
                    <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" required>
                </div>

                <div class="col-md-3">
                    <label>Minimum Stock</label>
                    <input type="number" class="form-control" name="minimum_stock" value="{{ $product->minimum_stock }}">
                </div>

                <div class="col-md-3">
                    <label>Discount</label>
                    <input type="number" class="form-control" name="discount" value="{{ $product->discount }}">
                </div>
            </div>

            <div class="form-group">
                <label for="image">Product Image</label>
                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" onchange="this.nextElementSibling.innerText = this.files[0].name">
                    <label class="custom-file-label" for="image">Choose file...</label>
                </div>
            </div>
            

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save Product</button>
        </div>
    </form>
</div>
@endsection
