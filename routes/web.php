<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/utilisateur/create', [UtilisateurController::class, 'create']);
Route::post('/utilisateur/store', [UtilisateurController::class, 'store']);