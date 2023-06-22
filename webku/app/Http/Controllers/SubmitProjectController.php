<?php

namespace App\Http\Controllers;

use App\Models\SubmitProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class SubmitProjectController extends Controller
{
    public function index()
    {
        return view('submitProject');
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('user-images');

        $data = $request->validate([
            'group' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'members' => 'required|text',
            'description' => 'required|text',
            'ppt' => 'required|file',
            'project' => 'required|file'
        ]);

        if ($request->file('ppt')) {
            $data['ppt'] = $request->file('ppt')->store('submitProject-ppt');
        }

        if ($request->file('project')) {
            $data['project'] = $request->file('project')->store('submitProject-project');
        }

        SubmitProject::create($data);

        return back()->with('success', 'Project berhasil dikumpulkan!');
    }
}
