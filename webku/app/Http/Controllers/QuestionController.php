<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class QuestionController extends Controller
{
    public function question()
    {
        // $code = Question::select('slug')->get();
        // dd($code[0]->slug);
        // $slug = substr($code[0], 0, -4);
        return view('teacher.question', [
            "quizes" => Question::where('slug', 'LIKE', 'quiz%')->get(),
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

    public function edit($id)
    {
        $question = Question::find($id);
        return view('teacher.editQuestion', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->slug = $request->input('slug');
        $question->no = $request->input('no');
        $question->question = $request->input('question');
        $question->a = $request->input('a');
        $question->b = $request->input('b');
        $question->c = $request->input('c');
        $question->d = $request->input('d');
        $question->e = $request->input('e');
        $question->answer = $request->input('answer');
        $question->point = $request->input('point');

        // if ($request->hasFile('image')) {
        //     $destination = 'storage/question-images/' . $question->image;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $request->file('image')->move('storage/question-images/', $request->file('image')->getClientOriginalName());
        //     $question->image = $request->file('image')->getClientOriginalName();
        //     dd($question->image);
        // }

        // if ($request->hasFile('image')) {
        //     $request->file('image')->move('storage/question-images/', $request->file('image')->getClientOriginalName());
        //     $question->a = $request->file('image')->getClientOriginalName();
        // }

        // if ($request->hasFile('a')) {
        //     $request->file('a')->move('storage/question-images/', $request->file('a')->getClientOriginalName());
        //     $question->a = $request->file('a')->getClientOriginalName();
        // }
        // if ($request->hasFile('b')) {
        //     $request->file('b')->move('storage/question-images/', $request->file('b')->getClientOriginalName());
        //     $question->b = $request->file('b')->getClientOriginalName();
        // }
        // if ($request->hasFile('c')) {
        //     $request->file('c')->move('storage/question-images/', $request->file('c')->getClientOriginalName());
        //     $question->c = $request->file('c')->getClientOriginalName();
        // }
        // if ($request->hasFile('d')) {
        //     $request->file('d')->move('storage/question-images/', $request->file('d')->getClientOriginalName());
        //     $question->d = $request->file('d')->getClientOriginalName();
        // }
        // if ($request->hasFile('e')) {
        //     $request->file('e')->move('storage/question-images/', $request->file('e')->getClientOriginalName());
        //     $question->e = $request->file('e')->getClientOriginalName();
        // }

        $question->update();

        return redirect('/question')->with('success', 'Soal berhasil update!');
    }

    public function remove($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect('/question')->with('success', 'Soal berhasil dihapus!');
    }
}
