@extends('layouts.dino')

@section('content')
    <div class="container py-4 px-3 mx-auto bg-light rounded shadow-sm" style="max-width: 600px;">
        <h2 class="mb-4 text-center text-success">Create Dino Post</h2>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-bold">🦕 Dino Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="form-control border-success" 
                    value="{{ old('name') }}" 
                    required
                    placeholder="e.g. Tyrannosaurus"
                >
            </div>

            <div class="mb-3">
                <label for="species" class="form-label fw-bold">🌿 Species</label>
                <input 
                    type="text" 
                    name="species" 
                    id="species" 
                    class="form-control border-success" 
                    value="{{ old('species') }}" 
                    required
                    placeholder="e.g. Theropod"
                >
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success fw-bold">
                    ✅ Create Dino Post
                </button>
            </div>
        </form>
    </div>
@endsection