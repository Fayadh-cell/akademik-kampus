@extends('layout')

@section('title', 'Daftar - Sistem Akademik Kampus')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar Akun</h2>
        
        <form action="/register" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="name" class="block mb-2">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded @error('name') border-red-500 @enderror" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
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
            
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border rounded" required>
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Daftar</button>
        </form>
        
        <p class="mt-4 text-center">Sudah punya akun? <a href="/login" class="text-blue-500 hover:text-blue-700">Masuk sekarang</a></p>
    </div>
@endsection