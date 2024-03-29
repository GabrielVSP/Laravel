<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{ForumController};

/**GET type routes */

Route::get('/', [ForumController::class, 'index'])->name('forum.index');
Route::get('/create', [ForumController::class, 'create'])->name('forum.create');
Route::get('/post/{id}', [ForumController::class, 'show'])->name('forum.show');
Route::get('/post/edit/{id}', [ForumController::class, 'edit'])->name('forum.edit');

/**POST type routes */

Route::post('/create', [ForumController::class, 'store'])->name('forum.store');

/**PUT type routes */

Route::put('/post/{id}', [ForumController::class, 'update'])->name('forum.update');

/**DELETE type routes */

Route::delete('/post/{id}', [ForumController::class, 'delete'])->name('forum.delete');