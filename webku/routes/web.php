<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/materis', function () {
    return view('materis');
})->name('materis');

Route::get('/quizs', function () {
    return view('quizs');
})->name('quizs');

Route::get('/quiz1', function () {
    return view('\quiz\quiz1');
})->name('quiz1');

Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz');

Route::get('/result', function () {
    return view('result');
})->name('result');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/submitProject', function () {
    return view('submitProject');
})->name('submitProject');

Route::get('/exam', function () {
    return view('exam');
})->name('exam');

Route::get('/pretest', function () {
    return view('\exam\pretest');
})->name('pretest');

Route::get('/postest', function () {
    return view('\exam\postest');
})->name('postest');

Route::get('/about', function () {
    return view('about');
})->name('about');
