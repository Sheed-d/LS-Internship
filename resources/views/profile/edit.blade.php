<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dino Profile Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('/images/DinoBlog.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
        }

        .overlay-panel {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        h1, h2 {
            color: #ffd700;
        }

        label {
            color: #f8f9fa;
        }

        .form-control {
            background-color: rgba(255,255,255,0.9);
        }

        .btn-dino {
            background-color: #28a745;
            border: none;
            color: #fff;
        }

        .btn-dino:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h1 class="text-center mb-5">Welcome to Dino Blog 🦕</h1>

    <div class="row justify-content-center">
        <div class="col-md-8 overlay-panel">

            <h2 class="mb-4">Profile Information</h2>
            <form onsubmit="event.preventDefault(); window.location.href='/dashboard';">
                <div class="mb-3 text-center">
                    <img src="/images/default-avatar.png" alt="Avatar" class="rounded-circle mb-2" width="100">
                    <input type="file" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Enter full name">
                </div>

                <div class="mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter email">
                </div>

                <h2 class="mt-4 mb-3">Update Password</h2>
                <div class="mb-3">
                    <label for="password">New Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Enter new password">
                </div>

                <div class="mb-3">
                    <label for="confirm">Confirm Password</label>
                    <input type="password" id="confirm" class="form-control" placeholder="Confirm new password">
                </div>

                <hr class="border-light">

                <h2 class="text-danger mt-4 mb-3">Delete Account</h2>
                <p>If you delete your account, all data will be lost forever. Proceed with caution!</p>
                <button type="button" class="btn btn-danger">Delete Account</button>

                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-dino">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>