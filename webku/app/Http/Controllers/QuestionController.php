<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function question()
    {
        return view('teacher.question', [
            "quizes" => Question::where('slug', 'quiz1')->get(),
            // "quizes" => Question::where('slug', 'quiz1')->get(),
            "pretest" => Question::where('slug', 'pretest')->get(),
            "postest" => Question::where('slug', 'postest')->get()
        ]);
    }

    public function quiz(string $quiz)
    {
        return view('student.quiz', [
            "quiz" => Question::where('slug', $quiz)->get()
        ]);
    }

    public function test(string $test)
    {
        return view('student.test', [
            "test" => Question::where('slug', $test)->get()
        ]);
    }

    public function addTestNoImage(Request $request)
    {
        // dd($request);
        $data = Question::create($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->move('storage/question-images/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return back()->with('success', 'Soal berhasil ditambahkan!');
    }

    public function addTestWithImage(Request $request)
    {
        $data['optionImage'] = 'yes';
        $data = Question::create($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->move('storage/question-images/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        if ($request->hasFile('a')) {
            $request->file('a')->move('storage/question-images/', $request->file('a')->getClientOriginalName());
            $data->a = $request->file('a')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('b')) {
            $request->file('b')->move('storage/question-images/', $request->file('b')->getClientOriginalName());
            $data->b = $request->file('b')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('c')) {
            $request->file('c')->move('storage/question-images/', $request->file('c')->getClientOriginalName());
            $data->c = $request->file('c')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('d')) {
            $request->file('d')->move('storage/question-images/', $request->file('d')->getClientOriginalName());
            $data->d = $request->file('d')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('e')) {
            $request->file('e')->move('storage/question-images/', $request->file('e')->getClientOriginalName());
            $data->e = $request->file('e')->getClientOriginalName();
            $data->save();
        }
        return back()->with('success', 'Soal berhasil ditambahkan!');
    }
}
