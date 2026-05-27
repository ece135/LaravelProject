@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card card-dark">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">Edit FAQ</h3>
        </div>
        <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">
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
                    <label for="question">Question</label>
                    <input type="text" name="question" class="form-control" id="question" value="{{ old('question', $faq->question) }}" required>
                </div>

                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea name="answer" class="form-control" id="answer" rows="4" required>{{ old('answer', $faq->answer) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="order_by">Display Order</label>
                            <input type="number" name="order_by" class="form-control" id="order_by" value="{{ old('order_by', $faq->order_by) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="1" {{ $faq->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $faq->status == 0 ? 'selected' : '' }}>Passive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update FAQ</button>
                <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection