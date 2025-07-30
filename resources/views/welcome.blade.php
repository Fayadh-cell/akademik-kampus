@extends('layout')

@section('title', 'Beranda - Sistem Akademik Kampus')

@section('content')
<div class="min-h-screen p-8 bg-gradient-to-br from-blue-50 via-white to-blue-100">
    <div
        class="relative bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white p-14 rounded-3xl shadow-xl mb-12 overflow-hidden">
        <div class="absolute inset-0 opacity-20 pointer-events-none"
            style="background: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>
        <h1 class="text-5xl font-extrabold text-center mb-6 tracking-tight drop-shadow-lg">Selamat Datang di Sistem
            Akademik Kampus</h1>
        <p class="text-center text-2xl mb-8 font-medium">Layanan akademik terintegrasi untuk mahasiswa dan dosen</p>
        <div class="flex justify-center">
            <a href="/login"
                class="bg-white/90 text-blue-700 px-8 py-4 rounded-xl font-bold shadow-lg hover:bg-blue-100 transition-all duration-200 hover:scale-105">
                Masuk Sekarang
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div
            class="bg-white/80 backdrop-blur-lg p-8 rounded-2xl shadow-lg border border-blue-100 hover:shadow-2xl transition-all duration-200">
            <div class="flex items-center mb-4">
                <svg class="w-8 h-8 text-blue-500 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
                <h2 class="text-2xl font-bold tracking-wide">Fitur Utama</h2>
            </div>
            <ul class="space-y-2 pl-2 text-gray-700 font-medium">
                <li>Manajemen Mahasiswa</li>
                <li>Manajemen Mata Kuliah</li>
                <li>Manajemen Dosen</li>
                <li>Pendaftaran Mata Kuliah</li>
            </ul>
        </div>
        <div
            class="bg-white/80 backdrop-blur-lg p-8 rounded-2xl shadow-lg border border-indigo-100 hover:shadow-2xl transition-all duration-200">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-8 h-8 text-indigo-500 mr-3"
                    fill="currentColor">
                    <!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M439.4 96L448 96C483.3 96 512 124.7 512 160L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 160C128 124.7 156.7 96 192 96L200.6 96C211.6 76.9 232.3 64 256 64L384 64C407.7 64 428.4 76.9 439.4 96zM376 176C389.3 176 400 165.3 400 152C400 138.7 389.3 128 376 128L264 128C250.7 128 240 138.7 240 152C240 165.3 250.7 176 264 176L376 176zM256 320C256 302.3 241.7 288 224 288C206.3 288 192 302.3 192 320C192 337.7 206.3 352 224 352C241.7 352 256 337.7 256 320zM288 320C288 333.3 298.7 344 312 344L424 344C437.3 344 448 333.3 448 320C448 306.7 437.3 296 424 296L312 296C298.7 296 288 306.7 288 320zM288 448C288 461.3 298.7 472 312 472L424 472C437.3 472 448 461.3 448 448C448 434.7 437.3 424 424 424L312 424C298.7 424 288 434.7 288 448zM224 480C241.7 480 256 465.7 256 448C256 430.3 241.7 416 224 416C206.3 416 192 430.3 192 448C192 465.7 206.3 480 224 480z" />
                </svg>
                <h2 class="text-2xl font-bold tracking-wide">Keuntungan Sistem</h2>
            </div>
            <ul class="space-y-2 pl-2 text-gray-700 font-medium">
                <li>Akses data akademik real-time</li>
                <li>Integrasi dengan sistem e-Learning</li>
                <li>Dukungan multi-platform</li>
                <li>Keamanan data terjamin</li>
            </ul>
        </div>
        <div
            class="bg-white/80 backdrop-blur-lg p-8 rounded-2xl shadow-lg border border-purple-100 hover:shadow-2xl transition-all duration-200">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor"
                    class="w-8 h-8 text-purple-500 mr-3">
                    <!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM229.4 385.9C249.8 413.9 282.8 432 320 432C357.2 432 390.2 413.9 410.6 385.9C418.4 375.2 433.4 372.8 444.1 380.6C454.8 388.4 457.2 403.4 449.4 414.1C420.3 454 373.2 480 320 480C266.8 480 219.7 454 190.6 414.1C182.8 403.4 185.2 388.4 195.9 380.6C206.6 372.8 221.6 375.2 229.4 385.9zM208 272C208 254.3 222.3 240 240 240C257.7 240 272 254.3 272 272C272 289.7 257.7 304 240 304C222.3 304 208 289.7 208 272zM400 240C417.7 240 432 254.3 432 272C432 289.7 417.7 304 400 304C382.3 304 368 289.7 368 272C368 254.3 382.3 240 400 240z" />
                </svg>
                <h2 class="text-2xl font-bold tracking-wide">Hubungi Kami</h2>
            </div>
            <p class="text-gray-700 mb-2">Butuh bantuan? Hubungi tim akademik kami:</p>
            <p class="mt-2 text-gray-700">Email: <a href="mailto:akademik@kampus.edu"
                    class="text-blue-500 hover:text-blue-700 underline">akademik@kampus.edu</a></p>
            <p class="mt-2 text-gray-700">Telp: +62 895-1834-6316</p>
        </div>
    </div>
</div>
@endsection