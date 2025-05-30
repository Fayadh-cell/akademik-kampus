@extends('layout')

@section('title', 'Pendaftaran Mata Kuliah - Sistem Akademik Kampus')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Pendaftaran Mata Kuliah</h1>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2">Mahasiswa</th>
                    <th class="py-2">Mata Kuliah</th>
                    <th class="py-2">Nilai</th>
                    <th class="py-2">Kehadiran</th>
                    <th class="py-2">Status</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enrollments as $enrollment)
                <tr>
                    <td class="py-2">{{ $enrollment->student->name }}</td>
                    <td class="py-2">{{ $enrollment->course->name }}</td>
                    <td class="py-2">{{ $enrollment->grade }}</td>
                    <td class="py-2">{{ $enrollment->attendance }}</td>
                    <td class="py-2">{{ $enrollment->status }}</td>
                    <td class="py-2">
                        <a href="/dashboard/enrollment/{{ $enrollment->enrollment_id }}/edit" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                        <form action="/dashboard/enrollment/{{ $enrollment->enrollment_id }}" method="POST" class="inline-block">
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
        {{ $enrollments->links() }}
    </div>
@endsection