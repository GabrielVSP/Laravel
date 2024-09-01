<?php

use App\Http\Controllers\Api\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    /**
     * POST routes
     */

    Route::post('admin/posts/create', [AdminController::class, 'create'])->name('api.create');

});

require __DIR__.'/auth.php';
