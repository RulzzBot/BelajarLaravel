<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.students',[
            'title' => 'Students',
            'students' => $students
        //     'students' => [
        //         [
        //             "nis" => "123456",
        //             "name" => "Muhammad Nazrul",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        //         [
        //             "nis" => "789012",
        //             "name" => "Reyhan Erlangga P",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        //         [
        //             "nis" => "345678",
        //             "name" => "Yusuf Akbar",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        //         [
        //             "nis" => "456789",
        //             "name" => "Satya Aryabimbum",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        //         [
        //             "nis" => "567890",
        //             "name" => "Athar Dhiyaulhaq",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        //         [
        //             "nis" => "678901",
        //             "name" => "Fatahillah Ahsan",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        //         [
        //             "nis" => "890123",
        //             "name" => "Alvaro Kenzod",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        //         [
        //             "nis" => "901234",
        //             "name" => "Figo Daryl Satceng",
        //             "class" => "11 PPLG 3",
        //             "action" => "Inaktif"
        //         ],
        //         [
        //             "nis" => "112233",
        //             "name" => "Rizky Ramdhani",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        //         [
        //             "nis" => "223344",
        //             "name" => "Shofa",
        //             "class" => "11 PPLG 3",
        //             "action" => "Aktif"
        //         ],
        // ]
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
        //
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
