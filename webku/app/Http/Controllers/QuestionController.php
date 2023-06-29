<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function showquestion(string $question)
    {
        return view('test', [
            "test" => Question::where('q_type', $question)->get()
        ]);
    }
}
