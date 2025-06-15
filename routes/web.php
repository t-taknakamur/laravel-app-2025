<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('api')->group(function () {
    Route::get('list', [PortfolioController::class, 'index']);
    Route::get('getCategories', [PortfolioController::class, 'getCategories']);
});


//
