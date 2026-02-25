<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Forum\CategoryController;
use App\Http\Controllers\Forum\ThreadController;
use App\Http\Controllers\Forum\ReplyController;

Route::get('/', [CategoryController::class, 'index'])->name('forum.categories.index');

Route::prefix('forum')->name('forum.')->group(function(){
    Route::resource('categories', CategoryController::class);
    Route::resource('threads', ThreadController::class);
    Route::resource('replies', ReplyController::class);
});
