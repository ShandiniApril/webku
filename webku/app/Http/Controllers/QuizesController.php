<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Quizes;
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
            "quizes" => Quizes::all()
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

    public function checkQuiz(Request $request)
    {
        $total = 0;
        $data = $request->validate([
            'no1' => 'required',
            'no2' => 'required',
        ]);

        for ($i = 1; $i <= 5; $i++) {
            if ($data['no' . $i] == Quizes::answer()) {
                $total = $total + Quizes::point();
            }
        }
        $data['user_id'] = Auth::id();
        $data['score'] = $total;

        // Tests::create($data);

        Score::create($data);

        return redirect('/quizes')->with('success', 'Quiz telah berhasil dikerjakan!');
    }
}
