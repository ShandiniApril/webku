<?php

namespace App\Http\Controllers;

use App\Models\GroupProject;
use Illuminate\Http\Request;

class GroupProjectController extends Controller
{
    public function project()
    {
        return view('student.project', [
            "groups" => GroupProject::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'members' => 'required|string',
            'assignment' => 'required|string',
        ]);

        GroupProject::insert($data);

        return back()->with('success', 'Kelompok belajar telah berhasil ditambahkan!');
    }
}
