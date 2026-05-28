@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Frequently Asked Questions</h3>
            <div class="card-tools">
                <a href="{{ route('admin.faqs.create') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-plus"></i> Add New FAQ
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
                        <th style="width: 80px;">Order</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th style="width: 100px;">Status</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($faqs as $faq)
                    <tr>
                        <td class="text-center"><span class="badge badge-secondary">{{ $faq->order_by }}</span></td>
                        <td><strong>{{ $faq->question }}</strong></td>
                        <td>{{ Str::limit($faq->answer, 100) }}</td>
                        <td>
                            @if($faq->status == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Passive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this FAQ?')">
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
                        <td colspan="5" class="text-center">No FAQs found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection