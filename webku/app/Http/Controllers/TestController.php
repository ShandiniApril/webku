<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Score;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function checkAnswer(Request $request)
    {
        $total = 0;
        for ($i = 1; $i <= 5; $i++) {
            if ($request['no' . $i] == Question::answer()[$i - 1]) {
                $total = $total + Question::point()[$i - 1];
            }
        }

        Test::create($request);

        // $user['user_id'] = Auth::id();
        $type['test_type'] = Question::q_type();
        $code['test_code'] = Question::q_code();

        Score::create($type, $code, $total);

        return redirect('/quizs')->with('success', 'Quiz 1 telah berhasil dikerjakan!');
    }
}
