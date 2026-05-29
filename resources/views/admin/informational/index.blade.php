@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Informational Pages</h3>
            <div class="card-tools">
                <a href="{{ route('admin.informational.create') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-plus"></i> Add New Page
                </a>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th>Page Title</th>
                        <th>URL </th>
                        <th style="width: 100px;">Status</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td><strong>{{ $page->title }}</strong></td>
                        <td class="text-muted">/{{ $page->slug }}</td>
                        <td>
                            @if($page->status == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Passive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.informational.edit', $page->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.informational.destroy', $page->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this page?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No pages found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection