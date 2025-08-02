<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DinoBlog – Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('/images/DinoBlog.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <!-- 🧭 Fixed Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">DinoBlog</a>
            <div>
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-light text-success">Register</a>
            </div>
        </div>
    </nav>

    <!-- 🦕 Welcome Section -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg text-center p-5" style="max-width: 700px; width: 100%; margin-top: -70px; background-color: rgba(248, 249, 250, 0.9);">
            <h1 class="display-5 fw-bold text-success">Welcome to DinoBlog</h1>
            <p class="text-muted">🌋 Roaring through the ages since {{ date('Y') }} 🌋</p>
            <p class="mb-4">Unearth stories, share fossil-worthy facts, and become part of the DinoBlogger tribe!</p>

            <div class="row text-start mb-4">
                <div class="col-md-6 mb-3">
                    <div class="p-3 bg-success bg-opacity-10 rounded">
                        <h5 class="text-success fw-semibold">🦕 Share Your Discoveries</h5>
                        <p class="small text-muted">Post blogs on dino science, ancient worlds, or your favorite fossil finds.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="p-3 bg-success bg-opacity-10 rounded">
                        <h5 class="text-success fw-semibold">🌱 Join Our Dino Community</h5>
                        <p class="small text-muted">Connect with fellow enthusiasts, exchange knowledge, and roar louder together!</p>
                    </div>
                </div>
            </div>

            <a href="{{ route('register') }}" class="btn btn-success btn-lg px-5">
                Become a DinoBlogger
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>