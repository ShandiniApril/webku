<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subject()
    {
        return view('student.subject', [
            "subjects" => Subject::all()
        ]);
    }

    public function quizes()
    {
        return view('student.quizes', [
            "subjects" => Subject::all()
        ]);
    }

    public function subjectDetail(Subject $subject)
    {
        return view('student.subjectDetail', [
            "subject" => $subject
        ]);
    }

    public function addSubject()
    {
        return view('teacher.subject', [
            "subjects" => Subject::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'highlight' => 'required|string',
            'video' => 'required|string',
            'pdf' => 'required|string',
        ]);

        Subject::insert($data);

        return back()->with('success', 'Materi berhasil ditambahkan!');
    }
}
