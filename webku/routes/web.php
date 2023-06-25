<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Quiz1Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResultController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/materis', function () {
    return view('materis');
})->middleware('auth');

Route::get('/quizs', function () {
    return view('quizs');
})->middleware('auth');

Route::get('/quiz1', [Quiz1Controller::class, 'index']);
Route::post('/quiz1', [Quiz1Controller::class, 'store']);

// Route::get('/quiz1', function () {
//     return view('\quiz\quiz1');
// })->middleware('auth');

Route::get('/quiz', function () {
    return view('quiz');
})->middleware('auth');

Route::get('/result', [ResultController::class, 'index'])->middleware('auth');

Route::get('/project', function () {
    return view('project');
})->middleware('auth');

// Route::get('/submitProject', function () {
//     return view('submitProject');
// })->middleware('auth');

Route::get('/submitProject', [SubmitProjectController::class, 'index'])->middleware('auth');
Route::post('/submitProject', [SubmitProjectController::class, 'store']);

Route::get('/exam', function () {
    return view('exam');
})->middleware('auth');

Route::get('/pretest', function () {
    return view('\exam\pretest');
})->middleware('auth');

Route::get('/postest', function () {
    return view('\exam\postest');
})->middleware('auth');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');
