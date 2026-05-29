@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card card-dark">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Add New Page</h3>
        </div>
        <form action="{{ route('admin.informational.store') }}" method="POST">
            @csrf
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
                    <input type="text" name="title" class="form-control" id="title" placeholder="e.g., Privacy Policy" value="{{ old('title') }}" required>
                </div>

                <div class="form-group">
                    <label for="content">Page Content</label>
                    <textarea name="content" class="form-control" id="content" rows="10" required>{{ old('content') }}</textarea>
                    <small class="text-muted">You can enter your policy or informational text here.</small>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" id="status">
                        <option value="1" selected>Active</option>
                        <option value="0">Passive</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Page</button>
                <a href="{{ route('admin.informational.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection