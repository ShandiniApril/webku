<?php

namespace App\Http\Controllers;

use App\Models\GroupProject;
use App\Models\ProjectReaction;
use Illuminate\Http\Request;

class GroupProjectController extends Controller
{
    public function project()
    {
        $matchReact = ['user_id' => auth()->user()->id];

        $react = ProjectReaction::where($matchReact)->first();

        // return view('student.exam', [
        //     'pretest' => $pretest,
        //     'postest' => $postest,
        // ]);
        return view('student.project', [
            "groups" => GroupProject::all(),
            "react" => $react
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

    public function edit($id)
    {
        $project = GroupProject::find($id);
        return view('teacher.editProject', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = GroupProject::find($id);
        $project->name = $request->input('name');
        $project->members = $request->input('members');
        $project->assignment = $request->input('assignment');

        $project->update();

        return redirect('/reportProyek')->with('success', 'Data kelompok siswa berhasil update!');
    }

    public function remove($id)
    {
        $project = GroupProject::find($id);
        $project->delete();
        return redirect('/reportProyek')->with('success', 'Kelompok siswa berhasil dihapus!');
    }
}
