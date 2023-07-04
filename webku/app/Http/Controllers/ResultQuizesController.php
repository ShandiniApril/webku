<?php

namespace App\Http\Controllers;

use App\Models\Quizes;
use App\Models\ResultQuizes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultQuizesController extends Controller
{
    public function resultQuizes()
    {
        return view('teacher.report', [
            "quizes" => ResultQuizes::all(),
        ]);
    }

    public function checkQuizes(Request $request)
    {
        // dd(Quizes::all());
        $quizes = Quizes::all();
        $total = 0;

        $data = $request->validate([
            'no1' => 'required',
        ]);

        for ($i = 1; $i <= 5; $i++) {
            if ($data['no' . $i] == $quizes->answer([$i - 1])) {
                $total = $total + $quizes->point([$i - 1]);
            }
        }
        $data['user_id'] = Auth::id();
        // $data['slug'] = 7;
        $data['score'] = $total;


        // Tests::create($data);

        ResultQuizes::create($data);

        return redirect('/quizes')->with('success', 'Quiz telah berhasil dikerjakan!');
    }
}
