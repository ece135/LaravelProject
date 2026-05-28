@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card card-dark card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
            <h3 class="card-title ml-3 mt-2">Global Settings</h3>
            <ul class="nav nav-tabs float-right" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-general-tab" data-toggle="pill" href="#custom-tabs-general" role="tab" aria-selected="true">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-contact-tab" data-toggle="pill" href="#custom-tabs-contact" role="tab" aria-selected="false">Contact Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-social-tab" data-toggle="pill" href="#custom-tabs-social" role="tab" aria-selected="false">Social Media</a>
                </li>
            </ul>
        </div>
        
        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-general" role="tabpanel">
                        <div class="form-group">
                            <label>Site Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $setting->title }}">
                        </div>
                        <div class="form-group">
                            <label>Site Description</label>
                            <input type="text" name="description" class="form-control" value="{{ $setting->description }}">
                        </div>
                        <div class="form-group">
                            <label>About Us</label>
                            <textarea name="about_us" class="form-control" rows="4">{{ $setting->about_us }}</textarea>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="custom-tabs-contact" role="tabpanel">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" value="{{ $setting->email }}">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="{{ $setting->phone }}">
                        </div>
                        <div class="form-group">
                            <label>Physical Address</label>
                            <textarea name="address" class="form-control" rows="3">{{ $setting->address }}</textarea>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="custom-tabs-social" role="tabpanel">
                        <div class="form-group">
                            <label>Facebook URL</label>
                            <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}">
                        </div>
                        <div class="form-group">
                            <label>Instagram URL</label>
                            <input type="text" name="instagram" class="form-control" value="{{ $setting->instagram }}">
                        </div>
                        <div class="form-group">
                            <label>Twitter URL</label>
                            <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter }}">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Save Settings
                </button>
            </div>
        </form>
    </div>
</div>
@endsection