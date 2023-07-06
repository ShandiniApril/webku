<?php

namespace App\Http\Controllers;

use App\Models\Quizes;
use App\Models\ResultQuizes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultQuizesController extends Controller
{
    public function report()
    {
        return view('teacher.report', [
            "resultQuizes" => ResultQuizes::all(),
        ]);
    }

    public function checkQuizes(Request $request)
    {
        // dd($request);
        $quizes = Quizes::all();
        $total = 0;
        $i = 1;

        $data = $request->validate([
            'no1' => 'required',
            'no2' => 'required',
            'no3' => 'required',
            'no4' => 'required',
            'no5' => 'required',
        ]);

        foreach ($quizes as $quiz) {
            if ($data['no' . $i] == $quizes->answer([$i])) {
                $total = $total + $quizes->point([$i]);
            }
        }
        $data['user_id'] = Auth::id();
        // $data['slug'] = 7;
        $data['score'] = $total;

        dd($data);
        // Tests::create($data);

        ResultQuizes::create($data);

        return redirect('/quizes')->with('success', 'Quiz telah berhasil dikerjakan!');
    }
}
