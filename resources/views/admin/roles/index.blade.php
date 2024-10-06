@extends('layouts.admin')

@section('title', 'Partner Roles')

@section('content')
    <div class="container" style="max-width: 800px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; color: #333; margin-bottom: 20px;">Partner Roles</h1>
        @if(session('success'))
            <div class="alert alert-success" style="margin-bottom: 20px; padding: 10px; border-radius: 4px; background-color: #d4edda; color: #155724;">
                {{ session('success') }}
            </div>
        @endif
        <table class="table" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f8f9fa;">
                    <th style="padding: 10px; border-bottom: 2px solid #dee2e6; text-align: left;">ID</th>
                    <th style="padding: 10px; border-bottom: 2px solid #dee2e6; text-align: left;">Name</th>
                    <th style="padding: 10px; border-bottom: 2px solid #dee2e6; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr style="border-bottom: 1px solid #dee2e6;">
                        <td style="padding: 10px;">{{ $role->id }}</td>
                        <td style="padding: 10px;">{{ $role->name }}</td>
                        <td style="padding: 10px;">
                            <!-- Add actions like edit or delete here -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
