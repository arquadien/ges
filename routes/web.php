<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
})->name('home');


Route::get('/page_inscription', [authController::class, 'inscriprion'])->name('inscription');
Route::post('/page_inscription', [authController::class, 'do_inscription'])->name('do_inscription');

Route::post('/admin/login', [authController::class, 'do_login'])->name('authentification');