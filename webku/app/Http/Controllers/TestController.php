<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Score;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function test(string $test)
    {
        return view('student.test', [
            "test" => Question::where('slug', $test)->get()
        ]);
    }

    public function submitTest(Request $request)
    {
        // dd($request);
        $request['user_id'] = Auth::id();
        // dd($request);
        Test::create($request->all());
        // dd($data);

        return redirect('/result')->with('success', 'Test telah berhasil dikerjakan!');
    }
}
