@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card card-dark">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Edit Page</h3>
        </div>
        <form action="{{ route('admin.informational.update', $page->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="title">Page Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $page->title) }}" required>
                </div>

                <div class="form-group">
                    <label for="content">Page Content</label>
                    <textarea name="content" class="form-control" id="content" rows="10" required>{{ old('content', $page->content) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="status">
                        <option value="1" {{ $page->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $page->status == 0 ? 'selected' : '' }}>Passive</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Page</button>
                <a href="{{ route('admin.informational.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection