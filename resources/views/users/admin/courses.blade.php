@extends('layout')

@section('title', 'Mata Kuliah - Sistem Akademik Kampus')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Daftar Mata Kuliah</h1>
    
    <div class="mb-6">
        <a href="/dashboard/courses/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Tambah Mata Kuliah</a>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2">Kode</th>
                    <th class="py-2">Nama</th>
                    <th class="py-2">SKS</th>
                    <th class="py-2">Semester</th>
                    <th class="py-2">Dosen Pengampu</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td class="py-2">{{ $course->code }}</td>
                    <td class="py-2">{{ $course->name }}</td>
                    <td class="py-2">{{ $course->credits }}</td>
                    <td class="py-2">{{ $course->semester }}</td>
                    <td class="py-2">
                        @foreach ($course->lecturers as $lecturer)
                            {{ $lecturer->name }}<br>
                        @endforeach
                    </td>
                    <td class="py-2">
                        <a href="/dashboard/courses/{{ $course->course_id }}/edit" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                        <form action="/dashboard/courses/{{ $course->course_id }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-4">
        {{ $courses->links() }}
    </div>
@endsection