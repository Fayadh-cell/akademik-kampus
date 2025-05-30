<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10);
        return view('dashboard.students', compact('students'));
    }

    public function create()
    {
        return view('dashboard.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:students,student_id',
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:students,email',
            'nim' => 'required|string|max:50|unique:students,nim',
            'major' => 'required|string|max:50',
            'enrollment_year' => 'required|date',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function show($student_id)
    {
        $student = Student::findOrFail($student_id);
        return view('dashboard.students.show', compact('student'));
    }

    public function edit($student_id)
    {
        $student = Student::findOrFail($student_id);
        return view('dashboard.students.edit', compact('student'));
    }

    public function update(Request $request, $student_id)
    {
        $student = Student::findOrFail($student_id);

        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:students,email,' . $student_id . ',student_id',
            'nim' => 'required|string|max:50|unique:students,nim,' . $student_id . ',student_id',
            'major' => 'required|string|max:50',
            'enrollment_year' => 'required|date',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    public function destroy($student_id)
    {
        $student = Student::findOrFail($student_id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}