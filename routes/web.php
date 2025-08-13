<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::view('/', 'home');
Route::resource('jobs', JobController::class);
Route::view('/contato', 'contato');
Route::resource('produtos', ProdutoController::class);
