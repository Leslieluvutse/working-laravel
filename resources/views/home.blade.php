<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <!-- Include any additional stylesheets or styles here -->
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-semibold mb-4">User Dashboard</h1>
        <p class="text-lg mb-4">Welcome, {{ Auth::user()->name }}</p>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-blue-600 hover:text-blue-800">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>
