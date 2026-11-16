<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    //
    public function index(){
        $classrooms = Classroom::all();
        $majors = Classroom::select('major')
            ->distinct()
            ->pluck('major');
        return view('admin.classrooms.index',[
            'title' => 'Classrooms',
            'classrooms' => $classrooms,
            'majors' => $majors
        ]);
    }

        public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'major' => 'required|string|max:255',
    ], [
        'name.required' => 'Classroom name is required.',
        'major.required' => 'Major is required.',
    ]);

    Classroom::create($validated);

    return redirect()->route('classrooms.index')
        ->with('success', 'Classroom created successfully.');
}
}
