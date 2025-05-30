@extends('layout')

@section('title', 'Edit Mahasiswa - Sistem Akademik Kampus')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Edit Mahasiswa</h1>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('students.update', $student->student_id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="name" class="block mb-2">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded @error('name') border-red-500 @enderror" value="{{ $student->name }}" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded @error('email') border-red-500 @enderror" value="{{ $student->email }}" required>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="nim" class="block mb-2">NIM</label>
                <input type="text" name="nim" id="nim" class="w-full p-2 border rounded @error('nim') border-red-500 @enderror" value="{{ $student->nim }}" required>
                @error('nim')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="major" class="block mb-2">Prodi</label>
                <input type="text" name="major" id="major" class="w-full p-2 border rounded @error('major') border-red-500 @enderror" value="{{ $student->major }}" required>
                @error('major')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="enrollment_year" class="block mb-2">Tahun Masuk</label>
                <input type="date" name="enrollment_year" id="enrollment_year" class="w-full p-2 border rounded @error('enrollment_year') border-red-500 @enderror" value="{{ $student->enrollment_year }}" required>
                @error('enrollment_year')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Perubahan</button>
            <a href="{{ route('students.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Batal</a>
        </form>
    </div>
@endsection