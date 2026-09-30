<?php

use App\Http\Controllers\DashboardConroller;
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

Route::get('/admin/about', function(){
    return view('admin.about');
})->name('admin.about');

Route::get('/admin/students', function(){
    return view('admin.students');
})->name('admin.students');

require __DIR__.'/settings.php';
