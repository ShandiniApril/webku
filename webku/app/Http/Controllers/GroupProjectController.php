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
