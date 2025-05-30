<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('welcome');
});
// Rute untuk autentikasi
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Rute untuk dashboard
Route::middleware('auth')->prefix('dashboard')->group(function () {
    // Rute untuk mahasiswa
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

    // Rute untuk mata kuliah
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

    // Rute untuk dosen
    Route::get('/lecturers', [LecturerController::class, 'index'])->name('lecturers.index');
    Route::get('/lecturers/create', [LecturerController::class, 'create'])->name('lecturers.create');
    Route::post('/lecturers', [LecturerController::class, 'store'])->name('lecturers.store');
    Route::get('/lecturers/{lecturer}', [LecturerController::class, 'show'])->name('lecturers.show');
    Route::get('/lecturers/{lecturer}/edit', [LecturerController::class, 'edit'])->name('lecturers.edit');
    Route::put('/lecturers/{lecturer}', [LecturerController::class, 'update'])->name('lecturers.update');
    Route::delete('/lecturers/{lecturer}', [LecturerController::class, 'destroy'])->name('lecturers.destroy');

    // Rute untuk pendaftaran mata kuliah
    Route::get('/enrollment', [EnrollmentController::class, 'index'])->name('enrollment.index');
    Route::get('/enrollment/create', [EnrollmentController::class, 'create'])->name('enrollment.create');
    Route::post('/enrollment', [EnrollmentController::class, 'store'])->name('enrollment.store');
    Route::get('/enrollment/{enrollment}', [EnrollmentController::class, 'show'])->name('enrollment.show');
    Route::get('/enrollment/{enrollment}/edit', [EnrollmentController::class, 'edit'])->name('enrollment.edit');
    Route::put('/enrollment/{enrollment}', [EnrollmentController::class, 'update'])->name('enrollment.update');
    Route::delete('/enrollment/{enrollment}', [EnrollmentController::class, 'destroy'])->name('enrollment.destroy');

    // Rute untuk dosen mata kuliah
    Route::get('/course-lecturers', [CourseLecturerController::class, 'index'])->name('course-lecturers.index');
    Route::get('/course-lecturers/create', [CourseLecturerController::class, 'create'])->name('course-lecturers.create');
    Route::post('/course-lecturers', [CourseLecturerController::class, 'store'])->name('course-lecturers.store');
    Route::get('/course-lecturers/{courseLecturer}', [CourseLecturerController::class, 'show'])->name('course-lecturers.show');
    Route::get('/course-lecturers/{courseLecturer}/edit', [CourseLecturerController::class, 'edit'])->name('course-lecturers.edit');
    Route::put('/course-lecturers/{courseLecturer}', [CourseLecturerController::class, 'update'])->name('course-lecturers.update');
    Route::delete('/course-lecturers/{courseLecturer}', [CourseLecturerController::class, 'destroy'])->name('course-lecturers.destroy');
});

