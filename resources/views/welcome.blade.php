@extends('layout')

@section('title', 'Beranda - Sistem Akademik Kampus')

@section('content')
    <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-16 rounded-lg mb-8">
        <h1 class="text-4xl font-bold text-center mb-4">Selamat Datang di Sistem Akademik Kampus</h1>
        <p class="text-center text-xl mb-8">Layanan akademik terintegrasi untuk mahasiswa dan dosen</p>
        <div class="flex justify-center">
            <a href="/login" class="bg-white text-blue-700 px-6 py-3 rounded-lg font-bold hover:bg-gray-100">Masuk Sekarang</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Fitur Utama</h2>
            <ul class="list-disc pl-4">
                <li class="mb-2">Manajemen Mahasiswa</li>
                <li class="mb-2">Manajemen Mata Kuliah</li>
                <li class="mb-2">Manajemen Dosen</li>
                <li>Pendaftaran Mata Kuliah</li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Keuntungan sistem</h2>
            <ul class="list-disc pl-4">
                <li class="mb-2">Akses data akademik real-time</li>
                <li class="mb-2">Integrasi dengan sistem e-Learning</li>
                <li class="mb-2">Dukungan multi-platform</li>
                <li>Keamanan data terjamin</li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Hubungi Kami</h2>
            <p>Butuh bantuan? Hubungi tim akademik kami:</p>
            <p class="mt-2">Email: <a href="mailto:akademik@kampus.edu" class="text-blue-500 hover:text-blue-700">akademik@kampus.edu</a></p>
            <p class="mt-2">Telp: (021) 123-4567</p>
        </div>
    </div>
@endsection