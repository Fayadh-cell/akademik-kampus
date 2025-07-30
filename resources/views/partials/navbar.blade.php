<nav class="bg-blue-900 text-white shadow-lg">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center gap-2">
            <span class="text-2xl font-extrabold tracking-wide">Kampus Akademik</span>
        </div>
        <div class="flex gap-2 items-center">
            <a href="/"
                class="px-4 py-2 rounded transition-colors duration-200 hover:bg-blue-700 hover:text-gray-100">Beranda</a>
            @guest
            <a href="/login"
                class="px-4 py-2 rounded transition-colors duration-200 hover:bg-blue-700 hover:text-gray-100">Login</a>
            <a href="/register"
                class="px-4 py-2 rounded transition-colors duration-200 hover:bg-blue-700 hover:text-gray-100">Daftar</a>
            @else
            <a href="/dashboard"
                class="px-4 py-2 rounded transition-colors duration-200 hover:bg-blue-700 hover:text-gray-100">Dashboard</a>
            <form action="/logout" method="POST" class="inline">
                @csrf
                <button type="submit"
                    class="px-4 py-2 rounded transition-colors duration-200 hover:bg-blue-700 hover:text-gray-100">Logout</button>
            </form>
            @endguest
        </div>
    </div>
</nav>