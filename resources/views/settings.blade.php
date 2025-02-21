@extends('theme.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Settings</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Settings</li>
    </ol>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-cogs me-1"></i>
            Add New Setting
        </div>
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="setting_key" class="form-label">Setting Key</label>
                    <input type="text" class="form-control" id="setting_key" name="setting_key" required>
                </div>
                <div class="mb-3">
                    <label for="setting_value" class="form-label">Setting Value</label>
                    <input type="text" class="form-control" id="setting_value" name="setting_value" required>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <i class="fas fa-list me-1"></i>
            Stored Settings
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Setting Key</th>
                        <th>Setting Value</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($settings as $setting)
                        <tr>
                            <form action="{{ route('settings.update', $setting->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <td>
                                    <input type="text" name="setting_key" value="{{ $setting->setting_key }}" class="form-control">
                                </td>
                                <td>
                                    <input type="text" name="setting_value" value="{{ $setting->setting_value }}" class="form-control">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                                    <form action="{{ route('settings.delete', $setting->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this setting?');">Delete</button>
                                    </form>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
