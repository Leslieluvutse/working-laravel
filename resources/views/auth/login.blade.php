<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 rounded shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block mb-1" for="email">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1" for="password">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 border rounded" required>
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember Me</label>
                </div>
                <div>
                    <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
