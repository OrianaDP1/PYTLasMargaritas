<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/plan', function () {
    return view('plan-selection');
})->name('plan');
