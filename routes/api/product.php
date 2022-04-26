<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::prefix('products')->group(function(){
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/{id}', [ProductController::class, 'show']);
        Route::get('/search/{name}', [ProductController::class, 'search']);
        Route::post('/create', [ProductController::class, 'store'])->middleware('testmiddleware');    
    });


