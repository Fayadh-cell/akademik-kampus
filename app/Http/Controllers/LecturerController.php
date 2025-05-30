<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::paginate(10);
        return view('dashboard.lecturers', compact('lecturers'));
    }

    public function create()
    {
        return view('dashboard.lecturers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lecturer_id' => 'required|unique:lecturers,lecturer_id',
            'name' => 'required|string|max:100',
            'nip' => 'required|string|max:20|unique:lecturers,nip',
            'department' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:lecturers,email',
        ]);

        Lecturer::create($request->all());
        return redirect()->route('lecturers.index')->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function show($lecturer_id)
    {
        $lecturer = Lecturer::findOrFail($lecturer_id);
        return view('dashboard.lecturers.show', compact('lecturer'));
    }

    public function edit($lecturer_id)
    {
        $lecturer = Lecturer::findOrFail($lecturer_id);
        return view('dashboard.lecturers.edit', compact('lecturer'));
    }

    public function update(Request $request, $lecturer_id)
    {
        $lecturer = Lecturer::findOrFail($lecturer_id);

        $request->validate([
            'name' => 'required|string|max:100',
            'nip' => 'required|string|max:20|unique:lecturers,nip,' . $lecturer_id . ',lecturer_id',
            'department' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:lecturers,email,' . $lecturer_id . ',lecturer_id',
        ]);

        $lecturer->update($request->all());
        return redirect()->route('lecturers.index')->with('success', 'Dosen berhasil diperbarui.');
    }

    public function destroy($lecturer_id)
    {
        $lecturer = Lecturer::findOrFail($lecturer_id);
        $lecturer->delete();
        return redirect()->route('lecturers.index')->with('success', 'Dosen berhasil dihapus.');
    }
}
