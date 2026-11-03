<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teachers::all();
        return view('admin.teachers', [
            'title' => 'Teachers',
            'teachers' => $teachers
        ]);
    }
}
