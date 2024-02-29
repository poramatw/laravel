<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Symfony\Component\Routing\Attribute\Route as AttributeRoute;

Route::get('/', [AdminController::class, 'index']);

Route::get('overview', [AdminController::class, 'overview'])->name('overview');

Route::get('chart', [AdminController::class, 'chart'])->name('chart');

Route::get('form', [AdminController::class, 'form']);

Route::post('insert', [AdminController::class, 'insert']);


Route::get('welcome/{name}', function ($name) {
    return "welcome {$name} <a href='" . route('welcome') . "'>click!</a>";
});

Route::get('welcome/test/okay', function () {
    return "welcome";
})->name('welcome');

Route::get('/jQ', [AdminController::class, 'LajQuery']);

// fallback function return homepage
Route::fallback(function () {
    return view('welcome');
});
