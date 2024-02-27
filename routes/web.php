<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $name = "KPI";
    $date = "27 FEB 2024";
    return view('welcome',compact('name','date'));
});

Route::get('overview', function(){
    $index=[
        [
            'id'=>"Defective ratio",
            'data'=>0.24,
            'last'=>0.12
        ],
        [
            'id'=>"Output Qty",
            'data'=>56005210,
            'last'=>6005210
        ],
        [
            'id'=>"NC ratio",
            'data'=>0.24,
            'last'=>0.12
        ],
        [
            'id'=>"Reject ratio",
            'data'=>0.24,
            'last'=>0.12
        ],
    ];
    return view('overview',compact('index'));
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


