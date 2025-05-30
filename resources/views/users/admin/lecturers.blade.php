@extends('layout')

@section('title', 'Dosen - Sistem Akademik Kampus')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Daftar Dosen</h1>
    
    <div class="mb-6">
        <a href="/dashboard/lecturers/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Tambah Dosen</a>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2">NIP</th>
                    <th class="py-2">Nama</th>
                    <th class="py-2">Email</th>
                    <th class="py-2">Departemen</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lecturers as $lecturer)
                <tr>
                    <td class="py-2">{{ $lecturer->nip }}</td>
                    <td class="py-2">{{ $lecturer->name }}</td>
                    <td class="py-2">{{ $lecturer->email }}</td>
                    <td class="py-2">{{ $lecturer->department }}</td>
                    <td class="py-2">
                        <a href="/dashboard/lecturers/{{ $lecturer->lecturer_id }}/edit" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                        <form action="/dashboard/lecturers/{{ $lecturer->lecturer_id }}" method="POST" class="inline-block">
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
        {{ $lecturers->links() }}
    </div>
@endsection