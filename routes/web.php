<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\HomepageController;
use App\Http\Controllers\Pages\MemesController;
use App\Http\Controllers\Pages\MemeTypeController;
use App\Http\Controllers\Pages\ChartController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\Pages\WhitepaperController;

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

Route::get('/', HomepageController::class)->name('home');

Route::get('/about', AboutController::class)->name('about');

Route::get('/chart', ChartController::class)->name('chart');

Route::get('/whitepaper', WhitepaperController::class)->name('whitepaper');

Route::prefix('memes')->group(function () {
    Route::get('/', [MemesController::class, 'index'])->name('memes');
    Route::get('{memeType}', [MemeTypeController::class, 'show']);
    Route::get('{memeType}/{meme}', [MemesController::class, 'show']);
});

Route::get('/submitted', [SubmissionController::class, 'confirmation'])->name('confirmation');
Route::post('/submissions', [SubmissionController::class, 'store'])->name('submit');