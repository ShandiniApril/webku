<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz1;
use App\Models\Score;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class Quiz1Controller extends Controller
{
    public function index()
    {
        return view('quiz.quiz1');
    }

    public function store(Request $request)
    {
        // dd(Auth::id());

        $answer = ['a', 'b', 'c', 'e', 'e'];
        $score = [10, 10, 10, 10, 10];
        $total = 0;
        $data = $request->validate([
            'no1' => 'required',
            'no2' => 'required',
            'no3' => 'required',
            'no4' => 'required',
            'no5' => 'required'
        ]);

        for ($i = 1; $i <= 5; $i++) {
            if ($data['no' . $i] == $answer[$i - 1]) {
                $total = $total + $score[$i - 1];
            }
        }
        $data['user_id'] = Auth::id();
        $data['test_type'] = 7;
        $data['score'] = $total;

        // Tests::create($data);

        Score::create($data);

        return redirect('/quizs')->with('success', 'Quiz 1 telah berhasil dikerjakan!');
    }

    public function checkQuiz()
    {
    }
}
