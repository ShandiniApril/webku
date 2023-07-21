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

    public function exam()
    {
        $matchPre = ['slug' => 'pretest', 'user_id' => auth()->user()->id];
        $matchPos = ['slug' => 'postest', 'user_id' => auth()->user()->id];

        $pretest = ResultTest::where($matchPre)->first();
        $postest = ResultTest::where($matchPos)->first();

        return view('student.exam', [
            'pretest' => $pretest,
            'postest' => $postest,
        ]);
    }

    public function submitTest(Request $request, string $slug)
    {
        $questions = Question::select('answer', 'point')->where('slug', $slug)->get();
        // dd($questions);
        $total = 0;

        for ($i = 0; $i < $questions->count(); $i++) {
            if ($request['no' . $i + 1] == $questions[$i]->answer) {
                $total = $total + $questions[$i]->point;
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
