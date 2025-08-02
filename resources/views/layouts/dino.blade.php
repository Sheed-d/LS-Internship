<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DinoBlog Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('/images/DinoBlog.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <!-- 🧭 Custom Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">DinoBlog</a>
            <div class="d-flex align-items-center">
                @auth
                    <span class="text-white me-3">Welcome, {{ Auth::user()->name }}</span>
                    <a href="{{ route('profile.show') }}" class="btn btn-outline-light btn-sm me-2">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-light btn-sm text-success">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <!-- 🦕 Main Content Area -->
    <main class="py-5">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>