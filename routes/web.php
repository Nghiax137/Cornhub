<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
route::get('/show', [IndexController::class, 'show'])->name('show');
Route::get('/category', [IndexController::class,'category'])->name('category');
