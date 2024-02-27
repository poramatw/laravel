<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('overview', function(){
    return view('overview');
});

Route::get('welcome/{name}', function ($name) {
    return "welcome {$name} <a href='".route('welcome')."'>click!</a>";
});

Route::get('welcome/test/okay', function () {
    return "welcome";
})->name('welcome');

// fallback function return homepage
Route::fallback(function(){
    return view('welcome');
});


