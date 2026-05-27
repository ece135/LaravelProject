@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-dark card-outline">
                <div class="card-header bg-dark text-white">
                    <h3 class="card-title">Message Details</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.messages.index') }}" class="btn btn-sm btn-light text-dark">
                            <i class="fas fa-arrow-left"></i> Back to Messages
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-md-6">
                            <h5><strong>From:</strong> {{ $order->name ?? $message->name }}</h5>
                            <p class="text-muted mb-0"><strong>Email:</strong> <a href="mailto:{{ $message->email }}">{{ $message->email }}</a></p>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <p class="text-muted mb-0"><strong>Date:</strong> {{ $message->created_at->format('d F Y H:i') }}</p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5><strong>Subject:</strong> {{ $message->subject }}</h5>
                    </div>

                    <div class="form-group border p-3 bg-light rounded" style="min-height: 150px; white-space: pre-wrap;">
                        {{ $message->message }}
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="btn btn-primary">
                        <i class="fas fa-reply"></i> Reply via Email
                    </a>

                    <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this message?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Delete Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection