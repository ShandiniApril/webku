<?php

namespace App\Http\Controllers;

use App\Models\Quiz1;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        // Quiz1::where('user_id',Auth::id());
        return view('result');
    }
}
