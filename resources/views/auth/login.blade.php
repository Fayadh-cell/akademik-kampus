@extends('layout')

@section('title', 'Login - Sistem Akademik Kampus')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded @error('email') border-red-500 @enderror" required>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="password" class="block mb-2">Password</label>
                <input type="password" name="password" id="password" class="w-full p-2 border rounded @error('password') border-red-500 @enderror" required>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Masuk</button>
        </form>
        
        <p class="mt-4 text-center">Belum punya akun? <a href="/register" class="text-blue-500 hover:text-blue-700">Daftar sekarang</a></p>
    </div>
@endsection