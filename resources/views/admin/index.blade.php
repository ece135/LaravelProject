@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="jumbotron bg-white shadow-sm border rounded">
        <h1 class="display-4">Welcome to Admin Dashboard</h1>
        <p class="lead">You can manage your store's products, orders, reviews, and settings from this dashboard.</p>
        <hr class="my-4">
        <p class="text-muted">In future updates, we will add beautiful cards summarizing your store's daily earnings, total order counts, and recent activities.</p>
    </div>

    <div class="row text-center">
        <div class="col-md-3">
            <div class="p-3 mb-3 bg-light border rounded shadow-sm">
                <h5>Products Zone</h5>
                <p class="text-muted">Manage your inventory smoothly.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 mb-3 bg-light border rounded shadow-sm">
                <h5>Orders Zone</h5>
                <p class="text-muted">Track sales and shipments.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 mb-3 bg-light border rounded shadow-sm">
                <h5>Reviews Zone</h5>
                <p class="text-muted">Approve or reject customer feedback.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 mb-3 bg-light border rounded shadow-sm">
                <h5>Settings Zone</h5>
                <p class="text-muted">Control your global store variables.</p>
            </div>
        </div>
    </div>
</div>
@endsection