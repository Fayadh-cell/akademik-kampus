<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(10);
        return view('dashboard.courses', compact('courses'));
    }

    public function create()
    {
        return view('dashboard.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|unique:courses,course_id',
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:20|unique:courses,code',
            'credits' => 'required|integer',
            'semester' => 'required|string|max:10',
        ]);

        Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function show($course_id)
    {
        $course = Course::findOrFail($course_id);
        return view('dashboard.courses.show', compact('course'));
    }

    public function edit($course_id)
    {
        $course = Course::findOrFail($course_id);
        return view('dashboard.courses.edit', compact('course'));
    }

    public function update(Request $request, $course_id)
    {
        $course = Course::findOrFail($course_id);

        $request->validate([
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:20|unique:courses,code,' . $course_id . ',course_id',
            'credits' => 'required|integer',
            'semester' => 'required|string|max:10',
        ]);

        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    public function destroy($course_id)
    {
        $course = Course::findOrFail($course_id);
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
