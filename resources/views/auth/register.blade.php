@extends('layout')

@section('title', 'Daftar - Sistem Akademik Kampus')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 via-purple-900 to-black">
    <div
        class="max-w-md w-full bg-gradient-to-tr from-gray-900 via-gray-800 to-gray-900 p-8 rounded-2xl shadow-2xl border border-blue-700/30 backdrop-blur-lg">
        <h2
            class="text-3xl font-extrabold mb-8 text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 drop-shadow-lg">
            Daftar Akun
        </h2>

        <form action="/register" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-blue-300">Nama Lengkap</label>
                <input type="text" name="name" id="name"
                    class="w-full p-3 bg-gray-800 border border-blue-500/40 rounded-lg text-white focus:ring-2 focus:ring-blue-500/60 transition @error('name') border-red-500 @enderror"
                    required autocomplete="name">
                @error('name')
                <p class="text-pink-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-blue-300">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full p-3 bg-gray-800 border border-blue-500/40 rounded-lg text-white focus:ring-2 focus:ring-blue-500/60 transition @error('email') border-red-500 @enderror"
                    required autocomplete="email">
                @error('email')
                <p class="text-pink-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-blue-300">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full p-3 bg-gray-800 border border-blue-500/40 rounded-lg text-white focus:ring-2 focus:ring-blue-500/60 transition @error('password') border-red-500 @enderror"
                    required autocomplete="new-password">
                @error('password')
                <p class="text-pink-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-blue-300">Konfirmasi
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full p-3 bg-gray-800 border border-blue-500/40 rounded-lg text-white focus:ring-2 focus:ring-blue-500/60 transition"
                    required autocomplete="new-password">
            </div>

            <button type="submit"
                class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white font-bold text-lg shadow-lg hover:scale-105 hover:from-blue-700 hover:to-pink-700 transition-transform duration-200">
                Daftar
            </button>
        </form>

        <p class="mt-6 text-center text-blue-300">
            Sudah punya akun?
            <a href="/login" class="text-pink-400 hover:text-blue-400 underline transition">Masuk sekarang</a>
        </p>
    </div>
</div>
@endsection