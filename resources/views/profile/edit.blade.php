<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</head>
<body class="bg-gray-100  ">
    @extends('layouts.userdash')
   
    @section('content')
     <div class="min-h-screen">
        {{-- @include('layouts.userdash') --}}
    <div class="max-w-6xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-white mt-20">
        <h2 class="text-2xl font-bold mb-6 text-center">{{ __('Edit Profile') }}</h2>

        @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" value="{{ $profile->name }}" required autocomplete="name" autofocus
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('name') border-red-500 @enderror">
                
                @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                <input id="email" type="email" name="email" value="{{ $profile->email }}" required autocomplete="email"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('email') border-red-500 @enderror">
                
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('Phone Number') }}</label>
                <input id="phone" type="text" name="phone" value="{{ $profile->phone }}" required autocomplete="phone"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('phone') border-red-500 @enderror">
                
                @error('phone')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">{{ __('Address') }}</label>
                <input id="address" type="text" name="address" value="{{ $profile->address }}" required autocomplete="address"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('address') border-red-500 @enderror">
                
                @error('address')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="profile_image" class="block text-sm font-medium text-gray-700">{{ __('Profile Image') }}</label>
                <input id="profile_image" type="file" name="profile_image"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('profile_image') border-red-500 @enderror">
                
                @error('profile_image')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror

                @if ($profile->profile_image)
                    <img src="{{ Storage::url('profile_images/' . $profile->profile_image) }}" alt="{{ $profile->name }}" class="mt-4 w-32 h-32 rounded-full object-cover">
                @endif
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    {{ __('Update Profile') }}
                </button>
            </div>
        </form>
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

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>
