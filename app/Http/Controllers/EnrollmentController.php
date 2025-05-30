<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with('student', 'course')->paginate(10);
        return view('dashboard.enrollment', compact('enrollments'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('dashboard.enrollment.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'enrollment_id' => 'required|unique:enrollment,enrollment_id',
            'student_id' => 'required|exists:students,student_id',
            'course_id' => 'required|exists:courses,course_id',
            'grade' => 'nullable|string|max:2',
            'attendance' => 'nullable|integer|min:0|max:100',
            'status' => 'required|string|max:20',
        ]);

        Enrollment::create($request->all());
        return redirect()->route('enrollment.index')->with('success', 'Pendaftaran mata kuliah berhasil ditambahkan.');
    }

    public function show($enrollment_id)
    {
        $enrollment = Enrollment::with('student', 'course')->findOrFail($enrollment_id);
        return view('dashboard.enrollment.show', compact('enrollment'));
    }

    public function edit($enrollment_id)
    {
        $enrollment = Enrollment::with('student', 'course')->findOrFail($enrollment_id);
        $students = Student::all();
        $courses = Course::all();
        return view('dashboard.enrollment.edit', compact('enrollment', 'students', 'courses'));
    }

    public function update(Request $request, $enrollment_id)
    {
        $enrollment = Enrollment::findOrFail($enrollment_id);

        $request->validate([
            'student_id' => 'required|exists:students,student_id',
            'course_id' => 'required|exists:courses,course_id',
            'grade' => 'nullable|string|max:2',
            'attendance' => 'nullable|integer|min:0|max:100',
            'status' => 'required|string|max:20',
        ]);

        $enrollment->update($request->all());
        return redirect()->route('enrollment.index')->with('success', 'Pendaftaran mata kuliah berhasil diperbarui.');
    }

    public function destroy($enrollment_id)
    {
        $enrollment = Enrollment::findOrFail($enrollment_id);
        $enrollment->delete();
        return redirect()->route('enrollment.index')->with('success', 'Pendaftaran mata kuliah berhasil dihapus.');
    }
}