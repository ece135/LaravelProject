@extends('layouts.admin')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Product</h3>
    </div>
    
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="card-body">
            
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id" required>
                    <option value="">Select Category</option>
                </select>
            </div>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            
            <div class="form-group">
                <label>Keywords</label>
                <input type="text" class="form-control" name="keywords">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="4"></textarea>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" required>
                </div>

                <div class="col-md-3">
                    <label>Stock</label>
                    <input type="number" class="form-control" name="quantity"required>
                </div>

                <div class="col-md-3">
                    <label>Minimum Stock</label>
                    <input type="number" class="form-control" name="minquantity">
                </div>

                <div class="col-md-3">
                    <label>Discount</label>
                    <input type="number" class="form-control" name="discount" >
                </div>
            </div>

            <div class="form-group">
                <label>Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="productImage">
                        <label class="custom-file-label" for="productImage">Choose file</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" required>
                    <option value="1">Active</option>
                    <option value="0">Passive</option>
                </select>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save Product</button>
        </div>
    </form>
</div>
@endsection