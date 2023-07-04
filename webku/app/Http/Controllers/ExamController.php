<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function test(string $test)
    {
        return view('student.test', [
            "test" => Exam::where('slug', $test)->get()
        ]);
    }

    public function addTestNoImage(Request $request)
    {
        $data = Exam::create($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->move('storage/question-images/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return back()->with('success', 'Soal ujian berhasil ditambahkan!');
    }

    public function addTestWithImage(Request $request)
    {
        $data['optionImage'] = 'yes';
        $data = Exam::create($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->move('storage/question-images/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        if ($request->hasFile('optionA')) {
            $request->file('optionA')->move('storage/question-images/', $request->file('optionA')->getClientOriginalName());
            $data->optionA = $request->file('optionA')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('optionB')) {
            $request->file('optionB')->move('storage/question-images/', $request->file('optionB')->getClientOriginalName());
            $data->optionB = $request->file('optionB')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('optionC')) {
            $request->file('optionC')->move('storage/question-images/', $request->file('optionC')->getClientOriginalName());
            $data->optionC = $request->file('optionC')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('optionD')) {
            $request->file('optionD')->move('storage/question-images/', $request->file('optionD')->getClientOriginalName());
            $data->optionD = $request->file('optionD')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('optionE')) {
            $request->file('optionE')->move('storage/question-images/', $request->file('optionE')->getClientOriginalName());
            $data->optionE = $request->file('optionE')->getClientOriginalName();
            $data->save();
        }

        return back()->with('success', 'Soal ujian berhasil ditambahkan!');
    }
}
