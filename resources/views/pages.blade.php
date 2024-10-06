@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Page</h1>
    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Page Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Page</button>
    </form>
</div>
@endsection
