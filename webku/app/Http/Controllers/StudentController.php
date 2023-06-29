<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        return view('teacher.student', [
            "students" => User::where('level', 'siswa')->get()
        ]);
    }
}
