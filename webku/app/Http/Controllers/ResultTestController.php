<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\ResultTest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultTestController extends Controller
{
    public function report()
    {
        return view('teacher.report', [
            "pretest" => ResultTest::where('slug', 'pretest')->with('user')->get(),
            "quiz1" => ResultTest::where('slug', 'quiz1')->with('user')->get(),
            "quiz2" => ResultTest::where('slug', 'quiz2')->with('user')->get(),
            "quiz3" => ResultTest::where('slug', 'quiz3')->with('user')->get(),
            "quiz4" => ResultTest::where('slug', 'quiz4')->with('user')->get(),
            "quiz5" => ResultTest::where('slug', 'quiz5')->with('user')->get(),
            "quiz6" => ResultTest::where('slug', 'quiz6')->with('user')->get(),
            "postest" => ResultTest::where('slug', 'postest')->with('user')->get(),
        ]);
    }

    public function result()
    {
        return view('student.result', [
            "ranking" => User::where('level', 'siswa')->orderBy('score', 'desc')->limit(3)->get(),
            "results" => ResultTest::where('user_id', Auth::id())->get()
        ]);
    }

    public function submitTest(Request $request, string $slug)
    {
        $questions = Question::select('answer', 'point')->where('slug', $slug)->get();
        $total = 0;

        foreach ($questions as $question) {
            for ($i = 1; $i <= $question->count(); $i++) {
                if ($request['no' . $i] == $question->answer) {
                    $total = $total + $question->point;
                }
            }
        }

        $request['user_id'] = Auth::id();
        $request['score'] = $total;
        ResultTest::create($request->all());

        // update nilai ke tabel user
        $user = User::find(Auth::id());
        $user->score = $user->score + $total;
        // $user->update();

        // update progres ke tabel user
        if ($slug == "pretest" || $slug == "postest") {
            $user->progres = $user->progres + 10;
        } else
            $user->progres = $user->progres + 5;

        $user->update();

        return redirect('/result')->with('success', 'Test telah berhasil dikerjakan!');
    }
}
