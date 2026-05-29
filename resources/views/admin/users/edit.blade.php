@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card card-dark">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Edit User</h3>
        </div>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
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
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="form-group">
                    <label for="role">User Role</label>
                    <select name="role" class="form-control" id="role">
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    <small class="text-muted">Warning: Users with the admin role can access this panel!</small>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection