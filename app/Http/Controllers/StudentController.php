<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        $classrooms = Classroom::query()->get()->unique('name');
        return view('admin.students.index',[
            'title' => 'Students',
            'students' => $students,
            'classrooms' => $classrooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|string|max:20|unique:students,nis',
            'name' => 'required|string|max:255',
            'classroom_id' => 'required|exists:classrooms,id',
            'address' => 'required|string|max:200',
            'status' => 'required|in:active,inactive',
        ], [
            'nis.required' => 'NIS is required.',
            'nis.unique' => 'NIS must be unique.',
            'name.required' => 'Name is required.',
            'classroom_id.required' => 'Classroom is required.',
            'classroom_id.exists' => 'Selected classroom does not exist.',
            'address.required' => 'Address is required.',
            'address.max' => 'Address must not exceed 200 characters.',
            'status.required' => 'Status is required.',
            'status.in' => 'Status must be either active or inactive.',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
        ->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
