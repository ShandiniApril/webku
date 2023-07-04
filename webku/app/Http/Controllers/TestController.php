<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Score;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function checkAnswerQuizes(Request $request)
    {
        $data['user_id'] = Auth::id();
        $data = Test::create($request->all());

        $total = 0;
        for ($i = 1; $i <= 5; $i++) {
            if ($request['no' . $i] == Question::answer()[$i - 1]) {
                $total = $total + Question::point()[$i - 1];
            }
        }

        // $user['user_id'] = Auth::id();
        // $type['test_type'] = Question::q_type();
        // $code['test_code'] = Question::q_code();

        Score::create($data, $total);

        return redirect('/quizs')->with('success', 'Quiz 1 telah berhasil dikerjakan!');
    }
}
