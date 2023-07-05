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
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ResultQuizesController;
use App\Http\Controllers\Student;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubmitProjectController;
use App\Http\Controllers\TestController;
use App\Models\GroupProject;

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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'edit']);
    Route::put('/update/{id}', [ProfileController::class, 'update']);
});

Route::group(['middleware' => ['auth', 'ceklevel:guru']], function () {
    Route::get('/student', [ProfileController::class, 'student']);
    Route::get('/delete/{id}', [ProfileController::class, 'remove']);
    Route::get('/addSubject', [SubjectController::class, 'addSubject']);
    Route::post('/addSubject', [SubjectController::class, 'store']);
    Route::get('/question', [QuizesController::class, 'question']);
    Route::post('/question/addQuizes', [QuizesController::class, 'addQuiz']);
    Route::post('/question/examNoImage', [ExamController::class, 'addTestNoImage']);
    Route::post('/question/examImage', [ExamController::class, 'addTestWithImage']);
    Route::get('/report', [HomeController::class, 'report']);
    Route::get('/reaction', [ReactionController::class, 'reaction']);
    Route::get('/reportProyek', [ProjectReactionController::class, 'reportProject']);
    Route::post('/reportProyek', [GroupProjectController::class, 'store']);
});

Route::group(['middleware' => ['auth', 'ceklevel:siswa']], function () {
    Route::get('/subject', [SubjectController::class, 'subject']);
    Route::get('/subjectDetail/{subject:id}', [SubjectController::class, 'subjectDetail']);
    Route::post('/subjectDetail/{subject:id}', [ReactionController::class, 'store']);
    Route::get('/test/{exam:slug}', [ExamController::class, 'test']);
    Route::post('/subjectDetail/{subject:id}', [ReactionController::class, 'store']);
    Route::get('/quizes', [QuizesController::class, 'quizes']);
    Route::get('/quiz/{quizes:slug}', [QuizesController::class, 'quiz']);
    Route::post('/quiz/{quizes:slug}', [ResultQuizesController::class, 'checkQuizes']);
    Route::get('/project', [GroupProjectController::class, 'project']);
    Route::get('/projectReaction', [ProjectReactionController::class, 'projectReaction']);
    Route::post('/projectReaction', [ProjectReactionController::class, 'store']);
    Route::get('/submitProject', [SubmitProjectController::class, 'index']);
    Route::post('/submitProject', [SubmitProjectController::class, 'store']);
    Route::get('/result', [HomeController::class, 'result']);
    Route::get('/exam', [HomeController::class, 'exam']);
});

Route::get('/materis', function () {
    return view('materis');
})->middleware('auth');

Route::get('/quiz1', [Quiz1Controller::class, 'index']);
Route::post('/quiz1', [Quiz1Controller::class, 'store']);
