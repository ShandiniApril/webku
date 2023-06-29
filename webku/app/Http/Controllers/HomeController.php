<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function question()
    {
        return view('teacher.question');
    }

    public function report()
    {
        return view('teacher.report');
    }

    public function reaction()
    {
        return view('teacher.reaction');
    }

    public function reportProyek()
    {
        return view('teacher.reportProject');
    }

    public function study()
    {
        return view('student.subject');
    }

    public function quizes()
    {
        return view('student.quizes');
    }

    public function project()
    {
        return view('student.project');
    }

    public function result()
    {
        return view('student.result');
    }

    public function exam()
    {
        return view('student.exam');
    }
}
