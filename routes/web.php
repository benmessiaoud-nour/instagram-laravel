<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/p/create' , [PostController::class, 'create'])->name('create_post')->middleware('auth');
Route::post('/p/create' , [PostController::class, 'store'])->name('store_post')->middleware('auth');
Route::get('p/{post:slung}' , [PostController::class, 'show'])->name('show_post')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/p/{post:slung}/comment', [CommentController::class, 'store'])->name('store_comment')->middleware('auth');
});

require __DIR__.'/auth.php';