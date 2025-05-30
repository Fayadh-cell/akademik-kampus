<?php

namespace App\Http\Controllers;

use App\Models\CourseLecturer;
use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class CourseLecturerController extends Controller
{
    public function index()
    {
        $courseLecturers = CourseLecturer::with('course', 'lecturer')->paginate(10);
        return view('dashboard.course_lecturers', compact('courseLecturers'));
    }

    public function create()
    {
        $courses = Course::all();
        $lecturers = Lecturer::all();
        return view('dashboard.course_lecturers.create', compact('courses', 'lecturers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:course_lecturers,id',
            'course_id' => 'required|exists:courses,course_id',
            'lecturer_id' => 'required|exists:lecturers,lecturer_id',
            'role' => 'required|string|max:50',
        ]);

        CourseLecturer::create($request->all());
        return redirect()->route('course-lecturers.index')->with('success', 'Dosen mata kuliah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $courseLecturer = CourseLecturer::with('course', 'lecturer')->findOrFail($id);
        return view('dashboard.course_lecturers.show', compact('courseLecturer'));
    }

    public function edit($id)
    {
        $courseLecturer = CourseLecturer::with('course', 'lecturer')->findOrFail($id);
        $courses = Course::all();
        $lecturers = Lecturer::all();
        return view('dashboard.course_lecturers.edit', compact('courseLecturer', 'courses', 'lecturers'));
    }

    public function update(Request $request, $id)
    {
        $courseLecturer = CourseLecturer::findOrFail($id);

        $request->validate([
            'course_id' => 'required|exists:courses,course_id',
            'lecturer_id' => 'required|exists:lecturers,lecturer_id',
            'role' => 'required|string|max:50',
        ]);

        $courseLecturer->update($request->all());
        return redirect()->route('course-lecturers.index')->with('success', 'Dosen mata kuliah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $courseLecturer = CourseLecturer::findOrFail($id);
        $courseLecturer->delete();
        return redirect()->route('course-lecturers.index')->with('success', 'Dosen mata kuliah berhasil dihapus.');
    }
}
