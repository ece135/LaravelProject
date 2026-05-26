@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Product Reviews Management</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reviews as $rs)
                    <tr>
                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->user->name ?? 'Unknown User' }}</td>
                        <td>{{ $rs->product->title ?? 'Deleted Product' }}</td>
                        <td>
                            @for($i=1; $i<=5; $i++)
                                <span class="fa fa-star {{ $i <= $rs->rate ? 'text-warning' : 'text-muted' }}">★</span>
                            @endfor
                        </td>
                        <td>{{ $rs->comment }}</td>
                        <td>
                            @if($rs->status == 1)
                                <span class="badge badge-success">Approved</span>
                            @else
                                <span class="badge badge-warning">Pending</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('admin.reviews.status', $rs->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-sm {{ $rs->status == 1 ? 'btn-secondary' : 'btn-success' }}">
                                    {{ $rs->status == 1 ? 'Reject' : 'Approve' }}
                                </button>
                            </form>

                            <form action="{{ route('admin.reviews.destroy', $rs->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No reviews found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection