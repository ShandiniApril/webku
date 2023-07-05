<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function reaction()
    {
        return view('teacher.reaction', [
            "reactions" => Reaction::with('user')->get(),
            // "name" => User::with('id')->get(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'expression' => 'required|string',
            'comment' => 'required|string',
            'subject_id' => 'required',
            'subject' => 'required|string',
        ]);

        $data['user_id'] = Auth::id();
        // $data['subject_id'] = Subject::id();
        //dd($data);
        Reaction::insert($data);

        return back()->with('success', 'Terima kasih telah mengisi, silahkan lanjutkan ke materi berikutnya!');
    }
}
