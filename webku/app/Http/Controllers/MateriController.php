<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function materi()
    {
        return view('materi', [
            "materis" => Materi::all()
        ]);
    }

    public function detail_materi(Materi $materi)
    {
        return view('detailMateri', [
            "materi" => $materi
        ]);
    }
}
