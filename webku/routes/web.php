<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\GroupProjectController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectReactionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Quiz1Controller;
use App\Http\Controllers\QuizesController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResultTestController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubmitProjectController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'edit']);
    Route::put('/update/{id}', [ProfileController::class, 'update']);
    Route::get('/about', function () {
        return view('about');
    });
});

Route::group(['middleware' => ['auth', 'ceklevel:guru']], function () {
    Route::get('/student', [ProfileController::class, 'student']);
    Route::get('/delete/{id}', [ProfileController::class, 'remove']);
    Route::get('/addSubject', [SubjectController::class, 'addSubject']);
    Route::post('/addSubject', [SubjectController::class, 'store']);
    Route::get('/editSubject/{id}', [SubjectController::class, 'edit']);
    Route::put('/updateSubject/{id}', [SubjectController::class, 'update']);
    Route::get('/deleteSubject/{id}', [SubjectController::class, 'remove']);
    Route::get('/question', [QuestionController::class, 'question']);
    Route::post('/question/noImage', [QuestionController::class, 'addTestNoImage']);
    Route::post('/question/withImage', [QuestionController::class, 'addTestWithImage']);
    Route::get('/questionOld', [QuizesController::class, 'question']);
    Route::post('/question/addQuizes', [QuizesController::class, 'addQuiz']);
    Route::post('/question/examNoImage', [ExamController::class, 'addTestNoImage']);
    Route::post('/question/examImage', [ExamController::class, 'addTestWithImage']);
    Route::get('/report', [ResultTestController::class, 'report']);
    Route::get('/showReaction', [ReactionController::class, 'showReaction']);
    Route::get('/reportProyek', [ProjectReactionController::class, 'reportProject']);
    Route::post('/reportProyek', [GroupProjectController::class, 'store']);
});

Route::group(['middleware' => ['auth', 'ceklevel:siswa']], function () {
    Route::get('/subject', [SubjectController::class, 'subject']);
    Route::get('/subjectDetail/{subject:id}', [SubjectController::class, 'subjectDetail']);
    Route::post('/subjectDetail/{subject:id}', [ReactionController::class, 'checkCode']);
    Route::get('/reaction/{subject:id}', [ReactionController::class, 'reaction']);
    Route::post('/reaction/{subject:id}', [ReactionController::class, 'addReaction']);
    Route::get('/quizes', [SubjectController::class, 'quizes']);
    Route::get('/test/{test:slug}', [QuestionController::class, 'test']);
    Route::post('/test/{test:slug}', [ResultTestController::class, 'submitTest']);
    Route::get('/quiz/{quizes:slug}', [QuizesController::class, 'quiz']);
    Route::get('/project', [GroupProjectController::class, 'project']);
    Route::get('/projectReaction', [ProjectReactionController::class, 'projectReaction']);
    Route::post('/projectReaction', [ProjectReactionController::class, 'store']);
    Route::get('/submitProject', [SubmitProjectController::class, 'index']);
    Route::post('/submitProject', [SubmitProjectController::class, 'store']);
    Route::get('/result', [ResultTestController::class, 'result']);
    Route::get('/exam', [ResultTestController::class, 'exam']);
    // Route::get('/exam', function () {
    //     return view('student.exam');
    // });
});

Route::get('/materis', function () {
    return view('materis');
})->middleware('auth');

Route::get('/quiz1', [Quiz1Controller::class, 'index']);
Route::post('/quiz1', [Quiz1Controller::class, 'store']);
