<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function showReaction()
    {
        return view('teacher.reaction', [
            "react" => Reaction::select('subject_id')->distinct()->get(),
            "react1" => Reaction::where('subject_id', '1')->with('user', 'subject')->get(),
            "react2" => Reaction::where('subject_id', '2')->with('user', 'subject')->get(),
            "react3" => Reaction::where('subject_id', '3')->with('user', 'subject')->get(),
            "react4" => Reaction::where('subject_id', '4')->with('user', 'subject')->get(),
            "react5" => Reaction::where('subject_id', '5')->with('user', 'subject')->get(),
            "react6" => Reaction::where('subject_id', '6')->with('user', 'subject')->get(),
            "reactions" => Reaction::with('user', 'subject')->get()
        ]);
    }

    public function reaction()
    {
        return view('student.reaction');
    }

    public function checkCode(Request $request, $id)
    {
        $code = Subject::select('code')->where('id', $id)->get();

        if ($request['code'] == $code[0]->code) {
            return redirect('/reaction' . '/' . $id);
        } else {
            return back()->with('failed', 'Maaf kode yang kamu masukkan salah! Silakan coba lagi!');
        }
    }

    public function addReaction(Request $request, $id)
    {
        $data = $request->validate([
            'rating' => 'required',
            'expression' => 'required|string',
            'comment' => 'required|string',
        ]);

        $data['user_id'] = Auth::id();
        $data['subject_id'] = $id;
        Reaction::insert($data);

        // update nilai ke tabel user
        $user = User::find(Auth::id());
        $user->progres = $user->progres + 5;
        $user->score = $user->score + 5;
        $user->update();

        return redirect('/subjectDetail' . '/' . $id)->with('success', 'Selamat kamu berhasil mendapatkan 5 poin progres WebKu! Silakan kerjakan kuisnya!');
    }
}
