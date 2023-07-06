<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Quizes;
use App\Models\ResultQuizes;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizesController extends Controller
{
    public function question()
    {
        return view('teacher.question', [
            "quizes" => Quizes::all(),
            "exam" => Exam::all()
        ]);
    }

    public function quizes()
    {
        return view('student.quizes', [
            "quizes" => Quizes::select('slug', 'title')->distinct()->get()
        ]);
    }

    public function quiz(string $quiz)
    {
        return view('student.quiz', [
            "quiz" => Quizes::where('slug', $quiz)->get()
        ]);
    }

    public function addQuiz(Request $request)
    {
        $data = $request->validate([
            'slug' => 'required|string',
            'title' => 'required|string',
            'no' => 'required',
            'question' => 'required|string',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
            'answer' => 'required',
            'point' => 'required',
        ]);

        // dd($data);
        Quizes::insert($data);

        return back()->with('success', 'Quiz berhasil ditambahkan!');
    }

    public function checkQuizes(Request $request)
    {
        // dd($request);
        $quizes = Quizes::select('answer', 'point')->get();
        $total = 0;

        $data = $request->validate([
            'slug' => 'required',
            'no1' => 'required',
            'no2' => 'required',
            'no3' => 'required',
            'no4' => 'required',
            'no5' => 'required',
        ]);

        foreach ($quizes as $quiz) {
            for ($i = 1; $i < 5; $i++) {
                if ($data['no' . $i] == $quiz->answer) {
                    $total = $total + $quiz->point;
                }
            }
        }
        $data['user_id'] = Auth::id();
        // $data['slug'] = 7;
        $data['score'] = $total;

        // dd($data);
        // Tests::create($data);

        ResultQuizes::create($data);

        return redirect('/quizes')->with('success', 'Quiz telah berhasil dikerjakan!');
    }
}
