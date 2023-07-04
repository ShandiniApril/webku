<?php

namespace App\Http\Controllers;

use App\Models\GroupProject;
use App\Models\ProjectReaction;
use App\Models\SubmitProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectReactionController extends Controller
{
    public function reportProject()
    {
        return view('teacher.reportProject', [
            "reactions" => ProjectReaction::all(),
            "projects" => SubmitProject::all(),
            "groups" => GroupProject::all()
        ]);
    }

    public function projectReaction()
    {
        return view('student.projectReaction');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'emphatize' => 'required',
            'react1' => 'required',
            'define' => 'required',
            'react2' => 'required',
            'ideate' => 'required',
            'react3' => 'required',
            'prototype' => 'required',
            'react4' => 'required',
            'test' => 'required|string',
            'react5' => 'required|string',
            'reactAll' => 'required|string',
        ]);

        $data['user_id'] = Auth::id();
        // $data['subject_id'] = Subject::id();
        // dd($data);
        ProjectReaction::insert($data);

        return back()->with('success', 'Terima kasih telah mengisi, kamu keren telah berhasil mengerjakan Proyek!');
    }
}
