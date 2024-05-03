<?php

use Illuminate\Support\Facades\Route;

Route::view('/','screens.frontend.index');
Route::view('collections','screens.frontend.collections');
Route::view('all-collections','screens.frontend.all-collections');
Route::view('bracelets','screens.frontend.bracelets');
Route::view('product-details','screens.frontend.product-details');
