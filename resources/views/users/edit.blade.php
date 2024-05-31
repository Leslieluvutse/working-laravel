<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Main content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-6">Edit User</h1>
            <form method="POST" action="{{ route('users.update', $user) }}">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block mb-1">Name</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-1">Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full p-2 border rounded">
                </div>
                <div>
                    <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
