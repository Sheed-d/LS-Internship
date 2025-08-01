<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white px-8 py-4 flex justify-between items-center">
        <div class="text-xl font-bold">My App</div>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700">Login</a>
            <a href="{{ route('register') }}" class="bg-green-600 px-4 py-2 rounded hover:bg-green-700">Register</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to My App</h1>
        <p class="text-lg text-gray-600">This is my opening page!</p>
    </main>

    <!-- Footer (optional) -->
    <footer class="bg-gray-200 text-center py-4 text-sm text-gray-600">
        © 2025 My App. All rights reserved.
    </footer>

</body>
</html>