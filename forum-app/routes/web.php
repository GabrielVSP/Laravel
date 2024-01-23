<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{ForumController};

/**GET type routes */

Route::get('/', [ForumController::class, 'index'])->name('forum.index');
Route::get('/create', [ForumController::class, 'create'])->name('forum.create');

/**POST type routes */

Route::post('/create', [ForumController::class, 'store'])->name('forum.store');
