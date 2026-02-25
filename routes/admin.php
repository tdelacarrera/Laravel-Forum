<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ThreadController;
use App\Http\Controllers\Admin\ReplyController;

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::resource('categories', CategoryController::class);
    Route::resource('threads', ThreadController::class)->only(['index','edit','update','destroy']);
    Route::resource('replies', ReplyController::class)->only(['index','edit','update','destroy']);
});