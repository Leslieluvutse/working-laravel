<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-400 to-indigo-600 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Welcome to the Application</h1>
        <div class="flex justify-center items-center">
            <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 mr-4">Register</a>
            <span class="text-gray-600">|</span>
            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 ml-4">Login</a>
        </div>
    </div>
</body>
</html>
