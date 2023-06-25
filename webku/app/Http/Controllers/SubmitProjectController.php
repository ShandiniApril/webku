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
        return view('submitProject');
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
            'ppt' => 'required',
            'project' => 'required'
        ]);

        if ($request->file('ppt')) {
            // $data = Storage::putFile('submitProject-ppt', $request->file('ppt'));
            // $data['ppt'] = $request->file('ppt')->store('submitProject-ppt');
            $data['ppt'] = $request->file('ppt')->storeAs(
                'submitProject-ppt',
                $request->user()->id
            );
        }

        if ($request->file('project')) {
            // $data['project'] = $request->file('project')->store('submitProject-project');
            $data['project'] = $request->file('project')->storeAs(
                'submitProject-project',
                $request->user()->id
            );
        }
        // dd($data);
        SubmitProject::insert($data);

        return back()->with('success', 'Project berhasil dikumpulkan!');
    }
}
