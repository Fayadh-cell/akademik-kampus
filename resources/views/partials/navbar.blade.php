<nav class="bg-blue-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl font-bold">Kampus Akademik</div>
        
        <div class="flex">
            <a href="/" class="px-4 py-2 rounded hover:bg-blue-700">Beranda</a>
            @guest
                <a href="/login" class="px-4 py-2 rounded hover:bg-blue-700">Login</a>
                <a href="/register" class="px-4 py-2 rounded hover:bg-blue-700">Daftar</a>
            @else
                <a href="/dashboard" class="px-4 py-2 rounded hover:bg-blue-700">Dashboard</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded hover:bg-blue-700">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</nav>