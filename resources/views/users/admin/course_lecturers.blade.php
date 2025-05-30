@extends('layout')

@section('title', 'Dosen Mata Kuliah - Sistem Akademik Kampus')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Daftar Dosen Mata Kuliah</h1>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2">Mata Kuliah</th>
                    <th class="py-2">Dosen</th>
                    <th class="py-2">Peran</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courseLecturers as $courseLecturer)
                <tr>
                    <td class="py-2">{{ $courseLecturer->course->name }}</td>
                    <td class="py-2">{{ $courseLecturer->lecturer->name }}</td>
                    <td class="py-2">{{ $courseLecturer->role }}</td>
                    <td class="py-2">
                        <a href="/dashboard/course-lecturers/{{ $courseLecturer->id }}/edit" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                        <form action="/dashboard/course-lecturers/{{ $courseLecturer->id }}" method="POST" class="inline-block">
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
        {{ $courseLecturers->links() }}
    </div>
@endsection