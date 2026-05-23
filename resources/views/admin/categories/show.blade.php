@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Category Detail: {{ $category->title }}</h3>
        <div class="card-tools">
            <a href="{{ route('categories.index') }}" class="btn btn-default btn-sm">Back to List</a>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th style="width: 200px">ID</th>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <th>Parent ID</th>
                    <td>{{ $category->parent_id ?? 'Main Category' }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $category->title }}</td>
                </tr>
                <tr>
                    <th>Keywords</th>
                    <td>{{ $category->keywords }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $category->description }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        @if($category->image)
                            <img src="{{ Storage::url($category->image) }}" height="100" alt="">
                        @else
                            No Image
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if($category->status == 1)
                            <span class="badge bg-success">True (Active)</span>
                        @else
                            <span class="badge bg-danger">False (Passive)</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $category->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $category->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
@endsection