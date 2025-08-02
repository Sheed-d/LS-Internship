<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register – DinoBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url('/images/DinoBlog.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 shadow-lg w-100" style="max-width: 500px; background-color: rgba(255,255,255,0.92);">
            
            <!-- Header -->
            <div class="text-center mb-4">
                <h2 class="fw-bold text-success">Register for DinoBlog</h2>
                <p class="text-muted small">Join our community and start roaring 🦖</p>
            </div>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label text-success">Name</label>
                    <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
                   @if (isset($errors))
                        @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    @endif
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label text-success">Email</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    @if (isset($errors))
                        @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    @endif
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label text-success">Password</label>
                    <input id="password" type="password" name="password" class="form-control" required>
                    @if (isset($errors))
                        @error('password')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label text-success">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                    @if (isset($errors))
                        @error('password_confirmation')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    @endif
                </div>

                <!-- CTA -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="{{ route('login') }}" class="small text-success">Already registered?</a>
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success mt-3 text-center">
                    {{ session('success') }}
                </div>
            @endif

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>