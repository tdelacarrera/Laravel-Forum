<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Forum\CategoryController;
use App\Http\Controllers\Forum\ThreadController;
use App\Http\Controllers\Forum\ReplyController;
use App\Http\Controllers\Forum\UserController;

Route::get('/', [CategoryController::class, 'index'])->name('forum.categories.index');



Route::prefix('forum')->name('forum.')->group(function () {

    // Rutas públicas sin auth
    Route::resource('categories', CategoryController::class)->only(['index', 'show']);
    Route::resource('threads', ThreadController::class)->only(['index', 'show', 'create']);
    Route::resource('replies', ReplyController::class)->only(['index', 'show']);
    Route::resource('users', UserController::class)->only(['index', 'show']);

    // Rutas que requieren login
    Route::middleware('auth')->group(function () {
        Route::resource('categories', CategoryController::class)->only(['store', 'edit', 'update', 'destroy']);
        Route::resource('threads', ThreadController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
        Route::resource('replies', ReplyController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    });

    Route::get('/faq', function () { return view('forum.faq'); })->name('faq');

});