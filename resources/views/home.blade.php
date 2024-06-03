<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>
<body class="bg-gray-100">
    @extends('layouts.userdash')
    @section('content')
            <div class="min-h-screen ">
        <!-- Main Content -->
        <div class="w-3/4 p-6 mx-auto mt-10">
            <h1 class="text-3xl font-semibold mb-4">User Dashboard</h1>
            <p class="text-lg mb-4">Welcome, {{ Auth::user()->name }}</p>
            
            {{-- @if (Auth::user()->profile_image)
                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="{{ Auth::user()->name }}" class="w-32 h-32 rounded-full object-cover mb-4">
            @else
                <p>No profile image available.</p>
            @endif --}}

            <p>No profile yet. <a href="{{ route('profile.create') }}" class="text-blue-600 hover:text-blue-800">Create Profile</a></p>
        </div>
    </div>

    @endsection

    @if (session('status'))
        <script>
            Toastify({
                text: "{{ session('status') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "#4caf50",
            }).showToast();
        </script>
    @endif
</body>
</html>
