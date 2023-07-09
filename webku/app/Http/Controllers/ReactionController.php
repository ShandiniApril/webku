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
            "reactions" => Reaction::with('user')->get()
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
            return redirect('/reaction');
        } else {
            return back()->with('failed', 'Maaf kode yang kamu masukkan salah! Silakan coba lagi!');
        }
    }

    public function addReaction(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required|string',
            'rating' => 'required',
            'expression' => 'required|string',
            'comment' => 'required|string',
        ]);

        $data['user_id'] = Auth::id();
        Reaction::insert($data);

        // update nilai ke tabel user
        $user = User::find(Auth::id());
        $user->progres = $user->progres + 5;
        $user->update();

        return redirect('/subject')->with('success', 'Selamat kamu telah mendapatkan 5 poin progres WebKu! silahkan lanjutkan ke materi berikutnya!');
    }
}
