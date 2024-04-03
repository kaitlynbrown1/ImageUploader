<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ImageController;

Route::get('/', [ImageController::class, 'index']);
Route::get('/images', [ImageController::class, 'show']);
Route::get('/upload', [ImageController::class, 'store']);
