<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teachers::all();
        return view('admin.teachers.index', [
            'title' => 'Teachers',
            'teachers' => $teachers
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'niy' => 'required|string|max:10',
            'start_date' => 'required|date',
        ], [
            'name.required' => 'Name is required.',
            'name.max' => 'Name must not exceed 255 characters.',
            'niy.required' => 'NIY is required.',
            'niy.max' => 'NIY must not exceed 10 characters.',
            'start_date.required' => 'Start date is required.',
            'start_date.date' => 'Invalid date format.',
        ]);

        Teachers::create($validated);

        return redirect()->route('teachers.index')
        ->with('success', 'Teacher created successfully.');
    }
}
