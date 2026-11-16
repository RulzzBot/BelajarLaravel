<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teachers;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        $teachers = Teachers::all();
        return view('admin.subject.index', [
            'title' => 'Subjects',
            'subjects' => $subjects,
            'teachers' => $teachers
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'teacher_id' => 'required|exists:teachers,id',
        ], [
            'name.required' => 'Name is required.',
            'name.max' => 'Name must not exceed 255 characters.',
            'teacher_id.required' => 'Teacher is required.',
            'teacher_id.exists' => 'Selected teacher does not exist.',
        ]);

        Subject::create($validated);

        return redirect()->route('subjects.index')
        ->with('success', 'Subject created successfully.');
    }
}
