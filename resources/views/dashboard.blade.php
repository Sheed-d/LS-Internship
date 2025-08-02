@extends('layouts.dino')


@section('content')
<div class="container-fluid bg-white bg-opacity-75 py-5 px-4 rounded shadow">
    
    <!-- 🦖 Hero Banner -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-success">Welcome to DinoBlog</h1>
        <p class="text-muted fs-5">Your personal dashboard for sharing fossil-worthy facts and discovering the ancient world.</p>
        <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg mt-3">Create a New Dino Post</a>
    </div>

    <div class="row">
        <!-- 📂 Sidebar Categories -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white fw-semibold">
                    Categories
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#" class="text-success text-decoration-none">Carnivores</a></li>
                    <li class="list-group-item"><a href="#" class="text-success text-decoration-none">Herbivores</a></li>
                    <li class="list-group-item"><a href="#" class="text-success text-decoration-none">Jurassic Era</a></li>
                    <li class="list-group-item"><a href="#" class="text-success text-decoration-none">Fossil Facts</a></li>
                </ul>
            </div>
        </div>

        <!-- 📰 Blog Feed -->
        <div class="col-md-9">
            <div class="row g-4">
                <!-- 🦕 Blog Card 1 -->
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="/images/t-rex.jpg" class="card-img-top" alt="T-Rex">
                        <div class="card-body">
                            <h5 class="card-title text-success fw-bold">The Mighty T-Rex</h5>
                            <p class="card-text">Roaring through the Late Cretaceous with bone-crushing jaws and a fearsome reputation.</p>
                            <a href="{{ route('posts.show', 1) }}" class="btn btn-outline-success btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- 🌱 Blog Card 2 -->
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="/images/stegosaurus.jpg" class="card-img-top" alt="Stegosaurus">
                        <div class="card-body">
                            <h5 class="card-title text-success fw-bold">Stegosaurus: Plates with Purpose</h5>
                            <p class="card-text">Discover how these plated giants defended themselves and thrived in prehistoric forests.</p>
                            <a href="{{ route('posts.show', 2) }}" class="btn btn-outline-success btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- 💨 Blog Card 3 -->
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="/images/pterodactyl.jpg" class="card-img-top" alt="Pterodactyl">
                        <div class="card-body">
                            <h5 class="card-title text-success fw-bold">Pterodactyl: Ruler of the Skies</h5>
                            <p class="card-text">Not a dinosaur, but a flying reptile that ruled the winds with wings of wonder.</p>
                            <a href="{{ route('posts.show', 3) }}" class="btn btn-outline-success btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- 🧠 Blog Card 4 -->
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="/images/dino-intelligence.jpg" class="card-img-top" alt="Dino Intelligence">
                        <div class="card-body">
                            <h5 class="card-title text-success fw-bold">Were Dinosaurs Smart?</h5>
                            <p class="card-text">Explore the cognitive evolution and brain sizes of different species throughout time.</p>
                            <a href="{{ route('posts.show', 4) }}" class="btn btn-outline-success btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection