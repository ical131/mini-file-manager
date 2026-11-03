<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileItemController;

Route::get('/file-items', [FileItemController::class, 'index']);

Route::get('/file-items/{fileItem}', [FileItemController::class, 'show']);

Route::post('/file-items', [FileItemController::class, 'store']);