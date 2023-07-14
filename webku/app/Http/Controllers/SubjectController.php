<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
use App\Models\ResultTest;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subject()
    {
        return view('student.subject', [
            "subjects" => Subject::all()
        ]);
    }

    public function quizes()
    {

        $matchQuiz = ['slug' => 'quiz', 'user_id' => auth()->user()->id];

        $quizes = ResultTest::where($matchQuiz)->first();
        return view('student.quizes', [
            "subjects" => Subject::all(),
            "quizes" => $quizes
        ]);
    }

    public function subjectDetail(Subject $subject)
    {
        $matchCode = ['subject_id' => $subject->id, 'user_id' => auth()->user()->id];
        $reaction = Reaction::where($matchCode)->first();

        $matchQuiz = ['slug' => 'quiz' . $subject->id, 'user_id' => auth()->user()->id];
        $quizes = ResultTest::where($matchQuiz)->first();
        return view('student.subjectDetail', [
            "subject" => $subject,
            "quizes" => $quizes,
            "reaction" => $reaction
        ]);
    }

    public function addSubject()
    {
        return view('teacher.subject', [
            "subjects" => Subject::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|string',
            'title' => 'required|string',
            'highlight' => 'required|string',
            'video' => 'required|string',
            'pdf' => 'required|string',
        ]);

        Subject::insert($data);

        return back()->with('success', 'Materi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('teacher.editSubject', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->code = $request->input('code');
        $subject->title = $request->input('title');
        $subject->highlight = $request->input('highlight');
        $subject->video = $request->input('video');
        $subject->pdf = $request->input('pdf');

        $subject->update();

        return redirect('/addSubject')->with('success', 'Materi berhasil update!');
    }

    public function remove($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('/addSubject')->with('success', 'Materi berhasil dihapus!');
    }
}
