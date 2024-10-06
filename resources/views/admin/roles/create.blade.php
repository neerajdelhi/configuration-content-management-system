@extends('layouts.admin')

@section('content')
<div class="container" style="max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #333; margin-bottom: 20px;">Create Role</h1>
    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Role Name</label>
            <input type="text" name="name" id="name" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
            Create Role
        </button>
    </form>
</div>
@endsection
