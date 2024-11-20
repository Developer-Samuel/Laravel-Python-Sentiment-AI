<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/analyze', [CommentController::class, 'analyze']);
