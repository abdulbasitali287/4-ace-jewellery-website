<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('screens.frontend.index');
})->name('index');
Route::get('/bracelets', function () {
    return view('screens.frontend.bracelets');
});
