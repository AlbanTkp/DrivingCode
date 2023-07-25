<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('profile.update');
    Route::get('/statistics', [App\Http\Controllers\HomeController::class, 'stats'])->name('stats');
    Route::get('chapters/{id}/test', [App\Http\Controllers\ChapterController::class, 'test'])->name('chapters.test');
    Route::resource('chapters', App\Http\Controllers\ChapterController::class);
    Route::resource('courses', App\Http\Controllers\CourseController::class);
    Route::resource('tests', App\Http\Controllers\TestController::class);
    Route::resource('simulations', App\Http\Controllers\SimulationController::class);
});
