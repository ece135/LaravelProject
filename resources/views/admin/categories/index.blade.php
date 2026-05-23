@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('categories.create') }}" class="btn btn-info">Add Category</a>
    </div>
    <div class="card-body">
        <h3 class="mb-3">Categories List</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Parent</th>
                    <th>Title</th>
                    <th>Keywords</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th style="width: 200px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datalist as $rs)
                <tr>
                    <td>{{ $rs->id }}</td>
                    <td>Main Category</td> <td>{{ $rs->title }}</td>
                    <td>{{ $rs->keywords }}</td>
                    <td>{{ $rs->description }}</td>
                    <td>
                        @if($rs->image)
                            <img src="{{ Storage::url($rs->image) }}" height="40" alt="">
                        @endif
                    </td>
                    <td>
                        @if($rs->status == 1)
                            <span class="badge bg-success">True</span>
                        @else
                            <span class="badge bg-danger">False</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.categories.show', ['category' => $rs->id]) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('admin.categories.edit', ['category' => $rs->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.categories.destroy', ['category' => $rs->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this category?');">
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
@endsection
                   
            
          
               
            
  