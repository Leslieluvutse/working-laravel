<!-- resources/views/partials/sidebar.blade.php -->
<div class="bg-gray-900 text-white p-4 w-full">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold">User Dashboard</h2>
        <nav class="flex space-x-4">
            <a href="{{ route('home') }}" class="flex items-center py-2 px-4 rounded hover:bg-gray-800">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 0 0 2 2h5V5H5a2 2 0 0 0-2 2zm13-2h5a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5V5zm-6 3v8m0-8H9m4 8h-2"></path>
                </svg>
                Dashboard
            </a>

                        <a href="{{ route('profile.view') }}" class="flex items-center py-2 px-4 rounded hover:bg-gray-800">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                View Profile
            </a>
            
            <a href="{{ route('profile.create') }}" class="flex items-center py-2 px-4 rounded hover:bg-gray-800">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create Profile
            </a>

            <a href="{{ route('profile.edit') }}" class="flex items-center py-2 px-4 rounded hover:bg-gray-800">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m0 0l3 3m-3-3l3-3"></path>
                </svg>
                Edit Profile
            </a>
            <form method="POST" action="{{ route('logout') }}" class="inline-block">
                @csrf
                <button type="submit" class="flex items-center py-2 px-4 rounded hover:bg-gray-800">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l-4-4 4-4m-6 8V8"></path>
                    </svg>
                    Logout
                </button>
            </form>
        </nav>
    </div>
</div>
@yield('content')