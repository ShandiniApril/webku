<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Quiz1Controller;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\Student;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubmitProjectController;

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

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'ceklevel:guru']], function () {
    Route::get('/student', [StudentController::class, 'student']);
    Route::get('/addSubject', [SubjectController::class, 'addSubject']);
    Route::post('/addSubject', [SubjectController::class, 'store']);
    Route::get('/question', [HomeController::class, 'question']);
    Route::get('/report', [HomeController::class, 'report']);
    Route::get('/reaction', [ReactionController::class, 'reaction']);
    Route::get('/reportProyek', [HomeController::class, 'reportProject']);
});

Route::group(['middleware' => ['auth', 'ceklevel:siswa']], function () {
    Route::get('/subject', [SubjectController::class, 'subject']);
    Route::get('/subjectDetail/{subject:id}', [SubjectController::class, 'subjectDetail']);
    Route::post('/subjectDetail/{subject:id}', [ReactionController::class, 'store']);
    Route::get('/quizes', [HomeController::class, 'quizes']);
    Route::get('/project', [HomeController::class, 'project']);
    Route::get('/result', [HomeController::class, 'result']);
    Route::get('/exam', [HomeController::class, 'exam']);
    Route::get('/submitProject', [SubmitProjectController::class, 'index']);
    Route::post('/submitProject', [SubmitProjectController::class, 'store']);
});

// Route::get('/belajar', [MateriController::class, 'materi']);
// Route::get('/detailMateri/{materi:id}', [MateriController::class, 'detail_materi']);
// Route::get('/test/{question:q_type}', [QuestionController::class, 'showquestion']);
// Route::post('/test/{question:q_type}', [TestController::class, 'checkAnswer']);

Route::get('/materis', function () {
    return view('materis');
})->middleware('auth');

Route::get('/quiz1', [Quiz1Controller::class, 'index']);
Route::post('/quiz1', [Quiz1Controller::class, 'store']);

// Route::get('/quiz1', function () {
//     return view('\quiz\quiz1');
// })->middleware('auth');

// Route::get('/quiz', function () {
//     return view('quiz');
// })->middleware('auth');

// Route::get('/result', [ResultController::class, 'index'])->middleware('auth');

// Route::get('/project', function () {
//     return view('project');
// })->middleware('auth');

// Route::get('/submitProject', function () {
//     return view('submitProject');
// })->middleware('auth');

// Route::get('/exam', function () {
//     return view('exam');
// })->middleware('auth');

Route::get('/pretest', function () {
    return view('\exam\pretest');
})->middleware('auth');

Route::get('/postest', function () {
    return view('\exam\postest');
})->middleware('auth');
