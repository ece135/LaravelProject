@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card card-dark">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Add New FAQ</h3>
        </div>
        <form action="{{ route('admin.faqs.store') }}" method="POST">
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
                    <label for="question">Question</label>
                    <input type="text" name="question" class="form-control" id="question" placeholder="e.g., How long does shipping take?" value="{{ old('question') }}" required>
                </div>

                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea name="answer" class="form-control" id="answer" rows="4" placeholder="e.g., Delivery takes 3-5 business days." required>{{ old('answer') }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="order_by">Display Order</label>
                            <input type="number" name="order_by" class="form-control" id="order_by" value="{{ old('order_by', 0) }}">
                            <small class="text-muted">Smaller numbers appear first</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="1">Active</option>
                                <option value="0">Passive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save FAQ</button>
                <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection