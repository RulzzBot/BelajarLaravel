<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardConroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
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

require __DIR__.'/settings.php';
