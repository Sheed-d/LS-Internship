@extends('layouts.dino')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">My Profile</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <!-- Add more profile info or settings here -->
        </div>
    </div>
</div>
@endsection