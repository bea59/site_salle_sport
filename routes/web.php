<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [MainController::class, 'accueil'])->name('main.accueil');

Route::get('/', [MainController::class, 'cours'])->name('main.cours');

Route::get('/', [MainController::class, 'tarifs'])->name('main.tarifs');

Route::get('/', [MainController::class, 'contact'])->name('main.contact');

Route::get('/', [MainController::class, 'Mentions_Legales'])->name('main.Mentions_Legales');
