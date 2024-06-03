<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @extends('layouts.sidebar')

    @section('content')
        <div class=" justify-between">
        <!-- Sidebar -->
        <!-- Main content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold">Welcome to the Dashboard</h1>
        </div>
    </div>
    @endsection
</body>
</html>
