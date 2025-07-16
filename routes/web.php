<?php

use App\Http\Controllers\Post\DeleteCommentController;
use App\Http\Controllers\Post\StoreCommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Post\ShowPostController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\StorePostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', TimelineController::class)->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/contact', TimelineController::class)->middleware(['auth', 'verified'])->name('contact');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// postingan
Route::middleware('auth')->group(function () {
    Route::post('post', StorePostController::class)->name('post.store');
    Route::get('post/{post}', ShowPostController::class)->name('post.show');
});


//comment
Route::post('post/{post}/comment', StoreCommentController::class)->name('post.comment.store');

// delete comment
Route::delete('post/{post}/comment/{comment}', DeleteCommentController::class)->name('post.comment.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
