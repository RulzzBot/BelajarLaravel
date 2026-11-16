<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardConroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/layout', function(){
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardConroller::class, 'index']);

// Route::get('/admin/dashboard', function(){
//     return view('admin.dashboard');
// })->name('admin.dashboard');

Route::get('/admin/about', [AboutController::class, 'index']);

Route::get('/admin/students', [StudentController::class, 'index']);

Route::get('/admin/classrooms', [ClassroomController::class, 'index']);
Route::get('/admin/teachers', [TeachersController::class, 'index']);
Route::get('/admin/subjects', [SubjectController::class, 'index']);
// student routes
Route::get('/admin/students/index', [StudentController::class, 'index'])->name('students.index');
Route::get('/admin/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/admin/students', [StudentController::class, 'store'])->name('students.store');
// classroom routes
Route::get('/admin/classrooms/index', [ClassroomController::class, 'index'])->name('classrooms.index');
Route::get('/admin/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');
Route::post('/admin/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');
// teacher routes
Route::get('/admin/teachers/index', [TeachersController::class, 'index'])->name('teachers.index');
Route::get('/admin/teachers/create', [TeachersController::class, 'create'])->name('teachers.create');
Route::post('/admin/teachers', [TeachersController::class, 'store'])->name('teachers.store');
// subject routes
Route::get('/admin/subjects/index', [SubjectController::class, 'index'])->name('subjects.index');
Route::get('/admin/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
Route::post('/admin/subjects', [SubjectController::class, 'store'])->name('subjects.store');

require __DIR__.'/settings.php';
