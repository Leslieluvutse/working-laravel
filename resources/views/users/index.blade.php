<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
 @extends('layouts.sidebar')

 @section('content')
    <div class="">
        <!-- Main content -->
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-6">Manage Users</h1>
            <table class="min-w-full bg-white text-center text-2xl">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b ">Name</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($users as $user)
                        <tr >
                            <td class="py-2 px-4 border-b font-semibold">{{ $user->name }}</td>
                            <td class="py-2 px-4 border-b font-semibold">{{ $user->email }}</td>
                            <td class="py-2 px-4 border-b font-semibold">
                                <a href="{{ route('users.edit', $user) }}" class="text-blue-500">Edit</a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 @endsection
</body>
</html>
