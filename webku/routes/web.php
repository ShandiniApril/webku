<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/materi', function () {
    return view('materi');
})->name('materi');

Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz');

Route::get('/result', function () {
    return view('result');
})->name('result');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/exam', function () {
    return view('exam');
})->name('exam');

Route::get('/about', function () {
    return view('about');
})->name('about');
