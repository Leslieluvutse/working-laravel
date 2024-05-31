<div class="bg-gray-900 text-white w-64 p-4">
    <h2 class="text-2xl font-bold mb-4">Admin Dashboard</h2>
    <nav>
        <a href="{{ route('dashboard') }}" class="flex items-center py-2 px-4 rounded hover:bg-gray-800">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 0 0 2 2h5V5H5a2 2 0 0 0-2 2zm13-2h5a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5V5zm-6 3v8m0-8H9m4 8h-2"></path>
            </svg>
            Dashboard
        </a>
        <a href="{{ route('users.index') }}" class="flex items-center py-2 px-4 rounded hover:bg-gray-800">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            Manage Users
        </a>
        <a href="{{ route('register') }}" class="flex items-center py-2 px-4 rounded hover:bg-gray-800">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Create User
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left flex items-center py-2 px-4 rounded hover:bg-gray-800">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
                Logout
            </button>
        </form>
    </nav>
</div>
