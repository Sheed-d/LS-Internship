@extends('layouts.dino')

@section('content')
    <h2>Create Dino Post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Dino Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
        <label for="species" class="form-label">Species</label>
        <input type="text" name="species" id="species" class="form-control" value="{{ old('species') }}" required>
    </div>

    <button type="submit" class="btn btn-success">Create Dino Post</button>
</form>
@endsection