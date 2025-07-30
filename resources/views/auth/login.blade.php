@extends('layout')

@section('title', 'Login - Sistem Akademik Kampus')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-blue-900 to-black">
    <div
        class="max-w-md w-full bg-gradient-to-tr from-gray-800 via-blue-800 to-gray-900 p-8 rounded-2xl shadow-2xl border border-blue-700/30 backdrop-blur-lg">
        <h2 class="text-3xl font-extrabold mb-8 text-center text-blue-400 tracking-wide drop-shadow-lg">Login</h2>

        @if(session('error'))
        <div
            class="bg-gradient-to-r from-red-600 to-pink-600 border border-red-400 text-white px-4 py-3 rounded mb-4 shadow">
            {{ session('error') }}
        </div>
        @endif

        <form action="/login" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block mb-2 text-blue-300 font-semibold">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full p-3 bg-gray-900 text-blue-200 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition @error('email') border-red-500 focus:ring-red-500 @enderror"
                    required autocomplete="username">
                @error('email')
                <p class="text-pink-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block mb-2 text-blue-300 font-semibold">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full p-3 bg-gray-900 text-blue-200 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition @error('password') border-red-500 focus:ring-red-500 @enderror"
                    required autocomplete="current-password">
                @error('password')
                <p class="text-pink-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full cursor-pointer bg-gradient-to-r from-blue-600 to-cyan-500 text-white p-3 rounded-xl font-bold hover:from-blue-700 hover:to-cyan-600 transition shadow-lg hover:scale-105">Masuk</button>
        </form>

        <p class="mt-6 text-center text-blue-300">Belum punya akun? <a href="/register"
                class="text-cyan-400 hover:text-cyan-300 underline transition">Daftar sekarang</a></p>
    </div>
</div>
@endsection