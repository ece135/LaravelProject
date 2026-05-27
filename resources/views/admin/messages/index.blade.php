@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Contact Messages Management</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sender Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Received Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messages as $msg)
                    <tr style="{{ $msg->status == 0 ? 'font-weight: bold; background-color: #f8f9fa;' : '' }}">
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>{{ $msg->subject }}</td>
                        <td>
                            @if($msg->status == 1)
                                <span class="badge badge-success">Read</span>
                            @else
                                <span class="badge badge-danger">Unread</span>
                            @endif
                        </td>
                        <td>{{ $msg->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.messages.show', $msg->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-envelope-open"></i> Read
                            </a>

                            <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this message?')">
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
                        <td colspan="6" class="text-center">No messages found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection