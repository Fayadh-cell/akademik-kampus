@extends('layout')

@section('title', 'Mahasiswa - Sistem Akademik Kampus')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Daftar Mahasiswa</h1>
    
    <div class="mb-6">
        <a href="/dashboard/students/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Tambah Mahasiswa</a>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2">NIM</th>
                    <th class="py-2">Nama</th>
                    <th class="py-2">Email</th>
                    <th class="py-2">Prodi</th>
                    <th class="py-2">Tahun Masuk</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td class="py-2">{{ $student->nim }}</td>
                    <td class="py-2">{{ $student->name }}</td>
                    <td class="py-2">{{ $student->email }}</td>
                    <td class="py-2">{{ $student->major }}</td>
                    <td class="py-2">{{ $student->enrollment_year->format('Y') }}</td>
                    <td class="py-2">
                        <a href="/dashboard/students/{{ $student->student_id }}/edit" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                        <form action="/dashboard/students/{{ $student->student_id }}" method="POST" class="inline-block">
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
        {{ $students->links() }}
    </div>
@endsection