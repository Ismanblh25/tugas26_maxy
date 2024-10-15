<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductsController::class);
Route::get('/', function () {
    return view('welcome');
});
