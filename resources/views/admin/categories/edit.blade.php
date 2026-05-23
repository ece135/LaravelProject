@extends('layouts.admin')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Category: {{ $category->title }}</h3>
    </div>
    
    <form action="{{ route('admin.categories.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <div class="card-body">
            
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ $category->title }}" required>
            </div>
            
            <div class="form-group">
                <label>Keywords</label>
                <input type="text" class="form-control" name="keywords" value="{{ $category->keywords }}">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="3">{{ $category->description }}</textarea>
            </div>
            
            <div class="form-group">
                <label>Category Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="categoryImage">
                        <label class="custom-file-label" for="categoryImage">Choose new file if you want to change</label>
                    </div>
                </div>
                @if($category->image)
                    <p class="mt-2">Current Image:</p>
                    <img src="{{ Storage::url($category->image) }}" height="60" alt="">
                @endif
            </div>
            
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" required>
                    <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>True</option>
                    <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>False</option>
                </select>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Category</button>
        </div>
    </form>
</div>
@endsection