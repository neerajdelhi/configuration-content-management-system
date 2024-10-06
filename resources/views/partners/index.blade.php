@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Partners</h1>
    <a href="{{ route('partners.create') }}" class="btn btn-primary">Add Partner</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partners as $partner)
            <tr>
                <td>{{ $partner->name }}</td>
                <td>{{ $partner->email }}</td>
                <td>
                    <a href="{{ route('partners.edit', $partner) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('partners.destroy', $partner) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
