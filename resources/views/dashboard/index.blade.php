@extends('layout')

@section('title', 'Dashboard - Sistem Akademik Kampus')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Selamat Datang, {{ auth()->user()->name }}</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div class="bg-blue-100 p-6 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Total Mahasiswa</h2>
            <p class="text-3xl text-blue-800">{{ $studentCount }}</p>
        </div>
        <div class="bg-green-100 p-6 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Total Mata Kuliah</h2>
            <p class="text-3xl text-green-800">{{ $courseCount }}</p>
        </div>
        <div class="bg-yellow-100 p-6 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Total Dosen</h2>
            <p class="text-3xl text-yellow-800">{{ $lecturerCount }}</p>
        </div>
        <div class="bg-red-100 p-6 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Total Pendaftaran</h2>
            <p class="text-3xl text-red-800">{{ $enrollmentCount }}</p>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <h2 class="text-2xl font-bold mb-6">Jadwal Kuliah</h2>
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2">Hari</th>
                    <th class="py-2">Jam</th>
                    <th class="py-2">Mata Kuliah</th>
                    <th class="py-2">Dosen</th>
                    <th class="py-2">Ruang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                <tr>
                    <td class="py-2">{{ $schedule->day }}</td>
                    <td class="py-2">{{ $schedule->time }}</td>
                    <td class="py-2">{{ $schedule->course_name }}</td>
                    <td class="py-2">{{ $schedule->lecturer_name }}</td>
                    <td class="py-2">{{ $schedule->room }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Pendaftaran Mata Kuliah</h2>
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2">Mata Kuliah</th>
                    <th class="py-2">SKS</th>
                    <th class="py-2">Dosen Pengampu</th>
                    <th class="py-2">Semester</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td class="py-2">{{ $course->name }}</td>
                    <td class="py-2">{{ $course->credits }}</td>
                    <td class="py-2">
                        @foreach ($course->lecturers as $lecturer)
                            {{ $lecturer->name }}<br>
                        @endforeach
                    </td>
                    <td class="py-2">{{ $course->semester }}</td>
                    <td class="py-2">
                        <form action="/dashboard/courses/{{ $course->course_id }}/enroll" method="POST" class="inline-block">
                            @csrf
                            <button type="submit" class="text-green-500 hover:text-green-700">Daftar</button>
                        </form>
                        <form action="/dashboard/courses/{{ $course->course_id }}/drop" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Batal</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-8">
        <a href="/dashboard/students" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 mr-2">Lihat Mahasiswa</a>
        <a href="/dashboard/courses" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 mr-2">Lihat Mata Kuliah</a>
        <a href="/dashboard/lecturers" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Lihat Dosen</a>
    </div>
@endsection