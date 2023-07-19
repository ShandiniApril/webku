<?php

namespace App\Http\Controllers;

use App\Models\SubmitProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Storage;

class SubmitProjectController extends Controller
{
    public function index()
    {
        return view('student.submitProject');
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('user-images');
        // dd($request);
        $data = $request->validate([
            'group' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'members' => 'required|string',
            'description' => 'required|string',
            'ppt' => 'required|string',
            'project' => 'required|string'
        ]);

        // dd($data);
        SubmitProject::insert($data);

        return redirect('/project')->with('success', 'Project berhasil dikumpulkan!');
    }
}
