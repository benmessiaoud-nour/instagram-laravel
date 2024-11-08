<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LikeController;
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

require __DIR__.'/auth.php';


    Route::get('/{user:username}' , [UserController::class ,'index'])->middleware('auth')->name('user_profile');
    Route::get('/explore' , [PostController::class  ,'explore'])->name('explore');

    Route::get('/{user:username}/edit' , [UserController::class ,'edit'])->middleware('auth')->name('edit_profile');
    Route::patch('/{user:username}/update' , [UserController::class ,'update'])->middleware('auth')->name('update_profile');

    Route::controller( PostController::class)->middleware('auth')->group(function(){
    Route::get('/' , 'index')->name('home_page');
    Route::get('/p/create' ,  'create')->name('create_post');
    Route::post('/p/create' ,  'store')->name('store_post');
    Route::get('p/{post:slung}'  , 'show')->name('show_post');
    Route::get('p/{post:slung}/edit' ,  'edit')->name('edit_post');
    Route::patch('p/{post:slung}/update' ,  'update')->name('update_post');
    Route::delete('p/{post:slung}/delete' ,  'destroy')->name('delete_post');

});



    Route::post('/p/{post:slung}/comment', [CommentController::class, 'store'])->name('store_comment')->middleware('auth');
    Route::get('/p/{post:slung}/like' ,LikeController::class)->middleware('auth');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



