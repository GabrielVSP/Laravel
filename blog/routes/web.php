<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RequestController::class, 'index'])->name('index');
Route::get('/blog', [RequestController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [RequestController::class, 'show'])->name('blog-post');

Route::get('/admin', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/posts', [ProfileController::class, 'posts'])->name('admin.posts');
    Route::get('/admin/posts/create', [ProfileController::class, 'postCreate'])->name('admin.postCreate');
    Route::get('/admin/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * POST routes
     */

    Route::post('admin/posts/create', [ProfileController::class, 'create'])->name('admin.create');

});

require __DIR__.'/auth.php';
