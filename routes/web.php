<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', [AdminController::class, 'index']);

Route::get('overview', [AdminController::class, 'overview'])->name('overview');

Route::get('chart', [AdminController::class, 'chart'])->name('chart');

Route::get('welcome/{name}', function ($name) {
    return "welcome {$name} <a href='" . route('welcome') . "'>click!</a>";
});

Route::get('welcome/test/okay', function () {
    return "welcome";
})->name('welcome');

// fallback function return homepage
Route::fallback(function () {
    return view('welcome');
});
